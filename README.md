# M&D Realty Investments LP — website

Plain PHP site (no framework, no build step), same structure as
[M&D Buildings LLC](https://github.com/Sell-U-app/M-DLLC), its sister brand.
Runs the same on Railway (Docker) and on shared hosting such as NameCheap.
Content is in English.

## Structure

```
index.php           Home: hero, what we build, how a project runs, the group, projects, about, FAQ
strategy.php        The four segments in detail and the diligence checklist
portfolio.php       Projects. Empty state until the first properties are delivered
contact.php         Contact form: name, email, subject, message (mail() + CSV fallback)
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

The site presents the partnership by what it develops. It describes no
participation of any kind and addresses counterparties, brokers, contractors
and landowners — not investors.

Two consequences worth keeping in mind when editing:

1. Do not reintroduce the vocabulary of fundraising. `invest`, `investor`,
   `returns`, `distributions`, `ticket`, `minimum`, `subscription`,
   `offering`, `fund` and `loan` are out by design. The legal name contains
   "Realty Investments" and of course stays.
2. Do not add disclaimers about what the company is not. With no offer
   anywhere on the site, a disclaimer only draws attention to the thing it
   is trying to avoid.

Still to fill in `$SITE`: `address` and `legal_address` are placeholders, and
`$TEAM` is empty on purpose — add only verified profiles.

`disclosures.php` still exists on disk but is no longer linked from anywhere.
It is the securities disclaimer page from the previous version of the site.

The four policy pages (privacy, terms, cookies, accessibility) were left as
they were. They still carry wording from the fundraising site — Privacy
describes form fields that no longer exist, and Terms links to Important
Disclosures. They need a pass.

The Cookie Policy states the site sets no advertising or analytics cookies.
That is true as published. If you add a pixel or analytics, update that page
and add a consent banner **before** the tags go live.

## Editing content

Everything lives in `inc/config.php`: `$SITE`, `$THEME`, `$NAV`, `$LEGAL_NAV`,
`$SEGMENTS`, `$PROCESS`, `$GROUP`, `$PORTFOLIO`, `$TICKER`, `$TEAM`, `$FAQ`.

To publish the first project, add an entry to `$PORTFOLIO` as
`[title, segment, summary, status]`. Location, asset type, scope of work and
status only — never prices, margins or performance.

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
