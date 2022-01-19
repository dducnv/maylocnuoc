<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create(
             [
                 'name' => "Admin",
                 'email' => "admin@gmail.com",
                 'role' => "ADMIN",
                 'email_verified_at' => now(),
                 'password' => 'admin@123', // password
                 'remember_token' => Str::random(10),
             ]
         );
    }
}
