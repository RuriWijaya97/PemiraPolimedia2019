<?php 
$level = $_SESSION['tbl_user']['level'];
if ($level == 'User') {
    echo "<script>location='index.php';</script>";
}

?>
<div class="block-header">
   <h2>Edit Daftar Kandidat</h2>
</div>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA KANDIDAT PEMIRA 2019
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST" enctype="multipart/form-data">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="nama">
                                        <label class="form-label">Nama Calon</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama2">
                                        <label class="form-label">Nama Pendamping Calon</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="prodi" class="form-control" name="ormawa">
                                        <label class="form-label">Ormawa</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="prodi" class="form-control" name="prodi">
                                        <label class="form-label">Asal Prodi</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="file" id="prodi" class="form-control" name="foto">
                                        <label class="form-label">Foto</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="tambah">Tambah Kandidat</button>
                            </form>
                <?php 
                if (isset($_POST['tambah'])) {
                    $foto = $_FILES['foto']['name'];
                    $lokasi = $_FILES['foto']['tmp_name'];
                    move_uploaded_file($lokasi, "Img/fotokandidat/".$foto);

                    $nama = $_POST['nama'];
                    $nama2 = $_POST['nama2'];
                    $ormawa = $_POST['ormawa'];
                    $prodi = $_POST['prodi'];
                    
                    $ambil = $conn->query("SELECT * FROM tbl_calon");
                    $akun = $ambil->num_rows;
                    
                        $conn->query("INSERT INTO tbl_calon (nama_calon, nama_psngn_calon, pilihan_ormawa, asal_prodi, foto) VALUES ('$nama','$nama2', '$ormawa', '$prodi', '$foto')");
                        echo "<script>alert('Tambah Data Berhasil');</script>";
                        echo "<script>location='?halaman=data-kandidat';</script>";
                    
                }
                ?> 
                        </div>
                    </div>
                </div>
            </div>