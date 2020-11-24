<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            "Name" => "Test",
            "Password" => '$2y$10$GYLDDxPjjQdexe1TJRFMZO3stafJWhVIvQE0BgjyZthB2QOgg9P42',
            "Gender" => 0,
            "Email" => "admin@gmail.com"
        ]);
    }
}
