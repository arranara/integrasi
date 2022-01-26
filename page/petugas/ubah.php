<?php 

    $id_petugas = $_GET['id_petugas'];

    $sql = $koneksi->query("select * from tb_petugas where id_petugas = '$id_petugas'");

    $tampil = $sql->fetch_assoc();

    $jkl = $tampil['jk'];

?>

<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="box-tools pull-right">
            		<a href="?page=anggota" class="btn btn-sm btn-primary"><i class="fa fa-arrow-circle-o-left"></i> Kembali</a>
                </div>
            </div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nis</label>
                                            <input class="form-control" name="id_petugas" value="<?php echo $tampil['id_petugas']?>" readonly />
                                         </div>

                                        <div class="form-group">
                                            <label>Nama Petugas</label>
                                            <input class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select class="form-control" name="jk">
                                                <option value="L" <?php if ($jkl=="L"){echo "selected";} ?>>Laki-laki</option>
                                                <option  value="P"  <?php if ($jkl=="P"){echo "selected";} ?>>Perempuan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat" value="<?php echo $tampil['alamat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Nomor Hp</label>
                                            <input class="form-control" name="no_hp" value="<?php echo $tampil['no_hp']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" name="email" value="<?php echo $tampil['email']; ?>" />
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

 $id_petugas = @$_POST['id_petugas'];
 $nama = @$_POST['nama'];
 $jk = @$_POST['jk'];
 $alamat = @$_POST['alamat'];
 $no_hp = @$_POST['no_hp'];
 $email = @$_POST['email'];

 $simpan = @$_POST['simpan'];

 if ($simpan) {
  
  $sql = $koneksi->query("UPDATE tb_petugas SET nama='$nama', jk='$jk', alamat='$alamat', no_hp='$no_hp', email='$email' where id_petugas ='$id_petugas'");

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