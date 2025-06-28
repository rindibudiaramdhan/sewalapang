# Sewalapang

## 🧰 Tech Stack

- Laravel 12
- PostgreSQL
- Filament v3.3
- PHP 8.3+
- Composer

## ✅ Requirements

Sebelum instalasi, pastikan kamu sudah memiliki:

- PHP 8.3 atau lebih baru
- Composer
- PostgreSQL
- Node.js (v18 atau lebih baru) dan NPM
- Git
- [Optional] Laravel Herd / Laravel Sail / Docker

## 📦 Cara Instalasi Lokal

### Atur konfigurasi database di .env
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=nama_database
DB_USERNAME=nama_user
DB_PASSWORD=password_user
```

```bash
git clone https://github.com/username/nama-repo.git
cd nama-repo
composer install
npm install && npm run build # (opsional)
cp .env.example .env

php artisan key:generate
php artisan migrate --seed
php artisan serve
```

- Buka browser ke:
http://localhost:8000/admin

- Jika belum ada user, jalankan `php artisan make:filament-user`
- Isi langkah-langkahnya.

## Struktur Folder Penting
```
app/Filament/: Komponen dan resource Filament
app/Http/Controllers/: Controller utama
database/migrations/: Struktur database
resources/views/: Blade views (jika ada)
resources/js/: Frontend JS/Vue (jika digunakan)
```

## Testing
```
php artisan test
```

## Lisensi
MIT

Dibuat dengan ❤️ oleh @rindibudiaramdhan