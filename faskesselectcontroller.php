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
						$kabupaten = (isset($_POST['kabupaten']) ? $_POST['kabupaten'] : null);
						$jenis_faskes = (isset($_POST['jenis_faskes']) ? $_POST['jenis_faskes'] : null);
						$sql="SELECT nama,alamat,provinsi,kabupaten,jenis_faskes FROM faskes WHERE provinsi='$provinsi' AND kabupaten='$kabupaten' AND jenis_faskes='$jenis_faskes'";
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
							header("Location:http://localhost:1234/bpjs/faskesselect.php?Message=".urlencode($json_data));
						}else {
							$Message = $no_kk;
							header("Location:http://localhost:1234/bpjs/pendaftaran.php?Message=".urlencode($Message));
						}
						mysqli_close($conn);
					?>