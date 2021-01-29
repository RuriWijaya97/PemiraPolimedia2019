<?php 
$level = $_SESSION['tbl_user']['status_anggota_mpm'];
if ($level == 'Sudah Memilih') {
	echo "<script>alert('Anda Sudah Memilih');</script>";
	echo "<script>location='?halaman=kandidat-bph-mpm';</script>";
} else {

?>
<div class="block-header">
   <h2>Calon Anggota MPM Program Studi <?php echo $_SESSION['tbl_user']['prodi']; 
   ?></h2>
</div>
<div class="row clearfix">
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
		<div class="info-box bg-pink hover-expand-effect">
			<div class="icon">
				<i class="material-icons">alarm</i>
			</div>
			<div class="content">
				<div class="text">Sisa Waktu Anda Untuk Memilih : </div>
				<div class="number"><div id="timer"></div></div>
				<script src="js/jquery-3.4.1.js"></script>
        		<script type="text/javascript">
			   		$(document).ready(function() {
			       		var detik = 0;
			       		var menit = 3;
			       		var jam = 0;
			       		function hitung() {
				   		setTimeout(hitung,1000);
				   		$('#timer').html( menit + ' Menit : ' + detik + ' Detik');
				   		if (detik < 10 && detik >= 0) {detik = "0" + detik}; 
				   		detik --;
				   		if(detik < 0) {
							detik = 59;
							menit --;
						if(menit < 0) {
							menit = 59;
							jam --;
						if(jam < 0) {
						  	clearInterval();
							alert('Waktu Anda Habis! Silahkan Login kembali');
							document.location='?halaman=logout'
							}
						}
				   }
			     }
			     function checkSecond(detik) {
  				if (detik < 10 && detik >= 0) {detik = "0" + detik}; 
  
				}
			        hitung();
			   });
			</script>
			</div>
		</div>

	</div>
</div>
<div class="row clearfix">
	<?php $no = 1; ?>
		<?php 
		$prodi=$_SESSION['tbl_user']['prodi'];
		$ambil=$conn->query("SELECT * FROM tbl_calon WHERE  pilihan_ormawa = 'Anggota MPM' && asal_prodi='$prodi' ORDER BY id_calon"); ?>

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
		    	<img src="img/fotokandidat/<?php echo $pecah['foto']; ?>" width="150" height="150" alt="User" class="circle" />
		    <hr>
		    <h5>
            	<?php echo $pecah['nama_calon']; ?>
            	
            </h5>
            <?php 
            $tes = $_SESSION['tbl_user']['id_user']; 
            ?>
            	<a href="?halaman=pilih-calon-anggota-mpm&id=<?php echo $pecah['id_calon'].'&ni='.$tes ?>" class="btn btn-block btn-lg btn-primary waves-effect" onclick="return confirm('Yakin Ingin Memilih Kandidat Nomor Urut <?php echo $no?>?');">PILIH</a>
            
            </div>	
        </div>
    </div>
<?php $no++; ?>		
	<?php } ?>
</div>

<?php } ?>