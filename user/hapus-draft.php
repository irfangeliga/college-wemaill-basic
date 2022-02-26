<?php

include("../koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM draft WHERE id_draft=$id";
    $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( $query ){

    echo "<script> 
        document.location.href = 'draft.php';
            alert('Data berhasil dihapus!');
           
           
            </script>";

    } else {
        die("gagal menghapus...");
    }

} else {
    die("akses dilarang...");
}

?>