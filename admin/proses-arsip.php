<?php
include("../koneksi.php");

if(isset($_GET['arsip_dosen'])){

    // ambil data dari formulir
    $nama = $_GET['input_nama'];
    $nim = $_GET['input_nim'];
    $email = $_GET['input_email'];
    $telpon = $_GET['input_telp'];
    $jensu = $_GET['jensu'];
    $tanggal = $_GET['tanggal'];
    $alamat = $_GET['alamat_mitra'];
    $mitra = $_GET['nama_mitra'];
    $ket = $_GET['keterangan'];
    $files = $_GET['files'];


    $sql = "INSERT INTO arsip_admin_dosen VALUES ('', '$nama', '$nim', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket', '$files')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('arsip berhasil dikirim!');
                document.location.href = 'pengajuan-dosen.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('arsip gagal dikirim!');
                document.location.href = 'pengajuan-dosen.php';
                </script>";
    }
}

elseif(isset($_GET['arsip_mhs'])){

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
    $sql = "INSERT INTO arsip_admin_user VALUE ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan',  '$ket', '$mitra', '$alamat', '$email', '$telpon', '$jensu', '$tanggal')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('arsip Berhasil dikirim!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('arsip gagal dikirim!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    }


}

?>