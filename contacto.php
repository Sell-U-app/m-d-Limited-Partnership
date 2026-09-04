<?php
require __DIR__ . '/inc/mailer.php';

$sent = null;
$old  = ['nombre' => '', 'email' => '', 'telefono' => '', 'interes' => '', 'horizonte' => '', 'mensaje' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    [$sent, $old] = handle_form([
        'Nombre'    => 'nombre',
        'Email'     => 'email',
        'Teléfono'  => 'telefono',
        'Interés'   => 'interes',
        'Horizonte' => 'horizonte',
        'Mensaje'   => 'mensaje',
    ], ['nombre', 'email', 'mensaje']);
}

$title  = 'Contacto — ' . $SITE['name'];
$desc   = 'Conversemos sobre tu horizonte de inversión. Sin compromiso y sin oferta de valores.';
$active = 'contacto';

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
      <div class="chip chip--mg">Contacto</div>
      <h1 style="margin:18px 0 0;max-width:15ch">Empecemos por entender tu horizonte</h1>
      <p class="lead">No hay oferta sobre la mesa. Primero conversamos, entendemos qué buscas y te avisamos cuando aparezca una operación que encaje.</p>

      <div style="margin-top:26px">
        <?php if (!empty($SITE['email'])): ?>
          <a class="cline" href="mailto:<?= htmlspecialchars($SITE['email']) ?>"><span class="ic">&#9993;</span><span><b><?= htmlspecialchars($SITE['email']) ?></b><br><span class="muted" style="font-size:13px">Relación con inversionistas</span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['phone'])): ?>
          <a class="cline" href="tel:<?= htmlspecialchars($SITE['phone_tel']) ?>"><span class="ic">&#9742;</span><span><b><?= htmlspecialchars($SITE['phone']) ?></b><br><span class="muted" style="font-size:13px"><?= htmlspecialchars($SITE['hours'] ?? '') ?></span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['whatsapp'])): ?>
          <a class="cline" href="https://wa.me/<?= htmlspecialchars($SITE['whatsapp']) ?>" target="_blank" rel="noopener"><span class="ic">&#128172;</span><span><b>WhatsApp</b><br><span class="muted" style="font-size:13px">Respuesta en horario laboral</span></span></a>
        <?php endif; ?>
        <?php if (!empty($SITE['address'])): ?>
          <div class="cline"><span class="ic">&#9873;</span><span><b><?= htmlspecialchars($SITE['address']) ?></b><br><span class="muted" style="font-size:13px"><?= htmlspecialchars($SITE['license'] ?? '') ?></span></span></div>
        <?php endif; ?>
      </div>

      <div class="legal">
        <p style="margin:0;font-size:13px;color:var(--muted)">Completar este formulario no crea ninguna relación de sociedad ni compromiso de inversión. No solicitamos ni recibimos dinero por este canal.</p>
      </div>
    </div>

    <div class="panel">
      <?php if ($sent === true): ?>
        <div class="notice notice--ok">Recibimos tu mensaje. Te contactamos para agendar la conversación.</div>
      <?php elseif ($sent === false): ?>
        <div class="notice notice--err">No pudimos enviar el mensaje. Escríbenos a <?= htmlspecialchars($SITE['email']) ?>.</div>
      <?php elseif ($sent === null && $_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="notice notice--err">Faltan datos: nombre, un email válido y el mensaje son obligatorios.</div>
      <?php endif; ?>

      <h2 style="font-size:21px;margin:0 0 4px">Agenda una conversación</h2>
      <p class="muted" style="font-size:14px">Respondemos en horario laboral.</p>

      <form method="post" action="contacto.php#form" id="form" style="margin-top:18px">
        <div class="hp"><label>No llenar<input type="text" name="website" tabindex="-1" autocomplete="off"></label></div>

        <div class="field"><label for="nombre">Nombre *</label><input id="nombre" name="nombre" required value="<?= htmlspecialchars($old['nombre']) ?>"></div>

        <div class="grid grid-2" style="gap:0 16px">
          <div class="field"><label for="email">Email *</label><input id="email" type="email" name="email" required value="<?= htmlspecialchars($old['email']) ?>"></div>
          <div class="field"><label for="telefono">Teléfono</label><input id="telefono" name="telefono" value="<?= htmlspecialchars($old['telefono']) ?>"></div>
        </div>

        <div class="field">
          <label for="interes">Qué te interesa</label>
          <select id="interes" name="interes">
            <option value="">Selecciona…</option>
            <?php foreach ($VEHICULOS as $v): ?>
              <option value="<?= htmlspecialchars($v[0]) ?>"<?= $old['interes'] === $v[0] ? ' selected' : '' ?>><?= htmlspecialchars($v[0]) ?></option>
            <?php endforeach; ?>
            <option value="Todavía no lo sé"<?= $old['interes'] === 'Todavía no lo sé' ? ' selected' : '' ?>>Todavía no lo sé</option>
          </select>
        </div>

        <div class="field">
          <label for="horizonte">Horizonte de inversión</label>
          <select id="horizonte" name="horizonte">
            <option value="">Selecciona…</option>
            <?php foreach (['Menos de 1 año', 'De 1 a 3 años', 'De 3 a 5 años', 'Más de 5 años'] as $h): ?>
              <option value="<?= htmlspecialchars($h) ?>"<?= $old['horizonte'] === $h ? ' selected' : '' ?>><?= htmlspecialchars($h) ?></option>
            <?php endforeach; ?>
          </select>
        </div>

        <div class="field"><label for="mensaje">Cuéntanos qué buscas *</label><textarea id="mensaje" name="mensaje" rows="5" required placeholder="Ej: busco exposición a renta en Estados Unidos con horizonte de 3 a 5 años."><?= htmlspecialchars($old['mensaje']) ?></textarea></div>

        <button type="submit" class="btn btn--lg" style="width:100%;justify-content:center">Enviar mensaje</button>
        <p class="muted" style="font-size:12.5px;margin:14px 0 0;text-align:center">No compartimos tus datos con terceros.</p>
      </form>
    </div>
  </div>
</section>
<?php require __DIR__ . '/inc/footer.php'; ?>
