git pull origin/main
composer install
php artisan filament:optimize-clear
php artisan optimize:clear
php artisan filament:optimize
php artisan optimize
php artisan migrate