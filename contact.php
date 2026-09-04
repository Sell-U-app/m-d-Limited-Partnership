<?php
require __DIR__ . '/inc/mailer.php';

$sent = null;
$old  = ['name' => '', 'email' => '', 'phone' => '', 'interest' => '', 'horizon' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$sent, $old] = handle_form([
        'Name'     => 'name',
        'Email'    => 'email',
        'Phone'    => 'phone',
        'Interest' => 'interest',
        'Horizon'  => 'horizon',
        'Message'  => 'message',
    ], ['name', 'email', 'message']);
}

$title  = 'Contact — ' . $SITE['name'];
$desc   = 'Let us talk about your investment horizon. No obligation, and no offer of securities.';
$active = 'contact';

$extra_css = '
.cgrid{display:grid;grid-template-columns:.85fr 1.15fr;gap:clamp(28px,4vw,52px);align-items:start}
.cline{display:flex;gap:12px;align-items:center;padding:14px 0;border-top:1px solid var(--border);text-decoration:none;color:var(--ink)}
.cline b{font-family:var(--font-head);font-size:15px;font-weight:700;overflow-wrap:anywhere}
.cline>span:last-child{min-width:0}
.cline .ic{width:36px;height:36px;flex:0 0 36px;border-radius:6px;background:var(--surface);border:1px solid var(--border);color:var(--accent);display:flex;align-items:center;justify-content:center;font-size:16px}
.legal{background:var(--surface);border:1px solid var(--border);border-left:2px solid var(--accent);border-radius:8px;padding:18px 20px;margin-top:26px}
@media(max-width:880px){.cgrid{grid-template-columns:1fr}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero section">
  <div class="container cgrid">
    <div>
      <div class="bars"><i></i><i></i><i></i><i></i></div>
      <div class="chip chip--mg">Contact</div>
      <h1 style="margin:18px 0 0;max-width:15ch">Start with your horizon</h1>
      <p class="lead">There is no offer on the table. First we talk, we understand what you are looking for, and we reach out when a deal fits.</p>

      <div style="margin-top:26px">
        <?php if (!empty($SITE['email'])): ?>
          <a class="cline" href="mailto:<?= htmlspecialchars($SITE['email']) ?>"><span class="ic">&#9993;</span><span><b><?= htmlspecialchars($SITE['email']) ?></b><br><span class="muted" style="font-size:13px">Investor relations</span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['phone'])): ?>
          <a class="cline" href="tel:<?= htmlspecialchars($SITE['phone_tel']) ?>"><span class="ic">&#9742;</span><span><b><?= htmlspecialchars($SITE['phone']) ?></b><br><span class="muted" style="font-size:13px"><?= htmlspecialchars($SITE['hours'] ?? '') ?></span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['whatsapp'])): ?>
          <a class="cline" href="https://wa.me/<?= htmlspecialchars($SITE['whatsapp']) ?>" target="_blank" rel="noopener"><span class="ic">&#128172;</span><span><b>WhatsApp</b><br><span class="muted" style="font-size:13px">Replies during business hours</span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['address'])): ?>
          <div class="cline"><span class="ic">&#9873;</span><span><b><?= htmlspecialchars($SITE['address']) ?></b><br><span class="muted" style="font-size:13px"><?= htmlspecialchars($SITE['license'] ?? '') ?></span></span></div>
        <?php endif; ?>
      </div>

      <div class="legal">
        <p style="margin:0;font-size:13px;color:var(--muted)">Submitting this form creates no partnership relationship and no investment commitment. We do not solicit or accept funds through this channel, and you should not send account, identification or payment details here. See <a href="disclosures.php" style="color:var(--accent)">Important Disclosures</a> and our <a href="privacy.php" style="color:var(--accent)">Privacy Policy</a>.</p>
      </div>
    </div>

    <div class="panel">
      <?php if ($sent === true): ?>
        <div class="notice notice--ok">We got your message. We will be in touch to set up the conversation.</div>
      <?php elseif ($sent === false): ?>
        <div class="notice notice--err">We could not send your message. Email us at <?= htmlspecialchars($SITE['email']) ?>.</div>
      <?php elseif ($sent === null && $_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="notice notice--err">Missing details: name, a valid email and a message are required.</div>
      <?php endif; ?>

      <h2 style="font-size:21px;margin:0 0 4px">Book a conversation</h2>
      <p class="muted" style="font-size:14px">We reply during business hours.</p>

      <form method="post" action="contact.php#form" id="form" style="margin-top:18px">
        <div class="hp"><label>Do not fill<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

        <div class="field"><label for="name">Name *</label><input id="name" name="name" required value="<?= htmlspecialchars($old['name']) ?>"></div>

        <div class="grid grid-2" style="gap:0 16px">
          <div class="field"><label for="email">Email *</label><input id="email" type="email" name="email" required value="<?= htmlspecialchars($old['email']) ?>"></div>
          <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" value="<?= htmlspecialchars($old['phone']) ?>"></div>
        </div>

        <div class="field">
          <label for="interest">What interests you</label>
          <select id="interest" name="interest">
            <option value="">Select…</option>
            <?php foreach ($VEHICLES as $v): ?>
              <option value="<?= htmlspecialchars($v[0]) ?>"<?= $old['interest'] === $v[0] ? ' selected' : '' ?>><?= htmlspecialchars($v[0]) ?></option>
            <?php endforeach; ?>
            <option value="Not sure yet"<?= $old['interest'] === 'Not sure yet' ? ' selected' : '' ?>>Not sure yet</option>
          </select>
        </div>

        <div class="field">
          <label for="horizon">Investment horizon</label>
          <select id="horizon" name="horizon">
            <option value="">Select…</option>
            <?php foreach (['Less than 1 year', '1 to 3 years', '3 to 5 years', 'More than 5 years'] as $h): ?>
              <option value="<?= htmlspecialchars($h) ?>"<?= $old['horizon'] === $h ? ' selected' : '' ?>><?= htmlspecialchars($h) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="field"><label for="message">Tell us what you are looking for *</label><textarea id="message" name="message" rows="5" required placeholder="E.g. I am looking for rental exposure in the United States with a 3 to 5 year horizon."><?= htmlspecialchars($old['message']) ?></textarea></div>

        <button type="submit" class="btn btn--lg" style="width:100%;justify-content:center">Send message</button>
        <p class="muted" style="font-size:12.5px;margin:14px 0 0;text-align:center">We do not share your details with third parties.</p>
      </form>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
