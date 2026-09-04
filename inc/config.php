<?php
/**
 * M&D Realty Investments LP — configuración única del sitio.
 * Cambia AQUÍ textos, colores y datos de contacto. No toques las plantillas.
 *
 * Marca hermana de M&D Buildings LLC. Paleta y reglas: docs/manual-de-marca.pdf
 * Regla del manual: el negro manda, el magenta es acento (nunca más del 20%).
 *
 * TODO (datos reales pendientes): teléfono, email, dirección, estado de registro
 * de la LP, cifras de $STATS y tickets mínimos de $VEHICULOS.
 */

$SITE = [
    'name'       => 'M&D Realty Investments LP',
    'short_name' => 'M&D Realty',
    'tagline'    => 'Capital en bienes raíces, con la disciplina de quien construye.',
    'lang'       => 'es',
    'base_url'   => getenv('SITE_URL') ?: 'https://mdrealtyinvestments.com',

    // --- Contacto (REEMPLAZAR con los datos reales) ---
    'email'      => 'inversionistas@mdrealtyinvestments.com',
    'phone'      => '+1 (000) 000-0000',
    'phone_tel'  => '+10000000000',
    'whatsapp'   => '10000000000',
    'address'    => 'Estados Unidos',
    'hours'      => 'Lunes a viernes, 9:00 am – 6:00 pm',
    'license'    => 'Limited Partnership · Socio general M&D',

    'form_to'     => 'inversionistas@mdrealtyinvestments.com',
    'og_default'  => 'logo-stacked.png',
    'logo'        => 'logo-horizontal-light.png', // versión blanca para el header negro
    'logo_footer' => 'logo-stacked-light.png',
    'cta_label'   => 'Hablar con el equipo',
    'cta_url'     => 'contacto.php',

    // Aviso legal obligatorio en pie de página
    'disclaimer'  => 'Este sitio es informativo y no constituye una oferta de venta ni una solicitud de compra de valores. Toda inversión se formaliza únicamente mediante los documentos de la sociedad. Invertir en bienes raíces implica riesgo, incluida la pérdida total del capital. Los resultados pasados no garantizan resultados futuros.',
];

/** Paleta del manual de marca: negro #101010 + magenta capital #D4145A + hueso #F5F2EE */
$THEME = [
    'bg'          => '#101010',
    'surface'     => '#191919',
    'ink'         => '#F5F2EE',
    'muted'       => '#9C9895',
    'primary'     => '#D4145A',
    'primary_ink' => '#FFFFFF',
    'accent'      => '#D4145A',
    'border'      => '#2B2A29',
    'radius'      => '10px',
    'maxw'        => '1200px',
    'google_fonts'=> 'family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600',
    'font_head'   => "'Montserrat',sans-serif",
    'font_body'   => "'Inter',sans-serif",
];

$NAV = [
    'home'       => ['label' => 'Inicio',     'url' => 'index.php'],
    'estrategia' => ['label' => 'Estrategia', 'url' => 'estrategia.php'],
    'portafolio' => ['label' => 'Portafolio', 'url' => 'portafolio.php'],
    'contacto'   => ['label' => 'Contacto',   'url' => 'contacto.php'],
];

/** Estrategias de inversión: [título, descripción, características[]] */
$ESTRATEGIAS = [
    ['Value-add residencial', 'Compramos activos con rezago de precio por estado físico, los intervenimos y los revaluamos.',
        ['Compra bajo valor de mercado', 'Remodelación con equipo propio', 'Revaluación y refinanciación', 'Renta o venta según el ciclo']],
    ['Build-to-rent', 'Obra nueva pensada desde el día uno para arrendar, no para vender.',
        ['Terreno con demanda de renta', 'Construcción con M&D Buildings LLC', 'Estabilización de ocupación', 'Flujo mensual al vehículo']],
    ['Multifamily pequeño', 'Edificios de 4 a 20 unidades, el segmento que los fondos grandes ignoran.',
        ['Operación profesional', 'Economías de escala en mantenimiento', 'Contratos escalonados', 'Salida a comprador institucional']],
    ['Fix & flip', 'Ciclos cortos de compra, intervención y venta para rotar capital.',
        ['Horizonte de 6 a 12 meses', 'Presupuesto cerrado de obra', 'Salida definida antes de comprar', 'Capital de regreso más rápido']],
    ['Terreno y desarrollo', 'Suelo con potencial de cambio de uso o subdivisión.',
        ['Estudio de zonificación', 'Gestión de permisos', 'Subdivisión o desarrollo', 'Venta por lotes o desarrollo propio']],
    ['Deuda privada garantizada', 'Prestamos contra inmueble con garantía real y plazo corto.',
        ['Garantía hipotecaria', 'Loan-to-value conservador', 'Pagos de interés periódicos', 'Menor exposición al ciclo']],
];

/** Cómo funciona la sociedad (tabs del home): [título, texto] */
$TABS = [
    ['Estructura LP/GP', 'Los inversionistas entran como socios limitados (LP): aportan capital y su responsabilidad se limita a ese aporte. M&D actúa como socio general (GP): origina, ejecuta y responde por la operación.'],
    ['Due diligence',    'Antes de comprometer un dólar revisamos título, zonificación, estado físico, comparables de mercado y el presupuesto de obra. Si un número no cuadra, no entramos.'],
    ['Reportes',         'Reporte trimestral con estado del activo, avance de obra, ejecución presupuestal y proyección de distribución. Sin lenguaje de folleto.'],
    ['Salida',           'Cada operación se compra con una salida definida: venta, refinanciación o estabilización de renta. La distribución sigue la cascada pactada en el acuerdo de sociedad.'],
];

/** Proceso del inversionista: [número, título, texto] */
$PROCESO = [
    ['01', 'Conversación inicial',   'Entendemos tu horizonte, tu tolerancia al riesgo y el tamaño del aporte que tiene sentido para ti.'],
    ['02', 'Materiales de la operación', 'Recibes el memorando, la proyección financiera y el acuerdo de sociedad para revisarlos con tu asesor.'],
    ['03', 'Suscripción y KYC',      'Firma de documentos, verificación de identidad y origen de fondos según la normativa aplicable.'],
    ['04', 'Aporte de capital',      'El capital entra a la cuenta del vehículo y queda documentado en el registro de socios.'],
    ['05', 'Ejecución y reportes',   'Operamos el activo y reportamos cada trimestre con cifras, no con adjetivos.'],
    ['06', 'Salida y distribución',  'Al cerrar el ciclo se liquida la operación y se distribuye según la cascada pactada.'],
];

/**
 * Cifras. TODO: reemplazar por capital administrado, número de operaciones y
 * retornos SOLO cuando existan cifras auditadas y revisadas por el abogado.
 */
$STATS = [
    ['LP',         'estructura formal de sociedad'],
    ['GP propio',  'M&D responde por la operación'],
    ['Trimestral', 'reporte a socios limitados'],
    ['Integrado',  'construimos con M&D Buildings LLC'],
];

/** Portafolio: [título, estrategia, resumen, estado, indicador] */
$PORTAFOLIO = [
    ['Casa unifamiliar · value-add', 'Value-add',      'Compra con descuento por estado físico, remodelación integral y refinanciación.', 'Ciclo cerrado', 'Venta'],
    ['Dúplex build-to-rent',         'Build-to-rent',  'Obra nueva de dos unidades diseñadas para renta larga, construidas por M&D Buildings.', 'En operación', 'Renta'],
    ['Edificio de 8 unidades',       'Multifamily',    'Adquisición, reposicionamiento de rentas y profesionalización de la administración.', 'En operación', 'Renta'],
    ['Rehabilitación y venta',       'Fix & flip',     'Ciclo corto de intervención con presupuesto cerrado y salida definida a la compra.', 'Ciclo cerrado', 'Venta'],
    ['Lote con cambio de uso',       'Terreno',        'Suelo adquirido por potencial de subdivisión, en gestión de permisos.', 'En gestión', 'Desarrollo'],
    ['Préstamo con garantía real',   'Deuda privada',  'Financiación de corto plazo a un desarrollador, respaldada con hipoteca en primer grado.', 'Vigente', 'Interés'],
];

/** Vehículos de participación: [título, para quién, incluye[], destacado, ticket] */
$VEHICULOS = [
    ['Coinversión por proyecto', 'Quien quiere elegir operación por operación',
        ['Entras a un activo específico', 'Horizonte definido por el proyecto', 'Reporte del activo', 'Salida al cierre de la operación'], false, 'Ticket: a convenir'],
    ['Participación en el vehículo', 'Quien busca diversificar dentro de la LP',
        ['Exposición a varias operaciones', 'Riesgo repartido entre activos', 'Reporte trimestral consolidado', 'Distribuciones según cascada', 'Reinversión opcional'], true, 'Ticket: a convenir'],
    ['Deuda privada', 'Quien prioriza previsibilidad sobre upside',
        ['Garantía hipotecaria', 'Plazo corto definido', 'Pagos de interés periódicos', 'Sin participación en la plusvalía'], false, 'Ticket: a convenir'],
];

/** Segmentos para el ticker */
$TICKER = ['Value-add', 'Build-to-rent', 'Multifamily', 'Fix & flip', 'Terreno', 'Deuda privada', 'Coinversión', 'Renta larga'];

/** Diferenciadores: [título, texto] */
$DIFERENCIADORES = [
    ['Construimos lo que compramos', 'M&D Buildings LLC ejecuta la obra. No dependemos de un tercero para el costo ni para el cronograma, que es donde se pierde la rentabilidad.'],
    ['El GP pone capital',           'M&D aporta capital propio en las operaciones. Si la operación sale mal, perdemos con el socio limitado, no solo la comisión.'],
    ['Números, no adjetivos',        'Cada trimestre recibes ejecución presupuestal real contra la proyección inicial, incluyendo las desviaciones.'],
];

$FAQ = [
    ['¿Qué es exactamente una Limited Partnership?', 'Es una sociedad con dos tipos de socio. El socio general (GP) administra y responde por la operación; los socios limitados (LP) aportan capital y su responsabilidad se limita a ese aporte. M&D es el GP.'],
    ['¿Quién puede invertir?', 'Aplicamos verificación de identidad y de origen de fondos, y los requisitos de elegibilidad que exija la normativa aplicable a cada operación. Lo revisamos contigo antes de cualquier compromiso.'],
    ['¿Cuál es el ticket mínimo?', 'Depende del vehículo y de la operación. Lo conversamos en la primera reunión, junto con el horizonte y el perfil de riesgo.'],
    ['¿Cuándo recibo distribuciones?', 'Según lo pactado en el acuerdo de sociedad de cada operación: periódicas en activos de renta y deuda, o al cierre en operaciones de venta.'],
    ['¿Qué información recibo mientras dura la inversión?', 'Reporte trimestral con estado del activo, avance de obra, ejecución presupuestal frente a la proyección y expectativa de salida.'],
    ['¿Cuáles son los riesgos?', 'Los propios del sector: variación de precios, tasas de interés, vacancia, sobrecostos de obra, demoras en permisos y falta de liquidez. La inversión no está garantizada y puede perderse total o parcialmente.'],
    ['¿Qué relación hay con M&D Buildings LLC?', 'Son marcas hermanas del mismo grupo. La LP invierte y la LLC construye. Esa integración es lo que nos da control sobre el costo y el cronograma.'],
];
