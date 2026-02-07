# Demo Laravel Web Application

## Project Description
Aa ek simple Laravel based web application che jema Home, About, Services, Contact page ane Contact form database ma data store kare che.

## Requirements
- Ubuntu / Linux
- PHP (8.x)
- Composer
- MySQL
- Git

## Installation Steps

1. Repository clone karo
git clone https://github.com/akanksharao0102-max/demoapp.git

2. Folder ma enter
cd demoapp

3. Dependencies install
composer install

4. Environment file create
cp .env.example .env

5. App key generate
php artisan key:generate

6. Database create karo (MySQL ma)

7. .env file ma DB name, user, password set karo

8. Migration run karo
php artisan migrate

9. Server start karo
php artisan serve

10. Browser ma open
http://localhost:8000
