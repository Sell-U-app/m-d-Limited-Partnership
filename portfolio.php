<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'Projects — ' . $SITE['name'];
$desc   = 'The properties M&D Realty Investments LP develops: location, asset type, scope of work and status.';
$active = 'portfolio';

$extra_css = '
.pj{background:var(--surface);border:1px solid var(--border);border-radius:12px;overflow:hidden;display:flex;flex-direction:column;transition:border-color .2s,transform .2s}
.pj:hover{border-color:var(--accent);transform:translateY(-3px)}
.pj .im{aspect-ratio:16/10;display:flex;align-items:flex-end;justify-content:space-between;padding:14px;gap:8px;border:0;border-bottom:1px solid var(--border)}
.pj .bd{padding:22px;flex:1;display:flex;flex-direction:column}
.badge{font-family:var(--font-head);font-weight:700;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;padding:5px 10px;border-radius:3px;background:var(--bg);border:1px solid var(--border);color:var(--muted)}
.badge.on{background:var(--accent);color:var(--primary-ink);border-color:var(--accent)}
.empty{background:var(--surface);border:1px solid var(--border);border-left:2px solid var(--accent);border-radius:10px;padding:clamp(26px,4vw,40px)}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero">
  <div class="container">
    <div class="bars"><i></i><i></i><i></i><i></i></div>
    <div class="chip chip--mg">Projects</div>
    <h1 style="margin:18px 0 0;max-width:16ch">What we are working on</h1>
    <p class="lead">Each property we develop, the work it required and the result.</p>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <?php if (empty($PORTFOLIO)): ?>
      <div class="empty" style="max-width:760px">
        <p class="lead" style="margin:0">Our first projects are underway. This page will show each property we develop, the work it required and the result.</p>
      </div>
    <?php else: ?>
      <div class="grid grid-3">
        <?php foreach ($PORTFOLIO as $p): ?>
          <article class="pj">
            <div class="im blueprint">
              <span class="badge"><?= htmlspecialchars($p[1]) ?></span>
              <span class="badge on"><?= htmlspecialchars($p[3]) ?></span>
            </div>
            <div class="bd">
              <h3 style="font-size:18px;margin:0 0 8px"><?= htmlspecialchars($p[0]) ?></h3>
              <p class="muted" style="font-size:14.5px;margin:0;flex:1"><?= htmlspecialchars($p[2]) ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,56px)">
    <h2 style="margin-bottom:10px">Let&rsquo;s talk</h2>
    <p class="lead" style="margin:0 auto 24px">If you own land, represent a property, or work in the trades in the markets where we build, we would like to hear from you.</p>
    <a href="contact.php" class="btn btn--lg">Get in touch</a>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
