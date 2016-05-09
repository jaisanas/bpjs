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
						
						$alamat = (isset($_POST['alamat']) ? $_POST['alamat'] : null);
						$bank = (isset($_POST['bank']) ? $_POST['bank'] : null);
						$faskes_tk1 = (isset($_POST['faskes_tk1']) ? $_POST['faskes_tk1'] : null);
						$faskes_tk1_gigi = (isset($_POST['faskes_tk1_gigi']) ? $_POST['faskes_tk1_gigi'] : null);
						$iuran_perjiwa = (isset($_POST['iuran_perjiwa']) ? $_POST['iuran_perjiwa'] : null);
						$iuran_perkeluarga = (isset($_POST['iuran_perkeluarga']) ? $_POST['iuran_perkeluarga'] : null);
						$kelas_perawatan = (isset($_POST['kelas_perawatan']) ? $_POST['kelas_perawatan'] : null);
						$kelurahan = (isset($_POST['kelurahan']) ? $_POST['kelurahan'] : null);
						$kp = (isset($_POST['kp']) ? $_POST['kp'] : null);
						$nama = (isset($_POST['nama']) ? $_POST['nama'] : null);
						$no_hp = (isset($_POST['no_hp']) ? $_POST['no_hp'] : null);
						$no_rek = (isset($_POST['no_rek']) ? $_POST['no_rek'] : null);
						$no_telp = (isset($_POST['no_telp']) ? $_POST['no_telp'] : null);
						$npwp = (isset($_POST['npwp']) ? $_POST['npwp'] : null);
						$nik = (isset($_POST['nik']) ? $_POST['nik'] : null);
						$pemilik_rekening = (isset($_POST['pemilik_rekening']) ? $_POST['pemilik_rekening'] : null);
						$rt_rw = (isset($_POST['rt_rw']) ? $_POST['rt_rw'] : null);
						$tanggal_lahir = (isset($_POST['tanggal_lahir']) ? $_POST['tanggal_lahir'] : null);
						$tempat_lahir = (isset($_POST['tempat_lahir']) ? $_POST['tempat_lahir'] : null);
						echo "nik ".$nik;
						$sql = "UPDATE user SET alamat='$alamat', bank='$bank', faskes_tk1='$faskes_tk1', faskes_tk1_gigi='$faskes_tk1_gigi'
								,iuran_perjiwa='$iuran_perjiwa', iuran_perkeluarga='$iuran_perkeluarga', kelas_perawatan='$kelas_perawatan'
								,kelurahan='$kelurahan', kode_pos='$kp', nama='$nama', no_hp='$no_hp', no_rek='$no_rek', no_telp='$no_telp'
								,npwp='$npwp', pemilik_rekening='$pemilik_rekening', rt_rw='$rt_rw', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir'
								WHERE nik='$nik'";
						if (mysqli_query($conn, $sql)) {
							header("Location:http://localhost:1234/bpjs/pembayaran.php");
							exit;
						} else {
							$Message="Galat Error";
							header("Location:http://localhost:1234/bpjs/pendaftaranselanjutnya.php?Message=".urlencode($Message));
							exit;
						}
						
						mysqli_close($conn);
					?>