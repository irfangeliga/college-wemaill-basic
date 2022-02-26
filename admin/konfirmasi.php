<?php

include("../koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_GET['konfirmasi'])){

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
   

    // $sql = "INSERT INTO notifikasi_mhs (id, nama, nim, nama2, nim2, nama3, nim3, nama4, nim4, nama5, nim5, email, telpon, tujuan, nama_mitra, alamat_mitra, keterangan, jenis_surat, tanggal) 
    // VALUE ('$id', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$email', '$telpon', '$tujuan', '$mitra', '$alamat', '$ket', '$jensu', '$tanggal')";
    // $query = mysqli_query($con, $sql);

    $sql = "INSERT INTO notifikasi_mhs VALUES ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan',  '$mitra', '$alamat', '$ket', '$email', '$telpon',  '$jensu', '$tanggal', '$pejabat')";
    $query = mysqli_query($con, $sql);

    // buat query
    $sql = "INSERT INTO konfirmasi VALUE ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan',  '$mitra', '$alamat', '$ket', '$email', '$telpon',  '$jensu', '$tanggal', '$pejabat')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil dikirim!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Pengajuan gagal dikonfirmasi!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    }


}
elseif(isset($_GET['tolak'])){

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
    
   

    $sql = "INSERT INTO notifikasi_mhs VALUES ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan',  '$mitra', '$alamat', '$ket', '$email', '$telpon',  '$jensu', '$tanggal','')";
    $query = mysqli_query($con, $sql);


    // buat query
    $sql = "INSERT INTO tolak VALUES ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan',  '$mitra', '$alamat', '$ket', '$email', '$telpon',  '$jensu', '$tanggal')";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil ditolak!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Pengajuan gagal ditolak!');
                document.location.href = 'pengajuan-mhs.php';
                </script>";
    }


}

// elseif(isset($_GET['arsip_konfirmasi'])){

//     // ambil data dari formulir
//     $nama = $_GET['input_nama'];
//     $nim = $_GET['input_nim'];
//     $nama2 = $_GET['input_nama2'];
//     $nim2 = $_GET['input_nim2'];
//     $nama3 = $_GET['input_nama3'];
//     $nim3 = $_GET['input_nim3'];
//     $nama4 = $_GET['input_nama4'];
//     $nim4 = $_GET['input_nim4'];
//     $nama5 = $_GET['input_nama5'];
//     $nim5 = $_GET['input_nim5'];
//     $email = $_GET['input_email'];
//     $telpon = $_GET['input_telp'];
//     $tujuan = $_GET['tujuan'];
//     $mitra = $_GET['nama_mitra'];
//     $alamat = $_GET['alamat_mitra'];
//     $ket = $_GET['keterangan'];
//     $jensu = $_GET['jensu'];
//     $tanggal = $_GET['tanggal'];
//     $pejabat = $_GET['pejabat'];
   

//     // buat query
//     $sql = "INSERT INTO tolak VALUE ('', '$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$email', '$telpon', '$tujuan', '$mitra', '$alamat', '$ket', '$jensu', '$tanggal')";
//     $query = mysqli_query($con, $sql);

    
    

//     // apakah query simpan berhasil?
//     if( $query ) {
//         // kalau berhasil alihkan ke halaman index.php dengan status=sukses
//         echo " <script> 
//                 alert('arsip Berhasil dikirim!');
//                 document.location.href = 'arsip-admin.php';
//                 </script>";
//     } else {
//         // kalau gagal alihkan ke halaman indek.php dengan status=gagal
//         echo " <script> 
//                 alert('arsip gagal dikirim!');
//                 document.location.href = 'arsip-admin.php';
//                 </script>";
//     }


// }

elseif(isset($_GET['konfirmasi_dosen'])){

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
    $pejabat = $_GET['pejabat'];


    $sql = "INSERT INTO konfirmasi_dosen VALUES ('', '$nama', '$nim', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket', '$files', '$pejabat')";
    $query = mysqli_query($con, $sql);

    $sql = "INSERT INTO notifikasi_dosen VALUES ('', '$nim', '$nama', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket', '$files', '$pejabat' )";
    $query = mysqli_query($con, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('pengajuan berhasil dikonfirmasi');
                document.location.href = 'pengajuan-dosen.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Pengajuan gagal dikonfirmasi!');
                document.location.href = 'pengajuan-dosen.php';
                </script>";
    }
}

    elseif(isset($_GET['tolak_dosen'])){

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

    $sql = "INSERT INTO notifikasi_dosen VALUES ('', '$nim', '$nama', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket', '$files', '' )";
    $query = mysqli_query($con, $sql);
    
    // buat query
    $sql = "INSERT INTO reject VALUES ('', '$nama', '$nim', '$email', '$telpon', '$mitra', '$alamat',  '$ket', '$jensu',  '$tanggal', '$files')";
    $query = mysqli_query($con, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            echo " <script> 
                    alert('pengajuan berhasil ditolak');
                    document.location.href = 'pengajuan-dosen.php';
                    </script>";
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            echo " <script> 
                    alert('Pengajuan gagal ditolak!');
                    document.location.href = 'pengajuan-dosen.php';
                    </script>";
        }
    }
else {
    die("Akses dilarang...");
}

?>