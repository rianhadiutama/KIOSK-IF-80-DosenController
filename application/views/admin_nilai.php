<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KIOSK - Administrator Mode</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">KIOSK IF UNJANI</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                    <li>
                        <a href="<?php echo base_url("index.php/Admin_DashboardController/dashboard_view");?>"><i class="fa fa-dashboard fa-fw"></i> Main Menu</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/Admin_MataKuliahController/matakuliah_view");?>"><i class="fa fa-table fa-fw"></i>Database Mata Kuliah</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/Admin_MahasiswaController/mahasiswa_view");?>"><i class="fa fa-table fa-fw"></i>Database Mahasiswa</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/Admin_NilaiController/nilai_view");?>"><i class="fa fa-table fa-fw"></i>Database Nilai</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url("index.php/Admin_KHSController/khs_view");?>"><i class="fa fa-edit fa-fw"></i> Cetak KHS</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Nilai
                        </div>
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table table-striped table-bordered table-hover" id="data_nilai">
                                
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <center>
                    <a href="<?php echo base_url("index.php/Admin_ExportController/export"); ?>" class="btn btn-info" role="button">Download ke Excel</a>  
                </center>

            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Upload</h1>
                    
                </div>
                    <p>
                        *Jika ada data yang belum diisi yang ditandai dengan warna merah dan Anda yakin beberapa data mau dikosongkan, langsung ke proses Import. 
                    </p>
                    <center>
                    <a href="<?php echo base_url("index.php/Admin_ExportController/exportSample"); ?>" class="btn btn-info" role="button">Contoh Upload File dari Excel</a>

                    <!-- Buat sebuah tag form dan arahkan action nya ke controller ini lagi -->
                    <form method="post" action="<?php echo base_url("index.php/Admin_NilaiController/nilai_view"); ?>" enctype="multipart/form-data">
                        <!-- 
                        -- Buat sebuah input type file
                        -- class pull-left berfungsi agar file input berada di sebelah kiri
                        -->
                        <input type="file" name="file">
                        
                        <!--
                        -- BUat sebuah tombol submit untuk melakukan preview terlebih dahulu data yang akan di import
                        -->
                        <input type="submit" name="preview" value="Preview" class="btn btn-info">
                    </form>
                    
                 <!-- Load File jquery.min.js yang ada difolder js -->
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    
                    <script>
                    $(document).ready(function(){
                        // Sembunyikan alert validasi kosong
                        $("#kosong").hide();
                    });
                    </script>
                    
                <?php
                if(isset($_POST['preview'])){ // Jika user menekan tombol Preview pada form 
                    if(isset($upload_error)){ // Jika proses upload gagal
                    echo "<div style='color: red;'>".$upload_error."</div>"; // Muncul pesan error upload
                    die; // stop skrip
                    }
                    
                    // Buat sebuah tag form untuk proses import data ke database
                    echo "<form method='post' action='".base_url("index.php/Admin_NilaiController/proses_import")."'>";
                    
                    // Buat sebuah div untuk alert validasi kosong
                    
                    echo "<table border='1' cellpadding='8'>
                    <tr>
                    <th colspan='5'>Preview Data</th>
                    </tr>
                    <tr>
                    <th>NO</th>
                    <th>KODE MATA KULIAH</th>
                    <th>NIM</th>
                    <th>NAMA</th>
                    <th>TUGAS 1</th>
                    <th>TUGAS 2</th>
                    <th>TUGAS 3</th>
                    <th>TUGAS 4</th>
                    <th>TUGAS 5</th>
                    <th>PRESENSI</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>PRAKTIKUM</th>
                    <th>NILAI</th>
                    <th>GRADE</th>
                    </tr>";
                    
                    $numrow = 1;
                    $kosong = 0;
                    
                    // Lakukan perulangan dari data yang ada di excel
                    // $sheet adalah variabel yang dikirim dari controller
                    foreach($sheet as $row){ 
                    // Ambil data pada excel sesuai Kolom
                    $ID_NILAI = $row['A']; // Ambil data 
                    $KODE_MK = $row['B']; 
                    $NIM = $row['C']; 
                    $NAMA = $row['D'];
                    $TUGAS_1 = $row['E'];
                    $TUGAS_2 = $row['F'];
                    $TUGAS_3 = $row['G'];
                    $TUGAS_4 = $row['H'];
                    $TUGAS_5 = $row['I'];
                    $PRESENSI = $row['J'];
                    $UTS = $row['K'];
                    $UAS = $row['L'];
                    $PRAKTIKUM = $row['M'];
                    $NILAI = $row['N'];
                    $GRADE = $row['O'];
                    
                    // Cek jika semua data tidak diisi
                    if(empty($ID_NILAI) && empty($KODE_MK) && empty($NIM) && empty($NAMA) && empty($TUGAS_1) && empty($TUGAS_2) &&  empty($TUGAS_3) &&  empty($TUGAS_4) && empty($TUGAS_5) &&  empty($PRESENSI) &&  empty($UTS) &&  empty($UAS) && empty($PRAKTIKUM) &&  empty($NILAI) &&  empty($GRADE))
                        continue; // Lewat data pada baris ini (masuk ke looping selanjutnya / baris selanjutnya)
                    
                    // Cek $numrow apakah lebih dari 1
                    // Artinya karena baris pertama adalah nama-nama kolom
                    // Jadi dilewat saja, tidak usah diimport
                    if($numrow > 1){
                        // Validasi apakah semua data telah diisi
                        $ID_NILAI_td = ( ! empty($ID_NILAI))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                        $KODE_MK_td = ( ! empty($KODE_MK))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                        $NIM_td = ( ! empty($NIM))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $NAMA_td = ( ! empty($NAMA))? "" : " style='background: #E07171;'"; // Jika Alamat kosong, beri warna merah
                        $TUGAS_1_td = ( ! empty($TUGAS_1))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                        $TUGAS_2_td = ( ! empty($TUGAS_2))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                        $TUGAS_3_td = ( ! empty($TUGAS_3))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $TUGAS_4_td = ( ! empty($TUGAS_4))? "" : " style='background: #E07171;'";
                        $TUGAS_5_td = ( ! empty($TUGAS_5))? "" : " style='background: #E07171;'"; // Jika NIS kosong, beri warna merah
                        $PRESENSI_td = ( ! empty($PRESENSI))? "" : " style='background: #E07171;'"; // Jika Nama kosong, beri warna merah
                        $UTS_td = ( ! empty($UTS))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $UAS_td = ( ! empty($UAS))? "" : " style='background: #E07171;'";
                        $PRAKTIKUM_td = ( ! empty($PRAKTIKUM))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        $NILAI_td = ( ! empty($NILAI))? "" : " style='background: #E07171;'";
                        $GRADE_td = ( ! empty($GRADE))? "" : " style='background: #E07171;'"; // Jika Jenis Kelamin kosong, beri warna merah
                        
                        // Jika salah satu data ada yang kosong
                        if(empty($ID_NILAI) or 
                            empty($KODE_MK) or 
                            empty($NIM) or 
                            empty($NAMA) or
                            empty($TUGAS_1) or 
                            empty($TUGAS_2) or 
                            empty($TUGAS_3) or 
                            empty($TUGAS_4) or
                            empty($TUGAS_5) or 
                            empty($PRESENSI) or 
                            empty($UTS) or 
                            empty($UAS) or
                            empty($PRAKTIKUM) or 
                            empty($NILAI) or 
                            empty($GRADE)){
                        $kosong++; // Tambah 1 variabel $kosong
                        }
                        
                        echo "<tr>";
                        echo "<td".$ID_NILAI_td.">".$ID_NILAI."</td>";
                        echo "<td".$KODE_MK_td.">".$KODE_MK."</td>";
                        echo "<td".$NIM_td.">".$NIM."</td>";
                        echo "<td".$NAMA_td.">".$NAMA."</td>";
                        echo "<td".$TUGAS_1_td.">".$TUGAS_1."</td>";
                        echo "<td".$TUGAS_2_td.">".$TUGAS_2."</td>";
                        echo "<td".$TUGAS_3_td.">".$TUGAS_3."</td>";
                        echo "<td".$TUGAS_4_td.">".$TUGAS_4."</td>";
                        echo "<td".$TUGAS_5_td.">".$TUGAS_5."</td>";
                        echo "<td".$PRESENSI_td.">".$PRESENSI."</td>";
                        echo "<td".$UTS_td.">".$UTS."</td>";
                        echo "<td".$UAS_td.">".$UAS."</td>";
                        echo "<td".$PRAKTIKUM_td.">".$PRAKTIKUM."</td>";
                        echo "<td".$NILAI_td.">".$NILAI."</td>";
                        echo "<td".$GRADE_td.">".$GRADE."</td>";
                        echo "</tr>";
                    }
                    
                    $numrow++; // Tambah 1 setiap kali looping
                    }
                    
                    echo "</table>";
                    
                    // Cek apakah variabel kosong lebih dari 1
                    // Jika lebih dari 1, berarti ada data yang masih kosong
                    if($kosong > 1){
                    ?>  
                    <script>
                    $(document).ready(function(){
                        // Ubah isi dari tag span dengan id jumlah_kosong dengan isi dari variabel kosong
                        $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                        
                        $("#kosong").show(); // Munculkan alert validasi kosong
                    });
                    </script>
                    <?php
                    }else{ // Jika semua data sudah diisi
                    echo "<hr>";
                    
                    // Buat sebuah tombol untuk mengimport data ke database
                    echo "<button type='submit' name='import' class='btn btn-info'>Import</button>";
                    echo "<a href='".base_url("index.php/Admin_NilaiController")."'>Cancel</a>";
                    }
                    
                    echo "</form>";
                }
                ?>
                </center>
            </div>
            <!-- end of row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url()?>assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src=".<?php echo base_url()?>assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url()?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url()?>dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
   
<script>
$(document).ready(function(){

 load_data();

 function load_data()
 {
  $.ajax({
   url:"<?php echo base_url(); ?>/index.php/Admin_NilaiController/fetch",
   method:"POST",
   success:function(data){
    $('#data_nilai').html(data);
   }
  })
 }
    /*$('#import_data').on('submit', function(event){
		event.preventDefault();
		$.ajax({
			url:"Admin_NilaiController/import",
			method:"POST",
			data:new FormData(this),
			contentType:false,
			cache:false,
			processData:false,
			success:function(data){
				$('#file').val('');
				load_data();
                alert(data);
			    }
		    })
	    });
    */
});

</script>



</body>

</html>
