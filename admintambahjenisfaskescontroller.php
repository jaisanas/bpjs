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

						$jenis_faskes = (isset($_POST['jenis_faskes']) ? $_POST['jenis_faskes'] : null);
						$sql = "INSERT INTO jenis_faskes(jenis_faskes)
								VALUES ('$jenis_faskes')";
						if (mysqli_query($conn, $sql)) {
							$Message="Pendaftaran Berhasil Untuk Menunggu Konfirmasi Admin";
							header("Location:http://localhost:1234/bpjs/admintambahjenisfaskes.php?Message=".urlencode($Message));
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>