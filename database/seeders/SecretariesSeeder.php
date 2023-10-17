<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecretariesSeeder extends Seeder
{
    public function run()
    {
        DB::table('secretaries')->insert([
            [
                'id' => 1,
                'person_id' => 1,
                'period' => '1985-1986',
                'created_at' => '2023-10-17 00:42:07',
                'updated_at' => '2023-10-17 00:42:07',
            ],
            [
                'id' => 2,
                'person_id' => 2,
                'period' => '1986–1987',
                'created_at' => '2023-10-17 00:45:05',
                'updated_at' => '2023-10-17 00:45:05',
            ],
            [
                'id' => 3,
                'person_id' => 3,
                'period' => '1987–1989',
                'created_at' => '2023-10-17 00:45:39',
                'updated_at' => '2023-10-17 00:45:39',
            ],
            [
                'id' => 4,
                'person_id' => 4,
                'period' => '1989–1991, 1991–1993',
                'created_at' => '2023-10-17 00:46:27',
                'updated_at' => '2023-10-17 00:46:27',
            ],
            [
                'id' => 5,
                'person_id' => 5,
                'period' => '1993–1995',
                'created_at' => '2023-10-17 00:47:11',
                'updated_at' => '2023-10-17 00:47:11',
            ],
            [
                'id' => 6,
                'person_id' => 6,
                'period' => '1995–1997, 1997–1999',
                'created_at' => '2023-10-17 00:49:38',
                'updated_at' => '2023-10-17 00:49:38',
            ],
            [
                'id' => 7,
                'person_id' => 7,
                'period' => '1999–2001, 2001–2003',
                'created_at' => '2023-10-17 00:50:30',
                'updated_at' => '2023-10-17 00:50:30',
            ],
            [
                'id' => 8,
                'person_id' => 8,
                'period' => '2003–2005',
                'created_at' => '2023-10-17 00:51:20',
                'updated_at' => '2023-10-17 00:51:20',
            ],
            [
                'id' => 9,
                'person_id' => 9,
                'period' => '2005–2007',
                'created_at' => '2023-10-17 00:52:01',
                'updated_at' => '2023-10-17 00:52:01',
            ],
            [
                'id' => 10,
                'person_id' => 10,
                'period' => '2007–2009',
                'created_at' => '2023-10-17 00:52:26',
                'updated_at' => '2023-10-17 00:52:26',
            ],
            [
                'id' => 11,
                'person_id' => 11,
                'period' => '2009–2011, 2011–2013',
                'created_at' => '2023-10-17 00:53:04',
                'updated_at' => '2023-10-17 00:53:04',
            ],
            [
                'id' => 12,
                'person_id' => 12,
                'period' => '2013–2015, 2015–2019',
                'created_at' => '2023-10-17 00:53:42',
                'updated_at' => '2023-10-17 00:53:42',
            ],
            [
                'id' => 13,
                'person_id' => 13,
                'period' => '2019 – 2023',
                'created_at' => '2023-10-17 00:54:04',
                'updated_at' => '2023-10-17 00:54:04',
            ],
            [
                'id' => 14,
                'person_id' => 14,
                'period' => '2023-2027',
                'created_at' => '2023-10-17 00:56:00',
                'updated_at' => '2023-10-17 00:56:00',
            ],
        ]);
    }
}