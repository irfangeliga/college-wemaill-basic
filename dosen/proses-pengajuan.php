<?php

include("../koneksi.php");

if(isset($_POST['draft-dosen'])){

    // ambil data dari formulir

    $nama = $_POST['input_nama'];
    $nim = $_POST['input_nim'];
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat_mitra'];
    $mitra = $_POST['nama_mitra'];
    $ket = $_POST['keterangan'];

    $direktori = "image/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);

    // buat query
    $sql = "INSERT INTO draft_dosen (nama_draft, nik_draft, email_draft, telpon_draft, jenis_surat_draft, tanggal_draft, lokasi_kegiatan_draft, nama_mitra_draft, keterangan_draft, file_draft) 
    VALUE ('$nama', '$nim', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket', '$file_name')";
    $query = mysqli_query($con, $sql);
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo " <script> 
                alert('Pengajuan Berhasil didraft!');
                document.location.href = 'index.php';
                </script>";
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo " <script> 
                alert('Pengajuan gagal didraft!');
                document.location.href = 'index.php';
                </script>";
    }
}


// cek apakah tombol daftar sudah diklik atau blum?
elseif(isset($_POST['ajukan-dosen'])){

    // ambil data dari formulir

   
    $nama = $_POST['input_nama'];
    $nim = $_POST['input_nim'];
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat_mitra'];
    $mitra = $_POST['nama_mitra'];
    $ket = $_POST['keterangan'];
 

    $direktori = "image/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);


    $sql = "INSERT INTO pengajuan_dosen (nama_pd, nik_pd, email_pd, telpon_pd,  jenis_surat_pd, tanggal_pd, lokasi_kegiatan_pd, nama_mitra_pd,  keterangan_pd, file_pd) 
    VALUE ('$nama', '$nim', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat', '$mitra', '$ket','$file_name')";
    $query = mysqli_query($con, $sql);

    $sql = "INSERT INTO pda (nama_pda, nik_pda, email_pda, telpon_pda,  jenis_surat_pda, tanggal_pda, lokasi_kegiatan_pda, nama_mitra_pda,  keterangan_pda, file_pda) 
    VALUE ('$nama', '$nim', '$email', '$telpon', '$jensu',  '$tanggal', '$alamat','$mitra', '$ket', '$file_name')";
    $query = mysqli_query($con, $sql);

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
    $email = $_POST['input_email'];
    $telpon = $_POST['input_telp'];
    $jensu = $_POST['jensu'];
    $tanggal = $_POST['tanggal'];
    $alamat = $_POST['alamat_mitra'];
    $mitra = $_POST['nama_mitra'];
    $ket = $_POST['keterangan'];
 
    $direktori = "image/";
    $file_name = $_FILES['NamaFile']['name'];
    move_uploaded_file($_FILES['NamaFile']['tmp_name'],$direktori.$file_name);
    // buat query update
    $sql = "UPDATE draft_dosen SET nama_draft ='$nama', nik_draft ='$nim' , nama_mitra_draft =  '$mitra', lokasi_kegiatan_draft = '$alamat', keterangan_draft = '$ket', email_draft = '$email', telpon_draft = '$telpon', jenis_surat_draft = '$jensu', tanggal_draft = '$tanggal', file_draft = '$file_name' WHERE id_draft = $id";
    $query = mysqli_query($con, $sql);
    
  
    // apakah query update berhasil?
    if( $query ) {

        echo "<script> 
        document.location.href = 'draft.php';
            alert('Data berhasil simpan!');
           
           
            </script>";
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }


}
else {
    die("Akses dilarang...");
}

?>