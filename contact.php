<?php
require __DIR__ . '/inc/mailer.php';

$sent = null;
$old  = ['name' => '', 'email' => '', 'subject' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$sent, $old] = handle_form([
        'Name'    => 'name',
        'Email'   => 'email',
        'Subject' => 'subject',
        'Message' => 'message',
    ], ['name', 'email', 'message']);
}

$SUBJECTS = ['Property', 'Brokerage', 'Trade', 'Other'];

$title  = 'Contact — ' . $SITE['name'];
$desc   = 'Get in touch with M&D Realty Investments LP about a property, a listing, or work in the trades.';
$active = 'contact';

$extra_css = '
.cgrid{display:grid;grid-template-columns:.85fr 1.15fr;gap:clamp(28px,4vw,52px);align-items:start}
.cline{display:flex;gap:12px;align-items:center;padding:14px 0;border-top:1px solid var(--border);text-decoration:none;color:var(--ink)}
.cline b{font-family:var(--font-head);font-size:15px;font-weight:700;overflow-wrap:anywhere}
.cline>span:last-child{min-width:0}
.cline .ic{width:36px;height:36px;flex:0 0 36px;border-radius:6px;background:var(--surface);border:1px solid var(--border);color:var(--accent);display:flex;align-items:center;justify-content:center;font-size:16px}
@media(max-width:880px){.cgrid{grid-template-columns:1fr}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero section">
  <div class="container cgrid">
    <div>
      <div class="bars"><i></i><i></i><i></i><i></i></div>
      <div class="chip chip--mg">Contact</div>
      <h1 style="margin:18px 0 0;max-width:14ch">Let&rsquo;s talk</h1>
      <p class="lead">If you own land, represent a property, or work in the trades in the markets where we build, we would like to hear from you.</p>

      <div style="margin-top:26px">
        <?php if (!empty($SITE['email'])): ?>
          <div class="cline"><span class="ic">&#9993;</span><span><b><?= htmlspecialchars($SITE['email']) ?></b><br><span class="muted" style="font-size:13px">We reply during business hours</span></span></div>
        <?php endif; ?>
        <?php if (!empty($SITE['address'])): ?>
          <div class="cline"><span class="ic">&#9873;</span><span><b><?= htmlspecialchars($SITE['address']) ?></b><br><span class="muted" style="font-size:13px"><?= htmlspecialchars($SITE['license'] ?? '') ?></span></span></div>
        <?php endif; ?>
      </div>
    </div>

    <div class="panel">
      <?php if ($sent === true): ?>
        <div class="notice notice--ok">We got your message. We will be in touch.</div>
      <?php elseif ($sent === false): ?>
        <div class="notice notice--err">We could not send your message. Please try again.</div>
      <?php elseif ($sent === null && $_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="notice notice--err">Missing details: name, a valid email and a message are required.</div>
      <?php endif; ?>

      <h2 style="font-size:21px;margin:0 0 4px">Send us a message</h2>
      <p class="muted" style="font-size:14px">We reply during business hours.</p>

      <form method="post" action="contact.php#form" id="form" style="margin-top:18px">
        <div class="hp"><label>Do not fill<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

        <div class="field"><label for="name">Name *</label><input id="name" name="name" required value="<?= htmlspecialchars($old['name']) ?>"></div>

        <div class="field"><label for="email">Email *</label><input id="email" type="email" name="email" required value="<?= htmlspecialchars($old['email']) ?>"></div>

        <div class="field">
          <label for="subject">Subject</label>
          <select id="subject" name="subject">
            <option value="">Select&hellip;</option>
            <?php foreach ($SUBJECTS as $s): ?>
              <option value="<?= htmlspecialchars($s) ?>"<?= $old['subject'] === $s ? ' selected' : '' ?>><?= htmlspecialchars($s) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="field"><label for="message">Message *</label><textarea id="message" name="message" rows="6" required placeholder="Tell us about the property, the listing or the work you do."><?= htmlspecialchars($old['message']) ?></textarea></div>

        <button type="submit" class="btn btn--lg" style="width:100%;justify-content:center">Send message</button>
        <p class="muted" style="font-size:12.5px;margin:14px 0 0;text-align:center">We do not share your details with third parties. See our <a href="privacy.php" style="color:var(--accent)">Privacy Policy</a>.</p>
      </form>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
