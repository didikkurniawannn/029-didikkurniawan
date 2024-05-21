<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RefRoleChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [2, 2, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [3, 3, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [4, 4, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [5, 5, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [6, 6, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [7, 7, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [8, 8, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [9, 9, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [10, 10, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [11, 11, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [12, 13, 1, 1, 1, 1, 1, 1, 1, 1, 0],
            [13, 12, 1, 1, 1, 1, 1, 1, 1, 1, 0],
        ];

        foreach ($data as $item) {
            DB::table('ref_role_child')->insert([
                'id' => $item[0],
                'menu_id' => $item[1],
                'role_id' => $item[2],
                'view' => $item[3],
                'create' => $item[4],
                'update' => $item[5],
                'delete' => $item[6],
                'print' => $item[7],
                'export' => $item[8],
                'is_active' => $item[9],
                'is_delete' => $item[10],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
