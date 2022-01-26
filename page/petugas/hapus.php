<?php 
$id_petugas = $_GET['id_petugas'];
$koneksi->query("DELETE FROM tb_petugas WHERE id_petugas ='$id_petugas'");

?>

<script type="text/javascript">
        alert('Data Petugas Berhasil Dihapus :)')
        window.location.href="?page=petugas";
</script>