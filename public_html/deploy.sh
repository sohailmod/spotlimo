echo "Installing packages from composer...";
composer install;

echo "Installing npm packages...";
npm install;

# echo "Generating storage link...";
# php artisan storage:link;

echo "Run migrations...";
php artisan migrate

echo "Running Seeders..."
php artisan db:seed

echo "Compiling assets...";
npm run dev;


