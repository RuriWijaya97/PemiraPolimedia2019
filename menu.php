<script type="text/javascript">
    window.history.forward();
    function noBack() {
        window.history.forward();
    }
</script>
<ul class="list">
    <li class="header">MENU UTAMA</li>
        <li class="active">
            <a href="index.php">
                <i class="material-icons">home</i>
                <span>Beranda</span>
            </a>
        </li>
        <?php if ($_SESSION['tbl_user']['level'] == "Admin") { ?> 
        <li>
            <a href="javascript:void(0);" class="menu-toggle">
                <i class="material-icons">check</i>
                <span>Voting Kandidat</span>
            </a>
            <ul class="ml-menu">         
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">Majelis Permusyawaratan Mahasiswa (MPM)</a>
                        <ul class="ml-menu">
                          <li>
                            <a href="?halaman=kandidat-bph-mpm">
                              <span>Badan Pengurus Harian</span>
                            </a>
                          </li>
                          <li>
                            <a href="?halaman=kandidat-anggota-mpm">
                              <span>Anggota</span>
                            </a>
                          </li>
                        </ul>
                </li>
                <?php } ?>
                <?php if ($_SESSION['tbl_user']['level'] == "Admin") { ?>
                <li>
                    <a href="?halaman=kandidat-bem">Badan Eksekutif Mahasiswa (BEM)</a>
                </li>
                <?php } ?>
                <?php if ($_SESSION['tbl_user']['level'] == "Admin") { ?>
                <li>
                    <a href="?halaman=kandidat-hima">Himpunan Mahasiswa (HIMA)</a>
                </li>
                <?php } ?>
                </ul>
                    </li>
                    <?php if ($_SESSION['tbl_user']['level'] == "Admin") { ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">view_list</i>
                            <span>Pendataan</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="?halaman=data-kandidat">Data Kandidat</a>
                            </li>
                            <li>
                                <a href="?halaman=data-pemilih">Data Pemilih</a>
                            </li>
                        </ul>
                    </li>
                <?php } ?>
                    <?php if ($_SESSION['tbl_user']['level'] == "Admin") { ?>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">show_chart</i>
                            <span>Hasil Voting</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">Majelis Permusyawaratan Mahasiswa (MPM)</a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="?halaman=hasil-voting-bph-mpm">
                                            <span>Badan Pengurus Harian</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="?halaman=hasil-voting-anggota-mpm">
                                            <span>Anggota</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="?halaman=hasil-voting-bem">Badan Eksekutif Mahasiswa (BEM)</a>
                            </li>
                            <li>
                                <a href="?halaman=hasil-voting-hima">Himpunan Mahasiswa (HIMA)</a>
                            </li>
                        </ul>
                    </li>
                    <?php } ?>
                </ul>