<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //contoh penggunaan dengan Facades
        DB::table('artikel')->insert([
            [
               'judul' => 'Update Lumen 8 Terbaru',
                'foto'  => 'cover.png',
                'isi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tortor purus, varius a mattis vel, lobortis ut lorem. Proin congue lectus quis leo lacinia suscipit.'
            ],
            [
                'judul' => 'Update Lumen 8 Terbaru',
                'foto'  => 'cover.png',
                'isi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tortor purus, varius a mattis vel, lobortis ut lorem. Proin congue lectus quis leo lacinia suscipit.'
            ],
            [
                'judul' => 'Update Laravel 8 Terbaru',
                'foto'  => 'cover2.png',
                'isi'   => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc tortor purus, varius a mattis vel, lobortis ut lorem. Proin congue lectus quis leo lacinia suscipit.'
            ]
        ]);
        
    }
}
