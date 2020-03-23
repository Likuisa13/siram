<?php 
include_once 'config/dao.php';
$dao = new Dao();

if (isset($_GET['id']) && isset($_GET['aksi'])) {
	$id_pompa = $_GET['id'];
	$perintah = $_GET['aksi'];
	$pompa = $dao->aksi($id_pompa,$perintah);
}
header("location: index");
?>