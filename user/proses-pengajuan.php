<?php

include("../koneksi.php");

if(isset($_POST['draft'])){

    // ambil data dari formulir

    $nama = $_POST['input_nama'];
    $nim = $_POST['input_nim'];
    $nama2 = $_POST['input_nama2'];
    $nim2 = $_POST['input_nim2'];
    $nama3 = $_POST['input_nama3'];
    $nim3 = $_POST['input_nim3'];
    $nama4 = $_POST['input_nama4'];
    $nim4 = $_POST['input_nim4'];
    $nama5 = $_POST['input_nama5'];
    $nim5 = $_POST['input_nim5'];
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $tujuan = $_POST['tujuan'];
    $mitra = $_POST['nama_mitra'];
    $alamat = $_POST['alamat_mitra'];
    $ket = $_POST['keterangan'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];




    // buat query
    $sql = "INSERT INTO draft (nama__draft, nim_draft, nama2_draft, nim2_draft, nama3_draft, nim3_draft, nama4_draft, nim4_draft, nama5_draft, nim5_draft, tujuan_draft, nama_mitra_draft, alamat_mitra_draft, keterangan_draft, email_draft, telpon_draft, jenis_surat_draft, tanggal_draft) 
    VALUE ('$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$tujuan', '$mitra', '$alamat', '$ket', '$email', '$telpon', '$jensu', '$tanggal')";
    $query = mysqli_query($con, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil dikirim!');
                document.location.href = 'index.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: index.php?status=gagal');
    }
}


// cek apakah tombol daftar sudah diklik atau blum?
elseif(isset($_POST['ajukan'])){

    // ambil data dari formulir

    $nama = $_POST['input_nama'];
    $nim = $_POST['input_nim'];
    $nama2 = $_POST['input_nama2'];
    $nim2 = $_POST['input_nim2'];
    $nama3 = $_POST['input_nama3'];
    $nim3 = $_POST['input_nim3'];
    $nama4 = $_POST['input_nama4'];
    $nim4 = $_POST['input_nim4'];
    $nama5 = $_POST['input_nama5'];
    $nim5 = $_POST['input_nim5'];
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $tujuan = $_POST['tujuan'];
    $mitra = $_POST['nama_mitra'];
    $alamat = $_POST['alamat_mitra'];
    $ket = $_POST['keterangan'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];
    $id = $_POST['id_user'];




    // buat query
    $sql = "INSERT INTO pengajuan (nama, nim, nama2, nim2, nama3, nim3, nama4, nim4, nama5, nim5, email, telpon, tujuan, nama_mitra, alamat_mitra, keterangan, jenis_surat, tanggal) 
    VALUE ('$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$email', '$telpon', '$tujuan', '$mitra', '$alamat', '$ket', '$jensu', '$tanggal')";
    $query = mysqli_query($con, $sql);

    $sql = "INSERT INTO pengajuan_user (nama_pu, nim_pu, nama2_pu, nim2_pu, nama3_pu, nim3_pu, nama4_pu, nim4_pu, nama5_pu, nim5_pu, email_pu, telpon_pu, tujuan_pu, nama_mitra_pu, alamat_mitra_pu, keterangan_pu, jenis_surat_pu, tanggal_pu,id) 
    VALUE ('$nama', '$nim', '$nama2', '$nim2', '$nama3', '$nim3', '$nama4', '$nim4', '$nama5', '$nim5', '$email', '$telpon', '$tujuan', '$mitra', '$alamat', '$ket', '$jensu', '$tanggal','$id')";
    $query = mysqli_query($con, $sql);

   


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil dikirim!');
                document.location.href = 'index.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
        alert('Pengajuan gagal dikirim!');
        document.location.href = 'index.php';
        </script>";
    }


}

elseif(isset($_POST['simpan'])){

    // ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['input_nama'];
    $nim = $_POST['input_nim'];
    $nama2 = $_POST['input_nama2'];
    $nim2 = $_POST['input_nim2'];
    $nama3 = $_POST['input_nama3'];
    $nim3 = $_POST['input_nim3'];
    $nama4 = $_POST['input_nama4'];
    $nim4 = $_POST['input_nim4'];
    $nama5 = $_POST['input_nama5'];
    $nim5 = $_POST['input_nim5'];
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $tujuan = $_POST['tujuan'];
    $mitra = $_POST['nama_mitra'];
    $alamat = $_POST['alamat_mitra'];
    $ket = $_POST['keterangan'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];

    // buat query update
    $sql = "UPDATE draft SET nama__draft ='$nama', nim_draft ='$nim' , nama2_draft = '$nama2' , nim2_draft = '$nim2', nama3_draft = '$nama3', nim3_draft = '$nim3', nama4_draft = '$nama4', nim4_draft = '$nim4', nama5_draft = '$nama5', nim5_draft = '$nim5', tujuan_draft = '$tujuan', nama_mitra_draft =  '$mitra', alamat_mitra_draft = '$alamat', keterangan_draft = '$ket', email_draft = '$email', telpon_draft = '$telpon', jenis_surat_draft = '$jensu', tanggal_draft = '$tanggal' WHERE id_draft = $id";
    $query = mysqli_query($con, $sql);
    
  
    // apakah query update berhasil?
    if( $query ) {

        echo "<script> 
        document.location.href = 'draft.php';
            alert('Data berhasil disimpan!');
           
           
            </script>";
    } else {
        echo "<script> 
        document.location.href = 'draft.php';
            alert('Data gagal disimpan!');
            </script>";
    }


}
else {
    die("Akses dilarang...");
}

?>