<?php
namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CreateTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('types')->insert([
            'name' => 'Noticia',
        ]);
        DB::table('types')->insert([
            'name' => 'Convocatoria',
        ]);
        DB::table('types')->insert([
            'name' => 'Documento',
        ]);
    }
}
