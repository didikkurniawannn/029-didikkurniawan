<?php
use App\Models\RefMenu;
use App\Models\RefSetting;
use App\Models\RefAksesMenu;
use App\Models\RefInstansi;
use App\Models\User;
use App\Models\Transaksi\Rapat;
use App\Models\Activity;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request; // Added this line to import the Request facade

function getAppName()
{
    $setting = RefSetting::where('is_active', '=', 1)->first();
    return $setting->name;
}

function getDescriptionName()
{
    $setting = RefSetting::where('is_active', '=', 1)->first();
    return $setting->description;
}

function getAppLogo()
{
    $setting = RefSetting::where('is_active', '=', 1)->first();
    return asset('storage/' . $setting->logo_url);
}

function getAppFavicon()
{
    $setting = RefSetting::where('is_active', '=', 1)->first();
    return asset('storage/' . $setting->favicon_url);
}

function getApp()
{
    $setting = RefSetting::where('is_active', '=', 1)->first();
    return $setting;
}
function statusActive($url,$uri){
    return $uri;
}
function menu($role)
{
    $menu = RefAksesMenu::with('menu')
    ->whereHas('menu', function ($query) {
        return $query->where([['parent_id', '=', 0], ['is_active', '=', 1], ['is_delete', '=', 0]]);
    })
    ->where('role_id', '=', $role)
    ->get()
    ->sortBy(function ($query) {
        return $query->menu->posisi;
    })
    ->all();
    
    return $menu;
}

function menuUtama()
{
    $menu = RefMenu::where([['parent_id', '=', 0], ['is_active', '=', 1]])
    ->where('jenis_menu', 'Frontend')
    ->orderBy('posisi', 'asc')
    ->get();
    
    return $menu;
}


function menuChildUtama($parent)
{
    $child = RefMenu::where([['parent_id', '=', $parent], ['is_active', '=', 1], ['is_delete', '=', 0]])
    ->where('jenis_menu', 'Frontend')
    ->get();
    return $child;
}

function cekMenuChild($parent, $role)
{
    $cekchild = RefAksesMenu::whereHas('menu', function ($query) use ($parent) {
        return $query->where([['parent_id', '=', $parent], ['is_active', '=', 1], ['is_delete', '=', 0]]);
    })
    ->where('role_id', '=', $role)
    ->first();
    return $cekchild;
}

function cekChild($parent)
{
    $cekchild = RefMenu::where('parent_id', $parent)->first();
    return $cekchild;
}

function menuChild($parent, $role)
{
    $child = RefAksesMenu::whereHas('menu', function ($query) use ($parent) {
        return $query->where([['parent_id', '=', $parent], ['is_active', '=', 1], ['is_delete', '=', 0]]);
    })
    ->where('role_id', '=', $role)
    ->get()
    ->sortBy(function ($query) {
        return $query->menu->posisi;
    })
    ->all();
    return $child;
}

function MenuChildern($id)
{
    $model = RefMenu::select('id', 'menu', 'url', 'posisi', 'parent_id')
    ->where('jenis_menu', 'Backend')
    ->where([['is_active', '=', 1], ['parent_id', '=', $id]]);
    if ($model->get()) {
        return $model;
    } else {
        return "";
    }
    // return $model;
}

function MenuChildernList($id)
{
    $model = RefMenu::select('id', 'menu', 'url', 'posisi', 'parent_id')
    ->where('jenis_menu', 'Backend')
    ->where([['is_active', '=', 1], ['parent_id', '=', $id]])->get();
    return $model;
}

function setIconMenu($id){
    $menu = RefMenu::where('id', $id)->first();
    $class = 'ki-outline ';
    switch ($menu->type) {
        case 'module':
        $class .= 'ki-folder ';
        break;
        case 'controller':
                $class .= 'ki-tablet-text-down';
                break;
                case 'action':
                    $class .= 'ki-gear';
                    break;
                    default:
                    $class .= 'ki-abstract-30';
                    break;
    }
                return $class;
}

function setActivity($description)
{
    $model = new Activity([
                    'subject_id' => Auth::user()->id,
                    'causer_id' => Auth::user()->id,
                    'username' => Auth::user()->username,
                    'fullname' => Auth::user()->first_name . ' ' . Auth::user()->last_name,
                    'description' => $description,
                    'ip_address' => $_SERVER['REMOTE_ADDR'],
                    'device' => request()->userAgent(),
                    'url' => request()->url(),
                ]);
    $model->save();
}
function getStatus($status)
{
    if ($status == 1) {
        $hasil = "Enable";
    } elseif ($status == 0) {
        $hasil = "Disable";
    }
    return $hasil;
}

function getGender($status)
{
    if ($status == 1) {
        $hasil = "L";
    } elseif ($status == 0) {
        $hasil = "P";
    }
    return $hasil;
}

function waktuIndo($waktu)
{
    // Pastikan Carbon diatur ke lokal Indonesia
    Carbon::setLocale('id');
    $dt = new Carbon($waktu);

    return $dt->isoFormat('LT').' WIB';
}

function TglIndo($tgl)
{
    $dt = new  \Carbon\Carbon($tgl);
    setlocale(LC_TIME, 'id_ID');
    $bulan = Bulan($tgl);
    $tgl = $dt->isoFormat('D');
    $tahun = $dt->isoFormat('YYYY');
    return $tgl . ' ' . $bulan . ' ' . $tahun;
}

function TglIndoHari($tgl)
{
    setlocale(LC_TIME, 'id_ID');
    $dts = Carbon::parse($tgl)->locale('id'); // Mengatur format bahasa ke bahasa Indonesia
    $dt = new  \Carbon\Carbon($tgl);
    $hari = Hari($tgl);
    $bulan = Bulan($tgl);
    $tgl = $dt->isoFormat('D');
    $tahun = $dt->isoFormat('YYYY');
    return $hari . ', ' . $tgl . ' ' . $bulan . ' ' . $tahun;
}
function TglIndoTahun($tgl)
{
    $dt = new  \Carbon\Carbon($tgl);
    setlocale(LC_TIME, 'id_ID');
    $bulan = Bulan($tgl);
    $tgl = $dt->isoFormat('D');
    $tahun = $dt->isoFormat('YYYY');
    return $tahun;
}
function TglTimeIndo($tgl)
{
    setlocale(LC_TIME, 'id_ID');
    $dts = Carbon::parse($tgl)->locale('id'); // Mengatur format bahasa ke bahasa Indonesia
    $dt = new  \Carbon\Carbon($tgl);
    $hari = Hari($tgl);
    $bulan = Bulan($tgl);
    $tgl = $dt->isoFormat('D');
    $tahun = $dt->isoFormat('YYYY');
    return $hari . ', ' . $tgl . ' ' . $bulan . ' ' . $tahun .  ' - ' . $dt->format('H:i');;
}


function rupiah($angka, $koma)
{
    $hasil_rupiah = "Rp " . number_format($angka, $koma, ',', '.');
    return $hasil_rupiah;
}

function nilai($angka, $koma)
{
    $hasil_rupiah = number_format($angka, $koma, ',', '.');
    return $hasil_rupiah;
}

function Hari($tgl)
{
    $dt = new \Carbon\Carbon($tgl);
    // setlocale(LC_TIME, 'id_ID');
    $hariInggris = $dt->format('l');
    
    $hariIndonesia = [
        'Monday' => "Senin",
        'Tuesday' => "Selasa",
        'Wednesday' => "Rabu",
        'Thursday' => "Kamis",
        'Friday' => "Jum'at",
        'Saturday' => "Sabtu",
        'Sunday' => "Minggu"
    ];
    
    // Cek apakah hari dalam bahasa Inggris ada dalam array, jika tidak, kembalikan "Senin" sebagai nilai default
    return isset($hariIndonesia[$hariInggris]) ? $hariIndonesia[$hariInggris] : "Senin";
}


function StatusSurat($id)
{
    $statusSurat = [
        0 => "Draft",
        1 => "Proses TTE",
        2 => "Terkirim/Selesai",
        3 => "Perbaikan",
        4 => "di Tolak",
        5 => "di Hapus",
        6 => "di Baca"
    ];
    
    // Cek apakah $id terdapat dalam array, jika tidak, kembalikan "Draft" sebagai nilai default
    return isset($statusSurat[$id]) ? $statusSurat[$id] : "Draft";
}

function TglStandar($tgl)
{
    $dt = new  \Carbon\Carbon($tgl);
    // setlocale(LC_TIME, 'id_ID');
    return $dt->format('Y-m-d');
}

function Bulan($tgl)
{
    $dt = new \Carbon\Carbon($tgl);
    setlocale(LC_TIME, 'id_ID');  // Pastikan locale 'id_ID' tersedia di sistem Anda
    $bulan = $dt->isoFormat('MM');  // Menggunakan 'MMMM' untuk nama bulan penuh
    
    // Array untuk menyimpan nama bulan
    $bulanNames = [
        'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
        'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
    ];
    
    // Ambil nama bulan dari array
    $bulan = isset($bulanNames[$bulan - 1]) ? $bulanNames[$bulan - 1] : 'Januari';
    
    return $bulan;
}


function BulanAngka($tgl)
{
    $dt = new  \Carbon\Carbon($tgl);
    setlocale(LC_TIME, 'id_ID');  // Pastikan locale 'id_ID' tersedia di sistem Anda
    $bulan = $dt->isoFormat('MM');  // Menggunakan 'MMMM' untuk nama bulan penuh
    return $bulan;
}


function Tanggal($tgl = null)
{
    // Pastikan $tgl tidak null dan valid
    if ($tgl === null) {
        return "";
    }
    
    // Array untuk menyimpan nama tanggal
    $tanggalNames = [
        'Satu', 'Dua', 'Tiga', 'Empat', 'Lima', 'Enam', 'Tujuh', 'Delapan', 'Sembilan', 'Sepuluh',
        'Sebelas', 'Dua Belas', 'Tiga Belas', 'Empat Belas', 'Lima Belas', 'Enam Belas', 'Tujuh Belas',
        'Delapan Belas', 'Sembilan Belas', 'Dua Puluh', 'Dua Puluh Satu', 'Dua Puluh Dua', 'Dua Puluh Tiga',
        'Dua Puluh Empat', 'Dua Puluh Lima', 'Dua Puluh Enam', 'Dua Puluh Tujuh', 'Dua Puluh Delapan',
        'Dua Puluh Sembilan', 'Tiga Puluh', 'Tiga Puluh Satu'
    ];
    
    $dt = new \Carbon\Carbon($tgl);
    setlocale(LC_TIME, 'id_ID');
    
    // Ambil tanggal dalam bentuk angka
    $day = $dt->isoFormat('D');
    
    // Ambil nama tanggal dari array
    $tanggal = isset($tanggalNames[$day - 1]) ? $tanggalNames[$day - 1] : "Satu";
    
    return $tanggal;
}


function Penyebut($nilai)
{
    if(!empty($nilai) || intval($nilai)){
        $nilai = abs($nilai);
        $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } elseif ($nilai < 20) {
            $temp = Penyebut($nilai - 10) . " belas";
        } elseif ($nilai < 100) {
            $temp = Penyebut($nilai / 10) . " puluh" . Penyebut($nilai % 10);
        } elseif ($nilai < 200) {
            $temp = " seratus" . Penyebut($nilai - 100);
        } elseif ($nilai < 1000) {
            $temp = Penyebut($nilai / 100) . " ratus" . Penyebut($nilai % 100);
        } elseif ($nilai < 2000) {
            $temp = " seribu" . Penyebut($nilai - 1000);
        } elseif ($nilai < 1000000) {
            $temp = Penyebut($nilai / 1000) . " ribu" . Penyebut($nilai % 1000);
        } elseif ($nilai < 1000000000) {
            $temp = Penyebut($nilai / 1000000) . " juta" . Penyebut($nilai % 1000000);
        } elseif ($nilai < 1000000000000) {
            $temp = Penyebut($nilai / 1000000000) . " milyar" . Penyebut(fmod($nilai, 1000000000));
        } elseif ($nilai < 1000000000000000) {
            $temp = Penyebut($nilai / 1000000000000) . " trilyun" . Penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }else{
        return "";
    }
}

function Terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(Penyebut($nilai));
    } else {
        $hasil = trim(Penyebut($nilai));
    }
    return $hasil . " Rupiah";
}

function getRoleAksesLogin()
{       
    $data = User::where('id',Auth::user()->id)->count();
    if($data>0){
        $user = User::where('id',Auth::user()->id)->first();
        return $user->role_id;
    }
}

function isActiveMenu($url)
{
    return request()->is($url) ? 'fw-bold' : 'fw-normal';
}

function getInstansi($id){
    $data = RefInstansi::where('id',$id)->first();
    return $data->name;
}

function statusBerkas($id){
    $html = '';
    $modal = Rapat::where('id',$id)->first();
    if($modal->finish == 0){
        if ($modal->step==1){
            $html .= '<span class="badge badge-light-danger">Mengisi Informasi Rapat</span>';
        }elseif ($modal->step==2){
            $html .= '<span class="badge badge-light-danger">Mengisi Lokasi</span>';
        }elseif ($modal->step==3){
            $html .= '<span class="badge badge-light-danger">Mengisi Daftar Peserta</span>';
        }elseif ($modal->step==4){
            $html .= '<span class="badge badge-light-danger">Belum Klik Simpan Data</span>';
        }
    }elseif($modal->finish == 1){
        $html .= '<span class="badge badge-light-success">Berkas Selesai</span>';
    }
    
    return $html;
}

function statusRapat($status){
    $html = '';
    if ($status==0){
        $html .= '<span class="badge badge-light-danger">Belum diverifikasi</span>';
    }elseif ($status==1){
        $html .= '<span class="badge badge-light-primary">Sedang Berlangsung</span>';
    }elseif ($status==2){
        $html .= '<span class="badge badge-light-danger">Ditolak</span>';
    }elseif ($status==3){
        $html .= '<span class="badge badge-light-success">Selesai</span>';
    }
    
    return $html;
}


