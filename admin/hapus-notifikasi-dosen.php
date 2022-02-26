<?php

include("../koneksi.php");

if( isset($_GET['id']) ){

    // ambil id dari query string
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM notifikasi_dosen WHERE id_pd=$id";
    $query = mysqli_query($con, $sql);

    // apakah query hapus berhasil?
    if( $query ){

    echo "<script> 
        document.location.href = 'surat-terkirim-dosen.php';
            alert('Data berhasil dihapus!');
           
           
            </script>";

    } else {
        echo "<script> 
        document.location.href = 'surat-terkirim-dosen.php';
            alert('Data gagal dihapus!');
           
           
            </script>";
    }

} else {
    die("akses dilarang...");
}

?>