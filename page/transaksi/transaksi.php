<?php 

    $koneksi = new mysqli ("2.tcp.ngrok.io:10997","tugasngrok","","db_tugaslima");
    
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Transaksi
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="?page=transaksi&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>ID Transaksi</th>
                                            <th>ID Petugas</th>
                                            <th>Kode Obat</th>
                                            <th>Nama Obat</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            
                                            $koneksi = new mysqli ("localhost","tugasngrok","","db_tugaslima");
                                            $no = 1;
                                            $query=mysqli_query($koneksi,"SELECT * FROM `tb_transaksi` ");
                                            while($data=mysqli_fetch_array($query)){
                                        
                                        ?>

                                    <tr>
                                    <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_transaksi']; ?></td>
                                        <td><?php echo $data['id_petugas']; ?></td>
                                        <td><?php echo $data['kd_obat']; ?></td>
                                        <td><?php echo $data['nama_obat'] ?> </td>
                                        <td><?php echo $data['jumlah']; ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td>
                                            <a href="?page=transaksi&aksi=ubah&id_transaksi=<?php echo $data['id_transaksi']; ?>" class="btn-xs btn-info" ><i class="fa fa-pencil"></i>Edit</a>
                                            <a onclick="return confirm('Hapus Data Ini?)"
                                            href="?page=transaksi&aksi=hapus&id_transaksi=<?php echo $data['id_transaksi']; ?>" class="btn-xs btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                   
                                </table>       
                            </div>
                        </div>
                </div>
            </div>