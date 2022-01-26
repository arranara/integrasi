<div class="panel panel-default">
<div class="panel-heading">
        Tambah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=petugas" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>ID Petugas</label>
                                            <input class="form-control" name="id_petugas" required />
                                        </div>

                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input class="form-control" type="text" name="nama" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk" required>
                                                <option value="L">Laki-laki</option>
                                                <option  value="P">Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="alamat" required /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Hp</label>
                                            <input class="form-control" type="number" name="no_hp" required/> 
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required /> 
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

 $id_petugas = @$_POST['id_petugas'];
 $nama = @$_POST['nama'];
 $jk = @$_POST['jk'];
 $alamat = @$_POST['alamat'];
 $no_hp = @$_POST['no_hp'];
 $email = @$_POST['email'];

 $tgl_lahir = @$_POST['tgl_lahir'];
 $agama = @$_POST['agama'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("INSERT INTO tb_petugas SET id_petugas='$id_petugas', nama='$nama', jk='$jk',
   alamat='$alamat', no_hp='$no_hp', email='$email'");

  if ($sql) {
   ?>

   <script type="text/javascript">
    
    alert("Data Petugas Berhasil Disimpan :)");
    window.location.href='?page=petugas';
   </script>

   <?php
  }
 }

?>