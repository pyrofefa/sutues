<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfficeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('office')->insert([
            [
                'id' => 1,
                'description' => 'Comité Ejecutivo Sindical',
            ],
            [
                'id' => 2,
                'description' => 'Comisión de Vigilancia',
            ],
            [
                'id' => 3,
                'description' => 'Comisión de Honor y Justicia',
            ],
            [
                'id' => 4,
                'description' => 'Delegaciones Sindicales',
            ],
        ]);
    }
}
