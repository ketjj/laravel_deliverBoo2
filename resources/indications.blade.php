1. install:

  composer require laravel/ui:^2.4
  php artisan ui vue --auth

2. Insert DB file-name into .env file:

  DB_DATABASE=db_name
  DB_USERNAME=root
  DB_PASSWORD=root   

3. install npm:

  npm i 

4. php artisan migrate ---> 4 auto migration of laravel tables
5. separate Admin & Guest pasrts: 
  resources->views-> create 2 folders Admin and Guest

  HOME.BLADE.PHP put into ADMIN folder
  WELCOME.BLADE.PHP put into GUEST folder (get empty, than -> !)
  
  + rename LAYOUTS/APP.BLADE.PHP into ADMIN.BLADE