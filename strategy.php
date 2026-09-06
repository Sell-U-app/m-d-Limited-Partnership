<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'What we build — ' . $SITE['name'];
$desc   = 'The four segments M&D Realty Investments LP develops: residential value-add, build-to-rent, small multifamily, and land and development.';
$active = 'strategy';

$extra_css = '
.srow{display:grid;grid-template-columns:1fr 1.15fr;gap:clamp(24px,4vw,48px);align-items:center;padding:clamp(30px,5vw,54px) 0;border-top:1px solid var(--border)}
.srow:nth-child(even) .im{order:2}
.srow .im{aspect-ratio:4/3;border-radius:8px;display:flex;align-items:flex-end;padding:18px}
.crit{background:var(--surface);border:1px solid var(--border);border-radius:10px;padding:20px 22px}
.crit h3{font-size:17px;margin:0 0 6px}
@media(max-width:880px){.srow{grid-template-columns:1fr!important}.srow:nth-child(even) .im{order:0}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero">
  <div class="container">
    <div class="bars"><i></i><i></i><i></i><i></i></div>
    <div class="chip chip--mg">Segments</div>
    <h1 style="margin:18px 0 0;max-width:16ch">What we build</h1>
    <p class="lead">We work in four segments. Not because they are in fashion, but because in each one the value comes from work we can actually do ourselves.</p>
    <div class="btn-row" style="margin-top:26px"><a href="contact.php" class="btn btn--lg">Get in touch</a></div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <?php foreach ($SEGMENTS as $i => $s): ?>
      <div class="srow">
        <div class="im blueprint"><span class="chip"><?= htmlspecialchars($s[0]) ?></span></div>
        <div>
          <div style="font-family:var(--font-head);font-weight:800;font-size:12px;color:var(--accent);letter-spacing:.14em"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></div>
          <h2 style="font-size:clamp(22px,3vw,30px);margin:10px 0 8px"><?= htmlspecialchars($s[0]) ?></h2>
          <p class="muted" style="margin:0"><?= htmlspecialchars($s[1]) ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container">
    <div class="center" style="margin-bottom:40px"><div class="chip chip--mg">Diligence</div><h2 style="margin-top:16px">What we check before we commit</h2></div>
    <div class="grid grid-3">
      <?php foreach ([
        ['Title and liens', 'A full title search before any firm offer.'],
        ['Zoning and permits', 'What can be built today, and what changing that would take.'],
        ['Physical condition', 'Inspection and a fixed construction budget, not a guess.'],
        ['Comparables', 'Sale and rent figures from actual transactions in the area.'],
        ['Scope of work', 'The full scope is fixed before the first day on site.'],
        ['Plan for the asset', 'Whether the property is built to hold or to sell, decided before we buy.'],
      ] as $c): ?>
        <div class="crit">
          <h3><?= htmlspecialchars($c[0]) ?></h3>
          <p class="muted" style="font-size:14px;margin:0"><?= htmlspecialchars($c[1]) ?></p>
        </div>
      <?php endforeach; ?>
    </div>
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
