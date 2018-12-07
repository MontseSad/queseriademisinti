<?php

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
        \App\Administrator::insert([
            'name' => 'Zaory Madara Uchiha Naruto Uzumaki Siniche Gogeta alias el JosePEPE',
            'email' => 'zaorylight@gmail.com',
            'password' => bcrypt('password'),
        ]);

        \App\Quesero::insert([
            'name' => 'Montse',
            'lastname' => 'Sad',
            'birth' => '01/09/1999',
            'curp' => 'mmmsad',
            'email' => 'm11@sad.com',
            'password' => bcrypt('mmmsad'),
        ]);

        \App\Insumo::insert([
            'nombre' => 'Azucar',
            'unidad' => 'Kilogramos',
            'cantidad' => 25,
            'precio_u' => 14.5,
            'precio_t' => 500.0,
        ]);

        \App\Insumo::insert([
            'nombre' => 'Sal',
            'unidad' => 'Kilogramos',
            'cantidad' => 10,
            'precio_u' => 10,
            'precio_t' => 100.0,
        ]);

        \App\Producto::insert([
            'nombre' => 'Queso Panela',
            'receta' => 'se hace asi, asi asi y asi',
            'precio_in' => 23,
            'precio_out' => 80,
            'descripcion' => 'Por kilogramo',
        ]);
    }
}
