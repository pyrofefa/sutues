<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public function run()
    {
       DB::table('positions')->insert([
            [
                'id' => 1,
                'name' => 'Secretaría General',
            ],
            [
                'id' => 2,
                'name' => 'Suplente Sría. General',
            ],
            [
                'id' => 3,
                'name' => 'Secretaría de Organización',
            ],
            [
                'id' => 4,
                'name' => 'Suplente Sría. de Organización',
            ],
            [
                'id' => 5,
                'name' => 'Secretaría de Comunicación, Prensa y Propaganda',
            ],
            [
                'id' => 6,
                'name' => 'Suplente Sría. de Comunicación, Prensa y Propaganda',
            ],
            [
                'id' => 7,
                'name' => 'Secretaría de Conflictos del Trabajo',
            ],
            [
                'id' => 8,
                'name' => 'Suplente de Sría. de Conflictos del Trabajo',
            ],
            [
                'id' => 9,
                'name' => 'Secretaría de Finanzas',
            ],
            [
                'id' => 10,
                'name' => 'Suplente Sría. de Finanzas',
            ],
            [
                'id' => 11,
                'name' => 'Secretaría de Vinculación Social',
            ],
            [
                'id' => 12,
                'name' => 'Suplente Sría. de Vinculación Social',
            ],
            [
                'id' => 13,
                'name' => 'Secretaría de Actas y Acuerdos (y Archivo)',
            ],
            [
                'id' => 14,
                'name' => 'Suplente Sría. de Actas y Acuerdos',
            ],
            [
                'id' => 15,
                'name' => 'Secretaria de Cultura, Deporte y Formación Sindical',
            ],
            [
                'id' => 16,
                'name' => 'Suplente Sría. de Cultura, Deporte y Formación Sindical',
            ],
            [
                'id' => 17,
                'name' => 'Secretaria de Acción y Previsión Social',
            ],
            [
                'id' => 18,
                'name' => 'Suplente Sría. de Acción y Previsión Social',
            ],
            [
                'id' => 19,
                'name' => 'Secretaria de Equidad, Género y Derechos Humanos',
            ],
            [
                'id' => 20,
                'name' => 'Suplente Sría. de Equidad, Genero y Derechos Humanos',
            ],
            [
                'id' => 21,
                'name' => 'Secretaría de Pensionados y Jubilados',
            ],
            [
                'id' => 22,
                'name' => 'Suplente Sría. de Pensionados y Jubilados',
            ],
            [
                'id' => 23,
                'name' => 'Secretaría de la Contraloría',
            ],
            [
                'id' => 24,
                'name' => 'Suplente Secretaría de la Contraloría',
            ],
            [
                'id' => 25,
                'name' => 'Presidente',
            ],
            [
                'id' => 26,
                'name' => 'Suplente Presidente',
            ],
            [
                'id' => 27,
                'name' => 'Secretario',
            ],
            [
                'id' => 28,
                'name' => 'Suplente Secretario',
            ],
            [
                'id' => 29,
                'name' => 'Vocal',
            ],
            [
                'id' => 30,
                'name' => 'Suplente Vocal',
            ],
            [
                'id' => 31,
                'name' => 'Delegado UA Hermosillo',
            ],
            [
                'id' => 32,
                'name' => 'Delegado UA San Luis Río',
            ],
            [
                'id' => 33,
                'name' => 'Delegado UA Navojoa',
            ],
            [
                'id' => 34,
                'name' => 'Delegado Rectoría',
            ],
            [
                'id' => 35,
                'name' => 'Delegado UA Magdalena',
            ],
            [
                'id' => 36,
                'name' => 'Delegado UA Benito Juárez',
            ],
        ]);
    }
}
