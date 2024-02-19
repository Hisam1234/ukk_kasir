<?php

include '../koneksi.php';

$id_petugas = $_POST['id_petugas'];

//menghapus data dari database
mysqli_query($koneksi,"delete from petugas where id_petugas='$id_petugas'");

header("location:data_pengguna.php?pesan=hapus")
 // jika perlu hapus 
?>