<?php 	
	$conn->query("DELETE FROM tbl_user WHERE id_user='$_GET[id]'");
	echo "<script>alert('User Berhasil dihapus');</script>";
	echo "<script>location='index.php?halaman=data-pemilih';</script>";
?>