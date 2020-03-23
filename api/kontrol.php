<?php 
include_once '../config/dao.php';
$dao = new Dao();

if (isset($_GET['id_pompa'])) {
	$id_pompa = $_GET['id_pompa'];
	$query = "SELECT * from pompa WHERE id = '$id_pompa'";
	$result = $dao->execute($query);
	$result = $result->fetch_array();
	echo $result['status_pompa'];
}
else{
	echo "fail";
}
?>