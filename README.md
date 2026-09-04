# M&D Realty Investments LP — website

Plain PHP site (no framework, no build step), same structure as
[M&D Buildings LLC](https://github.com/Sell-U-app/M-DLLC), its sister brand.
Runs the same on Railway (Docker) and on shared hosting such as NameCheap.
Content is in English.

## Structure

```
index.php           Home: hero + deal cycle, strategies, LP/GP tabs, process, portfolio, vehicles, FAQ
strategy.php        The six theses in detail, entry filter and risk section
portfolio.php       Deal types, with a note that it is not a track record
contact.php         Investor inquiry form (mail() + CSV fallback)
disclosures.php     ┐
privacy.php         │ Policy pages. Each one is three lines; the content
terms.php           │ lives in inc/legal.php and is rendered by inc/legal-view.php
cookies.php         │
accessibility.php   ┘
inc/config.php      THE file to edit: copy, colors, contact details, lists, footer notice
inc/legal.php       Policy copy for all five legal pages
inc/legal-view.php  Shared renderer for policy pages (table of contents, anchors)
inc/head.php        <head>, design system, top bar and navigation
inc/footer.php      Footer with the legal notice, animations and WhatsApp button
inc/mailer.php      Validation, honeypot, mail() and lead log
uploads/            Logos and favicon from the brand kit
docs/               Brand manual (PDF)
storage/            leads.csv (created automatically, git-ignored)
```

## Brand

From `docs/brand-manual.pdf`:

| Color | Hex | Use |
|---|---|---|
| Black | `#101010` | Dominant background |
| Capital magenta | `#D4145A` | Accent, never more than 20% |
| Bone | `#F5F2EE` | Text |
| White | `#FFFFFF` | Text on magenta |

Montserrat for headings, Inter for body. The site uses the horizontal lockup
in its white-on-black version, sized by width on mobile so it never drops
below the 180 px minimum the manual requires. Magenta is limited to buttons,
accents and the logo bars.

## Legal — read this before publishing

This is the website of a **private investment partnership**. The site
deliberately carries **no return figures, no assets under management and no
track record**, because claiming those without audited numbers and counsel
review is a real regulatory exposure.

What is already in place:

- `disclosures.php` — no offer of securities, not advice, risk of loss, no
  guarantee of results, forward-looking statements, illiquidity, investor
  eligibility, the M&D Buildings LLC conflict of interest.
- A short notice in the footer of every page (`$SITE['disclaimer']`).
- Notes on the portfolio page, the vehicles section and the risk section.
- The contact form states that it creates no commitment and does not accept funds.

What **you** still have to do:

1. Have securities counsel review every legal page. These are plain-language
   templates, not legal advice.
2. Confirm with counsel whether the offering runs under **Rule 506(b) or
   506(c)**. Under 506(b), general solicitation is prohibited and even a
   public marketing site describing the offering can be a problem. This
   determines what may stay on a public URL at all.
3. Fill in the `$SITE` legal keys:

| Key | What it is |
|---|---|
| `state` | State of formation and governing law (currently `Florida`) |
| `legal_address` | Full mailing address shown in the policies |
| `legal_email` | Address for privacy and legal requests |
| `legal_updated` | "Last updated" date on every policy page |

The Cookie Policy states the site sets no advertising or analytics cookies.
That is true as published. If you add a pixel or analytics, update that page
and add a consent banner **before** the tags go live.

## Editing content

Everything lives in `inc/config.php`: `$SITE`, `$THEME`, `$NAV`, `$LEGAL_NAV`,
`$STRATEGIES`, `$TABS`, `$PROCESS`, `$STATS`, `$PORTFOLIO`, `$VEHICLES`,
`$DIFFERENTIATORS`, `$FAQ`.

**Still pending:** phone, email, WhatsApp, address and the minimum tickets in
`$VEHICLES` are placeholders.

## Photos

Image areas use a CSS pattern (`.blueprint`). For real photos, drop them in
`uploads/` and replace `<div class="im blueprint">` with
`<img src="uploads/my-photo.jpg" alt="...">`.

## Run locally

```bash
php -S localhost:8000
```

## Deploy on Railway

Ships `Dockerfile` and `railway.json`. New Project → Deploy from GitHub repo.

Apache listens on `$PORT`. The `CMD` disables `mpm_event`/`mpm_worker` **at
runtime**: on Railway the `php:*-apache` image starts with two MPMs loaded and
Apache aborts with `More than one MPM loaded` if this is not fixed there.

> `mail()` does not work inside the container. The form stores every lead in
> `storage/leads.csv`. To actually receive email, connect an SMTP provider
> (Resend, Brevo, SendGrid). Container storage is ephemeral: if you rely on
> the CSV, mount a volume at `/var/www/html/storage`.

## Deploy on NameCheap

Upload the folder contents (minus `Dockerfile`, `railway.json`,
`.dockerignore`) to `public_html/`. Directories 755, files 644.
