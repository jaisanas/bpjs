<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_POST["provinsi"])) {
	$query ="SELECT * FROM kabupaten WHERE provinsi = '" . $_POST["provinsi"] . "'";
	$results = $db_handle->runQuery($query);
?>
	<option value="">Select State</option>
<?php
	foreach($results as $state) {
?>
	<option value="<?php echo $state["kabupaten"]; ?>"><?php echo $state["kabupaten"]; ?></option>
<?php
	}
}
?>