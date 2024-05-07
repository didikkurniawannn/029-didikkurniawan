<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            RefRolesTableSeeder::class,
            DistrictSeeder::class,
            RegencieSeeder::class,
            VillageSeeder::class,
            ProvinceSeeder::class,
            RefSettingSeeder::class,
        ]);
    }
}
