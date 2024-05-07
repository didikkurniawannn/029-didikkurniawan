<!DOCTYPE html>
<html id="html_login">

<head>
  <!-- HTML base URL. Remove upon app developing. -->
  <?php include "_base.php" ?>
  <title>Login | <?= $app_data->app_name ?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include "_head.php" ?>
</head>

<body>
  <section id="wrapper" class="login-register" style="padding-top:6%;">
    <div class="login-box login-sidebar" style="margin-top:auto !important;">
      <div class="white-box">
        <!-- /.login-logo -->
        <a href="javascript:void(0)" class="text-center d-block m-b-10">
          <img height="75px" src="assets/images/logo-login.webp" alt="Home" />
        </a>
        <h4><?= $app_data->app_name ?></h4>
        <form class="form-horizontal form-material m-t-20" id="loginform" method="post" accept-charset="utf-8">

          <div class="form-group has-feedback ">
            <div class="col-xs-12">
              <input type="text" name="identity" value="" id="identity" class="form-control" placeholder="Username" autofocus="true" style="border-radius: 10px" />
              <span class="glyphicon glyphicon- form-control-feedback"></span>
            </div>
          </div>

          <div class="form-group has-feedback ">
            <div class="col-xs-12">
              <input type="password" name="password" value="" id="password" class="form-control" placeholder="Password" style="border-radius: 10px" />
              <span class="glyphicon glyphicon-key form-control-feedback"></span>
            </div>
          </div>
          <div class="form-group">
            <div class="col-md-12">
              <div class="checkbox checkbox-primary pull-left p-t-0 m-s-3">
                <input type="checkbox" name="remember" value="1" id="remember" />
                <label for="remember"> Ingatkan Saya</label>
              </div>
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-block text-uppercase waves-effect waves-light w-100 text-white" type="submit">Login</button>
            </div>
          </div>
        </form>
        <p><a href="javascript:void(0);">Lupa Password?</a></p>
      </div>
    </div>
    <div class="login-footer"><?php include "_footer.php" ?></div>
  </section>

  <?php include "_scripts.php" ?>
</body>

</html>
