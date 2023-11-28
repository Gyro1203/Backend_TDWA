<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Perro;

class PerrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $perro = new Perro();
            $perro->nombre = 'Firulais';
            $perro->url_imagen = 'https://i.pinimg.com/originals/0f/6e/9e/0f6e9e2b6b5b6b5b6b5b6b5b6b5b6b5b.jpg';
            $perro->descripcion = 'eeeeeeeeeee soy el sans';
            $perro->save();
        
         $perro2 = new Perro();
            $perro2->nombre = 'Etesech';
            $perro2->url_imagen = 'https://i.pinimg.com/originals/0f/6e/9e/0f6e9e2b6b5b6b5b6b5b6b5b6b5b6b5b.jpg';
            $perro2->descripcion = 'EL PEPE';
            $perro2->save();
    }
}
