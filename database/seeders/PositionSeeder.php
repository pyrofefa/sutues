<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PositionSeeder extends Seeder
{
    public function run()
    {
        DB::table('position')->insert([
            [
                'id' => 1,
                'description' => 'Secretaría General',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'description' => 'Suplente Sría. General',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'description' => 'Secretaría de Organización',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'description' => 'Suplente Sría. de Organización',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'description' => 'Secretaría de Comunicación, Prensa y Propaganda',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'description' => 'Suplente Sría. de Comunicación, Prensa y Propaganda',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'description' => 'Secretaría de Conflictos del Trabajo',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'description' => 'Suplente de Sría. de Conflictos del Trabajo',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'description' => 'Secretaría de Finanzas',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'description' => 'Suplente Sría. de Finanzas',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'description' => 'Secretaría de Vinculación Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'description' => 'Suplente Sría. de Vinculación Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'description' => 'Secretaría de Actas y Acuerdos (y Archivo)',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 14,
                'description' => 'Suplente Sría. de Actas y Acuerdos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 15,
                'description' => 'Secretaria de Cultura, Deporte y Formación Sindical',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 16,
                'description' => 'Suplente Sría. de Cultura, Deporte y Formación Sindical',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 17,
                'description' => 'Secretaria de Acción y Previsión Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 18,
                'description' => 'Suplente Sría. de Acción y Previsión Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 19,
                'description' => 'Secretaria de Equidad, Género y Derechos Humanos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 20,
                'description' => 'Suplente Sría. de Equidad, Genero y Derechos Humanos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 21,
                'description' => 'Secretaría de Pensionados y Jubilados',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 22,
                'description' => 'Suplente Sría. de Pensionados y Jubilados',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 23,
                'description' => 'Secretaría de la Contraloría',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 24,
                'description' => 'Suplente Secretaría de la Contraloría',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}
