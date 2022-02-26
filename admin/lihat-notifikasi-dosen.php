
<?php

include("../koneksi.php");
session_start();
/* if disini untuk men-cek apakah ada session["username"] yang telah di set, jika belum maka akan diarahkan ke file login.php */
if(!isset($_SESSION["nama"])){
    if(!isset($_SESSION["status"])){
    header("location: ../login.php");
}
 header("location: ../login.php");
}
if( !isset($_GET['id']) ){
    header('Location: pengajuan-dosen.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM notifikasi_dosen WHERE id_pd=$id";
$query = mysqli_query($con, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}


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
            <a href="pengajuan-dosen.php">
                <i class='bx bx-edit' ></i>
                <span class="link_name">Pengajuan</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="pengajuan-dosen.php">Pengajuan</a></li>
            </ul>
        </li>
        <li>
            <a href="surat-terkirim.php">
                <i class='bx bx-list-check' ></i>
                <span class="link_name">Surat Terkirim</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="surat-terkirim.php">Surat Terkirim</a></li>
            </ul>
        </li>
        <li>
            <a href="arsip-admin.php">
                <i class='bx bxs-archive-in'></i>
                <span class="link_name">Arsip</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="arsip-admin.php">Arsip</a></li>
            </ul>
        </li>
        <li>
            <a href="logout.php">
                <i class='bx bx-log-in'></i>
                <span class="link_name">Logout</span>
            </a>
            <ul class="sub-menu">
            <li><a class="link_name" href="logout.php">Logout</a></li>
            </ul>
        </li>
        
    </ul>
    </div>
    <!-- end sidebar -->
    
    <br>
    <div class="halaman">
    <h1 style="text-align: center;">Meninjau Surat</h1>
    <div class="container">
        <div class="hero1">
            <h1><b><?php echo $siswa['jenis_surat_pd'] ?></b></h1>
            <hr><br><br>
         

            <form action="konfirmasi.php" method="GET">
            <div class="row">
                    <div class="col-5">
                        NIK Dosen <br>
                        <input type="text" name="input_nim" placeholder="72190345" class="form-control" value="<?php echo $siswa['nik_pd'] ?>" >
                    </div>

                    <div class="col-7" >
                        Nama Dosen <br>
                        <input type="text" name="input_nama" placeholder="Joey Sapakoly" value="<?php echo $siswa['nama_pd'] ?>" class="form-control"><br><br><br>
                    </div>
                
                </div>

          
                <div class="row">
                    <div class="col-6 ">
                        Email Dosen <br>
                        <input type="text" name="input_email" placeholder="iniemailsaya@fti.ukdw.ac.id" value="<?php echo $siswa['email_pd'] ?>" class="form-control" ><br><br>
                    </div>
                    <div class="col-6">
                        Nomor Telepon Dosen <br>
                        <input type="text" name="input_telp" placeholder="0812 3456 7789" value="<?php echo $siswa['telpon_pd'] ?>" class="form-control"><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <label for="floatingSelect">Pilih Jenis Surat</label>
                        <select name="jensu" class="form-control " placeholder="Pilih Jeis Surat">
                            <option><?php echo $siswa['jenis_surat_pd'] ?></option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="date">Masukkan Tanggal Pelaksanaan Kegiatan</label>
                        <input class="form-control" type="date" value="<?php echo $siswa['tanggal_pd'] ?>" name="tanggal" >
                    </div>
                </div><br>

                <div class="row-cols-1">
                   Lokasi Kegiatan <br>
                    <input type="text" name="alamat_mitra" placeholder="Lokasi Kegiatan" value="<?php echo $siswa['lokasi_kegiatan_pd'] ?>" class="form-control"> <br><br>
                
                    Nama Mitra <br>
                    <input type="text" name="nama_mitra" placeholder="Nama Mitra" value="<?php echo $siswa['nama_mitra_pd'] ?>" class="form-control"> <br><br>

                    <label for="Keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" value="<?php echo $siswa['keterangan_pd'] ?>" cols="100" rows="10" class="form-control"><?php echo $siswa['keterangan_pd'] ?></textarea><br><br>

                    <label for="">Sertakan File Jika Ada</label>
                    <p><b><?php echo $siswa['file_pd'] ?></b></p><br><br>
                    <input type="text" style="display:none;" name="files" value="<?php echo $siswa['file_pd'] ?>">
               
                </div>
            <div class="row">
                <div class="col-3">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>No. Surat</b></label><b>/B/FTI/2021</b><br>
                    <input type="input" width="5%" aria-describedby="emailHelp" class="form-control" name="id" value="<?php echo $siswa['id_pd'] ?>" >
                    <div style="color:red;" id="emailHelp" class="form-text">*Diisikan otomatis oleh sistem.</div><br>
                  </div>
                  <div class="mb-3">
                        <label for="pejabat" class="form-label"><b> Pilih Pejabat Yang Mengesahkan</b></label><br>
                        <select class="form-control" name="pejabat"><br>
                            <option><?php echo $siswa['pejabat'] ?></option>
                        </select>
                    </div>
                </div>
            </div>
<!--          
              <button type="submit" class="btn btn6 btn-success"  name="konfirmasi_dosen">Konfirmasi</button>
              <button type="submit" class="btn btn-danger" name="tolak_dosen">Tolak</button>  -->
            </form>
        </div>
    </div><br><br><br><br>
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