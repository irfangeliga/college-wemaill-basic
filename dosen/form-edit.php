<?php
include('../koneksi.php');

if( !isset($_GET['id']) ){
    header('Location: draft.php');
}
session_start();
/* if disini untuk men-cek apakah ada session["username"] yang telah di set, jika belum maka akan diarahkan ke file login.php */
if(!isset($_SESSION["nama"])){
    if(!isset($_SESSION["status"])){
    header("location: ../login.php");
}
 header("location: ../login.php");
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM draft_dosen WHERE id_draft = '$id'";
$query = mysqli_query($con, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}



    // ambil id dari query string
    

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="background: rgb(228, 224, 224);">
    <!-- navbar -->
    <div class="sticky-nav">
        <nav class="navbar navbar-light">
            <div class="container-fluid">
            <a class="navbar-brand" style="color: white;">We<strong>Mail</strong></a>
            <form class="d-flex">
            <a class="navbar-brand" style="color: white;">
                    <p><?php echo $_SESSION['nama'] ?><br>
                    <i class="fs-6"><?php echo $_SESSION['status'] ?></i></p>
                </a>
                <img src="image/avatar.png" alt="" width="30" height="24">
            </form>
            </div>
        </nav>
    </div>
    <!-- endnavbar -->

    <!-- sidebar -->
    <div class="sidebar close">
        <div class="logo-details">
        <i class='bx bx-menu' style="color: black;"></i>
        <!-- <span class="logo_name">CodingLab</span> -->
        </div>
        <ul class="nav-links">
        <li>
            <a href="index.php">
            <i class='bx bx-bar-chart-alt-2 bx-flip-horizontal'></i>
            <span class="link_name">Dashboard</span>
            </a>
            <ul class="sub-menu blank">
            <li><a class="link_name" href="index.php">Dashboard</a></li>
            </ul>
        </li>
        <li>
            <a href="kirim.php">
                <i class='bx bx-envelope'></i>
                <span class="link_name">Surat Masuk</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="kirim.php">Surat Masuk</a></li>
            </ul>
        </li>
        <li>
            <a href="surat-keluar.php">
                <i class='bx bxl-telegram'></i>
                <span class="link_name">Surat Keluar</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="surat-keluar.php">Surat Keluar</a></li>
            </ul>
        </li>
        <li>
            <a href="arsip.php">
                <i class='bx bxs-archive-in'></i>
                <span class="link_name">Arsip</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="arsip.php">Arsip</a></li>
            </ul>
        </li>
        <li>
            <a href="draft.php">
                <i class='bx bx-edit'></i>
                <span class="link_name">Draft</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="draft.php">Draft</a></li>
            </ul>
        </li>
        <li>
            <a href="../admin/logout.php">
                <i class='bx bx-log-in'></i>
                <span class="link_name">Logout</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="../admin/logout.php">Logout</a></li>
            </ul>
        </li>
    </ul>
    </div>
    
    <!-- end sidebar -->
    
<div>
    <br><br><br><br>
    <h2 class="judul_bs mt-3 mb-3">Edit Pengajuan Surat</h2>
    <div class="container hero2">
        <div class="me-2 ms-2">
            <br><br>
            <h3><?php echo $siswa['jenis_surat_draft'] ?></h3>
            <hr size="3px" width="100%" class="garis_bs" ><br>

        <form action="proses-pengajuan.php" method="POST" enctype="multipart/form-data">

            <div class="row">
                <input  type="hidden" name="id" value="<?php echo $siswa['id_draft'] ?>" />
                <div class="col-5">
                    NIM (Nomor Induk Mahasiswa) <br>
                    <input type="text" name="input_nim" placeholder="72190345" value="<?php echo $siswa['nik_draft'] ?>" class="form-control" >
                    <span class="peringatan">*Nim tidak dapat diubah</span>
                </div>

                <div class="col-7" >
                    Nama Mahasiswa <br>
                    <input type="text" name="input_nama" placeholder="Joey Sapakoly" value="<?php echo $siswa['nama_draft'] ?>" class="form-control" value="<?php  ?>">
                    <span class="peringatan">*Nama mahasiswa tidak dapat diubah</span><br><br><br>
                </div>
             
            </div>


                <div class="row">
                    <div class="col-6 ">
                        Email Mahasiswa <br>
                        <input type="text" name="input_email" placeholder="iniemailsaya@fti.ukdw.ac.id" value="<?php echo $siswa['email_draft'] ?>" class="form-control" >
                        <span class="peringatan">*Email mahasiswa tidak dapat diubah</span><br><br>
                    </div>
                    <div class="col-6">
                        Nomor Telepon Mahasiswa <br>
                        <input type="text" name="input_telp" placeholder="0812 3456 7789" value="<?php echo $siswa['telpon_draft'] ?>" class="form-control">
                        <span class="peringatan">*Nomor Telponan mahasiswa tidak dapat diubah</span><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <label for="jensu">Pilih Jenis Surat</label>
                        <?php $jensu = $siswa['jenis_surat_draft'] ?>
                        <select name="jensu" class="form-control " placeholder="Pilih Jeis Surat">
                            <option <?php echo ($jensu == 'Surat Manual') ? "selected": "" ?>>Surat Manual</option>
                            <option <?php echo ($jensu == 'Surat Tugas Ke Fakultas') ? "selected": ""  ?>>Surat Tugas Ke Fakultas</option>
                            <option <?php echo ($jensu == 'Berita Acara') ? "selected": ""  ?>>Berita Acara</option>
                            <option <?php echo ($jensu == 'Surat Keterangan - A') ? "selected": ""  ?>>Surat Keterangan - A</option>
                            <option <?php echo ($jensu == 'Surat Keterangan - B') ? "selected": ""  ?>>Surat Keterangan - B</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="date">Masukkan Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" value="<?php echo $siswa['tanggal_draft'] ?>" >
                    </div>
                </div><br>

                <div class="row-cols-1">
                    Lokasi Kegiatan <br>
                    <input type="text" name="alamat_mitra" placeholder="Alamat Mitra" class="form-control" value="<?php echo $siswa['lokasi_kegiatan_draft'] ?>"><br><br>

                    Nama Mitra <br>
                    <input type="text" name="nama_mitra" placeholder="Nama Mitra" class="form-control" value="<?php echo $siswa['nama_mitra_draft'] ?>" > <br><br>

                    <label for="Keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" cols="100" rows="10" class="form-control" value="<?php echo $siswa['keterangan_draft'] ?>"><?php echo $siswa['keterangan_draft'] ?></textarea><br><br>

                    <label for="Keterangan">Sertakan File Jika Ada</label>
                    <input type="file" name="NamaFile" id="file" value="<?php echo $siswa['file_draft']?>" ><br><br>
                </div>
   
            <div class="text-end">
                <input  type="submit" class="btn btn-success me-3" value="Simpan" name="simpan">
                <input type="submit" class="btn btn-primary" value="Ajukan Surat" name="ajukan-dosen">
                <br><br>
            </div>
        </form>

        </div>
    </div>
</div>

    <script>
        let arrow = document.querySelectorAll(".arrow");
        for (var i = 0; i < arrow.length; i++) {
            arrow[i].addEventListener("click", (e)=>{
        let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
        arrowParent.classList.toggle("showMenu");
            });
        }
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".bx-menu");
        console.log(sidebarBtn);
        sidebarBtn.addEventListener("click", ()=>{
            sidebar.classList.toggle("close");
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>