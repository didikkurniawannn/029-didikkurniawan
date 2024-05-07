
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>@yield('title') - {{getAppName()}}</title>
    <meta name="title" property="og:title" content="{{getAppName()}}">
    <link rel="shortcut icon" href="{!! getAppFavicon() !!}" />
    <meta name="description" property="og:description" content="{{getDescriptionName()}}">
    <meta name="author" property="og:author" content="PT Mitra Sinerji Teknoindo">
    <!-- Favicon icon -->
    <link rel="icon" type="image/ico" sizes="16x16" href="{!! asset('backend/assets/images/favicon.ico') !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link href="{!! asset('backend/disposisi/assets/css/style-1.css') !!}" rel="stylesheet">
    <link href="{!! asset('backend/disposisi/assets/css/bootstrap.min.css') !!}" rel="stylesheet">
    {{-- <link href="{!! asset('backend/assets/css/style.min.css') !!}" rel="stylesheet"> --}}

</head>
<body>

{{$slot}}

<script src="{!! asset('backend/disposisi/assets/js/jquery.min.js') !!}"></script>
<script src="{!! asset('backend/disposisi/assets/js/jspdf.min.js') !!}"></script>
<script src="{!! asset('backend/disposisi/assets/js/html2canvas.js') !!}"></script>
{{-- <script src="{!! asset('backend/disposisi/assets/js/app.js') !!}"></script> --}}

<script>
    $(function () {

'use strict';

/**
 * Generating PDF from HTML using jQuery
 */
$(document).on('click', '#invoice_download_btn', function () {
    var contentWidth = $("#invoice_wrapper").width();
    var contentHeight = $("#invoice_wrapper").height();
    var topLeftMargin = 20;
    var pdfWidth = contentWidth + (topLeftMargin * 2);
    var pdfHeight = (pdfWidth * 1.5) + (topLeftMargin * 2);
    var canvasImageWidth = contentWidth;
    var canvasImageHeight = contentHeight;
    var totalPDFPages = Math.ceil(contentHeight / pdfHeight) - 1;

    html2canvas($("#invoice_wrapper")[0], {allowTaint: true}).then(function (canvas) {
        canvas.getContext('2d');
        var imgData = canvas.toDataURL("image/jpeg", 1.0);
        var pdf = new jsPDF('p', 'pt', [pdfWidth, pdfHeight]);
        pdf.addImage(imgData, 'JPG', topLeftMargin, topLeftMargin, canvasImageWidth, canvasImageHeight);
        for (var i = 1; i <= totalPDFPages; i++) {
            pdf.addPage(pdfWidth, pdfHeight);
            pdf.addImage(imgData, 'JPG', topLeftMargin, -(pdfHeight * i) + (topLeftMargin * 4), canvasImageWidth, canvasImageHeight);
        }
        pdf.save("@yield('title') - {{getAppName()}}.pdf");
    });
});
})

</script>

<style>
    @media print {
        .invoice-1 .invoice-logo{
            padding: 30px 0px;
        }
        .invoice-1 .invoice-center{
            padding: 0px;
            font-size: 12px;
        }
        .invoice-1 .invoice-top{
            padding: 0px;
            font-size: 12px;
        }
        .invoice-1 .invoice-header{
            padding: 0px;
            font-size: 12px;
        }
        .invoice-1 .invoice-bottom{
            padding: 0px;
            font-size: 12px;
        }
        .invoice-1 .table td {
            font-size: 10px;
            color: #555;
        }
        .inv-title-1 .name{size: 12px}
        .invoice-1 .table > :not(caption) > * > * {
            padding: 3px 10px;
        }
        body {
            transform: scale(0.95);
            transform-origin: top center;
          }
    }
</style>

</body>
</html>
