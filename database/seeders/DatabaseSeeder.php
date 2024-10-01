<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;-
use Hash;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => env('HMS_name', "hms.admin"),
            'email' => env('HMS_email', "hms@admin.com"),
            'password' => Hash::make(env('HMS_password', "password")),
        ]);
    }
}
