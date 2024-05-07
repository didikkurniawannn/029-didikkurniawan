<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Villages;
use Illuminate\Support\Facades\File;

class VillageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = File::get("database/data/addr_villages.json");
        $villages = json_decode($json);

        foreach ($villages as $village) {
            Villages::create([
                'id' => $village->id,
                'district_id' => $village->district_id,
                'name' => $village->name
            ]);
        }
    }
}
