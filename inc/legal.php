<?php
/**
 * Policy content for every legal page.
 *
 * IMPORTANT: these are plain-language templates, not legal advice. This is a
 * private investment partnership, so securities counsel must review every page
 * before publishing, and must confirm whether the offering is conducted under
 * Rule 506(b) or 506(c) — that determines what may be said on a public website
 * at all. Fill in the $SITE placeholders ('state', 'legal_address',
 * 'legal_email', 'legal_updated') first.
 *
 * Shape: $LEGAL[key] = ['title', 'summary', 'sections' => [[heading, [paragraphs]]]]
 * A paragraph that is an array is rendered as a bulleted list.
 */
require_once __DIR__ . '/config.php';

$C  = $SITE['legal_name'];
$LE = $SITE['legal_email'] ?? $SITE['email'];
$ST = $SITE['state'];
$AD = $SITE['legal_address'];
$SN = $SITE['name'];

$LEGAL = [

'disclosures' => [
    'title'   => 'Important Disclosures',
    'summary' => "What this website is, what it is not, and the risks of investing with $C.",
    'sections' => [
        ['No offer of securities', [
            "Nothing on this website is an offer to sell, or a solicitation of an offer to buy, any security or interest in $C or in any vehicle it manages. No offer is made in any jurisdiction where such an offer would be unlawful.",
            'Any offering is made only to eligible investors, only through confidential offering materials, including a private placement memorandum, the limited partnership agreement and a subscription agreement. If anything on this site conflicts with those documents, those documents control.',
        ]],
        ['Not investment, legal or tax advice', [
            "$C is not a registered investment adviser, broker-dealer or tax adviser, and nothing here is personalized advice. The content is general information about how we work. Before investing, consult your own financial, legal and tax advisers about your particular situation.",
        ]],
        ['Risk of loss', [
            'Private real estate investing is speculative and involves substantial risk, including the possible loss of your entire investment. Risks include, without limitation:',
            ['Declines in property values and in the broader real estate market', 'Construction cost overruns and delays', 'Permitting, zoning and regulatory delays', 'Vacancy, tenant default and lower-than-expected rents', 'Interest rate increases that raise financing costs or compress exit values', 'Inability to sell or refinance an asset on the expected timeline', 'Reliance on the general partner and its key people', 'Concentration in a small number of assets or markets', 'Changes in tax law affecting the treatment of the investment'],
            'You should invest only capital you can afford to lose entirely and do not expect to need before the stated horizon.',
        ]],
        ['No guarantee of results', [
            'We make no guarantee of any return, distribution or return of capital. Any target, model or projection reflects assumptions that may not hold. Actual results will differ, and may differ materially.',
            'Where past deals are described, they illustrate the type of transaction we do. They are not a track record, not a representation of overall performance, and past performance does not predict or guarantee future results.',
        ]],
        ['Forward-looking statements', [
            'Statements about what we plan, expect, target or intend are forward-looking. They involve known and unknown risks and are not promises. We are not obliged to update them as circumstances change.',
        ]],
        ['Illiquidity', [
            'Interests in a private partnership are illiquid. There is no public market for them, transfer is restricted by the partnership agreement and by securities law, and you should assume you cannot withdraw capital before the deal completes its cycle.',
        ]],
        ['Investor eligibility', [
            'Participation is limited to investors who meet the eligibility requirements for the specific offering, which may include accredited investor status under Rule 501 of Regulation D. We verify identity and source of funds before any subscription is accepted.',
        ]],
        ['Conflicts of interest', [
            "$C is affiliated with M&D Buildings LLC, which may be engaged as the general contractor on assets the partnership owns. That affiliation is disclosed deliberately: it is central to our model, and it also means an affiliate may earn construction fees on partnership work. The specific terms, fees and conflict-mitigation procedures are set out in the offering documents for each deal.",
        ]],
        ['Third-party information', [
            'Market data, comparables and third-party figures are believed to be reliable when published but are not independently verified by us and may change.',
        ]],
        ['Questions', [
            "Email $LE or write to $C, $AD.",
        ]],
    ],
],

'privacy' => [
    'title'   => 'Privacy Policy',
    'summary' => "How $C collects, uses and protects the information you share through this website.",
    'sections' => [
        ['Who we are', [
            "$C (\"we\", \"us\", \"our\") operates this website. We are responsible for the personal information described in this policy. You can reach us at $LE.",
        ]],
        ['Information you give us', [
            'When you submit our contact form, we collect what you type into it:',
            ['Your name', 'Your email address', 'Your phone number', 'The vehicle you are interested in and your stated investment horizon', 'Anything else you choose to write in the message'],
            'We ask only for what we need to have a first conversation with you. We do not request financial account details, government identification numbers or any payment information through this website, and you should never send them here.',
        ]],
        ['If you later subscribe to an offering', [
            'If a conversation moves forward, the subscription and know-your-customer process collects far more information than this website does, including identity documents, accreditation evidence and source-of-funds records. That process is governed by the offering documents and by a separate notice provided to you at the time, not by this policy.',
        ]],
        ['Information collected automatically', [
            'Our web server keeps standard access logs, which may include your IP address, browser type, the pages you request and the date and time of the request. These logs are used to keep the site running and secure, not to build a profile of you.',
            'This site does not run advertising trackers or third-party analytics by default. If that changes, this policy and our Cookie Policy will be updated first.',
        ]],
        ['Fonts and other third-party resources', [
            'The site loads typefaces from Google Fonts. When your browser requests those files, Google receives your IP address and standard request headers. We do not share your form submissions with Google or with any advertising network.',
        ]],
        ['How we use your information', [
            ['To respond to your inquiry and arrange a conversation', 'To assess, in general terms, whether an offering could be a fit before we share any confidential materials', 'To keep records of our communications', 'To protect the site against abuse, spam and fraud', 'To comply with legal, tax, anti-money-laundering and securities obligations'],
            'We do not sell your personal information, and we do not share it with third parties for their own marketing.',
        ]],
        ['Who we share it with', [
            'We share information only when we need to, and only with:',
            ['Service providers who host the site, deliver our email or store our records, bound to use it only on our instructions', 'Professional advisers such as our attorneys, accountants and fund administrator', 'Affiliates within the M&D group where necessary to respond to you', 'Authorities and regulators, when the law requires it or to protect our legal rights'],
        ]],
        ['How long we keep it', [
            'Inquiries that do not lead anywhere are kept for up to 24 months and then deleted. Records connected to an actual investment are kept for as long as our legal, tax, securities and anti-money-laundering obligations require, which is generally several years after the relationship ends.',
        ]],
        ['Security', [
            'The site is served over HTTPS and access to submissions is limited to the people who need it. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.',
        ]],
        ['Your choices and rights', [
            "You can ask us for a copy of the personal information we hold about you, correct it, or delete it. Write to $LE and we will respond within a reasonable time. Some information must be retained where the law requires it.",
            'If you live in a state with a comprehensive privacy law, such as California, Colorado, Connecticut, Texas or Virginia, you may have additional rights, including the right not to be discriminated against for exercising them. We do not sell personal information or share it for cross-context behavioral advertising as those terms are defined in those laws.',
        ]],
        ['Children', [
            'This site is meant for adults. We do not knowingly collect personal information from anyone under 13. If you believe a child has sent us information, contact us and we will delete it.',
        ]],
        ['Links to other sites', [
            'Our site may link to third-party websites. We do not control them and are not responsible for their content or their privacy practices.',
        ]],
        ['Changes to this policy', [
            'We may update this policy. The revised version takes effect when it is posted here, and the date below changes with it. If the change is significant, we will make that clear on the page.',
        ]],
        ['Contact', [
            "Questions about this policy? Email $LE or write to $C, $AD.",
        ]],
    ],
],

'terms' => [
    'title'   => 'Terms of Use',
    'summary' => "The rules that apply when you use the $SN website.",
    'sections' => [
        ['Accepting these terms', [
            'By using this website you agree to these Terms of Use. If you do not agree, please do not use the site.',
        ]],
        ['What this website is', [
            'This site describes who we are and how we invest, and lets you get in touch. It is general information about our business.',
            'It is not an offer of securities, not investment advice and not a recommendation. See our Important Disclosures page, which forms part of these terms.',
            'Using this site, submitting the form or exchanging emails with us does not make you a partner, an investor or a client, and creates no fiduciary or advisory relationship. Those relationships begin only through executed offering documents.',
        ]],
        ['Figures shown on the site', [
            'Any figure, stage, percentage or example shown on this site is illustrative and is there to explain how our process works. It does not represent a live deal, a track record or a projection of returns unless expressly identified as such and accompanied by the corresponding disclosures.',
        ]],
        ['Eligibility', [
            'The site is intended for adults who are legally able to enter into contracts, and for information purposes only. Access from a jurisdiction where the content would be unlawful is prohibited.',
        ]],
        ['Acceptable use', [
            'You agree not to:',
            ['Use the site for anything unlawful', 'Try to gain unauthorized access to the site, its server or its data', 'Interfere with the site, overload it, or scrape it with automated tools', 'Submit false information, spam or malicious content through our forms', 'Copy, reuse or republish our content or branding without written permission', 'Present yourself as affiliated with, or authorized to speak for, the partnership'],
        ]],
        ['Intellectual property', [
            "The content of this site, including text, layout, graphics and the $SN name and logo, belongs to $C or is used with permission. You may view and print pages for your own use. Any other use requires our written consent.",
        ]],
        ['Third-party links', [
            'We may link to other websites for convenience. We do not endorse them and we are not responsible for their content, products or practices.',
        ]],
        ['Disclaimer of warranties', [
            'The site is provided "as is" and "as available". To the fullest extent permitted by law, we disclaim all warranties, express or implied, including merchantability, fitness for a particular purpose and non-infringement. We do not warrant that the site will be uninterrupted, error-free, complete or current.',
        ]],
        ['Limitation of liability', [
            "To the fullest extent permitted by law, $C and its partners, officers, employees and affiliates will not be liable for any indirect, incidental, special, consequential or punitive damages arising out of your use of this website, or for any loss of profits, revenue or data, even if we were advised such damages were possible. Our total liability arising from your use of the website will not exceed one hundred US dollars (US\$100).",
            'Nothing in these terms limits any liability that cannot be limited under applicable securities law.',
        ]],
        ['Indemnification', [
            "You agree to indemnify and hold harmless $C from any claim, loss or expense, including reasonable attorneys' fees, arising from your misuse of the site or your breach of these terms.",
        ]],
        ['Governing law', [
            "These terms are governed by the laws of the State of $ST, without regard to its conflict-of-law rules. Any dispute will be brought exclusively in the state or federal courts located in $ST, and you consent to their jurisdiction.",
        ]],
        ['Changes', [
            'We may revise these terms at any time. The version posted here is the one that applies, and continuing to use the site after a change means you accept it.',
        ]],
        ['Contact', [
            "Questions about these terms? Email $LE or write to $C, $AD.",
        ]],
    ],
],

'cookies' => [
    'title'   => 'Cookie Policy',
    'summary' => 'What this site stores in your browser, and how to control it.',
    'sections' => [
        ['What cookies are', [
            'A cookie is a small text file a website asks your browser to store. Similar technologies include local storage and pixels. They are used to remember preferences, keep sessions open or measure how a site is used.',
        ]],
        ['What this site uses', [
            'This website is deliberately light. As published, it does not set advertising or tracking cookies, and it does not run a third-party analytics tool.',
            'The only cookies that may be set are strictly necessary ones created by the web server or a security layer to serve pages correctly and protect the site against abuse. They do not identify you personally and they are not used for marketing.',
            'Your browser will also cache static files such as images, fonts and stylesheets. That is standard caching, not tracking.',
        ]],
        ['Third-party requests', [
            'Typefaces are loaded from Google Fonts, so your browser makes a request to Google servers when a page opens. That request carries your IP address and standard headers. It does not place an advertising cookie from us.',
        ]],
        ['If that changes', [
            'If we add analytics, remarketing or embedded third-party content that sets cookies, we will update this page and add a consent banner where the law requires one, before those cookies are set. For a private offering, tracking pixels also carry regulatory implications, so any change here is reviewed with counsel first.',
        ]],
        ['How to control cookies', [
            'You can block or delete cookies from your browser settings:',
            ['Chrome: Settings → Privacy and security → Third-party cookies', 'Safari: Settings → Privacy', 'Firefox: Settings → Privacy & Security', 'Edge: Settings → Cookies and site permissions'],
            'Blocking strictly necessary cookies may break parts of the site.',
        ]],
        ['Contact', [
            "Questions about cookies? Email $LE.",
        ]],
    ],
],

'accessibility' => [
    'title'   => 'Accessibility Statement',
    'summary' => "How $SN works to keep this website usable by everyone.",
    'sections' => [
        ['Our commitment', [
            'We want this site to be usable by as many people as possible, including people who use screen readers, keyboard navigation, magnification or reduced-motion settings.',
        ]],
        ['The standard we aim for', [
            'We aim to conform to the Web Content Accessibility Guidelines (WCAG) 2.1 at Level AA. Conformance is an ongoing effort, not a one-time certification.',
        ]],
        ['What we have done', [
            ['Semantic HTML with real headings, lists and landmark regions', 'A "skip to content" link at the top of every page', 'Full keyboard operation, including the navigation menu, tabs and accordions, which work without JavaScript', 'Visible focus outlines on links, buttons and form fields', 'Form fields with associated labels and clear error messages', 'Text and interface colors chosen for contrast against the black background', 'Layouts that reflow down to small screens without horizontal scrolling', 'Animation that is disabled automatically when your system requests reduced motion', 'Alternative text on meaningful images'],
        ]],
        ['Known limitations', [
            'We are aware of the following and are working on them:',
            ['Some decorative background patterns are rendered with CSS and are not described to assistive technology, by design', 'Documents we link to, such as the brand manual PDF or any offering materials, may not be fully tagged for accessibility', 'Third-party content added later, such as an investor portal or a scheduling widget, may not meet the same standard'],
        ]],
        ['Tell us if something does not work', [
            "If you hit a barrier on this site, email $LE with the page address and a short description of the problem. We will reply and tell you what we can do. If you need information from the site in another format, ask and we will provide it another way.",
        ]],
    ],
],

];
