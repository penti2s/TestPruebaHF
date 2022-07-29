<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PocionesSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pociones')->insert([
            'nombre' => 'Pocion de Amor',
        ]);        
        DB::table('pociones')->insert([
            'nombre' => 'Pocion Alisadora',
        ]);        
        DB::table('pociones')->insert([
            'nombre' => 'Pocion multijugos',
        ]);
    }
}
