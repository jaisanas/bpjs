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

						$nama = (isset($_POST['nama']) ? $_POST['nama'] : null);
						$alamat = (isset($_POST['alamat']) ? $_POST['alamat'] : null);
						$jenis_faskes = (isset($_POST['jenis_faskes']) ? $_POST['jenis_faskes'] : null);
						$provinsi = (isset($_POST['provinsi']) ? $_POST['provinsi'] : null);
						$kabupaten = (isset($_POST['kabupaten']) ? $_POST['kabupaten'] : null);
						$sql = "INSERT INTO faskes (nama, alamat, jenis_faskes, provinsi, kabupaten)
								VALUES ('$nama', '$alamat', '$jenis_faskes', '$provinsi', '$kabupaten')";
						if (mysqli_query($conn, $sql)) {
							$Message="Pendaftaran Berhasil Untuk Menunggu Konfirmasi Admin";
							header("Location:http://localhost:1234/bpjs/admintambahfaskes.php?Message=".urlencode($Message));
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>