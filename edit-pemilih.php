<?php 
$level = $_SESSION['tbl_user']['level'];
if ($level == 'User') {
    echo "<script>location='index.php';</script>";
}

?>
<div class="block-header">
   <h2>Edit Daftar Pemilih Tetap</h2>
</div>
<?php 
    $ambil = $conn->query("SELECT * FROM tbl_user WHERE id_user='$_GET[id]'");
    $pecah = $ambil->fetch_assoc();


?>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EDIT DATA PEMILIH PEMIRA 2019
                            </h2>
                        </div>
                        <div class="body">
                            <form method="POST">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="username" class="form-control" name="username" value="<?php echo $pecah['username'];?>">
                                        <label class="form-label">Username</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="nama" class="form-control" name="nama" value="<?php echo $pecah['nama'];?>">
                                        <label class="form-label">Nama</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" id="prodi" class="form-control" name="prodi" value="<?php echo $pecah['prodi'];?>">
                                        <label class="form-label">Program Studi</label>
                                    </div>
                                </div>

                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="password" id="prodi" class="form-control" name="password" value="<?php echo $pecah['password'];?>">
                                        <label class="form-label">Password</label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="edit">Edit Pemilih</button>
                            </form>
                            <?php 
                if (isset($_POST['edit'])) {
                    $username = $_POST['username'];
                    $nama = $_POST['nama'];
                    $prodi = $_POST['prodi'];
                    $pass = $_POST['password'];
                    
                    $ambil = $conn->query("SELECT * FROM tbl_user");
                    $akun = $ambil->num_rows;
                    
                        $conn->query("UPDATE tbl_user SET username='$_POST[username]', nama='$_POST[nama]', prodi='$_POST[prodi]', password='$_POST[password]' WHERE id_user='$_GET[id]'");
                        echo "<script>alert('Edit Data Berhasil');</script>";
                        echo "<script>location='?halaman=data-pemilih';</script>";
                    
                }
                ?> 
                        </div>
                    </div>
                </div>
            </div>