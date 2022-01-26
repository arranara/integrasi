<?php 
$kd_obat = $_GET['kd_obat'];
$koneksi->query("DELETE FROM tb_obat WHERE kd_obat ='$kd_obat'");
 
?>


<script type="text/javascript">
        alert('Data Obat Berhasil Dihapus :)')
        window.location.href="?page=obat";
</script>