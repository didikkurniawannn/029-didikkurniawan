<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class RefInstansiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_instansi')->insert([
            [
                'id' => 1,
                'name' => 'Diskominfo',
                'leader' => 'Yosep',
                'address' => 'soreang',
                'email' => 'diskominfo@bandungkab.go.id',
                'website' => 'diskominfo.bandungkab.go.id',
                'no_telp' => '082130314252',
                'status' => 1,
                'type' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
