### Test project
1. Clone repository.
2. `composer install`
3. `cp .env.example .env`
4. `php artisan key:generate`
5. Configure database connection in .env file
6. Set APP_URL in .env file
7. `php artisan migrate --seed`
8. `php artisan serve`