<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::truncate();
        Admin::create([
            'name' => "Admin Aplikasi",
            'level' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'remember_token' => Str::random(60),
        ]);
    }
}
