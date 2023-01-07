<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Lembaga extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lembagas')->insert([
            'nama' => 'Bagan Desa Cimanuk',
            'deskripsi' => 'Desa cimanuk',
            'gambar' => 'uploads/bagan/Struktur pemerintahan desa.png',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d")
        ]);

        DB::table('lembagas')->insert([
            'nama' => 'Bagan PKK',
            'deskripsi' => 'Berikut adalah struktur organigram dari Bagan PKK Desa Cimanuk',
            'gambar' => 'uploads/bagan/STRUKTUR PKK.png',
            'created_at' => date("Y/m/d"),
            'updated_at' => date("Y/m/d")
        ]);
    }
}
