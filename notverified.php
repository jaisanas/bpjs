<?php
	$Pesan="Pendaftaran Belum Dikonfirmasi";							
	header("Location:http://localhost:1234/bpjs/pendaftarannotverified.php?Pesan=".urlencode($Pesan));
	exit;
?>