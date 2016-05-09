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

						$provinsi = (isset($_POST['provinsi']) ? $_POST['provinsi'] : null);
						$sql = "INSERT INTO provinsi(provinsi)
								VALUES ('$provinsi')";
						if (mysqli_query($conn, $sql)) {
							$Message="Pendaftaran Berhasil Untuk Menunggu Konfirmasi Admin";
							header("Location:http://localhost:1234/bpjs/admintambahprovinsi.php?Message=".urlencode($Message));
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>