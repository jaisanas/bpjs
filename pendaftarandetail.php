<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Bandung Web Kit | BDGWEBKIT</title>
  <meta name="description" content="Bandung Web Kit" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="../libs/assets/animate.css/animate.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="../libs/assets/simple-line-icons/css/simple-line-icons.css" type="text/css" />
  <link rel="stylesheet" href="../libs/jquery/bootstrap/dist/css/bootstrap.css" type="text/css" />

  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />
  

</head>
<body>
<div class="app app-header-fixed ">
  

    <!-- header -->
  <header id="header" class="app-header navbar" role="menu">
      <!-- navbar header -->
      <div class="navbar-header bg-info">
        <button class="pull-right visible-xs dk" ui-toggle-class="show" target=".navbar-collapse">
          <i class="glyphicon glyphicon-cog"></i>
        </button>
        <button class="pull-right visible-xs" ui-toggle-class="off-screen" target=".app-aside" ui-scroll="app">
          <i class="glyphicon glyphicon-align-justify"></i>
        </button>
        <!-- brand -->
        <a href="#/" class="navbar-brand text-lt">          
          <img src="img/logo-small.png" alt="." class="small-logo hide">
          <img src="img/logo.png" alt="." class="large-logo">
        </a>
        <!-- / brand -->
      </div>
      <!-- / navbar header -->

      <!-- navbar collapse -->
      <div class="collapse pos-rlt navbar-collapse bg-info">
        <!-- buttons -->
        <div class="nav navbar-nav hidden-xs">
                  
        </div>
        <!-- / buttons -->

        <!-- link and dropdown -->
        <ul class="nav navbar-nav hidden-sm">
          
        </ul>
        <!-- / link and dropdown -->

        <!-- nabar right -->
        <ul class="nav navbar-nav navbar-right">
            <!-- / dropdown -->
        </ul>
        <!-- / navbar right -->
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->


    <!-- aside -->
  <aside id="aside" class="app-aside hidden-xs bg-dark">
      <div class="aside-wrap">
        <div class="navi-wrap">
          <!-- user -->
          <div class="clearfix hidden-xs text-center hide" id="aside-user">
            <div class="dropdown wrapper">
              <a href="app.page.profile">
                <span class="thumb-lg w-auto-folded avatar m-t-sm">
                  <img src="img/01.jpg" class="img-full" alt="...">
                </span>
              </a>
              <a href="#" data-toggle="dropdown" class="dropdown-toggle hidden-folded">
                <span class="clear">
                  <span class="block m-t-sm">
                    <strong class="font-bold text-lt">John.Smith</strong> 
                    <b class="caret"></b>
                  </span>
                  <span class="text-muted text-xs block">Art Director</span>
                </span>
              </a>
              <!-- dropdown -->
              <ul class="dropdown-menu animated fadeInRight w hidden-folded">
                <li class="wrapper b-b m-b-sm bg-info m-t-n-xs">
                  <span class="arrow top hidden-folded arrow-info"></span>
                  <div>
                    <p>300mb of 500mb used</p>
                  </div>
                  <div class="progress progress-xs m-b-none dker">
                    <div class="progress-bar bg-white" data-toggle="tooltip" data-original-title="50%" style="width: 50%"></div>
                  </div>
                </li>
                <li>
                  <a href>Settings</a>
                </li>
                <li>
                  <a href="page_profile.html">Profile</a>
                </li>
                <li>
                  <a href>
                    <span class="badge bg-danger pull-right">3</span>
                    Notifications
                  </a>
                </li>
                <li class="divider"></li>
                <li>
                  <a href="page_signin.html">Logout</a>
                </li>
              </ul>
              <!-- / dropdown -->
            </div>
            <div class="line dk hidden-folded"></div>
          </div>
          <!-- / user -->

         <!-- nav -->
          <nav ui-nav class="navi clearfix">
            <ul class="nav">
              <li class="hidden-folded m-t text-dark-grey text-xs padder-md padder-v-sm">
                <span>Navigation</span>
              </li>
              <li class="active">
                <a href="index.html" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Pendaftaran User</span>
                </a>               
              </li>
			  <li class="">
                <a href="login.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Bayar Iuran</span>
                </a>               
              </li>
			    <li class="">
                <a href="index.html" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Klaim</span>
                </a>               
              </li>
			    <li class="">
                <a href="index.html" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Cek Iuran</span>
                </a>               
              </li>
			  <li class="">
                <a href="index.html" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Faskes</span>
                </a>               
              </li>
			  <li class="">
                <a href="" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Statistik</span>
                </a>               
              </li>
			  <li class="">
                <a href="" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Profile</span>
                </a>               
              </li>
            </ul>
          </nav>
          <!-- nav -->
        </div>
      </div>
  </aside>
  <!-- / aside -->
<!-- content -->
<div id="content" class="app-content" role="main">
  <div class="hbox hbox-auto-xs hbox-auto-sm ng-scope">
    <div class="col">
      <div class="app-content-body app-content-full fade-in-up ng-scope h-full ">

          <div class="bg-light lter">    
              <ul class="breadcrumb bg-grey-breadcrumb m-b-none">
                <li><a href="#" class="btn no-shadow" ui-toggle-class="app-aside-folded" target=".app">
                  <i class="icon-bdg_expand1 text"></i>
                  <i class="icon-bdg_expand2 text-active"></i>
                </a>   </li>
              </ul>
          </div>          
          
          <!-- column -->

          <!-- hbox layout -->
<div class="hbox hbox-auto-xs hbox-auto-sm bg-light ">
  <!-- column -->
  <div class="col w-full b-r">
     <div class="row wrapper-lg">
	  <div class="panel panel-default">
		<div class="panel-heading font-bold">
			Pendafaran User
		 </div>
		  <div class="panel-body">
				<form class="form-horizontal" method="post" action="adminpendaftaran.php">
				<?php 
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "bpjs";
					// Create connection
					$conn = mysqli_connect($servername, $username, $password, $dbname);
					// Check connection
					if (!$conn) {
						die("Connection failed: " . mysqli_connect_error());
					}
					$id = (isset($_POST['setujuId']) ? $_POST['setujuId'] : null);
					$sql_select = "SELECT nik,nama,tanggal_lahir,tempat_lahir,no_hp,npwp,rt_rw,kode_pos,kelurahan,iuran_perkeluarga,iuran_perjiwa,kelas_perawatan,no_rek,no_telp,log_daftar,bank,pemilik_rekening,faskes_tk1, faskes_tk1_gigi,alamat FROM user where nik ='$id'";
					$result = mysqli_query($conn,$sql_select);
					if(mysqli_num_rows($result) > 0) {
					while($row = mysqli_fetch_assoc($result)) {
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">NIK</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="nik" placeholder="'.$row["nik"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Kode Pos</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="kp" placeholder="'.$row["kode_pos"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Nama</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="nama" placeholder="'.$row["nama"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Tempat Lahir</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="tempat_lahir" placeholder="'.$row["tempat_lahir"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Tanggal Lahir</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="tanggal_lahir" placeholder="'.$row["tanggal_lahir"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">No. Handphone</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="no_hp" placeholder="'.$row["no_hp"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">NPWP</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="npwp" placeholder="'.$row["npwp"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Alamat</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="alamat" placeholder="'.$row["alamat"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">RT/RW</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="rt_rw" placeholder="'.$row["rt_rw"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Nomor Telepon Rumah</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="no_telp" placeholder="'.$row["no_telp"].'" readonly>';
					echo   '</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Kelurahan/Desa</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="kelurahan" placeholder="'.$row["kelurahan"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Fasilitas Tingkat Pertama</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="number" class="form-control" name="faskes_tk1" placeholder="'.$row["faskes_tk1"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Fasilitas Tingkat Pertama Gigi</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="number" class="form-control" name="faskes_tk1_gigi" placeholder="'.$row["faskes_tk1_gigi"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Kelas Perawatan</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="kelas_perawatan" placeholder="'.$row["kelas_perawatan"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Iuran Perkeluarga Rp.</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="number" class="form-control" name="iuran_perkeluarga" placeholder="'.$row["iuran_perkeluarga"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Iuran Perjiwa Rp. </label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="number" class="form-control" name="iuran_perjiwa" placeholder="'.$row["iuran_perjiwa"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">No Rekening</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="no_rek" placeholder="'.$row["no_rek"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Nama Bank</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="bank" placeholder="'.$row["bank"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<label class="col-sm-2 control-label">Pemilik Rekening</label>';
					echo	'<div class="col-sm-10">';
					echo		'<input type="text" class="form-control" name="pemilik_rekening" placeholder="'.$row["pemilik_rekening"].'" readonly>';
					echo	'</div>';
					echo '</div>';
					echo '<div class="form-group">';
					echo	'<div class="col-sm-4 col-sm-offset-2">';
					echo		'<button type="submit" class="btn btn-info">Kembali Ke Panel Konfirmasi</button>';
					echo	'</div>';
					echo '</div>';
					}
					}
					mysqli_close($conn);
					?>
				</form>
		   </div>
	  </div>
    </div>
  
  <!-- /column -->
</div>
<!-- /hbox layout -->
  
  </div>
  <!-- App Content body -->

  </div>
  <!-- col -->
</div>
<!-- Hbox -->



</div>

<script src="../libs/jquery/jquery/dist/jquery.js"></script>
<script src="../libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
<script src="js/ui-load.js"></script>
<script src="js/ui-jp.config.js"></script>
<script src="js/ui-jp.js"></script>
<script src="js/ui-nav.js"></script>
<script src="js/ui-toggle.js"></script>
<script src="js/ui-client.js"></script>

</body>
</html>
