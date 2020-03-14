<?php

use Illuminate\Database\Seeder;
use App\Bumdes;
class BumdesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bumdes::create([
            'deskripsi' => 'Warung',
            'foto' => 'logo.png',
        ]);
        Bumdes::create([
            'deskripsi' => 'Sablon Baju',
            'foto' => 'logo.png',
        ]);
        Bumdes::create([
            'deskripsi' => 'Sewa Tenda',
            'foto' => 'logo.png',
        ]);
    }
}
