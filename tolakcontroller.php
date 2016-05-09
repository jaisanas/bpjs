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
						$sql_select = "SELECT bulan_iuran,tahun_iuran FROM pembayaran where id ='$id'";
						$result = mysqli_query($conn,$sql_select);
						if(mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									$content = 'Iuran BPJS anda pada periode bulan '.$row["bulan_iuran"].' tahun iuran '.$row["tahun_iuran"].' ditolak mohon hubungi petugas untuk <br> keterangan lebih lanjut';
									mail('jaisanas258@gmail.com','[Notifikasi BPJS Konfirmasi Iuran]', $content,'From: jaisanas2@gmail.com');
								}
						}else {
							echo "gagal";
						}
						$sql = "UPDATE pembayaran SET status='2' WHERE id='$id'";
						if (mysqli_query($conn, $sql)) {
							$Message="Pembayaran Berhasil Dikonfirmasi";							
							header("Location:http://localhost:1234/bpjs/adminpembayaran.php?Message=".urlencode($Message));
						} else {
							echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
					?>