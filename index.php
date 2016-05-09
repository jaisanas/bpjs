<!DOCTYPE html>
<html lang="en" class="{{html_class}}">
<head>
  <meta charset="utf-8" />
  <title>Klaim Pelayanan Bpjs</title>
  <meta name="description" content="Klaim Pelayanan BPJS" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />

  <link rel="stylesheet" href="css/app.min.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  

</head>
<body>

<?php
	if (isset($_GET['Message'])) {
    echo '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>

<div class="app app-header-fixed bg-dark">
 <div class="wrapper-lg modal-center animated fadeInUp text-center r-sm" style="width:350px;margin:-250px 0 0 -200px;">
<div class="container w-xxl w-auto-xs" >
  <div class="header-signin">
    <div class="wrapper-lg text-center">
        <img src="img/logo-bdg.png" alt="">
        <p class="m-t-sm m-b-none">Aplikasi klaim pelayanan BPJS <br />web application</p>
    </div>
  </div>
  <div class="m-b-lg wrapper-lg bg-white r-b-sm">
    <div class=" text-left">
      <h4 class="font-bold no-padder m-b-md">Sign in to get in touch</h4>
    </div>
    
    <form name="form" class="form-validation" action="login.php" method="post">     
      <div class="list-group list-group-sm">

        <div class="form-group">
          <input name="nik" placeholder="NIK" class="form-control" required>
        </div>
        
        <div class="form-group">
          <input name="password" type="Password" placeholder="Password" class="form-control" required>
        </div>
        
      </div>
      <button type="submit" class="btn btn-lg btn-info btn-block" >SIGN IN</button>

      <div class="checkbox m-b-md text-left">
        <label class="checkbox-inline m-t-sm">
          <input type="checkbox" checked=""><i></i> Automatic Login
        </label>
      </div>

      <div class="line line-dashed"></div>

      <div class="text-left m-t">
        <a href="" class=" b-r padder-md padder-left-none text-info">Register</a>
        <a href="" class="padder-md">Forgot password?</a>
      </div>      
    </form>

  </div>
  
</div>
</div>

</div>
<script src="../libs/jquery/jquery/dist/jquery.js"></script> 
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>
<script src="js/app.min.js"></script>

</body>
</html>