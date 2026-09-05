<?php
/**
 * M&D Realty Investments LP — single source of truth for the site.
 * Edit copy, colors and contact details HERE. Do not touch the templates.
 *
 * Sister company of M&D Buildings LLC. Palette and rules: docs/brand-manual.pdf
 * Manual rule: black leads, magenta is an accent (never more than 20%).
 *
 * TODO (real data still pending): the operating address in 'address' and
 * 'legal_address', and the partner profiles in $TEAM (left empty on purpose —
 * do not fill it with anything that is not verified).
 */

$SITE = [
    'name'       => 'M&D Realty Investments LP',
    'legal_name' => 'M&D Realty Investments LP',
    'short_name' => 'M&D Realty',
    'tagline'    => 'Real estate development in the United States',
    'lang'       => 'en',
    'base_url'   => getenv('SITE_URL') ?: 'https://www.mddevelopments.us',

    // --- Contact: the form is the only channel. No phone, no WhatsApp. ---
    'email'      => 'contact@mddevelopments.us',
    'phone'      => '',
    'phone_tel'  => '',
    'whatsapp'   => '',
    'address'    => '[Street address, City, State ZIP]',
    'hours'      => '',
    'license'    => 'A Wyoming limited partnership · General partner: M&D Developments Corp',

    // --- Legal (REPLACE the address before publishing) ---
    'state'         => 'Wyoming',            // state of formation and governing law
    'legal_address' => '[Street address, City, State ZIP]',
    'legal_email'   => 'legal@mddevelopments.us',
    'legal_updated' => 'September 4, 2026',  // last updated date shown on policy pages

    'form_to'     => 'contact@mddevelopments.us',
    'og_default'  => 'logo-stacked.png',
    'logo'        => 'logo-horizontal-light.png', // white version for the black header
    'logo_footer' => 'logo-stacked-light.png',
    'cta_label'   => 'Get in touch',
    'cta_url'     => 'contact.php',

    // Identity line shown at the foot of every page
    'footer_line' => 'M&D Realty Investments LP · A Wyoming limited partnership',
];

/** Brand manual palette: black #101010 + capital magenta #D4145A + bone #F5F2EE */
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
    'home'      => ['label' => 'Home',           'url' => 'index.php'],
    'strategy'  => ['label' => 'What we build',  'url' => 'strategy.php'],
    'portfolio' => ['label' => 'Projects',       'url' => 'portfolio.php'],
    'contact'   => ['label' => 'Contact',        'url' => 'contact.php'],
];

/** Policy pages, linked from the footer */
$LEGAL_NAV = [
    'privacy'       => ['label' => 'Privacy Policy',          'url' => 'privacy.php'],
    'terms'         => ['label' => 'Terms of Use',            'url' => 'terms.php'],
    'cookies'       => ['label' => 'Cookie Policy',           'url' => 'cookies.php'],
    'accessibility' => ['label' => 'Accessibility Statement', 'url' => 'accessibility.php'],
];

/** What we build: [title, description] */
$SEGMENTS = [
    ['Residential value-add', 'Homes acquired below market for their condition, brought back to full standard and returned to the market.'],
    ['Build-to-rent',         'New construction designed from the outset for long-term tenancy rather than resale.'],
    ['Small multifamily',     'Buildings of four to twenty units — the size range large operators tend to skip and local owners tend to under-manage.'],
    ['Land and development',  'Parcels with rezoning or subdivision potential, taken through permitting.'],
];

/** How a project runs: [number, title, text, short label] */
$PROCESS = [
    ['01', 'Sourcing',      'We look at considerably more property than we buy.', 'We look'],
    ['02', 'Diligence',     'Title, condition, zoning and cost, verified before we commit.', 'We verify'],
    ['03', 'Acquisition',   "The property is purchased in the partnership's name.", 'We buy'],
    ['04', 'Construction',  'Carried out by licensed contractors, under permit, with the scope fixed before the first day on site.', 'We build'],
    ['05', 'Stabilization', 'Lease-up or preparation for sale, depending on the asset.', 'We operate'],
    ['06', 'Disposition',   'We sell or we hold, according to what the project was planned for.', 'We decide'],
];

/** The group: [company, role, detail] — order drives the diagram */
$GROUP = [
    ['M&D Developments Corp',      'General partner',  'Responsible for the administration of the partnership.'],
    ['M&D Realty Investments LP',  'The partnership',  'Holds and develops the projects.'],
    ['M&D Buildings LLC',          'Residential acquisitions', 'Carries out our residential acquisitions in Pennsylvania.'],
];

/**
 * Projects. Empty until the first properties are delivered.
 * When adding one: [title, segment, summary, status]. Location, asset type,
 * scope of work and status only — never prices, margins or performance.
 */
$PORTFOLIO = [];

/** Segments for the ticker */
$TICKER = ['Residential value-add', 'Build-to-rent', 'Small multifamily', 'Land and development', 'Permitting', 'Construction', 'Lease-up', 'Pennsylvania'];

/**
 * The people behind the partnership: [name, role, note].
 * Left empty on purpose. Add only verified profiles.
 */
$TEAM = [];

$FAQ = [
    ['Where do you work?', 'Pennsylvania and the surrounding markets, with the partnership organised in Wyoming.'],
    ['Who carries out the construction?', 'Licensed contractors, hired and supervised by the partnership.'],
    ['Do you build for third parties?', 'No. We develop property the partnership owns.'],
    ['How does M&D Buildings LLC fit in?', 'It is the company through which we acquire and improve residential property in Pennsylvania.'],
];
