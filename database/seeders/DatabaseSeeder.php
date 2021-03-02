<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
// use Database\Seeders\ArtikelSeeder;

//use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call('UsersTableSeeder'); contoh
        $this->call([
            ArtikelSeeder::class,
            KategoriSeeder::class
            ]);
    }
}
