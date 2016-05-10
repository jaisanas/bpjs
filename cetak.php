<?php
require('html_table.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',12);
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
						$setujuId = (isset($_POST['setujuId']) ? $_POST['setujuId'] : null);
						$sql="SELECT nik,nama,tgl_lahir,hubungan_keluarga,status,no_kk FROM kartu_keluarga WHERE nik ='$setujuId'";
						$result = mysqli_query($conn, $sql);
						if (mysqli_num_rows($result) > 0) {
							
							// output data of each row
							while($row = mysqli_fetch_assoc($result)) {
								 $html='<table border="1">
<tr>
<td width="200" height="30">NIK</td><td width="200" height="30">'.$row["nik"].'</td>
</tr>
<tr>
<td width="200" height="30">Nomor Kartu Keluarga</td><td width="200" height="30">'.$row["no_kk"].'</td>
</tr>
<tr>
<td width="200" height="30">Nama</td><td width="200" height="30">'.$row["nama"].'</td>
</tr>
<tr>
<td width="200" height="30">Tanggal Lahir</td><td width="200" height="30">'.$row["tgl_lahir"].'</td>
</tr>
</table>';

$pdf->WriteHTML($html);
$pdf->Output();
							}
							
						} else {
							echo "0 results";
						}
mysqli_close($conn);
?>
