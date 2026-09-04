# M&D Realty Investments LP — sitio web

Sitio en PHP plano (sin framework, sin build), misma estructura que
[M&D Buildings LLC](https://github.com/Sell-U-app/M-DLLC), su marca hermana.
Corre igual en Railway (Docker) y en un hosting compartido tipo NameCheap.

## Estructura

```
index.php        Home: hero + ciclo de operación, estrategias, tabs LP/GP, proceso, portafolio, vehículos, FAQ
estrategia.php   Las 6 tesis en detalle, filtro de entrada y sección de riesgos
portafolio.php   Tipos de operación + nota de que no es historial de resultados
contacto.php     Formulario para inversionistas (mail() + respaldo CSV)
inc/config.php   ÚNICO archivo a editar: textos, colores, contacto, listas, aviso legal
inc/head.php     <head>, design-system CSS, topbar y navegación
inc/footer.php   Footer con aviso legal, animaciones y botón de WhatsApp
inc/mailer.php   Validación, honeypot, envío y log de leads
uploads/         Logos y favicon (del kit de marca)
docs/            Manual de marca en PDF
storage/         leads.csv (se crea solo, ignorado por git)
```

## Marca

Del manual (`docs/manual-de-marca.pdf`):

| Color | Hex | Uso |
|---|---|---|
| Negro | `#101010` | Fondo dominante |
| Magenta capital | `#D4145A` | Acento, nunca más del 20% |
| Hueso | `#F5F2EE` | Texto |
| Blanco | `#FFFFFF` | Texto sobre magenta |

Tipografía Montserrat (headings) + Inter (cuerpo). El sitio usa el logo
horizontal en escritorio y el principal en móvil, ambos en su versión blanca
sobre fondo negro, como indica el manual. El magenta se limita a botones,
acentos y barras del símbolo.

## Aviso legal — importante

Es un sitio de una **Limited Partnership de inversión**. Deliberadamente **no
incluye cifras de rentabilidad, capital administrado ni historial de
resultados**, porque afirmar eso sin cifras auditadas y revisión legal es un
riesgo regulatorio real (SEC / Reg D).

Antes de publicar, revisa con el abogado:

- El aviso legal de `$SITE['disclaimer']` en `inc/config.php`.
- Si la LP puede promocionarse públicamente o si la oferta es privada
  (Reg D 506(b) vs 506(c) cambian lo que se puede decir en una web abierta).
- Los requisitos de inversionista acreditado que menciones en el FAQ.
- `$STATS` en `inc/config.php` describe el marco de la sociedad, no
  rendimientos. Si vas a poner cifras, que sean auditadas.

## Editar el contenido

Todo vive en `inc/config.php`: `$SITE`, `$THEME`, `$ESTRATEGIAS`, `$TABS`,
`$PROCESO`, `$STATS`, `$PORTAFOLIO`, `$VEHICULOS`, `$DIFERENCIADORES`, `$FAQ`.

**Pendiente antes de publicar:** teléfono, email, WhatsApp, dirección y estado
de registro de la LP (hoy son placeholders `000`), y los tickets mínimos de
`$VEHICULOS`.

## Fotos

Las áreas de imagen usan un patrón CSS (`.blueprint`). Para poner fotos reales,
súbelas a `uploads/` y cambia `<div class="im blueprint">` por
`<img src="uploads/mi-foto.jpg" alt="...">`.

## Correr en local

```bash
php -S localhost:8000
```

## Deploy en Railway

Trae `Dockerfile` y `railway.json`. New Project → Deploy from GitHub repo.

Apache escucha en `$PORT`. El `CMD` desactiva `mpm_event`/`mpm_worker` **en
runtime**: la imagen `php:*-apache` arranca en Railway con dos MPM cargados y
Apache aborta con `More than one MPM loaded` si no se corrige ahí.

> `mail()` no funciona en el contenedor. El formulario guarda cada lead en
> `storage/leads.csv`. Para recibir correos hay que conectar un SMTP (Resend,
> Brevo, SendGrid). El disco del contenedor es efímero: si vas a depender del
> CSV, monta un volumen en `/var/www/html/storage`.

## Deploy en NameCheap

Sube el contenido de la carpeta (sin `Dockerfile`, `railway.json`,
`.dockerignore`) a `public_html/`. Carpetas 755, archivos 644.
