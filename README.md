# Ibyora Beads

A small Laravel application for managing bead inventory and images.

## Quick overview
This repo contains the backend API and assets. Follow the steps below to configure the environment, run migrations, seed demo data, compile assets, and start a local server.

## Requirements
- PHP 8.x
- Composer
- MySQL or MariaDB
- Node.js & npm (optional for asset compilation)
- Web server (XAMPP, Valet, Homestead, etc.)

## Setup (additional)
1. Generate the application key.
```bash
php artisan key:generate
```
2. Run database migrations and optional seeders.
```bash
php artisan migrate
```

## Development server
Start a local development server:
```bash
php artisan serve
```

## Testing
Run the test suite:
```bash
php artisan test
```

## Troubleshooting
- Permission issues for storage: ensure the storage and bootstrap/cache folders are writable.
- If uploaded images don't appear, confirm the storage symlink exists and public files are accessible.
- Check .env values for DB connection and APP_URL when routes or file links are incorrect.

## Contributing
- Fork the repo, create a feature branch, open a pull request with a clear description and tests where applicable.

## License
Specify your project license (e.g., MIT) in this file and include a LICENSE file in the repo.

Enjoy developing!