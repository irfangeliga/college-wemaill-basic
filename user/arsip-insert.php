<?php
include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_GET['arsip_konfirmasi'])){

    // ambil data dari formulir
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
    $pejabat = $_GET['pejabat'];
   



    // buat query
    $sql = "INSERT INTO arsip_user VALUES ('',  '$tujuan', '$ket', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$mitra', '$alamat', '$email', '$telpon', '$jensu', '$tanggal','$pejabat')";
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
    $sql = "INSERT INTO arsip_user  VALUES ('',  '$tujuan', '$ket', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$mitra', '$alamat', '$email', '$telpon', '$jensu', '$tanggal','')";
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

    // ambil data dari formulir

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
    $sql = "INSERT INTO arsip_user VALUES ('',  '$tujuan', '$ket', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$mitra', '$alamat', '$email', '$telpon', '$jensu', '$tanggal','')";
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