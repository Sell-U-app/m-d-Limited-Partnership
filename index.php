<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'M&D Realty Investments LP — Real estate development in the United States';
$desc   = 'A Wyoming limited partnership that acquires, develops and holds residential and commercial property in the United States, from the first drawing to the final inspection.';
$active = 'home';

$extra_css = '
.hero{position:relative;overflow:hidden}
.glow{position:absolute;top:-30%;right:-12%;width:620px;height:620px;background:radial-gradient(circle,rgba(212,20,90,.14),transparent 62%);pointer-events:none}
.hero-grid{display:grid;grid-template-columns:1.08fr .92fr;gap:clamp(28px,5vw,56px);align-items:center;position:relative}
.trust{display:flex;flex-wrap:wrap;gap:10px 22px;margin-top:28px;font-size:14px;color:var(--muted)}
.trust b{color:var(--accent);font-weight:700}
/* Project sequence (hero panel) */
.cyc{display:grid;gap:0}
.cyc div{display:grid;grid-template-columns:auto 1fr auto;gap:14px;align-items:center;padding:13px 0;border-top:1px solid var(--border);font-size:14px}
.cyc div:first-child{border-top:0}
.cyc .k{font-family:var(--font-head);font-weight:800;font-size:11px;color:var(--muted);letter-spacing:.1em;min-width:2.4ch}
.cyc .on{color:var(--accent)}
.cyc .st{font-size:11px;font-family:var(--font-head);font-weight:700;letter-spacing:.08em;text-transform:uppercase;color:var(--muted)}
/* Ticker */
.marq{overflow:hidden;border-top:1px solid var(--border);border-bottom:1px solid var(--border);padding:14px 0;background:var(--surface)}
.marq div{display:inline-flex;white-space:nowrap;animation:sc 32s linear infinite}
.marq span{font-family:var(--font-head);font-weight:700;font-size:15px;letter-spacing:.14em;text-transform:uppercase;color:var(--muted);padding:0 24px}
.marq span::after{content:"";display:inline-block;width:6px;height:6px;background:var(--accent);margin-left:24px;vertical-align:middle}
@keyframes sc{to{transform:translateX(-50%)}}
@media(prefers-reduced-motion:reduce){.marq div{animation:none}}
/* Segments */
.est{background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:clamp(22px,3vw,28px);transition:border-color .2s,transform .2s}
.est:hover{border-color:var(--accent);transform:translateY(-3px)}
.est .n{font-family:var(--font-head);font-weight:800;font-size:12px;color:var(--accent);letter-spacing:.14em}
/* Process */
.step{display:grid;grid-template-columns:auto 1fr;gap:22px;padding:22px 0;border-top:1px solid var(--border);align-items:start}
.step .num{font-family:var(--font-head);font-weight:800;font-size:clamp(26px,3.6vw,36px);color:var(--accent);line-height:1;min-width:2.2ch}
/* Group diagram */
.orgd{max-width:620px;margin:0 auto}
.orgn{background:var(--bg);border:1px solid var(--border);border-radius:10px;padding:20px 24px;text-align:center}
.orgn.on{border-color:var(--accent)}
.orgn .rl{font-family:var(--font-head);font-weight:800;font-size:11px;letter-spacing:.14em;text-transform:uppercase;color:var(--accent)}
.orgn h3{font-size:19px;margin:8px 0 6px}
.orgn p{margin:0;font-size:14px;color:var(--muted)}
.orgc{display:grid;justify-items:center;gap:6px;padding:12px 0}
.orgc i{display:block;width:2px;height:20px;background:var(--border)}
.orgc span{font-size:12px;color:var(--muted);font-family:var(--font-head);font-weight:700;letter-spacing:.06em;text-transform:uppercase}
@media(max-width:900px){.hero-grid{grid-template-columns:1fr!important}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero section">
  <div class="glow"></div>
  <div class="container hero-grid">
    <div>
      <div class="bars"><i></i><i></i><i></i><i></i></div>
      <span class="chip chip--mg">Limited Partnership</span>
      <h1 style="margin-top:18px;max-width:16ch"><?= htmlspecialchars($SITE['tagline']) ?></h1>
      <p class="lead">M&amp;D Realty Investments is a Wyoming limited partnership. We acquire, develop and hold residential and commercial property, and we carry each project from the first drawing to the final inspection.</p>
      <div class="btn-row" style="margin-top:28px">
        <a href="contact.php" class="btn btn--lg">Get in touch</a>
      </div>
      <div class="trust">
        <span><b>&mdash;</b> Organised in Wyoming</span>
        <span><b>&mdash;</b> Pennsylvania and surrounding markets</span>
        <span><b>&mdash;</b> Built by licensed contractors</span>
      </div>
    </div>

    <div class="panel">
      <div style="margin-bottom:16px">
        <span style="font-family:var(--font-head);font-weight:700;font-size:15px">How a project runs</span>
      </div>
      <div class="cyc">
        <?php foreach ($PROCESS as $i => $p): ?>
          <div>
            <span class="k<?= $i === 3 ? ' on' : '' ?>"><?= htmlspecialchars($p[0]) ?></span>
            <span><?= htmlspecialchars($p[1]) ?></span>
            <span class="st"><?= htmlspecialchars($p[3]) ?></span>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<div class="marq"><div><?php for ($k = 0; $k < 2; $k++) foreach ($TICKER as $t): ?><span><?= htmlspecialchars($t) ?></span><?php endforeach; ?></div></div>

<!-- What we build -->
<section class="section" id="segments">
  <div class="container">
    <div class="chip chip--mg">Segments</div>
    <h2 style="margin:16px 0 8px">What we build</h2>
    <p class="lead" style="margin-bottom:38px">We work in four segments. Not because they are in fashion, but because in each one the value comes from work we can actually do ourselves.</p>
    <div class="grid grid-2">
      <?php foreach ($SEGMENTS as $i => $s): ?>
        <div class="est">
          <div class="n"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></div>
          <h3 style="margin:10px 0 8px"><?= htmlspecialchars($s[0]) ?></h3>
          <p class="muted" style="font-size:14.5px;margin:0"><?= htmlspecialchars($s[1]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:34px"><a href="strategy.php" class="btn btn--ghost">See the segments in detail</a></div>
  </div>
</section>

<!-- How a project runs -->
<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container" style="max-width:900px">
    <div class="chip chip--mg">Process</div>
    <h2 style="margin:16px 0 10px">How a project runs</h2>
    <?php foreach ($PROCESS as $p): ?>
      <div class="step">
        <div class="num"><?= htmlspecialchars($p[0]) ?></div>
        <div>
          <h3 style="font-size:19px;margin:0 0 6px"><?= htmlspecialchars($p[1]) ?></h3>
          <p class="muted" style="margin:0;font-size:15px"><?= htmlspecialchars($p[2]) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<!-- The group -->
<section class="section" id="group">
  <div class="container">
    <div class="center" style="margin-bottom:40px">
      <div class="chip chip--mg">The group</div>
      <h2 style="margin-top:16px">How the group is organised</h2>
      <p class="lead">M&amp;D Realty Investments LP is the partnership that holds and develops the projects. M&amp;D Developments Corp is its general partner and is responsible for its administration. M&amp;D Buildings LLC carries out our residential acquisitions in Pennsylvania.</p>
    </div>
    <div class="orgd">
      <?php foreach ($GROUP as $i => $g): ?>
        <?php if ($i > 0): ?>
          <div class="orgc"><i></i><span><?= $i === 1 ? 'General partner of' : 'Acquires for' ?></span><i></i></div>
        <?php endif; ?>
        <div class="orgn<?= $i === 1 ? ' on' : '' ?>">
          <div class="rl"><?= htmlspecialchars($g[1]) ?></div>
          <h3><?= htmlspecialchars($g[0]) ?></h3>
          <p><?= htmlspecialchars($g[2]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Projects -->
<section class="section" id="projects" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container" style="max-width:820px">
    <div class="chip chip--mg">Projects</div>
    <h2 style="margin:16px 0 10px">What we are working on</h2>
    <p class="lead" style="margin:0">Our first projects are underway. This page will show each property we develop, the work it required and the result.</p>
    <div style="margin-top:30px"><a href="portfolio.php" class="btn btn--ghost">Projects</a></div>
  </div>
</section>

<!-- The partnership -->
<section class="section" id="about">
  <div class="container" style="max-width:820px">
    <div class="chip chip--mg">About</div>
    <h2 style="margin:16px 0 10px">The partnership</h2>
    <p class="lead">M&amp;D Realty Investments LP was formed in Wyoming in 2026 to acquire, develop and hold real property in the United States. Its general partner, M&amp;D Developments Corp, is responsible for the administration of the partnership and for the decisions taken on each project. Work on site is carried out by licensed contractors under the partnership&rsquo;s supervision.</p>
    <?php if (!empty($TEAM)): ?>
      <div class="grid grid-2" style="margin-top:36px">
        <?php foreach ($TEAM as $m): ?>
          <div class="dif" style="border-top:2px solid var(--accent);padding-top:20px">
            <h3 style="font-size:19px;margin:0 0 4px"><?= htmlspecialchars($m[0]) ?></h3>
            <div class="muted" style="font-family:var(--font-head);font-weight:700;font-size:12px;letter-spacing:.1em;text-transform:uppercase;color:var(--accent)"><?= htmlspecialchars($m[1]) ?></div>
            <p class="muted" style="margin:10px 0 0;font-size:14.5px"><?= htmlspecialchars($m[2]) ?></p>
          </div>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<!-- FAQ -->
<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container" style="max-width:820px">
    <div class="center" style="margin-bottom:34px"><div class="chip chip--mg">Questions</div><h2 style="margin-top:16px">Common questions</h2></div>
    <?php foreach ($FAQ as $f): ?>
      <details class="faq"><summary><?= htmlspecialchars($f[0]) ?></summary><p class="muted" style="padding-bottom:18px;margin:0"><?= htmlspecialchars($f[1]) ?></p></details>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,60px)">
    <h2 style="margin-bottom:10px">Let&rsquo;s talk</h2>
    <p class="lead" style="margin:0 auto 26px">If you own land, represent a property, or work in the trades in the markets where we build, we would like to hear from you.</p>
    <div class="btn-row" style="justify-content:center">
      <a href="contact.php" class="btn btn--lg">Get in touch</a>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
