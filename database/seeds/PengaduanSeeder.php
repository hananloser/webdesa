<?php

use App\Pengaduan;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pengaduan::create([
            'no_pengaduan' => '20392329323',
            'nama' => 'hanan asyrawi' ,
            'pengaduan' => 'Ribut - Ribut' ,
            'nohp'   => '08434858343'
        ]);
        Pengaduan::create([
            'no_pengaduan' => 'CF-232323',
            'nama' => 'Dwi' ,
            'pengaduan' => 'Mabuk Mabuk Kan' ,
            'nohp'   => '08434858343'
        ]);
        Pengaduan::create([
            'no_pengaduan' => 'DF-23232323',
            'nama' => 'Eki' ,
            'pengaduan' => 'Pencabulan' ,
            'nohp'   => '08434858343'
        ]);
    }
}
