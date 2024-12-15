<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 52; $i++) {
            User::create([
                "name" => "Stand {$i}",
                "email" => "stand{$i}@gmail.com",
                "password" => bcrypt("123123"),
                "role" => "stand",
            ]);
        }
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("123123"),
            "role" => "admin",
        ]);

        $this->call([
            MasterSeeder::class,
        ]);
    }
}
