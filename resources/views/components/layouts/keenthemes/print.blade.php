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

<body style="padding:3px;font-size:16px;" >
<div id="myCanvas">
  <!-- <div id="myCanvas" class="watermarked" data-watermark="Bapenda - Kab Bandung" style="width: 650px;margin:0px auto"> -->
    @yield('content')
  </div>

@livewireScripts

@stack('js')

</body>
</html>


