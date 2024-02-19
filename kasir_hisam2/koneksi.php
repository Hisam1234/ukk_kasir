<?php
$koneksi = mysqli_connect("localhost","root","","kasir_hisam_revisi");

//Check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>