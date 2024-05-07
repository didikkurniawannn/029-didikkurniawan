<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class RefSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ref_setting')->insert([
            'name' => 'Mr - Management Rapat',
            'description' => 'Mr - Versi 1.0 - Hak Cipta © 2024 Inspektorat Kabupaten Bandung',
            'keywords' => 'Sistem Informasi yang dibuat untuk mempermudah proses Rapat yang ada di Kabupaten Bandung',
            'address' => 'Jl. Terusan Soreang-Cipatik No.97, Pamekaran, Kec. Soreang, Kabupaten Bandung, Jawa Barat 40912',
            'phone' => '(022) 0000000',
            'email' => 'diskominfo@bandungkab.go.id',
            'logo_path' => 'logo/sY0wYiU6eTjrtCR0Co6xg8NR8WtNoHD7XObsz0rg.png',
            'favicon_path' => 'favicon/Ye42cHG5Gh3ljO7scw1bUnpwZBhbsrSnUuxqyizA.png',
            'splashscreen_path' => 'splashscreen/QXSLcvJduc6qA7HjVnSMg8v8R96hpddPJrspjcc7.png',
            'logo_text_path' => 'logo_text/QLXWeVH2hszuQjWPkiIkOrsr5lCJ094m7XJIH1RR.png',
            'created_at' => '2024-03-08 17:03:15',
            'updated_at' => '2024-03-08 17:03:15',
            'is_active' => 1
        ]);
    }
}
