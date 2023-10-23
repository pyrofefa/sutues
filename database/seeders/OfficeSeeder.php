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
                'name' => 'Comité Ejecutivo Sindical',
            ],
            [
                'id' => 2,
                'name' => 'Comisión de Vigilancia',
            ],
            [
                'id' => 3,
                'name' => 'Comisión de Honor y Justicia',
            ],
            [
                'id' => 4,
                'name' => 'Delegaciones Sindicales',
            ],
        ]);
    }
}
