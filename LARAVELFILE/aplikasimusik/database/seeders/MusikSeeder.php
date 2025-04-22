<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusikSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('musiks')->insert([
            ['nama_artis' => 'Tulus', 'judul_album' => 'Manusia'],
            ['nama_artis' => 'Raisa', 'judul_album' => 'Handmade'],
            ['nama_artis' => 'Isyana', 'judul_album' => 'Lexicon'],
        ]);
    }
}
