<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=obat" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                    <div class="form-group">
                                            <label>Kode Obat</label>
                                            <input class="form-control" name="kd_obat" required />
                                        </div>
                                        
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input class="form-control" type="text" name="nama_obat" required/>
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan Obat</label>
                                            <input class="form-control" type="text" name="ket_obat" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <input class="form-control" name="catatan" /> 
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

$kd_obat = @$_POST['kd_obat'];
$nama_obat = @$_POST['nama_obat'];
$ket_obat = @$_POST['ket_obat'];
$jumlah = @$_POST['jumlah'];
$tanggal = @$_POST['Y-m-d'];
$catatan = @$_POST['catatan'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_obat SET kd_obat='$kd_obat', nama_obat='$nama_obat', ket_obat='$ket_obat', jumlah='$jumlah', 
  tanggal='$tanggal', catatan='$catatan'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Obat Berhasil Disimpan :)");
    window.location.href='?page=obat';
   </script>

   <?php
  }
 }

?>