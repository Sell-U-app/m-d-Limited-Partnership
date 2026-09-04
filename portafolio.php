<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'Portafolio — ' . $SITE['name'];
$desc   = 'Tipos de operación de M&D Realty Investments LP: value-add, build-to-rent, multifamily, fix & flip, terreno y deuda privada.';
$active = 'portafolio';

$extra_css = '
.pj{background:var(--surface);border:1px solid var(--border);border-radius:12px;overflow:hidden;display:flex;flex-direction:column;transition:border-color .2s,transform .2s}
.pj:hover{border-color:var(--accent);transform:translateY(-3px)}
.pj .im{aspect-ratio:16/10;display:flex;align-items:flex-end;justify-content:space-between;padding:14px;gap:8px;border:0;border-bottom:1px solid var(--border)}
.pj .bd{padding:22px;flex:1;display:flex;flex-direction:column}
.badge{font-family:var(--font-head);font-weight:700;font-size:10.5px;letter-spacing:.1em;text-transform:uppercase;padding:5px 10px;border-radius:3px;background:var(--bg);border:1px solid var(--border);color:var(--muted)}
.badge.on{background:var(--accent);color:var(--primary-ink);border-color:var(--accent)}
.pj .ft{display:flex;justify-content:space-between;align-items:center;padding-top:14px;border-top:1px solid var(--border);font-size:13px}
.nota{background:var(--surface);border:1px solid var(--border);border-left:2px solid var(--accent);border-radius:8px;padding:20px 24px}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero">
  <div class="container">
    <div class="bars"><i></i><i></i><i></i><i></i></div>
    <div class="chip chip--mg">Portafolio</div>
    <h1 style="margin:18px 0 0;max-width:16ch">El tipo de operación que hacemos</h1>
    <p class="lead">Ejemplos representativos de las operaciones que originamos y ejecutamos. Los detalles de cada activo y sus cifras se comparten únicamente con socios bajo acuerdo de confidencialidad.</p>
  </div>
</section>

<section class="section--tight">
  <div class="container grid grid-3">
    <?php foreach ($PORTAFOLIO as $p): ?>
      <article class="pj">
        <div class="im blueprint">
          <span class="badge"><?= htmlspecialchars($p[1]) ?></span>
          <span class="badge<?= $p[3] !== 'Ciclo cerrado' ? ' on' : '' ?>"><?= htmlspecialchars($p[3]) ?></span>
        </div>
        <div class="bd">
          <h3 style="font-size:18px;margin:0 0 8px"><?= htmlspecialchars($p[0]) ?></h3>
          <p class="muted" style="font-size:14.5px;margin:0 0 18px;flex:1"><?= htmlspecialchars($p[2]) ?></p>
          <div class="ft">
            <span class="muted">Fuente de retorno</span>
            <span style="font-family:var(--font-head);font-weight:700;color:var(--accent)"><?= htmlspecialchars($p[4]) ?></span>
          </div>
        </div>
      </article>
    <?php endforeach; ?>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <div class="nota">
      <p style="margin:0;font-size:14px;color:var(--muted)">Las operaciones anteriores describen el tipo de activo y estructura con los que trabajamos. No constituyen un historial de resultados ni una proyección de rendimiento. El desempeño pasado, cuando existe, no garantiza resultados futuros.</p>
    </div>
  </div>
</section>

<section class="section--tight" style="border-top:1px solid var(--border);border-bottom:1px solid var(--border);background:var(--surface)">
  <div class="container grid grid-4">
    <?php foreach ($STATS as $s): ?>
      <div><div class="stat-n"><?= htmlspecialchars($s[0]) ?></div><div class="muted" style="font-size:13.5px;margin-top:6px"><?= htmlspecialchars($s[1]) ?></div></div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,56px)">
    <h2 style="margin-bottom:10px">¿Quieres ver la próxima operación?</h2>
    <p class="lead" style="margin:0 auto 24px">Déjanos tus datos y te avisamos cuando abramos una ronda que encaje con tu perfil.</p>
    <a href="contacto.php" class="btn btn--lg">Hablar con el equipo</a>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
