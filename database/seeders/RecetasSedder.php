<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecetasSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //POCION DE AMOR
        DB::table('recetas')->insert([
            'id_pocion' => 1,
            'ingrediente' => 'Petalos',
            'cantidad' => 0.2,
            'precio' => 2000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 1,
            'ingrediente' => 'Sal de mar',
            'cantidad' => 0.1,
            'precio' => 3000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 1,
            'ingrediente' => 'Vino',
            'cantidad' => 0.4,
            'precio' => 6000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 1,
            'ingrediente' => 'Polvo Magico',
            'cantidad' => 0.3,
            'precio' => 30000,
        ]);
        //POCION ALISADORA
        DB::table('recetas')->insert([
            'id_pocion' => 2,
            'ingrediente' => 'Ceniza',
            'cantidad' => 0.3,
            'precio' => 2500,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 2,
            'ingrediente' => 'Aloe Vera',
            'cantidad' => 0.3,
            'precio' => 1500,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 2,
            'ingrediente' => 'Lagrima de Gato',
            'cantidad' => 0.1,
            'precio' => 9000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 2,
            'ingrediente' => 'Jugo Magico',
            'cantidad' => 0.3,
            'precio' => 27000,
        ]);
        //POCION MULTIJUGOS
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Sanguijuelas',
            'cantidad' => 0.2,
            'precio' => 13000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Polvo de cuerno de bicornio',
            'cantidad' => 0.1,
            'precio' => 65000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Lagrima de gato',
            'cantidad' => 0.3,
            'precio' =>  9000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Polvo Magico',
            'cantidad' => 0.2,
            'precio' => 30000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Sal de Mar',
            'cantidad' => 0.1,
            'precio' => 3000,
        ]);
        DB::table('recetas')->insert([
            'id_pocion' => 3,
            'ingrediente' => 'Ceniza',
            'cantidad' => 0.1,
            'precio' => 2500,
        ]);
    }
}
