<?php

namespace Database\Seeders;

use app\Models\User;
use Illuminate\Database\Seeder;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>'admin'
        ]);


        User::factory()->count(10)->create();
    }
}
