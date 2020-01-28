<?php

use Illuminate\Database\Seeder;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('marcas')->insert([
            'nombre'=>'Seat',
            'pais'=>'España'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Renault',
            'pais'=>'Francia'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'VolksWagen',
            'pais'=>'Alemania'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Citroen',
            'pais'=>'Francia'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Fiat',
            'pais'=>'Italia'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Opel',
            'pais'=>'Alemania'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Ford',
            'pais'=>'USA'
        ]);
        DB::table('marcas')->insert([
            'nombre'=>'Toyota',
            'pais'=>'Japon'
        ]);
    }
}
