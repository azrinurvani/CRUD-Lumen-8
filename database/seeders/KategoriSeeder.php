<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('kategori')->insert([
            [
                'nama_kategori' => 'Teknologi Informasi',
                'icon'          => 'tech.ico',
                'cover'         => 'tech.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'nama_kategori' => 'Teknologi Science',
                'icon'          => 'tech2.ico',
                'cover'         => 'tech2.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ],
            [
                'nama_kategori' => 'Teknologi Kesehatan',
                'icon'          => 'tech3.ico',
                'cover'         => 'tech3.png',
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s')
            ]
        ]);
    }
}
