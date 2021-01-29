<?php 
$level = $_SESSION['tbl_user']['level'];
if ($level == 'User') {
    echo "<script>location='index.php';</script>";
}

?>
<div class="block-header">
   <h2>Daftar Pemilih Tetap</h2>
   
</div>
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Pemilih
                            </h2>
                            
                                    
                                
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li>
                                            <a href="?halaman=tambah-pemilih"><i class="material-icons">add_circle_outline</i> Tambah Data</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic" id="data">
                                    <thead>
                                        <tr>
                                            <th class="center">No.</th>
                                            <th class="center">Username</th>
                                            <th class="center">Nama</th>
                                            <th class="center">Prodi</th>
                                            <th class="center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $no = 1; 
                                        ?>
                                        <?php $ambil=$conn->query("SELECT * FROM tbl_user"); ?>
                                        <?php while ($pecah = $ambil -> fetch_assoc()){ ?>
                                        <tr>
                                            <td class="center"><?php echo $no; ?></td>
                                            <td class="center"><?php echo $pecah['username']; ?></td>
                                            <td class="center"><?php echo $pecah['nama']; ?></td>
                                            <td class="center"><?php echo $pecah['prodi']; ?></td>
                                            <td class="center">
                                                <a href="index.php?halaman=hapus-pemilih&id=<?php echo $pecah['id_user']; ?>" class="btn-danger btn" onclick="confirm('Kamu Yakin Ingin Menghapus User ini?');"><i class="material-icons">delete</i></a>
                                                <a href="index.php?halaman=edit-pemilih&id=<?php echo $pecah['id_user']; ?>" class="btn-warning btn"><i class="material-icons">edit</i></a></td>
                                        </tr>
                                        <?php $no++; ?>     
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
