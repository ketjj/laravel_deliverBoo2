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

9.  MANY TO MANY table relations -->create a pivot table 
    A. while creating a pivot(bridge) table, like type_user(s,t,u,v,), names gonna be in alphabetical order
      or it will generate an error.

    B. u'd insert FK-s inside a table:

    [ for TYPE]
      $table->unsignedBigInteger('user_id');
      $table->foreign('user_id')
      ->references('id') ----->column of refer
      ->on('users') ----->this column will be inside this table
      ->onDelete('cascade'); ----> if i'll delete one of them, what will happen ('cascade') or ('set null')
    
      ----------------------------------------
    [for USER]
      $table->unsignedBigInteger('type_id');
      $table->foreign('type_id')
      ->references('id')
      ->on('types')
      ->onDelete('cascade');

    C. u'd create a function/methods inside a refer Models with names of relations:

     [for USER MODEL]

     public function types(){
      return $this->belongsToMany('App\Type');
      }
    ---------------------

    [for TYPE MODEL]

    public function users(){
      return $this->belongsToMany('App\User');
    }
10. ONE TO MANY ---> pass a FK from a table to another
    user(1) & dishes(n)

    php artisan make: migration update_name_table

    A. Create and Pass a user_id(fk)into dishes table
    B. down() eliminate passed Fk and than fk relation(mirroring A)