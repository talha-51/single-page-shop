# single-page-shop

Requirements:

PHP version- ^8.2
Laravel version- ^12.0
composer
phpMyAdmin

To Run The Project:

1. Start Apache and MySQL in XAMPP.
2. Create a DB named 'test' in phpMyAdmin and inside it, import the 'test.sql' file from the folder 'DB'.
3. Clone the project (git clone https://github.com/talha-51/single-page-shop).
4. Go inside the project folder (single-page-shop) and run the following commands (one by one) in git bash / cmd:
    1. composer install
    2. cp .env.example .env [rename (.env.example) to (.env) if you face any error with the command.]
    3. Go inside the .env file and change the DB name to 'test'.
    4. php artisan key:generate
    5. php artisan serve
