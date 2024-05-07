<!DOCTYPE html>
<html lang="en">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "_base.php" ?>
  <title>Error | <?= $app_data->app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.webp">
  <link rel="stylesheet" href="assets/css/custom.min.css">
</head>

<style>
  html {
    height: 100%;
    overflow: hidden;
  }
  body {
    font-family: "Poppins", sans-serif;
    margin: 0px;
    height: 100%;
    color: #333;
  }
  .container-fluid {
    height: 100%;
    display: flex;
    justify-content: center;
    border: 1px solid #000;
    margin: 0px;
    padding-top: 0px;
    background-color: #FFF;
  }
  .row {
    width: 100%;
    padding-top: 3%;
  }
  .col {
    text-align: center;
  }
  .error-img-light {
    width: 420px;
  }
  .error-cta {
    border: 2px solid #b41e18;
    border-radius: 10px;
    padding: 10px 15px;
    font-size: 14px;
    color: #b41e18;
    text-decoration: none;
    transition: all .2s;
  }
  .error-cta:hover {
    border-color: #b41e18;
    background-color: rgba(180, 30, 24, .2);
  }

  @keyframes spotlight-breathe {
    0% {
      bottom: -1vh;
    }
    50% {
      bottom: 12vh;
    }
    100% {
      bottom: -1vh;
    }
  }

  .spotlight {
    background: linear-gradient(45deg, #b41e18, #5cbae8 50%, #da251d);
    position: relative;
    filter: blur(20vh);
    height: 40vh;
    animation: spotlight-breathe;
    animation-duration: 5s;
    animation-delay: 1s;
    animation-iteration-count: infinite;
    animation-timing-function: ease-in-out;
  }

  .dark {
    color: #FFF;
  }

  .dark .container-fluid {
    background-color: #111;
    background-image: url("assets/images/error-img.webp");
    background-repeat: no-repeat;
    background-position: center;
    background-size: 45%;
    background-blend-mode: overlay;
  }

  .dark .row {
    padding-top: 13%;
  }

  .dark .error-cta {
    color: #FFF;
  }

  .dark .error-img-light {
    display: none;
  }

  @media(max-width: 768px) {
    .dark .container-fluid {
      background-size: 90%;
    }
    .dark .row {
      padding-top: 30%;
    }
    .error-img-light {
      width: 75%;
    }
  }
</style>

<body class="dark">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <img class="error-img-light" src="assets/images/error-img-light.webp" alt="Error Image Light">
        <h1 class="f-s-36 m-b-10">Terjadi kesalahan pada sistem.</h1>
        <h3 class="f-w-400 m-t-0 m-b-15">Harap coba beberapa saat lagi,<br>atau hubungi Admin.</h3>
        <br>
        <a class="error-cta" href="./">Kembali ke {{ isi sendiri }}</a>
      </div>
    </div>
  </div>
  <div class="spotlight"></div>
</body>

</html>
