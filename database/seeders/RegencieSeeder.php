<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regencies;
use Illuminate\Support\Facades\File;

class RegencieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/addr_regencies.json");
        $regencies = json_decode($json);

        foreach ($regencies as $regency) {
            Regencies::create([
                'id' => $regency->id,
                'province_id' => $regency->province_id,
                'name' => $regency->name
            ]);
        }
    }
}
