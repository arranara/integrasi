<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
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
                                            <input class="form-control" name="id_transaksi" required />
                                        </div>

                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" type="text" name="id_petugas" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input class="form-control" type="text" name="kd_obat" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input class="form-control" type="text" name="nama_obat" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal" required /> 
                                        </div>

                                        <div>
                                            <input type="submit" name="simpan" value="simpan" class="btn btn-primary">
                                            <input type="reset" name="reset" value="reset" class="btn btn-default"> 
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
  
  $sql = $koneksi->query("INSERT INTO tb_transaksi SET id_transaksi='$id_transaksi', id_petugas='$id_petugas', kd_obat='$kd_obat',
   nama_obat='$nama_obat', jumlah='$jumlah', tanggal='$tanggal'");

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