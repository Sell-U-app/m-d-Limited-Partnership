<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'M&D Realty Investments LP — Real estate investing with a general partner that builds';
$desc   = 'A real estate Limited Partnership: value-add, build-to-rent, multifamily and private lending, with quarterly reporting and construction executed by M&D Buildings LLC.';
$active = 'home';

$extra_css = '
.hero{position:relative;overflow:hidden}
.glow{position:absolute;top:-30%;right:-12%;width:620px;height:620px;background:radial-gradient(circle,rgba(212,20,90,.14),transparent 62%);pointer-events:none}
.hero-grid{display:grid;grid-template-columns:1.08fr .92fr;gap:clamp(28px,5vw,56px);align-items:center;position:relative}
.trust{display:flex;flex-wrap:wrap;gap:10px 22px;margin-top:28px;font-size:14px;color:var(--muted)}
.trust b{color:var(--accent);font-weight:700}
/* Deal cycle */
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
/* Tabs */
.tabs input{position:absolute;opacity:0;pointer-events:none}
.tablist{display:flex;flex-wrap:wrap;gap:8px;margin-bottom:22px}
.tablist label{padding:11px 20px;border:1px solid var(--border);border-radius:4px;font-family:var(--font-head);font-weight:700;font-size:13px;letter-spacing:.03em;cursor:pointer;color:var(--muted);transition:.15s}
.tablist label:hover{color:var(--ink)}
#tf1:checked~.tablist label[for=tf1],#tf2:checked~.tablist label[for=tf2],#tf3:checked~.tablist label[for=tf3],#tf4:checked~.tablist label[for=tf4]{background:var(--accent);color:var(--primary-ink);border-color:var(--accent)}
.tp{display:none;grid-template-columns:1.1fr .9fr;gap:clamp(24px,4vw,44px);align-items:center;background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:clamp(24px,4vw,42px)}
#tf1:checked~.tp1,#tf2:checked~.tp2,#tf3:checked~.tp3,#tf4:checked~.tp4{display:grid}
.tp .viz{aspect-ratio:16/11;border-radius:8px;display:flex;align-items:flex-end;padding:16px}
/* Strategies */
.est{background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:clamp(22px,3vw,28px);transition:border-color .2s,transform .2s}
.est:hover{border-color:var(--accent);transform:translateY(-3px)}
.est .n{font-family:var(--font-head);font-weight:800;font-size:12px;color:var(--accent);letter-spacing:.14em}
.est ul{list-style:none;padding:0;margin:16px 0 0;font-size:14px;color:var(--muted)}
.est li{padding:7px 0 7px 18px;position:relative}
.est li::before{content:"";position:absolute;left:0;top:15px;width:7px;height:2px;background:var(--accent)}
/* Process */
.step{display:grid;grid-template-columns:auto 1fr;gap:22px;padding:22px 0;border-top:1px solid var(--border);align-items:start}
.step .num{font-family:var(--font-head);font-weight:800;font-size:clamp(26px,3.6vw,36px);color:var(--accent);line-height:1;min-width:2.2ch}
/* Differentiators */
.dif{border-top:2px solid var(--accent);padding-top:20px}
.dif h3{font-size:19px;margin:0 0 8px}
/* Portfolio */
.case{display:grid;grid-template-columns:1fr 1.25fr;gap:26px;padding:26px 0;border-top:1px solid var(--border);align-items:center}
.case .im{aspect-ratio:16/10;border-radius:8px}
/* Vehicles */
.veh{background:var(--surface);border:1px solid var(--border);border-radius:12px;padding:clamp(24px,3vw,30px);position:relative}
.veh.best{border-color:var(--accent)}
.veh .tag{position:absolute;top:-12px;left:24px;background:var(--accent);color:var(--primary-ink);font-family:var(--font-head);font-weight:700;font-size:11px;letter-spacing:.08em;text-transform:uppercase;padding:5px 12px;border-radius:3px}
.veh ul{list-style:none;padding:0;margin:16px 0 22px}
.veh li{padding:9px 0;border-top:1px solid var(--border);font-size:14px}
.veh li::before{content:"—  ";color:var(--accent);font-weight:700}
.note{border:1px solid var(--border);border-left:2px solid var(--accent);border-radius:8px;padding:18px 22px;margin-top:34px}
@media(max-width:900px){.hero-grid,.tp,.case{grid-template-columns:1fr!important}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero section">
  <div class="glow"></div>
  <div class="container hero-grid">
    <div>
      <div class="bars"><i></i><i></i><i></i><i></i></div>
      <span class="chip chip--mg">Limited Partnership</span>
      <h1 style="margin-top:18px;max-width:15ch"><?= htmlspecialchars($SITE['tagline']) ?></h1>
      <p class="lead">We invest in United States real estate as the general partner, with the construction executed by our own builder. Control over cost, over schedule and over what gets reported to you.</p>
      <div class="btn-row" style="margin-top:28px">
        <a href="contact.php" class="btn btn--lg">Talk to the team</a>
        <a href="strategy.php" class="btn btn--ghost btn--lg">See the strategy</a>
      </div>
      <div class="trust">
        <span><b>—</b> General partner invests alongside</span>
        <span><b>—</b> Quarterly reporting</span>
        <span><b>—</b> Built by M&amp;D Buildings LLC</span>
      </div>
    </div>

    <div class="panel">
      <div style="display:flex;justify-content:space-between;align-items:center;gap:12px;margin-bottom:16px">
        <span style="font-family:var(--font-head);font-weight:700;font-size:15px">Deal cycle</span>
        <span class="chip">Illustrative</span>
      </div>
      <div class="cyc">
        <?php foreach ([
          ['01', 'Sourcing',      'We look'],
          ['02', 'Due diligence', 'We verify'],
          ['03', 'Acquisition',   'We buy'],
          ['04', 'Execution',     'We build'],
          ['05', 'Stabilization', 'We operate'],
          ['06', 'Exit',          'We distribute'],
        ] as $i => $r): ?>
          <div>
            <span class="k<?= $i === 3 ? ' on' : '' ?>"><?= $r[0] ?></span>
            <span><?= $r[1] ?></span>
            <span class="st"><?= $r[2] ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <p class="muted" style="font-size:12px;margin:16px 0 0;padding-top:14px;border-top:1px solid var(--border)">Diagram of the process. It does not represent a live deal or a projection of returns.</p>
    </div>
  </div>
</section>

<div class="marq"><div><?php for ($k = 0; $k < 2; $k++) foreach ($TICKER as $t): ?><span><?= htmlspecialchars($t) ?></span><?php endforeach; ?></div></div>

<!-- Strategies -->
<section class="section" id="strategy">
  <div class="container">
    <div class="chip chip--mg">Where the capital goes</div>
    <h2 style="margin:16px 0 8px">Six theses, one standard</h2>
    <p class="lead" style="margin-bottom:38px">We do not chase whatever asset class is fashionable. We buy where we can create the value with construction, management or structure.</p>
    <div class="grid grid-3">
      <?php foreach ($STRATEGIES as $i => $e): ?>
        <div class="est">
          <div class="n"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></div>
          <h3 style="margin:10px 0 8px"><?= htmlspecialchars($e[0]) ?></h3>
          <p class="muted" style="font-size:14.5px;margin:0"><?= htmlspecialchars($e[1]) ?></p>
          <ul><?php foreach ($e[2] as $c): ?><li><?= htmlspecialchars($c) ?></li><?php endforeach; ?></ul>
        </div>
      <?php endforeach; ?>
    </div>
    <div style="margin-top:34px"><a href="strategy.php" class="btn btn--ghost">See the strategy in detail</a></div>
  </div>
</section>

<!-- How the partnership works -->
<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container">
    <div class="chip chip--mg">How it works</div>
    <h2 style="margin:16px 0 26px">The partnership, without the fine print</h2>
    <div class="tabs">
      <input type="radio" name="tf" id="tf1" checked><input type="radio" name="tf" id="tf2"><input type="radio" name="tf" id="tf3"><input type="radio" name="tf" id="tf4">
      <div class="tablist"><?php foreach ($TABS as $i => $t): ?><label for="tf<?= $i + 1 ?>"><?= htmlspecialchars($t[0]) ?></label><?php endforeach; ?></div>
      <?php foreach ($TABS as $i => $t): ?>
        <div class="tp tp<?= $i + 1 ?>" style="background:var(--bg)">
          <div>
            <h3><?= htmlspecialchars($t[0]) ?></h3>
            <p class="muted" style="margin:0"><?= htmlspecialchars($t[1]) ?></p>
            <div style="margin-top:22px"><a href="contact.php" class="btn">Schedule a conversation</a></div>
          </div>
          <div class="viz blueprint"><span class="chip"><?= htmlspecialchars($t[0]) ?></span></div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Framework -->
<section class="section--tight" style="border-bottom:1px solid var(--border)">
  <div class="container grid grid-4">
    <?php foreach ($STATS as $s): ?>
      <div><div class="stat-n"><?= htmlspecialchars($s[0]) ?></div><div class="muted" style="font-size:13.5px;margin-top:6px"><?= htmlspecialchars($s[1]) ?></div></div>
    <?php endforeach; ?>
  </div>
</section>

<!-- Differentiators -->
<section class="section">
  <div class="container">
    <div class="chip chip--mg">Why M&amp;D</div>
    <h2 style="margin:16px 0 38px">Three things not everyone can say</h2>
    <div class="grid grid-3">
      <?php foreach ($DIFFERENTIATORS as $d): ?>
        <div class="dif">
          <h3><?= htmlspecialchars($d[0]) ?></h3>
          <p class="muted" style="margin:0;font-size:14.5px"><?= htmlspecialchars($d[1]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Investor process -->
<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container" style="max-width:900px">
    <div class="chip chip--mg">Step by step</div>
    <h2 style="margin:16px 0 10px">From the first coffee to the distribution</h2>
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

<!-- Portfolio -->
<section class="section" id="portfolio">
  <div class="container">
    <div class="chip chip--mg">Portfolio</div>
    <h2 style="margin:16px 0 6px">The kind of deal we do</h2>
    <?php foreach (array_slice($PORTFOLIO, 0, 3) as $c): ?>
      <div class="case">
        <div class="im blueprint"></div>
        <div>
          <span class="chip"><?= htmlspecialchars($c[1]) ?></span>
          <h3 style="font-size:21px;margin:12px 0 6px"><?= htmlspecialchars($c[0]) ?></h3>
          <p class="muted" style="margin:0"><?= htmlspecialchars($c[2]) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
    <div style="margin-top:34px"><a href="portfolio.php" class="btn btn--ghost">See the full portfolio</a></div>
  </div>
</section>

<!-- Vehicles -->
<section class="section" style="background:var(--surface);border-top:1px solid var(--border)">
  <div class="container">
    <div class="center" style="margin-bottom:48px">
      <div class="chip chip--mg">Ways to participate</div>
      <h2 style="margin-top:16px">Three ways in</h2>
      <p class="lead">The right vehicle depends on your horizon and on how much volatility you are willing to carry.</p>
    </div>
    <div class="grid grid-3" style="align-items:start">
      <?php foreach ($VEHICLES as $v): ?>
        <div class="veh<?= $v[3] ? ' best' : '' ?>">
          <?php if ($v[3]): ?><span class="tag">Most common</span><?php endif; ?>
          <h3 style="font-size:21px;margin:0"><?= htmlspecialchars($v[0]) ?></h3>
          <p class="muted" style="font-size:13.5px;margin:6px 0 0"><?= htmlspecialchars($v[1]) ?></p>
          <div style="font-family:var(--font-head);font-weight:700;font-size:15px;color:var(--accent);margin:16px 0 0"><?= htmlspecialchars($v[4]) ?></div>
          <ul><?php foreach ($v[2] as $f): ?><li><?= htmlspecialchars($f) ?></li><?php endforeach; ?></ul>
          <a href="contact.php" class="btn<?= $v[3] ? '' : ' btn--ghost' ?>" style="width:100%;justify-content:center">Start a conversation</a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="note">
      <p style="margin:0;font-size:13.5px;color:var(--muted)">These descriptions are informational. They are not an offer of securities. Any investment is made solely through the offering documents for a specific deal. See <a href="disclosures.php" style="color:var(--accent)">Important Disclosures</a>.</p>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="section">
  <div class="container" style="max-width:820px">
    <div class="center" style="margin-bottom:34px"><div class="chip chip--mg">Questions</div><h2 style="margin-top:16px">What every partner asks</h2></div>
    <?php foreach ($FAQ as $f): ?>
      <details class="faq"><summary><?= htmlspecialchars($f[0]) ?></summary><p class="muted" style="padding-bottom:18px;margin:0"><?= htmlspecialchars($f[1]) ?></p></details>
    <?php endforeach; ?>
  </div>
</section>

<!-- CTA -->
<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,60px)">
    <h2 style="margin-bottom:10px">Let us talk before there is a deal on the table</h2>
    <p class="lead" style="margin:0 auto 26px">The best investment decisions are made with time. Tell us your horizon and we will reach out when something fits.</p>
    <div class="btn-row" style="justify-content:center">
      <a href="contact.php" class="btn btn--lg">Talk to the team</a>
      <?php if (!empty($SITE['email'])): ?><a href="mailto:<?= htmlspecialchars($SITE['email']) ?>" class="btn btn--ghost btn--lg">Email us</a><?php endif; ?>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
