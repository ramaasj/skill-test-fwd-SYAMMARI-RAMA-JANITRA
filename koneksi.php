<?php
    $koneksi = mysqli_connect("localhost","root","","arkatama_test");

    if(mysqli_connect_errno()){
    	echo "Gagal terhubung dengan Database : " . mysqli_connect_error();
    }
?>