<?php 
include_once '../config/dao.php';
$dao = new Dao();

if (isset($_POST['soil'])) {
	$soil = $_POST['soil'];
	$query = "UPDATE pompa SET status_air = '$soil'";
	$dao->execute($query);
}
 ?>