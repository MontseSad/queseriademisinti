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

        /*DB::table('productos')->insert([
            'nombre' => str_random(20),
            'receta' => 'Ingredientes: '.str_random(25).'<br> Preparación'.str_random(110),
            'descripcion' => str_random(110),
            'precio_in' => double_random(100),
            'precio_out' => double_random(300),
        ]);*/
    }
}
