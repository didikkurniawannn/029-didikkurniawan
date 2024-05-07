<?php 
  $app_data = (object) [
    'app_name'      => 'SITALAS',
    'company_name'  => 'PT Jamkrida Jabar',
  ];

  $daftar_pengguna = [
    (object) [
      'username' => 'superadmin',
      'email' => 'superadmin@mail.id',
      'nama' => 'Super Administrator',
      'role' => 'Super Administrator',
    ],
    (object) [
      'username' => 'admin',
      'email' => 'admin@mail.id',
      'nama' => 'Administrator',
      'role' => 'Administrator',
    ],
    (object) [
      'username' => 'user',
      'email' => 'user@mail.id',
      'nama' => 'User',
      'role' => 'User',
    ],
  ];

  $group_role = [
    (object) [
      'nama' => 'Super Administrator',
      'alias' => 'superadmin',
    ],
    (object) [
      'nama' => 'Administrator',
      'alias' => 'admin',
    ],
    (object) [
      'nama' => 'User',
      'alias' => 'user',
    ],
  ];

  $daftar_modul = [
    (object) [
      'nama' => 'Dashboard',
      'alias' => 'dashboard',
      'url' => '/',
      'urutan' => '0',
      'icon' => 'icon-speedometer',
      'kelompok' => 'main',
    ],
    (object) [
      'nama' => 'Utilitas',
      'alias' => 'utilitas',
      'url' => '#',
      'urutan' => '99',
      'icon' => 'icon-grid',
      'kelompok' => 'utility',
    ],
    (object) [
      'nama' => '|_ Daftar Pengguna',
      'alias' => 'daftar_pengguna',
      'url' => 'app/utilitas/daftar_pengguna',
      'urutan' => '1',
      'icon' => '',
      'kelompok' => 'utility',
    ],
    (object) [
      'nama' => '|_ Group/Role',
      'alias' => 'group_role',
      'url' => 'app/utilitas/group_role',
      'urutan' => '2',
      'icon' => '',
      'kelompok' => 'utility',
    ],
    (object) [
      'nama' => '|_ Atur Otorisasi',
      'alias' => 'atur_otorisasi',
      'url' => 'app/utilitas/atur_otorisasi',
      'urutan' => '3',
      'icon' => '',
      'kelompok' => 'utility',
    ],
    (object) [
      'nama' => '|_ Daftar Modul',
      'alias' => 'daftar_modul',
      'url' => 'app/utilitas/daftar_modul',
      'urutan' => '4',
      'icon' => '',
      'kelompok' => 'utility',
    ],
    (object) [
      'nama' => '|_ Setting Situs',
      'alias' => 'setting_situr',
      'url' => 'app/utilitas/setting_situs',
      'urutan' => '99',
      'icon' => '',
      'kelompok' => 'utility',
    ],
  ];
?>