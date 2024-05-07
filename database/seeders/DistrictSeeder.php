<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Districts;
use Illuminate\Support\Facades\File;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/addr_districts.json");
        $districts = json_decode($json);

        foreach ($districts as $district) {
            Districts::create([
                'id' => $district->id,
                'regency_id' => $district->regency_id,
                'name' => $district->name
            ]);
        }
    }
}
