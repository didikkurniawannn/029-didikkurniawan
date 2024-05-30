<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" href="{{ url('storage/logo/'.getAppLogo()); }}" />
  <title>@yield('title')</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">

	@livewireStyles
	@stack('css')
</head>


<body>
  <div id="myCanvas" style="width: 680px;margin:0px auto;">
  <div style="text-align: center;">
    <div class="header-kiri">
      <center>
        <img src="{{ asset('images/logo/logo.png');}}" style="padding:0px 5px;width:110px;"/>
      </center>
    </div>
    <div class="header-kanan">
      <div class="konten-header-kanan">
        <center><H2>Pemerintah Daerah Kabupaten Bandung</H2></center>
        <center><p style="font-size:25px;" class="instansi"><b>@yield('instansi')</b></p></center>
        <div class="subinfo">
            Komplek Pemda, Jalan Raya Soreang No.Km. 17, Pamekaran, Bandung, Jawa Barat 
        </div>
        <div class="subinfo">
        Kode Pos 40912 Telp/Fax. @yield('telp')
        </div>
        <div class="subinfo">
        Email : @yield('email') Website : @yield('website')
        </div>
      </div>

    </div>
  </div>
</center>

<img src="{{ asset('images/logo/line.png');}}" style="width: 680px;"/>

<div class="content" style="text-align: left;">
{{ $slot }}
</div>

</div>


<style type="text/css">
  h1,h2{font-family: arial;margin-top: 0px;text-transform: uppercase;}
  .header{text-align: center;line-height: 10px;}
  .content{font-size: 14px;}
  .kotak{width: 100%;}
  h1,h2{line-height: 5px}
  h1{margin-bottom: 14px;font-size: 15px}
  h2{margin-bottom: 22px}
  .instansi{
    font-family: arial;margin-top: 0px;text-transform: uppercase;
    top:10px;
    font-size: 25px; /* Ukuran font tetap seperti yang sudah ditentukan */
    max-width: 100%; /* Batasi lebar maksimum agar sesuai dengan kontainer */
    margin: 0px 0; Tambahkan margin atas dan bawah
    padding: 0 10px; /* Tambahkan padding kiri dan kanan */
    word-wrap: break-word; /* Pastikan kata-kata dapat patah ke baris baru */
    text-align: center; /* Teks tetap terpusat */
  }
  .kiri{width: 55%;float: left;text-align: left;}
  .kanan{width: 45%;float: right;}
  .kanan-tanggal{float: right; padding-top:2px;}
  .header-kiri{width: 13%;float: left;}
  .header-kanan{width: 87%;float: right;}
  .konten-header-kanan{margin-top: 11px;}
  .isi, .jadwal{width: 95%;float: right;}
  .judul-main{font-size: 22px;font-family: tahoma;line-height: 18px;font-weight: 700}
  .judul{font-size: 16px;font-family: tahoma;line-height: 18px;font-weight: 700;padding-top:20px}
  .judul-sub{font-size: 14px;font-family: tahoma;line-height: 16px;}
  .judul-profil{font-size: 16px;font-family: tahoma;;font-weight: 50}
  .judul-mid-profil{font-size: 14px;font-family: tahoma;}
  .judul-detail-profil{font-size: 14px;font-family: tahoma;}
  .info{font-size: 14px;
    margin-bottom: 5px;
    letter-spacing: 2px;}
    .subinfo{font-size: 12px;margin-bottom: 2px;letter-spacing: 0px;}
    body{font-size: 13px;font-family: arial;color:#000000;}
    .line{background: #FFF;padding: 0px;margin-top: 2px}
    .line2{background: #FFF;padding: 1px;margin-top: 2px}
    .line3{background: #FFF;padding: 2px;margin-top: 2px}

    .question{width: 30px;color:#000;color:#000;}
    .answer{font-weight: 700;color:#27ae60;}
    .blok-sub{margin-left:25px;}
    .blok-pertanyaan{margin-left:25px;}


    .tables.table-style-one {
      font-size:12px;
      /* color:#000;
      border-width: 1px;
      border-color: #3A3A3A; */
      border-collapse: collapse;
      width: 100%;
      padding: 3px;
    }
    .tables.table-style-one th, thead {
      border-width: 1px;
      padding: 8px;
      /* border-style: solid;
      border-color: #3A3A3A; */
      background-color: #B3B3B3;
    }
    .tables.table-style-one td {
      border-width: 1px;
      padding: 8px;
      /* border-style: solid;
      border-color: #3A3A3A; */
      background-color: #ffffff;
    }

    .watermarked {
      position: relative;
      overflow: hidden;
      z-index: -1;
    }

    .watermarked img {
      width: 100%;
    }

    .watermarked::before {
      position: absolute;
      top: -75%;
      left: -75%;

      display: block;
      width: 350%;
      height: 350%;

      transform: rotate(-45deg);
      content: attr(data-watermark);

      opacity: 0.7;
      line-height: 3em;
      letter-spacing: 2px;
      color: #EEE;
    }
  </style>


  <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jquery.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2017.2.621/js/jszip.min.js"></script>
  <script src="https://kendo.cdn.telerik.com/2017.2.621/js/kendo.all.min.js"></script>

  <script>
    $(document).ready(function() {

    //   Array.from(document.querySelectorAll('.watermarked')).forEach(function(el) {
    //     el.dataset.watermark = (el.dataset.watermark + ' ').repeat(1000);
    //   });

      $(window).load(function() {
        alert("Klik OK untuk Download Dokumen");
        ExportPdf();
      });
    });



    function ExportPdf(){
      kendo.drawing
      .drawDOM("#myCanvas",
      {
        paperSize: "A4",
        margin: { top: "1cm", left: "1cm", right: "1cm", bottom: "1cm" },
        scale: 0.8,
        height: 500,
      })
      .then(function(group){
        kendo.drawing.pdf.saveAs(group, "@yield('title').pdf")
      });
    }
  </script>

</body>
</html>



