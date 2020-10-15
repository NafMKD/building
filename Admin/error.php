<?php 
session_start();
include 'autoloader.php';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ASTU Guzo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../assets/select2/css/select2.min.css">
    <link rel="stylesheet" href="../assets/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

  <nav class="main-header navbar navbar-expand-md navbar-dark navbar-danger">
    <div class="container">
      <a href="" class="navbar-brand">
        <img src="../assets/dist/img/sLogo.png" alt="Saba Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Saba <em>Studio</em></span>
      </a>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item d-none d-sm-inline-block">
            <a href="#" class="nav-link">ADMIN Page</a>
          </li>
        </ul>
      </div>

      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      </ul>
    </div>
  </nav>

  <div class="content-wrapper">

    <div class="login-box container pt-5">

      <div class="card">
        <div class="card-body login-card-body">
          <?php if (isset($_GET['session'])): ?>
            <div class="alert alert-danger ">
              <h5><i class="icon fas fa-ban"></i> ERORR!</h5>
              This page is only for Authorized person <br><br>
              If your so please login again, your session is expaired. <a href="/building/">click here</a> to login
            </div>
          <?php else: ?>
            
          <?php endif ?>
        </div>
      </div>
    </div>
        
  </div>

</div>
<script src="../assets/jquery/jquery.min.js"></script>
<script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dist/js/adminlte.js"></script>
<script src="../assets/inputmask/min/jquery.inputmask.bundle.min.js"></script>
<script src="../assets/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="../assets/select2/js/select2.full.min.js"></script>
</body>
</html>