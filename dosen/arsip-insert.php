<?php
include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_GET['arsip_konfirmasi'])){

    // ambil data dari formulir
    $nama = $_GET['input_nama'];
    $nim = $_GET['input_nim'];
    $email = $_GET['input_email'];
    $telpon = $_GET['input_telp'];
    $mitra = $_GET['nama_mitra'];
    $alamat = $_GET['alamat_mitra'];
    $ket = $_GET['keterangan'];
    $jensu = $_GET['jensu'];
    $tanggal = $_GET['tanggal'];
    $files = $_GET['files'];
    $pejabat = $_GET['pejabat'];


    // buat query
    $sql = "INSERT INTO arsip_dosen VALUES ('', '$nama', '$nim', '$email', '$telpon', '$tanggal','$alamat', '$mitra', '$ket', '$files', '$jensu', '$pejabat')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        
        echo " <script> 
                alert('Arsip Berhasil dikirim!');
                document.location.href = 'kirim.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Arsip gagal dikirim!');
                document.location.href = 'kirim.php';
                </script>";
    }


}

elseif(isset($_GET['arsip_tolak'])){

    // ambil data dari formulir
    $nama = $_GET['input_nama'];
    $nim = $_GET['input_nim'];
    $email = $_GET['input_email'];
    $telpon = $_GET['input_telp'];
    $mitra = $_GET['nama_mitra'];
    $alamat = $_GET['alamat_mitra'];
    $ket = $_GET['keterangan'];
    $jensu = $_GET['jensu'];
    $tanggal = $_GET['tanggal'];
    $files = $_GET['files'];



    // buat query
    $sql = "INSERT INTO arsip_dosen VALUES ('', '$nama', '$nim', '$email', '$telpon', '$tanggal','$alamat', '$mitra', '$ket', '$files', '$jensu', '')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        
        echo " <script> 
                alert('Arsip Berhasil dikirim!');
                document.location.href = 'kirim-tolak.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Arsip gagal dikirim!');
                document.location.href = 'kirim-tolak.php';
                </script>";
    }


}

elseif(isset($_GET['arsip_pu'])){
    $nama = $_GET['input_nama'];
    $nim = $_GET['input_nim'];
    $email = $_GET['input_email'];
    $telpon = $_GET['input_telp'];
    $jensu = $_GET['jensu'];
    $tanggal = $_GET['tanggal'];
    $alamat = $_GET['tujuan'];
    $mitra = $_GET['nama_mitra'];
    $ket = $_GET['keterangan'];
    $files = $_GET['files'];


    $sql = "INSERT INTO arsip_dosen VALUES ('', '$nama', '$nim', '$email', '$telpon', '$tanggal','$alamat', '$mitra', '$ket', '$files', '$jensu', '')";
    $query = mysqli_query($con, $sql);

    

    // apakah query simpan berhasil?
    if( $query ) {
        
        echo " <script> 
                alert('Arsip Berhasil dikirim!');
                document.location.href = 'surat-keluar.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Arsip gagal dikirim!');
                document.location.href = 'surat-keluar.php';
                </script>";
    }


}
else {
    die("Akses Dilarang");
}
?>