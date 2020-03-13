<?php

use App\Kelembagaan;
use Illuminate\Database\Seeder;

class KelembagaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kelembagaan::create([
            'nama' => 'hanan asyrawi',
            'jabatan' => 'Kepala Desa',
            'foto' => 'avatar.png',
            'kelembagaan' => 'aparat desa'
        ]);

        Kelembagaan::create([
            'nama' => 'hanan asyrawi',
            'jabatan' => 'Kepala Desa',
            'foto' => 'avatar.png',
            'kelembagaan' => 'bpd'
        ]);
    }
}
