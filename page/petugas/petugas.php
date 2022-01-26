<?php 

    $koneksi = new mysqli ("2.tcp.ngrok.io:10997 ","tugasngrok","","db_tugaslima");
    
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Petugas
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
      </ol>
    </section>

<a href="?page=petugas&aksi=tambah" class="btn-sm btn-primary" style="margin-bottom: 5px;"><i class="fa fa-plus-circle"></i>Tambah Data</a>

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
                                            <th>ID Petugas</th>
                                            <th>Nama Petugas</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Nomor Hp</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php
        
                                        $koneksi = new mysqli ("localhost","root","12345678","db_tugaslima");
                                        $no = 1;
                                        $query=mysqli_query($koneksi,"SELECT * FROM `tb_petugas` ");
                                        while($data=mysqli_fetch_array($query)){

                                        @$jk = ($data['jk']==L)?"Laki-laki":"Perempuan";
                                    
                                    ?>

                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo $data['id_petugas']; ?></td>
                                        <td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $jk; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
                                        <td><?php echo $data['no_hp']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td>
                                            <a href="?page=petugas&aksi=ubah&id_petugas=<?php echo $data['id_petugas']; ?>" class="btn-xs btn-info" ><i class="fa fa-pencil"></i>Edit</a>
                                            <a onclick="return confirm('Hapus Data Ini?)"
                                            href="?page=petugas&aksi=hapus&id_petugas=<?php echo $data['id_petugas']; ?>" class="btn-xs btn-danger" ><i class="fa fa-trash"></i> Hapus</a>
                                        </td>
                                    </tr>

                                    <?php } ?>

                                    </tbody>
                                   
                                </table>       
                            </div>
                        </div>
                </div>
            </div>