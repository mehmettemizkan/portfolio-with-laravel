# Mehmet Temizkan's Portfolio Page

<p>This repo contains the portfolio site I built with laravel.</p>

## Creating A Laravel Project

- <code>laravel new your-app-name</code>
    - Would you like to install a starter kit? -> Laravel Breeze
    - Which Breeze stack would you like to install? -> Blade
    - Would you like dark mode support? -> Yes
    - Which testing framework do you prefer? -> PHPUnit
    - Would you like to initialize a Git repository? -> No
    - Which database will your application use? -> MySQL
- If you see the following screen, you have achieved a problem-free installation.
    <img width="750" alt="Laravel-Breeze Successful Installation" src="https://github.com/mehmettemizkan/portfolio/assets/56386597/ffaa72e9-be5f-461c-ad01-efbb7ecc9d99">

## Removing the register part
- There will be no registration in my project. To remove the registration part, I will take the
<img width="842" alt="Ekran Resmi 2023-12-26 17 44 45" src="https://github.com/mehmettemizkan/portfolio/assets/56386597/457daf86-fbab-4990-9f42-8e8275081b97"><br>
codes from the route -> auth.php file in the main folder into the comment line.

## Create a User
- Open the database -> factories -> UserFactory.php
    - Set user's information in the definition function.
- Open the database -> seeders -> DatabaseSeeder.php
    - Write <code>User::factory(1)-> create();</code> in the run function.
- Open the terminal in project and write this: <code>php artisan db:seed</code>
- Check your users table in the database. If you see a screen like the one below, you are proceeding correctly.
<img width="1338" alt="Ekran Resmi 2023-12-26 18 15 55" src="https://github.com/mehmettemizkan/portfolio/assets/56386597/8093affc-71d2-4f1c-8e44-55c3b0771f5e">
