<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('statutes')->insert([
            [
                'id' => 1,
                'article' => 'Articulo 1',
                'content' => ' De conformidad con el Acta de Asamblea Celebrada el diez y siete del mes de Enero de mil novecientos ochenta y cinco, quedó denominada la Constitución del SINDICATO ÚNICO DE TRABAJADORES DEL CENTRO DE ESTUDIOS SUPERIORES DEL ESTADO DE SONORA. Asimismo y de conformidad con el Acta de Asamblea Ordinaria Celebradael día 23 de octubre del 2013, se determinó el cambio de razón social del Sindicato a SINDICATO ÚNICO DE TRABAJADORES DE LA UNIVERSIDAD ESTATAL DE SONORA y cuyas siglas serán SU.T.U.E.S.',
                'created_at' => '2023-10-17 03:13:08',
                'updated_at' => '2023-10-17 03:13:08',
            ],
            [
                'id' => 2,
                'article' => 'Articulo 2',
                'content' => 'El domicilio social del SINDICATO ÚNICO DE TRABAJADORES DE LA UNIVERSIDAD ESTATAL DE SONORA (SUTUES), es Ley Federal del Trabajo s/n esquina con Israel González, Colonia Apolo, en la ciudad de Hermosillo, Sonora, y su radio de acción abarcará todos los lugares del                                estado donde se encuentre una unidad administrativa de la UNIVERSIDAD ESTATAL DE SONORA.',
                'created_at' => '2023-11-22 03:28:36',
                'updated_at' => '2023-11-22 03:28:36',
            ],
        ]);
    }
}
