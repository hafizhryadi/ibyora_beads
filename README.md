# Ibyora Beads (Laravel)

Small Laravel-based UMKM (micro business) application for managing handmade bead products.

This README explains how to set up, run, and test the project locally on Windows (PowerShell examples included).

---

## Requirements

-   PHP 8.x (compatible with installed Composer packages)
-   Composer
-   MySQL or MariaDB (or any DB supported by Laravel)
-   Node.js + npm / Yarn (for frontend assets if you use them)
-   XAMPP (optional) or any local web/PHP environment

## Quick setup (Windows / PowerShell)

Clone the repo and install PHP dependencies:

```powershell
cd C:\xampp\htdocs
git clone <your-repo-url> ibyora-beads
cd ibyora-beads
composer install
```

Copy the example environment file and generate an app key:

```powershell
copy .env.example .env
php artisan key:generate
```

Edit the `.env` file and set your database credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD). If you use XAMPP, default MySQL host is `127.0.0.1` and username `root` (no password unless you set one).

## Database

Run migrations to create the tables (this project includes a `products` migration):

```powershell
php artisan migrate
```

If you want to reset and re-create tables during development:

```powershell
php artisan migrate:fresh --seed
```

## Storage for uploaded images

The app stores product images under `storage/app/products` and uses the `public` storage link to serve them.
Create the public storage symlink if you haven't already:

```powershell
php artisan storage:link
```

This creates `public/storage` which maps to `storage/app/public`. The controllers in this project save files to the `products` folder within the storage disk. Ensure your `filesystems.php` disk settings match your usage.

## Frontend assets (optional)

If you want to compile frontend assets (CSS/JS) with Vite or Mix, install node dependencies and run the dev build:

```powershell
npm install
npm run dev
# or for production
npm run build
```

Note: this project currently includes Bootstrap via CDN in the Blade layout, so building assets is optional unless you want to customize styles.

## Run the app

Using the built-in server (works for development):

```powershell
php artisan serve
# opens at http://127.0.0.1:8000
```

Or use XAMPP/Apache and point the virtual host or DocumentRoot to `C:\xampp\htdocs\ibyora-beads\public`.

## Routes and UI

-   Home / landing page: `/` — a simple UMKM landing page
-   Products index: `/products` — table listing products with pagination
-   Create product: `/products/create`
-   Edit product: `/products/{id}/edit`
-   Show product detail: `/products/{id}`

The project uses resourceful controllers and named routes (e.g., `products.index`, `products.create`, `products.store`, etc.).

## Tests

This repo includes basic test scaffolding (Pest/PHPUnit). Run tests with:

```powershell
./vendor/bin/pest
# or
./vendor/bin/phpunit
```

## Common commands summary

```powershell
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
php artisan storage:link
php artisan serve
```

## Notes & tips

-   If images don't appear, confirm `php artisan storage:link` was run and the files exist under `storage/app/products`.
-   The `ProductController` in `app/Http/Controllers` handles file upload and deletion; check it if you customize storage.
-   The layout `resources/views/layouts/app.blade.php` loads Bootstrap from CDN; you can change it to use Vite or local assets.

## Contributing

1. Fork the repository
2. Create a feature branch
3. Run tests and ensure new code has tests where applicable
4. Open a pull request with a clear description

## License

This project does not include a license file by default. Add a LICENSE if you intend to open-source it.

---

If you'd like, I can also:

-   Add a sample `.env.example` with placeholder DB values
-   Add a seeded products seeder for demo data
-   Replace CDN Bootstrap with Vite integration

If you want one of those, tell me which and I will implement it.
