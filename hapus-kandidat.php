<?php 
	
	$ambil = $conn->query("SELECT * FROM tbl_calon WHERE id_calon='$_GET[id]'");
	$pecah = $ambil->fetch_assoc();
	$foto_calon = $pecah['foto'];
	if (file_exists("img/fotokandidat/$foto_calon")) {
		unlink("img/fotokandidat/$foto_calon");
	}
	$conn->query("DELETE FROM tbl_calon WHERE id_calon='$_GET[id]'");
	echo "<script>alert('Kandidat Berhasil dihapus');</script>";
	echo "<script>location='index.php?halaman=data-kandidat';</script>";
?>