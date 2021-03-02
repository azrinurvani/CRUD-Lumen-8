# Lumen PHP Framework
<!-- Step Project :
    1. Ubah konfigurasi .env (DBNAME,APP_KEY,DB_PASSWORD)
    2. Buat database dengan nama first_project dan tabel artikel
    3. Uncomment pada bagian $app->withFacades(), $app->withEloquent(),routeMidlleware, AppServiceProvider dan AuthServiceProviders di bootstrap/app.php
    4. Buat Model Artikel.php pada App/Models/
    5. Buat ArtikelController dengan memanggil model Artikel
    6. Panggil API (ArtikelController) pada routes/web.php seperti 
       $router->get('artikel/get','ArtikelController@get');
    7. Buat migrations tabel menggunakan 
       php artisan make:migration nama_tabel ==> membuat tabel
       php artisan migrate                   ==> mengeksekusi di migrations
       php artisan migrate:fresh             ==> merubah tabel yang akan di migrate (berpengaruh ke semua tabel)
    8. Buat Seeders untuk mengisi data dari lumen dengan perintah :
       php artisan make:seed nama_seeders
       dan file otomatis akan dibuat pada direktori seeders dengan nama seeder yang dibuat sebelumnya,
       dan buat logic pengisisan nilai atau data pada file seeder tersebut (ex: ArtikelSeeder)
       kemudian panggil pada DatabaseSeeders dengan perintah $this->call(nama_class_seeder::class);
       setelah itu eksekusi dengan perintah php artisan make:fresh --seed
       //CRUD series step 9 dst
       //Create
    9. Pada ArtikelController tambahkan method untuk post dengan nama add() dan tambahkan pada model variable $fillable untuk memastikan atribut yang akan di insert pada database
    10. Kemudian panggil pada routes/web.php dan uji pada postman
       //Update
    11. Tambahkan method update pada ArtikelController dan daftarkan pada routes/web.php dengan method put
    12. Uji pada postman
       //Delete
    13. Tambahkan method delete pada ArtikelController dan daftarkan pada routes/web.php dengan method delete
    14. Uji pada postman
        //upload foto
    15. Modifikasi method add() pada ArtikelController untuk upload foto
    16. Buat direktori baru di /public dengan nama uploads sehingga strukturnya menjadi public/uploads/nama_file.png.jpg
 -->
[![Build Status](https://travis-ci.org/laravel/lumen-framework.svg)](https://travis-ci.org/laravel/lumen-framework)
[![Total Downloads](https://img.shields.io/packagist/dt/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![Latest Stable Version](https://img.shields.io/packagist/v/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)
[![License](https://img.shields.io/packagist/l/laravel/framework)](https://packagist.org/packages/laravel/lumen-framework)

Laravel Lumen is a stunningly fast PHP micro-framework for building web applications with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Lumen attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as routing, database abstraction, queueing, and caching.

## Official Documentation

Documentation for the framework can be found on the [Lumen website](https://lumen.laravel.com/docs).

## Contributing

Thank you for considering contributing to Lumen! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Lumen, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Lumen framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
