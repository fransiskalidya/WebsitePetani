<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserBaruSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'adminpetaniku',
            'name' => 'Admin2',
            'email' => 'adminpetaniku1@gmail.com',
            'password' => Hash::make('petaniku'),
        ]);
    }
}