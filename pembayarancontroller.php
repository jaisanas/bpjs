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
						$jumlah_pembayaran = (isset($_POST['jumlah_pembayaran']) ? $_POST['jumlah_pembayaran'] : null);
						$no_rek = (isset($_POST['no_rek']) ? $_POST['no_rek'] : null);
						$bulan_iuran = (isset($_POST['bulan_iuran']) ? $_POST['bulan_iuran'] : null);
						$tahun_iuran = (isset($_POST['tahun_iuran']) ? $_POST['tahun_iuran'] : null);
						$result = mysqli_query($conn, "SELECT * FROM pembayaran ORDER BY id DESC LIMIT 1");
						if(!$result) {
							die('Could not query:' . mysqli_error());
						}
						$row = mysqli_fetch_array($result);
						$id=$row['id']+1;
						$name = $_FILES['bukti_pembayaran']['name'];
						$tmp_name = $_FILES['bukti_pembayaran']['tmp_name'];
						$ext = pathinfo($name,PATHINFO_EXTENSION);
						if(isset($name)) {
							if(!empty($name)) {
								$location = 'bukti_pembayaran/';
								if(move_uploaded_file($tmp_name,$location.$id.'_'.$nik.$tahun_iuran.$bulan_iuran.'.'.$ext)) {
									echo 'OK';
								}
							}else{
								echo "upload ulang file";
							}
						}
						$path = 'bukti_pembayaran/'.$id.'_'.$nik.$tahun_iuran.$bulan_iuran.'.'.$ext;
						$sql = "INSERT INTO pembayaran (nik, jumlah_pembayaran, no_rek, bulan_iuran, tahun_iuran, tanggal_pembayaran, bukti_pembayaran)
								VALUES ('$nik', '$jumlah_pembayaran', '$no_rek', '$bulan_iuran', '$tahun_iuran', now(), '$path')";
						if (mysqli_query($conn, $sql)) {
							if (move_uploaded_file($file['tmp_name'], $path)) {
							
							} else{
							}
							$Message="Pendaftaran Berhasil Untuk Menunggu Konfirmasi Admin";
							header("Location:http://localhost:1234/bpjs/pembayaran.php?Message=".urlencode($Message));
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>