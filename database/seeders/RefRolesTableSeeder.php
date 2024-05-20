<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RefRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ref_roles')->insert([
            [
                'role' => 'Superadmin',
                'alias' => 'superadmin',
                'is_active' => 1,
                'created_at' => Carbon::createFromFormat('d/m/Y H:i:s', '19/5/2024 14:13:56'),
                'created_id' => 1,
                'updated_at' => null,
                'updated_id' => null,
                'deleted_at' => null,
                'deleted_id' => null,
                'is_delete' => 0
            ],
            [
                'role' => 'Instansi',
                'alias' => 'instansi',
                'is_active' => 1,
                'created_at' => Carbon::createFromFormat('d/m/Y H:i:s', '19/5/2024 14:13:56'),
                'created_id' => 2,
                'updated_at' => null,
                'updated_id' => null,
                'deleted_at' => null,
                'deleted_id' => null,
                'is_delete' => 0
            ],
            [
                'role' => 'Peserta',
                'alias' => 'peserta',
                'is_active' => 1,
                'created_at' => Carbon::createFromFormat('d/m/Y H:i:s', '19/5/2024 14:13:56'),
                'created_id' => 2,
                'updated_at' => null,
                'updated_id' => null,
                'deleted_at' => null,
                'deleted_id' => null,
                'is_delete' => 0
            ]
        ]);
    }
}
