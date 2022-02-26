<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_GET['tolak'])){

    // ambil data dari formulir
    $id = $_GET['id'];
    $nama = $_GET['input_nama'];
    $nim = $_GET['input_nim'];
    $nama2 = $_GET['input_nama2'];
    $nim2 = $_GET['input_nim2'];
    $nama3 = $_GET['input_nama3'];
    $nim3 = $_GET['input_nim3'];
    $nama4 = $_GET['input_nama4'];
    $nim4 = $_GET['input_nim4'];
    $nama5 = $_GET['input_nama5'];
    $nim5 = $_GET['input_nim5'];
    $email = $_GET['input_email'];
    $telpon = $_GET['input_telp'];
    $tujuan = $_GET['tujuan'];
    $mitra = $_GET['nama_mitra'];
    $alamat = $_GET['alamat_mitra'];
    $ket = $_GET['keterangan'];
    $jensu = $_GET['jensu'];
    $tanggal = $_GET['tanggal'];
   



    // buat query
    $sql = "INSERT INTO konfirmasi (id_tolak, nama_tolak, nim_tolak, nama2_tolak, nim2_tolak, nama3_tolak, nim3_tolak, nama4_tolak, nim4_tolak, nama5_tolak, nim5_tolak, email_tolak, telpon_tolak, tujuan_tolak, nama_mitra_tolak, alamat_mitra_tolak, keterangan_tolak, jenis_surat_tolak, tanggal_tolak) 
    VALUE ('$id', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$email', '$telpon', '$tujuan', '$mitra', '$alamat', '$ket', '$jensu', '$tanggal')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil dikirim!');
                document.location.href = 'pengajuan-dosen.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>