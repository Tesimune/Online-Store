About online-store
Mimash is an online superstore with different features and functionalitie

Installation Steps
git clone https://github.com/tesimune/online-store.git
cd online-store
composer install
npm install
cp .env.example .env
php artisan key:generate
create a database with preferred name default is 'online-store',
php artisan migrate
php artisan serve
