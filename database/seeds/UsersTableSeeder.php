<?php

use Illuminate\Database\Seeder;
use App\User ; 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'hanan asyrawi', 
            'email' => 'hasyrawi@gmail.com',
            'password' => bcrypt('rahasia'),
            'role' => 'admin'
        ]);
        User::create([
            'name' => 'nirma', 
            'email' => 'nirma@gmail.com',
            'password' => bcrypt('rahasia'),
            'role' => 'user'
        ]);
    }
}
