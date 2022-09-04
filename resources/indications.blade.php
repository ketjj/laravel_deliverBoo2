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

6. WEB.PHP --> change route('guest.welcome')
    + change all layouts.app into layouts.admin + 
    npm run dev for Bootstrap

7. separate completly admin&guest parts with CSS and JS 
  
   A. resources->js: create 2 files: admin.js & front.js
      resources->sass: create 2 folder ADmin(with style.scss inside) & front(with style.scss inside)
   
   B. WEBPAC.MIX.JS ----> will create 2 separate folders for each in public
      mix.js('resources/js/admin.js', 'public/js')
        .js('resources/js/front.js', 'public/js')
        .sass('resources/sass/admin/style.scss', 'public/css/admin')
        .sass('resources/sass/front/style.scss', 'public/css/front')
        .options({
          processCssUrl: false
        });

  ---> than: npm run dev + npm run watch
8. create Tables:

   [php artisan make:migration create_name_table] or create model and migration together
   php artisan make:model Model -m

   in case of go back: php artisan migrate:refresh /fresh
                       php artisan migrate:rollback 
