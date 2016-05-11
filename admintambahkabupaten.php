<!DOCTYPE html>
<html lang="en" class="">
<head>
  <meta charset="utf-8" />
  <title>Aplikasi Web Layanan Pengaduan BPJS</title>
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
<?php
	if (isset($_GET['Message'])) {
    echo '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
}
?>
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
        
          <li class="dropdown">
            <a href="#" data-toggle="dropdown" class="bg-blue profile-header dropdown-toggle clear" data-toggle="dropdown">
              <span class="thumb-sm avatar pull-left m-t-n-sm m-b-n-sm m-r-sm">
                            
              </span>
              <span class="hidden-sm hidden-md m-r-xl"></span> <i class="text14 icon-bdg_setting3 pull-right"></i>
            </a>
            <!-- dropdown -->
            <ul class="dropdown-menu animated fadeIn w-ml">             
              <li class="divider"></li>
              <li >
                <a href="index.php">Logout</a>
              </li>
            </ul>
            <!-- / dropdown -->
          </li>
        </ul>
        <!-- / navbar right -->
        
      </div>
      <!-- / navbar collapse -->
  </header>
  <!-- / header -->
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
              <li class="">
                <a href="adminpendaftaran.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Cek Pendaftaran</span>
                </a>               
              </li>
			  <li class="">
                <a href="adminpembayaran.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Cek Pembayaran</span>
                </a>               
              </li>
			    <li class="">
                <a href="adminklaim.php" class="text-dark-grey" >      
                  <i class="icon-bdg_dashboard icon-grey"></i>
                  <span class="font-bold">Cek Klaim</span>
                </a>               
              </li>
			  <li class="active">
                <a href class="auto">
                  <span class="pull-right text-muted">
                    <i class="text8 icon-bdg_arrow3 text"></i>
                    <i class="text8 icon-bdg_arrow1 text-active"></i>
                  </span>
                  <i class="icon-bdg_uikit"></i>
                  <span class="font-bold">Kelola Faskes</span>
                </a>
                <ul class="nav nav-sub dk">
                  <li class="nav-sub-header">
                    <a href="admintambahfaskes.php">
                      <span>Kelola Faskes</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="admintambahfaskes.php">
                      <span>Tambah Faskes</span>
                    </a>
                  </li>
				   <li class="">
                    <a href="admintambahjenisfaskes.php">
                      <span>Tambah Jenis Faskes</span>
                    </a>
                  </li>
                  <li class="">
                    <a href="admintambahprovinsi.php">
                      <span>Tambah Provinsi</span>
                    </a>
                  </li>
                  <li class="active">
                    <a href="admintambahkabupaten.php">
                      <span>Tambah Kabupaten</span>
                    </a>
                  </li>
                </ul>
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
			Tambah Kabupaten
		 </div>
		  <div class="panel-body">
				<form class="form-horizontal" method="post" action="admintambahkabupatencontroller.php" enctype="multipart/form-data">
					<div class="form-group">
						<label class="col-sm-2 control-label">Provinsi</label>
						<div class="col-sm-10">
							<select name="provinsi" class="form-control m-b">
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
									$sql="SELECT provinsi FROM provinsi";
									$result = mysqli_query($conn, $sql);
									if (mysqli_num_rows($result) > 0) {
											// output data of each row
											while($row = mysqli_fetch_assoc($result)) {
												echo '<option value="'.$row["provinsi"].'">'.$row["provinsi"].'</option>';
											}
									} else {
										echo "0 results";
									}
									mysqli_close($conn);
								?>
							</select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">Kabupaten</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" name="kabupaten" placeholder="Nama Kabupaten">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-4 col-sm-offset-2">
							<button type="submit" class="btn btn-info">Kirim</button>
						</div>
					</div>
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

