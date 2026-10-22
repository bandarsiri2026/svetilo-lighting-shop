# Svetilo — Lighting & Electrical Goods E-Shop

A product catalogue and order-management web application for a Ukrainian lighting/electrical-goods shop (`svetilo.com.ua`), built on Laravel with the Voyager CMS so the client could manage products, categories and pages without developer involvement.

> This project shares its architecture with the Barabashova shop — it was forked from that codebase in January 2018.

## Tech stack

| Layer | Technology |
|-------|------------|
| Language | PHP `>=7.0` |
| Framework | Laravel **5.5.28** |
| CMS / admin panel | Voyager **1.x** (`tcg/voyager`) |
| Search | Laravel Scout **4.x** + Algolia (with a SQL LIKE fallback) |
| Cart | `gloudemans/shoppingcart` 2.4 (session-based) |
| Front-end | Bootstrap 4 preset, jQuery, custom CSS |
| Extras | `laravelcollective/html`, breadcrumbs, Disqus comments on product pages |
| Database | MySQL — **schema-only** export shipped as `database/schema.sql` |

## Features

- **Category → sub-category → item** hierarchy with slug-based URLs.
- **Full-text search** through Algolia via Laravel Scout; the `Item` model implements `Searchable` plus a LIKE-based `scopeSearch` fallback.
- **Session shopping cart** and an order form that emails the shop (`OrderSetting@send_form`, `app/Mail/OrderMail.php`).
- **Contact form** validated by `ContactRequest` and delivered through SwiftMailer.
- **Retail + wholesale pricing** fields per product (`price`, `priceOpt`) plus SKU codes.
- **Voyager BREAD admin** for products, categories, pages, posts, menus and translations.
- **SEO / deployment plumbing**: `.htaccess`, `web.config`, `robots.txt`, Google site verification, breadcrumbs.

## Project structure

```
app/Http/Controllers/   CatController, SubCatController, ItemController,
                        CartController, MailSetting, OrderSetting
app/Mail/               OrderMail (order e-mail rendering)
app/Models/             Item (Searchable), Category, SubCategory
resources/views/        ~25 Blade templates (catalogue, item detail, cart, contact)
public/assets/          CSS, JS, Algolia search UI
storage/app/public/     uploaded product images (dated by month)
database/schema.sql     table structure only — no row data
```

## Getting started locally

```bash
composer install              # dependencies are not committed
cp .env.example .env          # set your own DB/mail values
php artisan key:generate
mysql -u user -p db < database/schema.sql   # schema only
php artisan serve             # /admin for the Voyager panel
```

## Development timeline (evidence-based)

Dependency lock files **3–5 July 2018**, product image uploads **9–10 July 2018**, database dump **19 July 2018**; the codebase fork began **4 January 2018**. Confidence: high.

## Notes & limitations

- Only the table structure is published; the original dump with real catalogue rows and admin password hashes stays private.
- Algolia credentials were hard-coded in `public/assets/js/algolia.js`; they have been replaced with placeholders.
- Laravel 5.5 and Voyager 1.x are end-of-life — presented as legacy work.

## Screenshots

Captured locally by running the app in Docker (PHP 7.4 + MySQL 5.7), see [portfolio/local-run](https://github.com/bandarsiri2026/portfolio#run-any-project-locally).

![Home page: hero slider, promo blocks, cart widget](svetilo-home.png)

*Home page: hero slider, promo blocks, cart widget*

![Category grid rendered from the Voyager/MySQL catalogue](svetilo-categories.png)

*Category grid rendered from the Voyager/MySQL catalogue*

## License

MIT — see [LICENSE](LICENSE). The code is released under MIT; third-party assets (client product photos, fonts, brand imagery) are not covered by this license and belong to their respective owners.
