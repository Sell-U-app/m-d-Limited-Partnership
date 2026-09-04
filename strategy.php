<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'Strategy — ' . $SITE['name'];
$desc   = 'The investment theses of M&D Realty Investments LP: value-add, build-to-rent, multifamily, fix and flip, land and secured private lending.';
$active = 'strategy';

$extra_css = '
.srow{display:grid;grid-template-columns:1fr 1.15fr;gap:clamp(24px,4vw,48px);align-items:center;padding:clamp(30px,5vw,54px) 0;border-top:1px solid var(--border)}
.srow:nth-child(even) .im{order:2}
.srow .im{aspect-ratio:4/3;border-radius:8px;display:flex;align-items:flex-end;padding:18px}
.srow ul{list-style:none;padding:0;margin:18px 0 0;display:grid;grid-template-columns:1fr 1fr;gap:8px 18px}
.srow li{padding:8px 0 8px 20px;position:relative;font-size:14.5px;color:var(--muted);border-top:1px solid var(--border)}
.srow li::before{content:"";position:absolute;left:0;top:16px;width:8px;height:2px;background:var(--accent)}
.crit{background:var(--surface);border:1px solid var(--border);border-radius:10px;padding:20px 22px}
.crit h3{font-size:17px;margin:0 0 6px}
.risk{border-left:2px solid var(--accent);padding:4px 0 4px 20px;margin-bottom:18px}
.risk h3{font-size:16px;margin:0 0 5px}
.note{border:1px solid var(--border);border-left:2px solid var(--accent);border-radius:8px;padding:18px 22px;margin-top:30px}
@media(max-width:880px){.srow{grid-template-columns:1fr!important}.srow:nth-child(even) .im{order:0}.srow ul{grid-template-columns:1fr}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero">
  <div class="container">
    <div class="bars"><i></i><i></i><i></i><i></i></div>
    <div class="chip chip--mg">Strategy</div>
    <h1 style="margin:18px 0 0;max-width:18ch">We buy where we can create the value, not wait for it</h1>
    <p class="lead">A cheap asset is not an opportunity. The opportunity shows up when we can act on the asset with construction, with management or with structure, and when that work is ours to control.</p>
    <div class="btn-row" style="margin-top:26px"><a href="contact.php" class="btn btn--lg">Talk to the team</a></div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <?php foreach ($STRATEGIES as $i => $e): ?>
      <div class="srow">
        <div class="im blueprint"><span class="chip"><?= htmlspecialchars($e[0]) ?></span></div>
        <div>
          <div style="font-family:var(--font-head);font-weight:800;font-size:12px;color:var(--accent);letter-spacing:.14em"><?= str_pad((string)($i + 1), 2, '0', STR_PAD_LEFT) ?></div>
          <h2 style="font-size:clamp(22px,3vw,30px);margin:10px 0 8px"><?= htmlspecialchars($e[0]) ?></h2>
          <p class="muted" style="margin:0"><?= htmlspecialchars($e[1]) ?></p>
          <ul><?php foreach ($e[2] as $c): ?><li><?= htmlspecialchars($c) ?></li><?php endforeach; ?></ul>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section" style="background:var(--surface);border-top:1px solid var(--border);border-bottom:1px solid var(--border)">
  <div class="container">
    <div class="center" style="margin-bottom:40px"><div class="chip chip--mg">Entry filter</div><h2 style="margin-top:16px">What we check before capital is committed</h2></div>
    <div class="grid grid-4">
      <?php foreach ([
        ['Title and liens', 'A full title search before any firm offer.'],
        ['Zoning and permits', 'What can be built today, and what changing that would take.'],
        ['Physical condition', 'Inspection and a fixed construction budget, not a guess.'],
        ['Comparables', 'Sale and rent comps from actual transactions in the area.'],
        ['Downside case', 'If the market drops, what happens to the deal and to the capital.'],
        ['Exit', 'Who buys this at the end and at what price, defined before we buy.'],
        ['Tax structure', 'How the deal is held and how it is taxed in the United States.'],
        ['Alignment', 'How much of its own capital M&D is putting into the deal.'],
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
  <div class="container" style="max-width:880px">
    <div class="chip chip--mg">Risks</div>
    <h2 style="margin:16px 0 10px">What can go wrong</h2>
    <p class="lead" style="margin-bottom:32px">No real estate investment vehicle is free of risk. These are the main ones and how we handle them.</p>
    <?php foreach ([
      ['Falling prices', 'Asset values can drop. We buy with a margin against market value and favor assets with rental income that can ride out the cycle.'],
      ['Construction overruns', 'This is the risk that destroys returns fastest. We mitigate it by building with our own contractor and a fixed line-item budget.'],
      ['Permitting delays', 'City timelines are not ours to control. We budget slack for them and report the moment they slip.'],
      ['Vacancy', 'An empty unit produces nothing. We work with operating reserves and price rents below the top of the market.'],
      ['Interest rates', 'A rate increase raises the cost of debt and pressures the exit. We model rate scenarios and avoid aggressive leverage.'],
      ['Illiquidity', 'This is not an investment you sell in a day. The horizon is agreed up front, and capital you may need sooner should not be committed.'],
    ] as $r): ?>
      <div class="risk">
        <h3><?= htmlspecialchars($r[0]) ?></h3>
        <p class="muted" style="font-size:14.5px;margin:0"><?= htmlspecialchars($r[1]) ?></p>
      </div>
    <?php endforeach; ?>
    <div class="note">
      <p style="margin:0;font-size:13.5px;color:var(--muted)">This is a summary, not a complete list of risks. The full risk factors for any specific offering are set out in its offering documents. See <a href="disclosures.php" style="color:var(--accent)">Important Disclosures</a>.</p>
    </div>
  </div>
</section>

<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,56px)">
    <h2 style="margin-bottom:10px">Does this fit what you are looking for?</h2>
    <p class="lead" style="margin:0 auto 24px">Book a conversation with no obligation. If it is not for you, we will say so.</p>
    <a href="contact.php" class="btn btn--lg">Talk to the team</a>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
