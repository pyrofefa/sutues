<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleSeeder extends Seeder
{
    public function run()
    {
        DB::table('people')->insert([
            [
                'id' => 1,
                'first_name' => 'Martín Gonzalo',
                'last_name' => 'Morales Valdez',
            ],
            [
                'id' => 2,
                'first_name' => 'Raúl Adalberto',
                'last_name' => 'Morelos',
            ],
            [
                'id' => 3,
                'first_name' => 'Cruz Gilberto',
                'last_name' => 'García Arquieta',
            ],
            [
                'id' => 4,
                'first_name' => 'Ramón',
                'last_name' => 'Cid Lucero',
            ],
            [
                'id' => 5,
                'first_name' => 'Ramón Armando',
                'last_name' => 'Almodobar Sepúlveda',
            ],
            [
                'id' => 6,
                'first_name' => 'José Andrés',
                'last_name' => 'Alvarado Castro',
            ],
            [
                'id' => 7,
                'first_name' => 'Lidia Irene',
                'last_name' => 'León López',
            ],
            [
                'id' => 8,
                'first_name' => 'Gerardo',
                'last_name' => 'Calderón Ayala',
            ],
            [
                'id' => 9,
                'first_name' => 'Apolinar',
                'last_name' => 'Castro Esquivel',
            ],
            [
                'id' => 10,
                'first_name' => 'Perla',
                'last_name' => 'Montaño Othón',
            ],
            [
                'id' => 11,
                'first_name' => 'Hugo',
                'last_name' => 'Gavotto Nogales',
            ],
            [
                'id' => 12,
                'first_name' => 'Miguel Ángel',
                'last_name' => 'Ochoa Vásquez',
            ],
            [
                'id' => 13,
                'first_name' => 'José Antonio',
                'last_name' => 'Romero Montaño',
            ],
            [
                'id' => 14,
                'first_name' => 'Jesús María Martín',
                'last_name' => 'Terán Gastélum',
            ],
        ]);
    }
}