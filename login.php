<html>
<body>
 
 
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
	die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("bpjs", $con);

$nik = (isset($_POST['nik']) ? $_POST['nik'] : null);
$password = (isset($_POST['password']) ? $_POST['password'] : null);
$sql="SELECT nik,password FROM USER WHERE nik ='$nik' and password='$password'";
$result = mysql_query($sql,$con);
	if(mysql_fetch_row($result)) {
		header("Location:http://localhost:1234/bpjs/pendaftaran.php");
		exit;
	}else {
		$Message="NIK Anda belum terdaftar";
		header("Location:http://localhost:1234/bpjs/index.php?Message=".urlencode($Message));
		exit;
	}
mysql_close($con);


?>
</body>
</html