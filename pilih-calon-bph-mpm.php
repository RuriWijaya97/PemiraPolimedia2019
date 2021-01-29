<?php 
$conn->query("UPDATE tbl_calon SET poin = (poin + 1) WHERE id_calon ='$_GET[id]'");
$conn->query("UPDATE tbl_user SET status_bph_mpm = 'Sudah Memilih' WHERE id_user = '$_GET[ni]'");
echo "<script>alert('Terima Kasih Sudah Memilih Calon BPH MPM');</script>";
echo "<script>location='?halaman=logout';</script>";
?>