<?php 
$level = $_SESSION['tbl_user']['level'];
if ($level == 'User') {
	echo "<script>location='index.php';</script>";
}
?>
<div class="block-header">
   <h2>Hasil BPH MPM</h2>
</div>
<div class="row clearfix">
	<?php $no = 1; ?>
		<?php 
		$prodi=$_SESSION['tbl_user']['prodi'];
		$ambil=$conn->query("SELECT * FROM tbl_calon WHERE pilihan_ormawa = 'BPH MPM' ORDER BY id_calon"); ?>
		<?php while ($pecah = $ambil -> fetch_assoc()){ ?>
    	<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
     	<div class="card">
          	<div class="header center">
              	<h2>
                  	Kandidat Ke - <?php echo $no; ?><small><?php echo $pecah['asal_prodi']; ?></small>
                </h2>
                <ul class="header-dropdown m-r--5">
                </ul>
            </div>
            <div class="body center">
		    	<img src="img/fotokandidat/<?php echo $pecah['foto']; ?>" height="150" width="150" alt="User" class="circle" />
		    <hr>
		    <h6>
            	<?php echo $pecah['nama_calon']; ?><br><?php echo $pecah['nama_psngn_calon']; ?>           	
            </h6>
            <h4>
            <b>
            <?php echo $pecah['poin'];?> Suara
        	</b>	
            </h4>
            
            </div>	
        </div>
    </div>
    <?php $no++; ?>		
	<?php } ?>
</div>
