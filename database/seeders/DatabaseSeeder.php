<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call(PocionesSedder::class); // Seeder de pociones
        $this->call(RecetasSedder::class); // Seeder de recetas
        $this->call(UserTest::class); // Seeder de usuarios
    }
}
