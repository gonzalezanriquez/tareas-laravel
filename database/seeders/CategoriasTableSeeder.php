<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasTableSeeder extends Seeder
{
    public function run()
    {
        $categorias = [
            [
                'nombre' => 'Acción',
                'descripcion' => 'Emocionantes combates y aventuras llenas de acción y adrenalina.'
            ],
            [
                'nombre' => 'RPG',
                'descripcion' => 'Sumérgete en mundos de fantasía y vive aventuras épicas con personajes personalizables y una narrativa profunda.'
            ],
            [
                'nombre' => 'Lucha',
                'descripcion' => 'Enfréntate a oponentes en intensos combates cuerpo a cuerpo y demuestra tus habilidades marciales.'
            ],
            [
                'nombre' => 'Battle Royale',
                'descripcion' => 'Lucha por ser el último sobreviviente en un mapa amplio y hostil, recolecta recursos y elimina a tus oponentes.'
            ],
            [
                'nombre' => 'Shooter',
                'descripcion' => 'Sumérgete en frenéticas batallas de disparos en primera o tercera persona con una amplia variedad de armas y modos de juego.'
            ],
            [
                'nombre' => 'Survival',
                'descripcion' => 'Supera desafíos extremos de supervivencia en entornos hostiles, lucha contra peligros naturales y enemigos para mantenerte con vida.'
            ],
            [
                'nombre' => 'Aventura',
                'descripcion' => 'Explora mundos vastos y misteriosos, resuelve acertijos y vive emocionantes historias en tus propias aventuras.'
            ],
            [
                'nombre' => 'Simulacion',
                'descripcion' => 'Competencias virtuales realistas con vehículos, circuitos y emocionantes desafíos.'
            ],
        ];

        foreach ($categorias as $categoria) {
            DB::table('categorias')->insert([
                'nombre' => $categoria['nombre'],
                'descripcion' => $categoria['descripcion'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}