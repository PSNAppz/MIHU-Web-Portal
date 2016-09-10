#MIHU Web application

## Setting Up Local Env

1. Clone this Repo
2. Make sure you have php and composer installed in your system.
3. cd to the main folder of the repo.
4. Type `composer install`
5. Type `chmod -R 777 bootstrap/cache`
6. Type `cp .env.example .env`
7. Type `php artisan key:generate`
8. Start mysql `service mysql start`
9. Type `php artisan migrate`
10. To see the webpage type `php artisan serve`
11. Goto `localhost:8000`
