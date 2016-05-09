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
						
						$nik = (isset($_POST['nik']) ? $_POST['nik'] : null);
						$tanggal = (isset($_POST['tanggal']) ? $_POST['tanggal'] : null);
						$isi_klaim = (isset($_POST['isi_klaim']) ? $_POST['isi_klaim'] : null);
						$result = mysqli_query($conn, "SELECT * FROM klaim ORDER BY id DESC LIMIT 1");
						if(!$result) {
							die('Could not query:' . mysqli_error());
						}
						$row = mysqli_fetch_array($result);
						$id=$row['id']+1;
						$name = $_FILES['kuitansi_rs']['name'];
						$tmp_name = $_FILES['kuitansi_rs']['tmp_name'];
						$ext = pathinfo($name,PATHINFO_EXTENSION);
						if(isset($name)) {
							if(!empty($name)) {
								$location = 'kuitansi_rs/';
								if(move_uploaded_file($tmp_name,$location.$id.'_'.$nik.$tanggal.'.'.$ext)) {
									echo 'OK';
								}
							}else{
								echo "upload ulang file";
							}
						}
						$kuitansi_rs = 'kuitansi_rs/'.$id.'_'.$nik.$tanggal.'.'.$ext;
						
						$name_rekam = $_FILES['rekam_medis']['name'];
						$tmp_name_rekam = $_FILES['rekam_medis']['tmp_name'];
						$ext = pathinfo($name_rekam,PATHINFO_EXTENSION);
						if(isset($name_rekam)) {
							if(!empty($name_rekam)) {
								$location = 'rekam_medis/';
								if(move_uploaded_file($tmp_name_rekam,$location.$id.'_'.$nik.$tanggal.'.'.$ext)) {
									echo 'OK';
								}
							}else{
								echo "upload ulang file";
							}
						}
						$rekam_medis = 'rekam_medis/'.$id.'_'.$nik.$tanggal.'.'.$ext;
						
						$sql = "INSERT INTO klaim (nik, tanggal, isi_klaim,kuitansi_rs, rekam_medis)
								VALUES ('$nik', '$tanggal', '$isi_klaim','$kuitansi_rs','$rekam_medis')";
						if (mysqli_query($conn, $sql)) {
							$Message="Pendaftaran Berhasil Untuk Menunggu Konfirmasi Admin";
							header("Location:http://localhost:1234/bpjs/klaim.php?Message=".urlencode($Message));
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>