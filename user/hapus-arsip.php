<?php

include("../koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM arsip_user WHERE id_au=$id";
    $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( $query ){

    echo "<script> 
        document.location.href = 'arsip.php';
            alert('Data berhasil dihapus!');
           
           
            </script>";

    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>