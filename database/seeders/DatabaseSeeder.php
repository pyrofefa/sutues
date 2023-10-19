<?php
namespace Database\Seeders;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Test User',
             'email' => 'test@example.com',
             'password' => Hash::make('password'),
         ]);

         $this->call(CreateTypesSeeder::class);
         $this->call(NewsSeeder::class);
         $this->call(PeopleSeeder::class);
         $this->call(SecretariesSeeder::class);
         $this->call(OfficeSeeder::class);
         $this->call(PositionSeeder::class);

    }
}
