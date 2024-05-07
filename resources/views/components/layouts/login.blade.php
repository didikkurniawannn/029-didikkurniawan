<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="html_login" data-bs-theme="light" style="--primary-color: #2c3692; --primary-color-hover: #2c3692CC; --accent-color: #0c9648; --bg-thead-color: #CCEEF6; --text-thead-color: #212529;" data-arp-injected="true">
<head>
  <!-- HTML base URL. Remove upon app developing. -->
  @include('components.layouts._base')
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @stack('meta')
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  @include('components.layouts._head')
</head>

<body class="custom-layout-1">
  <section id="wrapper" class="login-register" style="padding-top:6%;">

    {{ $slot }}

    <div class="login-footer">
      @include('components.layouts._footer')
    </div>
  </section>

  @include('components.layouts._scripts_login')
</body>

</html>
