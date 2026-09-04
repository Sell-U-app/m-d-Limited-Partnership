<?php
require_once __DIR__ . '/inc/config.php';
$title  = 'Estrategia — ' . $SITE['name'];
$desc   = 'Tesis de inversión de M&D Realty Investments LP: value-add, build-to-rent, multifamily, fix & flip, terreno y deuda privada garantizada.';
$active = 'estrategia';

$extra_css = '
.srow{display:grid;grid-template-columns:1fr 1.15fr;gap:clamp(24px,4vw,48px);align-items:center;padding:clamp(30px,5vw,54px) 0;border-top:1px solid var(--border)}
.srow:nth-child(even) .im{order:2}
.srow .im{aspect-ratio:4/3;border-radius:8px;display:flex;align-items:flex-end;padding:18px}
.srow ul{list-style:none;padding:0;margin:18px 0 0;display:grid;grid-template-columns:1fr 1fr;gap:8px 18px}
.srow li{padding:8px 0 8px 20px;position:relative;font-size:14.5px;color:var(--muted);border-top:1px solid var(--border)}
.srow li::before{content:"";position:absolute;left:0;top:16px;width:8px;height:2px;background:var(--accent)}
.crit{background:var(--surface);border:1px solid var(--border);border-radius:10px;padding:20px 22px}
.crit h3{font-size:17px;margin:0 0 6px}
.riesgo{border-left:2px solid var(--accent);padding:4px 0 4px 20px;margin-bottom:18px}
.riesgo h3{font-size:16px;margin:0 0 5px}
@media(max-width:880px){.srow{grid-template-columns:1fr!important}.srow:nth-child(even) .im{order:0}.srow ul{grid-template-columns:1fr}}
';

require __DIR__ . '/inc/head.php';
?>
<section class="hero">
  <div class="container">
    <div class="bars"><i></i><i></i><i></i><i></i></div>
    <div class="chip chip--mg">Estrategia</div>
    <h1 style="margin:18px 0 0;max-width:17ch">Compramos donde podemos crear el valor, no esperarlo</h1>
    <p class="lead">Un activo barato no es una oportunidad. La oportunidad aparece cuando podemos intervenir el activo con obra, con gestión o con estructura, y controlar nosotros ese trabajo.</p>
    <div class="btn-row" style="margin-top:26px"><a href="contacto.php" class="btn btn--lg">Hablar con el equipo</a></div>
  </div>
</section>

<section class="section--tight">
  <div class="container">
    <?php foreach ($ESTRATEGIAS as $i => $e): ?>
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
    <div class="center" style="margin-bottom:40px"><div class="chip chip--mg">Filtro de entrada</div><h2 style="margin-top:16px">Lo que revisamos antes de comprometer capital</h2></div>
    <div class="grid grid-4">
      <?php foreach ([
        ['Título y gravámenes', 'Estudio de título completo antes de cualquier oferta en firme.'],
        ['Zonificación y permisos', 'Qué se puede construir hoy y qué tomaría cambiarlo.'],
        ['Estado físico', 'Inspección y presupuesto de obra cerrado, no estimado a ojo.'],
        ['Comparables', 'Precio de venta y de renta con transacciones reales de la zona.'],
        ['Escenario a la baja', 'Si el mercado cae, qué pasa con la operación y con el capital.'],
        ['Salida', 'Quién compra esto al final y a qué precio, definido desde el inicio.'],
        ['Estructura fiscal', 'Cómo se registra y cómo tributa la operación en Estados Unidos.'],
        ['Alineación', 'Cuánto capital propio pone M&D en la operación.'],
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
    <div class="chip chip--mg">Riesgos</div>
    <h2 style="margin:16px 0 10px">Lo que puede salir mal</h2>
    <p class="lead" style="margin-bottom:32px">Ningún vehículo de inversión inmobiliaria está libre de riesgo. Estos son los principales y cómo los tratamos.</p>
    <?php foreach ([
      ['Caída de precios', 'El valor del activo puede bajar. Compramos con margen frente al valor de mercado y priorizamos activos con flujo de renta que aguanten el ciclo.'],
      ['Sobrecostos de obra', 'Es el riesgo que más destruye rentabilidad. Lo mitigamos ejecutando con constructora propia y presupuesto cerrado por partidas.'],
      ['Demoras en permisos', 'Los tiempos de la ciudad no dependen de nosotros. Los presupuestamos con holgura y los reportamos apenas se desvían.'],
      ['Vacancia', 'Una unidad vacía no genera flujo. Trabajamos con reservas de operación y precios de renta por debajo del techo del mercado.'],
      ['Tasas de interés', 'Un alza encarece la deuda y presiona la salida. Modelamos escenarios de tasa y evitamos apalancamiento agresivo.'],
      ['Iliquidez', 'Esta no es una inversión que se vende en un día. El horizonte se pacta desde el inicio y no debe comprometerse capital que se pueda necesitar antes.'],
    ] as $r): ?>
      <div class="riesgo">
        <h3><?= htmlspecialchars($r[0]) ?></h3>
        <p class="muted" style="font-size:14.5px;margin:0"><?= htmlspecialchars($r[1]) ?></p>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<section class="section">
  <div class="container panel center blueprint" style="padding:clamp(34px,5vw,56px)">
    <h2 style="margin-bottom:10px">¿Encaja con lo que buscas?</h2>
    <p class="lead" style="margin:0 auto 24px">Agenda una conversación sin compromiso. Si no es para ti, te lo decimos.</p>
    <a href="contacto.php" class="btn btn--lg">Hablar con el equipo</a>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
