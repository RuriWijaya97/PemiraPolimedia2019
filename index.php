<?php
error_reporting(0);  
session_start();
include "koneksi.php";
if (!isset($_SESSION['tbl_user']))
{
    echo "<script>location='login.php';</script>";
    exit();
} 
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Pemilihan Mahasiswa Raya | Polimedia</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <!-- Material Icons -->
    <link href="font/materialicon/material-icons.css" rel="stylesheet">
    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />
    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
    <!-- Custom Css -->
    <link href="css/style2.css" rel="stylesheet">
    <link href="css/materialize.css" rel="stylesheet">
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-orange">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>MOHON MENUNGGU...</p>
            <p>PEMIRA POLIMEDIA <script>document.write(new Date().getFullYear());</script></p>
        </div>
    </div>
    <!-- END Page Loader -->
    <!-- Overlay For Sidebars -->
     <div class="overlay"></div>
    <!-- END Overlay For Sidebars -->
    
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">PEMIRA <script>document.write(new Date().getFullYear());</script></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav navbar-right">
                <li><a class="js-search"><?php echo $_SESSION['tbl_user']['prodi']?></a></li>
              </ul>  
            </div>
        </div>
    </nav>
    <!-- Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="img/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['tbl_user']['nama']?></div>
                    <div class="email"><?php echo $_SESSION['tbl_user']['level']?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="index.php?halaman=logout"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <?php include 'menu.php'; ?>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy;<script>document.write(new Date().getFullYear());</script> <a href="javascript:void(0);">Divisi IT Pemira Polimedia</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            
            <?php 
              if (isset($_GET['halaman'])) {
                if ($_GET['halaman']=="kandidat-hima") {
                    include 'hima.php';
                } elseif ($_GET['halaman']=="kandidat-bem") {
                    include 'bem.php';
                } elseif ($_GET['halaman']=="kandidat-anggota-mpm") {
                    include 'anggotampm.php';
                } elseif ($_GET['halaman']=="kandidat-bph-mpm") {
                    include 'bphmpm.php';
                } elseif ($_GET['halaman']=="data-pemilih") {
                    include 'data-pemilih.php';
                } elseif ($_GET['halaman']=="data-kandidat") {
                    include 'data-kandidat.php';
                } elseif ($_GET['halaman']=="logout") {
                    include 'logout.php';
                } elseif ($_GET['halaman']=="hasil-voting-hima") {
                    include 'hasil-voting-hima.php';
                } elseif ($_GET['halaman']=="hasil-voting-bem") {
                    include 'hasil-voting-bem.php';
                } elseif ($_GET['halaman']=="hasil-voting-anggota-mpm") {
                    include 'hasil-voting-anggota-mpm.php';
                } elseif ($_GET['halaman']=="hasil-voting-bph-mpm") {
                    include 'hasil-voting-bph-mpm.php';
                } elseif ($_GET['halaman']=="pilih-calon-hima") {
                    include 'pilih-calon-hima.php';
                }
                elseif ($_GET['halaman']=="pilih-calon-bem") {
                    include 'pilih-calon-bem.php';
                }
                elseif ($_GET['halaman']=="pilih-calon-anggota-mpm") {
                    include 'pilih-calon-anggota-mpm.php';
                }
                elseif ($_GET['halaman']=="pilih-calon-bph-mpm") {
                    include 'pilih-calon-bph-mpm.php';
                }
                elseif ($_GET['halaman']=="hapus-pemilih") {
                    include 'hapus-pemilih.php';
                }
                elseif ($_GET['halaman']=="hapus-kandidat") {
                    include 'hapus-kandidat.php';
                } elseif ($_GET['halaman']=="tambah-pemilih") {
                    include 'tambah-pemilih.php';
                } elseif ($_GET['halaman']=="tambah-kandidat") {
                    include 'tambah-kandidat.php';
                } elseif ($_GET['halaman']=="edit-pemilih") {
                    include 'edit-pemilih.php';
                }   
              } else {
                include 'home.php';
              }
              ?>
                <!-- #END# -->
            </div>
        </div>
    </section>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <script src="js/pages/tables/jquery-datatable.js"></script>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- <script src="js/jquery-3.4.1.min.js"></script> -->
    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>

    <script type='text/javascript'>


    //<![CDATA[
    shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="404.php"});
    //]]>
    </script>
    <script language=JavaScript>

    var message="Maaf, Anda Tidak Bisa Klik Kanan!";

    ///////////////////////////////////
    function clickIE4(){
    if (event.button==2){
    alert(message);
    return false;
    }
    }

    function clickNS4(e){
    if (document.layers||document.getElementById&&!document.all){
    if (e.which==2||e.which==3){
    alert(message);
    return false;
    }
    }
    }

    if (document.layers){
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown=clickNS4;
    }
    else if (document.all&&!document.getElementById){
    document.onmousedown=clickIE4;
    }

    document.oncontextmenu=new Function("alert(message);return false")

    </script> 
</body>
</html>