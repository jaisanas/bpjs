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
						$sql = "SELECT id,nik,pemilik_rekening,jumlah_pembayaran,tanggal_pembayaran,no_rek,jumlah_iuran,bulan_iuran,tahun_iuran,status FROM pembayaran";
						$result = mysqli_query($conn,$sql);
						echo "<table>";
						echo "<tbody>";
						if(mysqli_num_rows($result) > 0) {
							while($row = mysqli_fetch_assoc($result)) {
								echo '<tr data-expanded="true">';
								echo "<td>".$row["nik"]."</td>";
								echo "<td>".$row["pemilik_rekening"]."</td>";
								echo "<td>".$row["jumlah_pembayaran"]."</td>";
								echo "<td>".$row["tanggal_pembayaran"]."</td>";
								echo "<td>".$row["no_rek"]."</td>";
								echo "<td>".$row["jumlah_iuran"]."</td>";
								echo "<td>".$row["bulan_iuran"]."</td>";
								echo "<td>".$row["tahun_iuran"]."</td>";
								echo "<td>".$row["status"]."</td>";
								echo "<td><button>Boring</button></td>";
								echo "</tr>";
							}
						}else{
							echo "0 results";
						}
						echo "</tbody>";
						echo "</table>";
						mysqli_close($conn);
?>