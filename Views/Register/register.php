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
<div class="login-box" style="height: 650px; width: 700px;">
   
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><img  class="login-logo-img" src="<?= media(); ?>/images/cantuta.png" alt="Iniciar Sesión"></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa tus datos principales</p>

      <form class="login-form" name="formLogin" id="formLogin" action="">
        <div  class="form-row">
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtNombre" name="txtNombre" class="form-control" placeholder="Nombres" autofocus>
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtApellido" name="txtApellido" class="form-control" placeholder="Apellidos" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtDni" name="txtDni" class="form-control" placeholder="DNI">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
        </div>
        <div  class="form-row">
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtRuc" name="txtRuc" class="form-control" placeholder="RUC" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtTelefono" name="txtTelefono" class="form-control" placeholder="Telefono" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
          <div class="input-group mb-3 col-md-4">
            <input type="text" id="txtDireccion" name="txtDireccion" class="form-control" placeholder="Direccion" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
        </div>
        <div  class="form-row">
          <div class="input-group mb-3 col-md-6">
            <input type="email" id="txtEmail" name="txtEmail" class="form-control" placeholder="Email" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
          <div class="input-group mb-3 col-md-6">
            <input type="password" id="txtPassword" name="txtPassword" class="form-control" placeholder="Contraseña">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
              <span class="required">*</span>
            </div>
          </div>
        </div>
        
          
          <!-- /.col -->
          <div class="row">
            <button type="submit" class="btn btn-primary btn-block">Registrarte ahora</button>
          </div>
          <!-- /.col -->
        
      </form>


     
      <p class="mb-0">
        <a href="<?php echo base_url();?>/Login" class="text-center">Iniciar Sesión</a>
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
