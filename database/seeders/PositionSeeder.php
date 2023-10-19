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
                'name' => 'Secretaría General',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'Suplente Sría. General',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Secretaría de Organización',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 4,
                'name' => 'Suplente Sría. de Organización',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 5,
                'name' => 'Secretaría de Comunicación, Prensa y Propaganda',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 6,
                'name' => 'Suplente Sría. de Comunicación, Prensa y Propaganda',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 7,
                'name' => 'Secretaría de Conflictos del Trabajo',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 8,
                'name' => 'Suplente de Sría. de Conflictos del Trabajo',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 9,
                'name' => 'Secretaría de Finanzas',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 10,
                'name' => 'Suplente Sría. de Finanzas',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 11,
                'name' => 'Secretaría de Vinculación Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 12,
                'name' => 'Suplente Sría. de Vinculación Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 13,
                'name' => 'Secretaría de Actas y Acuerdos (y Archivo)',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 14,
                'name' => 'Suplente Sría. de Actas y Acuerdos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 15,
                'name' => 'Secretaria de Cultura, Deporte y Formación Sindical',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 16,
                'name' => 'Suplente Sría. de Cultura, Deporte y Formación Sindical',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 17,
                'name' => 'Secretaria de Acción y Previsión Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 18,
                'name' => 'Suplente Sría. de Acción y Previsión Social',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 19,
                'name' => 'Secretaria de Equidad, Género y Derechos Humanos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 20,
                'name' => 'Suplente Sría. de Equidad, Genero y Derechos Humanos',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 21,
                'name' => 'Secretaría de Pensionados y Jubilados',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 22,
                'name' => 'Suplente Sría. de Pensionados y Jubilados',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 23,
                'name' => 'Secretaría de la Contraloría',
                'created_at' => null,
                'updated_at' => null,
            ],
            [
                'id' => 24,
                'name' => 'Suplente Secretaría de la Contraloría',
                'created_at' => null,
                'updated_at' => null,
            ],
        ]);
    }
}