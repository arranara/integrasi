<?php 

    $id_transaksi = $_GET['id_transaksi'];

    $sql = $koneksi->query("select * from tb_transaksi where id_transaksi = '$id_transaksi'");

    $tampil = $sql->fetch_assoc();

?>

<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=transaksi" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>ID Transaksi</label>
                                            <input class="form-control" name="id_transaksi" value="<?php echo $tampil['id_transaksi']?>" readonly />
                                         </div>

                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input class="form-control" name="kd_obat" value="<?php echo $tampil['kd_obat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input class="form-control" name="nama_obat" value="<?php echo $tampil['nama_obat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" name="jumlah" value="<?php echo $tampil['jumlah']; ?>" />
                                        </div>

										<div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" name="tanggal" value="<?php echo $tampil['tanggal']; ?>" />
                                        </div>


                                        <div>
                                            <input type="submit" name="simpan" value="ubah" class="btn btn-primary">
                                        </div>

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php

 $id_transaksi = @$_POST['id_transaksi'];
 $id_petugas = @$_POST['id_petugas'];
 $kd_obat = @$_POST['kd_obat'];
 $nama_obat = @$_POST['nama_obat'];
 $jumlah = @$_POST['jumlah'];
 $tanggal = @$_POST['tanggal'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
    $sql = $koneksi -> query("UPDATE tb_transaksi SET id_transaksi='$id_transaksi', id_petugas='$id_petugas', kd_obat='$kd_obat', 
    nama_obat='$nama_obat', jumlah='$jumlah', tanggal='$tanggal' WHERE id_transaksi ='$id_transaksi' ");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Transaksi Berhasil Disimpan :)");
    window.location.href='?page=transaksi';
   </script>

   <?php
  }
 }

?>