<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
            ],
            [
                'name' => 'Petugas User',
                'email' => 'petugas@example.com',
                'password' => Hash::make('password'),
                'role' => 'petugas',
            ],
            [
                'name' => 'Arya Putra',
                'email' => 'arya11@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
            ],
            [
                'name' => 'Kemal Gafan',
                'email' => 'kemal@gmail.com',
                'password' => Hash::make('darma12'),
                'role' => 'user',
            ],
            [
                'name' => 'Raynor Qodama',
                'email' => 'raynor@gmail.com',
                'password' => Hash::make('qodama12'),
                'role' => 'user',
            ],
            [
                'name' => 'Eryana Yusuf',
                'email' => 'eryana@gmail.com',
                'password' => Hash::make('eryana12'),
                'role' => 'user',
            ],
            [
                'name' => 'Syifa Manda',
                'email' => 'syifa@gmail.com',
                'password' => Hash::make('manda12'),
                'role' => 'user',
            ],
            [
                'name' => 'Erzy Rakha',
                'email' => 'erzy@gmail.com',
                'password' => Hash::make('erzy12'),
                'role' => 'user',
            ],
        ]);
    }
}
