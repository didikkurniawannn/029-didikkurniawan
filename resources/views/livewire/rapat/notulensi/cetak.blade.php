<div>
  @section('title', $rapat->nama_rapat)
  @section('instansi', $instansi->name)
  @section('email', $instansi->email)
  @section('telp', $instansi->no_telp)
  @section('website', $instansi->website)
  <br>
  <center><h1>Notulensi Rapat</h1></center>

  <table style="border:0px solid;">
        <tr>
            <td width="150px"><b>Judul Rapat</b></td>
            <td>:</td>
            <td>{{$rapat->nama_rapat}}</td>
        </tr>
        <tr>
            <td><b>Tanggal</b></td>
            <td>:</td>
            <td>{{$rapat->tanggal_mulai == $rapat->tanggal_selesai ? tglIndo($rapat->tanggal_mulai) : tglIndo($rapat->tanggal_mulai) ." - ". tglIndo($rapat->tanggal_selesai)}}</td>
        </tr>
        <tr>
            <td><b>Waktu</b></td>
            <td>:</td>
            <td>{{$rapat->jam_mulai == $rapat->jam_selesai ? waktuIndo($rapat->jam_mulai) .' - Selesai' : waktuIndo($rapat->jam_mulai) ." - ". waktuIndo($rapat->jam_selesai)}}</td>
        </tr>
        <tr>
            <td><b>Tempat</b></td>
            <td>:</td>
            <td>{{$rapat->tempat}}</td>
        </tr>
        <tr>
            <td><b>Undangan</b></td>
            <td>:</td>
            <td>
                    @foreach($peserta as $val)
                        <ul>{{$val}}</ul>
                    @endforeach
            </td>
        </tr>
    </table>
    
    <h4>Agenda Rapat</h4>
    <p>{!!$rapat->agenda!!}</p>
    <br><br>
    <h4>Hasil Rapat</h4>
    <p>{!!$notulensi->kesimpulan!!}</p>
    <br><br><br><br><br>
    
    <center><h1>Kehadiran</h1></center>
    <table>
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Paraf</th>
        </tr>
        @foreach($kehadiran as $hadir)
        <tr>
            <td>{{$hadir->nama}}</td>
            <td>{{$hadir->instansi}}</td>
            <td></td>
        </tr>
        @endforeach
    </table>
</div>

@push('css')
<style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
@endpush