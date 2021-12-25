<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo $data['page_tag'];?></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= media(); ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= media(); ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= media(); ?>/dist/css/adminlte.min.css">

  <!-- <link rel="stylesheet" type="text/css" href="<?= media();?>/css/main.css"> -->
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <!-- <div id="divLoading" >
        <div>
            <img src="<?= media(); ?>/images/loading.svg" alt="Loading">
        </div>
    </div>  -->
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1" ><img  class="login-logo-img" style="width: 250px; height: 80px;" src="<?= media(); ?>/images/cantuta2.png" alt="Iniciar Sesión"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Inicia sesión para empezar a interactuar</p>

      <form class="login-form" name="formLogin" id="formLogin" action="">
        <div class="input-group mb-3">
          <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" autofocus>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordarme
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Iniciar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="forgot-password.html">¿Olvidó su contraseña?</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url(); ?>/register" class="text-center">Registrar</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
<script>
    const base_url = "<?= base_url(); ?>";
</script>
<!-- jQuery -->
<script src="<?= media(); ?>/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= media(); ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= media(); ?>/dist/js/adminlte.min.js"></script>

<script src="<?= media(); ?>/js/plugins/pace.min.js"></script>
<script type="text/javascript" src="<?= media();?>/js/plugins/sweetalert.min.js"></script>
<script src="<?= media(); ?>/js/<?= $data['page_functions_js']; ?>"></script>

<script src="<?= media(); ?>/js/jquery-3.3.1.min.js"></script>
    <script src="<?= media(); ?>/js/popper.min.js"></script>
    <script src="<?= media(); ?>/js/bootstrap.min.js"></script>
    <script src="<?= media(); ?>/js/fontawesome.js"></script>
    <script src="<?= media(); ?>/js/main.js"></script>
</body>
</html>
