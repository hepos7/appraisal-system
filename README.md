
## Laravel Appraisal app;

> **_NOTE:_**  to appraise employee in any month u can change month number in resources\views\appraisal\create.blade.php in line 54 and 56


## Project Setup

- 1-  you should create databse and configre your env file;

- 2-  write to create vendor folder.
> composer update;
 
- 3-  Copy .env.example to .env:
> copy .env.example .env

- 4-  Generate a key:
> php artisan key:generate

- 5-  Update DB name in your env file:

- 3- to get database tables write 
> php artisan migrate;

- 4- to get data 
> php artisan db:seed 

- 5- run the project
> php artisan serve

you can login with admin user

>admin1@admin.com	
>password

- or

>admin2@admin.com	
>password
