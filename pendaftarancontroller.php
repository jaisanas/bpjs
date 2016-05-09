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
						$no_kk = (isset($_POST['no_kk']) ? $_POST['no_kk'] : null);
						$sql="SELECT nik,nama,tgl_lahir,hubungan_keluarga FROM kartu_keluarga WHERE no_kk ='$no_kk'";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							$emparray = array();
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								 $emparray[] = $row;
							}
							
						} else {
							echo "0 results";
						}
						
						$json_data = json_encode($emparray);
						if($json_data != null) {
							header("Location:http://localhost:1234/bpjs/pendaftaran.php?Message=".urlencode($json_data));
						}else {
							$Message = $no_kk;
							header("Location:http://localhost:1234/bpjs/pendaftaran.php?Message=".urlencode($Message));
						}
						mysqli_close($conn);
					?>