<?php
/**
 * M&D Realty Investments LP — single source of truth for the site.
 * Edit copy, colors and contact details HERE. Do not touch the templates.
 *
 * Sister brand of M&D Buildings LLC. Palette and rules: docs/brand-manual.pdf
 * Manual rule: black leads, magenta is an accent (never more than 20%).
 *
 * TODO (real data still pending): phone, email, address, state of formation,
 * the figures in $STATS and the minimum tickets in $VEHICLES.
 */

$SITE = [
    'name'       => 'M&D Realty Investments LP',
    'legal_name' => 'M&D Realty Investments LP',
    'short_name' => 'M&D Realty',
    'tagline'    => 'Real estate capital, run with a builder’s discipline.',
    'lang'       => 'en',
    'base_url'   => getenv('SITE_URL') ?: 'https://mdrealtyinvestments.com',

    // --- Contact (REPLACE with the real details) ---
    'email'      => 'investors@mdrealtyinvestments.com',
    'phone'      => '+1 (000) 000-0000',
    'phone_tel'  => '+10000000000',
    'whatsapp'   => '10000000000',
    'address'    => 'United States',
    'hours'      => 'Monday to Friday, 9:00 am – 6:00 pm',
    'license'    => 'Limited Partnership · M&D as general partner',

    // --- Legal (REPLACE before publishing) ---
    'state'         => 'Florida',            // state of formation and governing law
    'legal_address' => '[Street address, City, State ZIP]',
    'legal_email'   => 'legal@mdrealtyinvestments.com',
    'legal_updated' => 'September 4, 2026',  // last updated date shown on policy pages

    'form_to'     => 'investors@mdrealtyinvestments.com',
    'og_default'  => 'logo-stacked.png',
    'logo'        => 'logo-horizontal-light.png', // white version for the black header
    'logo_footer' => 'logo-stacked-light.png',
    'cta_label'   => 'Talk to the team',
    'cta_url'     => 'contact.php',

    // Short notice shown in the footer of every page
    'disclaimer'  => 'This website is for information only. It is not an offer to sell or a solicitation of an offer to buy securities, and it is not investment, legal or tax advice. Any investment is made solely through the partnership documents. Real estate investing involves risk, including the total loss of capital. Past results do not guarantee future results.',
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
    'home'      => ['label' => 'Home',      'url' => 'index.php'],
    'strategy'  => ['label' => 'Strategy',  'url' => 'strategy.php'],
    'portfolio' => ['label' => 'Portfolio', 'url' => 'portfolio.php'],
    'contact'   => ['label' => 'Contact',   'url' => 'contact.php'],
];

/** Policy pages, linked from the footer */
$LEGAL_NAV = [
    'disclosures'   => ['label' => 'Important Disclosures',   'url' => 'disclosures.php'],
    'privacy'       => ['label' => 'Privacy Policy',          'url' => 'privacy.php'],
    'terms'         => ['label' => 'Terms of Use',            'url' => 'terms.php'],
    'cookies'       => ['label' => 'Cookie Policy',           'url' => 'cookies.php'],
    'accessibility' => ['label' => 'Accessibility Statement', 'url' => 'accessibility.php'],
];

/** Investment strategies: [title, description, characteristics[]] */
$STRATEGIES = [
    ['Residential value-add', 'We buy assets priced below the market because of their condition, fix them, and re-rate them.',
        ['Purchase below market value', 'Renovation with our own crew', 'Reappraisal and refinance', 'Rent or sell depending on the cycle']],
    ['Build-to-rent', 'New construction designed from day one to be rented, not flipped.',
        ['Land in proven rental demand', 'Built by M&D Buildings LLC', 'Lease-up to stabilization', 'Monthly cash flow to the vehicle']],
    ['Small multifamily', 'Buildings of 4 to 20 units, the segment large funds ignore.',
        ['Professional operations', 'Maintenance economies of scale', 'Staggered lease expirations', 'Exit to an institutional buyer']],
    ['Fix and flip', 'Short cycles of buy, renovate and sell to recycle capital.',
        ['6 to 12 month horizon', 'Fixed construction budget', 'Exit defined before we buy', 'Capital back sooner']],
    ['Land and development', 'Parcels with rezoning or subdivision potential.',
        ['Zoning study', 'Permit management', 'Subdivision or development', 'Sale by lot or self-development']],
    ['Secured private lending', 'We lend against real property, with a real lien and a short term.',
        ['First-position mortgage', 'Conservative loan-to-value', 'Periodic interest payments', 'Lower exposure to the cycle']],
];

/** How the partnership works (home tabs): [title, text] */
$TABS = [
    ['LP/GP structure', 'Investors come in as limited partners: they contribute capital and their liability is limited to that contribution. M&D acts as general partner: we source, execute and answer for the deal.'],
    ['Due diligence',   'Before a dollar is committed we review title, zoning, physical condition, market comps and the construction budget. If a number does not hold up, we walk.'],
    ['Reporting',       'A quarterly report with asset status, construction progress, budget-to-actual and expected distributions. No brochure language.'],
    ['Exit',            'Every deal is bought with a defined exit: sale, refinance or stabilized rent. Distributions follow the waterfall set out in the partnership agreement.'],
];

/** Investor process: [number, title, text] */
$PROCESS = [
    ['01', 'First conversation',   'We understand your horizon, your risk tolerance and what size of commitment actually makes sense for you.'],
    ['02', 'Deal materials',       'You receive the memorandum, the financial model and the partnership agreement to review with your own advisers.'],
    ['03', 'Subscription and KYC', 'Document signing, identity verification and source-of-funds checks as required by applicable rules.'],
    ['04', 'Capital contribution', 'Funds go to the vehicle’s account and the contribution is recorded in the partner register.'],
    ['05', 'Execution and reports','We operate the asset and report every quarter with figures, not adjectives.'],
    ['06', 'Exit and distribution','At the end of the cycle the deal is liquidated and proceeds are distributed per the waterfall.'],
];

/**
 * Figures. TODO: replace with assets under management, deal count and returns
 * ONLY when the numbers are audited and reviewed by counsel.
 */
$STATS = [
    ['LP',        'formal partnership structure'],
    ['In-house GP','M&D answers for the deal'],
    ['Quarterly', 'reporting to limited partners'],
    ['Integrated','we build with M&D Buildings LLC'],
];

/** Portfolio: [title, strategy, summary, status, return source] */
$PORTFOLIO = [
    ['Single-family value-add', 'Value-add',       'Bought at a discount for condition, fully renovated and refinanced.',                 'Cycle closed',  'Sale'],
    ['Build-to-rent duplex',    'Build-to-rent',   'Two new units designed for long-term rent, built by M&D Buildings.',                  'Operating',     'Rent'],
    ['8-unit building',         'Multifamily',     'Acquisition, rent repositioning and professional property management.',               'Operating',     'Rent'],
    ['Renovate and sell',       'Fix and flip',    'Short intervention cycle with a fixed budget and an exit defined at purchase.',       'Cycle closed',  'Sale'],
    ['Parcel with rezoning',    'Land',            'Land acquired for its subdivision potential, currently in permitting.',               'In permitting', 'Development'],
    ['Secured loan',            'Private lending', 'Short-term financing to a developer, backed by a first-position mortgage.',           'Outstanding',   'Interest'],
];

/** Ways to participate: [title, who it is for, includes[], featured, ticket] */
$VEHICLES = [
    ['Deal-by-deal co-investment', 'Investors who want to pick each deal',
        ['You enter one specific asset', 'Horizon set by that project', 'Asset-level reporting', 'Exit at the close of the deal'], false, 'Ticket: on request'],
    ['Participation in the vehicle', 'Investors who want to diversify inside the LP',
        ['Exposure to several deals', 'Risk spread across assets', 'Consolidated quarterly report', 'Distributions per the waterfall', 'Optional reinvestment'], true, 'Ticket: on request'],
    ['Private lending', 'Investors who prioritize predictability over upside',
        ['Mortgage collateral', 'Defined short term', 'Periodic interest payments', 'No share in the appreciation'], false, 'Ticket: on request'],
];

/** Segments for the ticker */
$TICKER = ['Value-add', 'Build-to-rent', 'Multifamily', 'Fix and flip', 'Land', 'Private lending', 'Co-investment', 'Long-term rent'];

/** Differentiators: [title, text] */
$DIFFERENTIATORS = [
    ['We build what we buy', 'M&D Buildings LLC does the construction. We do not depend on a third party for cost or schedule, which is exactly where returns are usually lost.'],
    ['The GP has skin in the game', 'M&D contributes its own capital to the deals. If a deal goes badly we lose alongside the limited partner, not just the fee.'],
    ['Numbers, not adjectives', 'Every quarter you get real budget-to-actual against the original model, variances included.'],
];

$FAQ = [
    ['What exactly is a Limited Partnership?', 'It is a partnership with two kinds of partner. The general partner (GP) manages the business and answers for it; the limited partners (LPs) contribute capital and their liability is limited to that contribution. M&D is the GP.'],
    ['Who can invest?', 'We apply identity and source-of-funds verification, plus whatever eligibility requirements apply to each offering. We walk you through them before anything is committed.'],
    ['What is the minimum?', 'It depends on the vehicle and the deal. We discuss it in the first conversation, along with horizon and risk profile.'],
    ['When are distributions paid?', 'As set out in the partnership agreement for each deal: periodically for rental and lending assets, or at the close for sale-driven deals.'],
    ['What do I receive while the investment is running?', 'A quarterly report with asset status, construction progress, budget-to-actual against the model and the expected exit.'],
    ['What are the risks?', 'The usual ones for the sector: price swings, interest rates, vacancy, construction overruns, permitting delays and illiquidity. The investment is not guaranteed and can be lost in whole or in part.'],
    ['How does this relate to M&D Buildings LLC?', 'They are sister brands in the same group. The LP invests, the LLC builds. That integration is what gives us control over cost and schedule.'],
];
