<?php 

    session_start();

    error_reporting();

    $koneksi = new mysqli ("2.tcp.ngrok.io:10997 ","tugasngrok","","db_tugaslima");
    

?>

<!DOCTYPE html>
<html>
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
   
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
      
    <link href="assets/css/custom.css" rel="stylesheet" />

   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-20">
                    
                    <?php                    
                        $page = @$_GET['page'];
                        $aksi = @$_GET['aksi']; 

                        if ($page == "obat"){
                                if ($aksi == ""){
                                    include "page/obat/obat.php";
                                }elseif ($aksi== "tambah") {
                                    include "page/obat/tambah.php";
                                }elseif ($aksi== "ubah") {
                                    include "page/obat/ubah.php";
                                }elseif ($aksi== "hapus") {
                                    include "page/obat/hapus.php";
                                }
                        }elseif ($page == "petugas") {
                                if ($aksi == ""){
                                    include "page/petugas/petugas.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/petugas/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/petugas/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/petugas/hapus.php";
                                } 
                        }elseif ($page == "transaksi") {
                                if ($aksi == ""){
                                    include "page/transaksi/transaksi.php";
                                }elseif ($aksi == "tambah"){
                                    include "page/transaksi/tambah.php";
                                }elseif ($aksi == "ubah"){
                                    include "page/transaksi/ubah.php";
                                }elseif ($aksi == "hapus"){
                                    include "page/transaksi/hapus.php"; 
                                }          
                        }elseif($page==""){
                            include "home.php";
                        }

                    ?>
                    </div>
                </div>
                 <hr />     
            </div>
        </div>
    </div>

    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
            $('#dataTables-example').dataTable();
            });
    </script>
    <script src="assets/js/custom.js"></script>

</body>
</html>
