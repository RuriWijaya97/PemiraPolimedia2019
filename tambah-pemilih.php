<?php 
$level = $_SESSION['tbl_user']['level'];
if ($level == 'User') {
    echo "<script>location='index.php';</script>";
}

?>
<div class="block-header">
   <h2>Tambah Daftar Pemilih Tetap</h2>
</div>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAMBAH DATA PEMILIH PEMIRA 2019
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="username">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama">
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="prodi" class="form-control" name="prodi">
                                        <label class="form-label">Program Studi</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="prodi" class="form-control" name="password">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="tambah">Tambah Pemilih</button>
                            </form>
                            <?php 
                if (isset($_POST['tambah'])) {
                    $username = $_POST['username'];
                    $nama = $_POST['nama'];
                    $prodi = $_POST['prodi'];
                    $pass = $_POST['password'];
                    
                    $ambil = $conn->query("SELECT * FROM tbl_user");
                    $akun = $ambil->num_rows;
                    
                        $conn->query("INSERT INTO tbl_user (username, nama, prodi, password) VALUES ('$username','$nama', '$prodi', '$pass')");
                        echo "<script>alert('Tambah Data Berhasil');</script>";
                        echo "<script>location='?halaman=data-pemilih';</script>";
                    
                }
                ?> 
                        </div>
                    </div>
                </div>
            </div>