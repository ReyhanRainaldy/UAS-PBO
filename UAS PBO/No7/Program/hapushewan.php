<?php  
include "koneksi.php";

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR : MISSING ID. ');
$delete = mysqli_query($conn,"DELETE FROM hewan 
								WHERE id='$id'");
if ($delete) {
	echo "<script>location.href='index.php';</script>";
}else {
	echo "<script>alert('Gagal Hapus Data');location.href='index.php';</script>";
}
?>