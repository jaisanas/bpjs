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
						if($_POST['provinsi'])
{
$provinsi =$_POST['provinsi'];
$sql=mysqli_query($conn,"select kabupaten from kabupaten where provinsi='$provinsi'");
while($row=mysqli_fetch_array($sql))
{
$kabupaten=$row['kabupaten'];
echo '<option value="'.$kabupaten.'">'.$kabupaten.'</option>';
}
}
						mysqli_close($conn);
					?>