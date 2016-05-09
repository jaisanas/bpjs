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
						$sql_select = "SELECT id,tanggal,isi_klaim FROM klaim where id ='$id'";
						$result = mysqli_query($conn,$sql_select);
						if(mysqli_num_rows($result) > 0) {
								while($row = mysqli_fetch_assoc($result)) {
									$content = 'Klaim anda yang mempunyai id '.$row["id"].', tanggal '.$row["tanggal"].', berhasil diverifikasi';
									mail('jaisanas258@gmail.com','[Notifikasi BPJS Klaim]', $content,'From: jaisanas2@gmail.com');
								}
						}else {
							echo "gagal";
						}
						$sql = "UPDATE klaim SET status='1' WHERE id='$id'";
						if (mysqli_query($conn, $sql)) {
							$Message="Pembayaran Berhasil Dikonfirmasi";							
							header("Location:http://localhost:1234/bpjs/adminklaim.php?Message=".urlencode($Message));
						} else {
							echo "Error updating record: " . mysqli_error($conn);
						}

						mysqli_close($conn);
					?>