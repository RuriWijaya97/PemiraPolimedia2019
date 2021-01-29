<?php 
$conn->query("UPDATE tbl_calon SET poin = (poin + 1) WHERE id_calon ='$_GET[id]'");
$conn->query("UPDATE tbl_user SET status_hima = 'Sudah Memilih' WHERE id_user = '$_GET[ni]'");
echo "<script>alert('Terima Kasih Sudah Memilih Calon Ketua HIMA');</script>";
echo "<script>location='?halaman=kandidat-bem';</script>";
?>