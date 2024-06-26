<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mapels')->insert([
            'nama_mapel' => 'Biologi',
            'jurusan_id' => 1,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Fisika',
            'jurusan_id' => 1,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Kimia',
            'jurusan_id' => 1,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Ekonomi',
            'jurusan_id' => 2,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Geografi',
            'jurusan_id' => 2,
        ]);

        DB::table('mapels')->insert([
            'nama_mapel' => 'Sejarah',
            'jurusan_id' => 2,
        ]);
    }
}
