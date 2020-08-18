# Laravel Countries Seeder
Countries migration and seeder. Also available are Malaysia's states and postcodes migration and seeder.

Copy the migration and seeder files into respective folders of your laravel project.

Then run below command:
```bash
php artisan migrate

php artisan db:seed --class=CountriesSeeder

php artisan db:seed --class=StatesSeeder

php artisan db:seed --class=PostcodesSeeder
```
