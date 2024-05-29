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
<div id="myCanvas">
  <!-- <div id="myCanvas" class="watermarked" data-watermark="Bapenda - Kab Bandung" style="width: 650px;margin:0px auto"> -->
    {{ $slot }}
  </div>

@livewireScripts

@stack('js')

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


