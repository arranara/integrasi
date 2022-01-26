<?php
$koneksi = new mysqli ("2.tcp.ngrok.io:10997 ","tugasngrok","","db_tugaslima");
    $id = $_GET['id'];

    $sql = $koneksi->query("select * from tb_obat where kd_obat='$id'");

    $tampil = $sql->fetch_assoc();

?>


<div class="panel panel-default">
<div class="panel-heading">
        Ubah Data
</div>
<div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST">
                                        <div class="form-group">
                                            <label>Nama Obat</label>
                                            <input class="form-control hidden" name="id" value="<?php echo $tampil['kd_obat']; ?>" />
                                            <input class="form-control" name="nama_obat" value="<?php echo $tampil['nama_obat']; ?>" />
                                        </div>

                                        <div class="form-group">
                                            <label>Keterangan Obat</label>
                                            <input class="form-control" name="ket_obat"  value="<?php echo $tampil['ket_obat']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jumlah" value="<?php echo $tampil['jumlah'];?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tanggal"  value="<?php echo $tampil['tanggal']; ?>" /> 
                                        </div>

                                        <div class="form-group">
                                            <label>Catatan</label>
                                            <input class="form-control" name="catatan" value="<?php echo $tampil['catatan']; ?>" /> 
                                        </div>

                                        <div>
                                            <button class="btn btn-primary" type="submit" name="ubah">Ubah</button>
                                        </div>

                                    </div>
                                    </form>
                                </div>
</div>
</div>
</div>

<?php
 if ( isset($_POST['ubah']) ) {
      $id = $_POST['id'];
 $nama_obat = $_POST['nama_obat'];
 $ket_obat = $_POST['ket_obat'];
 $jumlah = $_POST['jumlah'];
 $tanggal = $_POST['tanggal'];
 $catatan = $_POST['catatan'];

    $sql = $koneksi -> query("UPDATE tb_obat SET nama_obat='$nama_obat', ket_obat='$ket_obat', jumlah='$jumlah', 
    tanggal='$tanggal', catatan='$catatan'  WHERE kd_obat ='$id' ");
    if( $sql ){
        echo "
        <script>
        alert('Data Obat Berhasil Diubah :)');
        document.location.href = '?page=obat';
        </script>
        ";
    }else {
        echo "
        <script>alert('Data obat Gagal Diubah :(');history.go(-1);</script>
        ";
    }
 }


?>