<?php
session_start();
/* if disini untuk men-cek apakah ada session["username"] yang telah di set, jika belum maka akan diarahkan ke file login.php */
if(!isset($_SESSION["nama"])){
    if(!isset($_SESSION["status"])){
    header("location: ../login.php");
}
 header("location: ../login.php");
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
    <h2 class="judul_bs mt-3 mb-3">Pengajuan Surat</h2>
    <div  class="container hero2" style="padding:5%">
        <div class="me-2 ms-2">
            <h3>Buat Surat</h3>
            <hr size="3px" width="100%" class="garis_bs" ><br>

        <form action="proses-pengajuan.php" method="POST">
            <div class="row">
                <div class="col-5">
                    NIM (Nomor Induk Mahasiswa) <br>
                    <input type="text" name="input_nim"  class="form-control" >
                     
                </div>

                <div class="col-7" >
                    Nama Mahasiswa <br>
                    <input type="text" name="input_nama"  class="form-control"><br><br><br>
                </div>
             
            </div>

            <div class="row">
                <div class="col-5">
                    <b>Tambah Mahasiswa</b> <br>
                    NIM Mahasiswa 2 <br>
                    <input type="text" name="input_nim2"  class="form-control" >
                    <span class="peringatan">*bila ada</span><br><br>
                </div>

                <div class="col-7" >
                    <br>  Nama Mahasiswa 2 <br>
                    <input type="text" name="input_nama2" class="form-control">
                    <span class="peringatan">*bila ada</span><br><br><br>
                </div>
             
            </div>

            <div class="row">
                <div class="col-5">
                    NIM Mahasiswa 3 <br>
                    <input type="text" name="input_nim3"  class="form-control" >
                    <span class="peringatan">*bila ada</span><br><br>
                </div>

                <div class="col-7" >
                    Nama Mahasiswa 3 <br>
                    <input type="text" name="input_nama3"  class="form-control">
                    <span class="peringatan">*bila ada</span><br><br><br>
                </div>
             
            </div>

            <div class="row">
                <div class="col-5">
                    NIM Mahasiswa 4 <br>
                    <input type="text" name="input_nim4"  class="form-control" >
                    <span class="peringatan">*bila ada</span><br><br>
                </div>

                <div class="col-7" >
                    Nama Mahasiswa 4 <br>
                    <input type="text" name="input_nama4"  class="form-control">
                    <span class="peringatan">*bila ada</span><br><br><br>
                </div>
             
            </div>
           
            <div class="row">
                <div class="col-5">
                    NIM Mahasiswa 5 <br>
                    <input type="text" name="input_nim5"  class="form-control" >
                    <span class="peringatan">*bila ada</span><br><br>
                </div>

                <div class="col-7" >
                    Nama Mahasiswa 5 <br>
                    <input type="text" name="input_nama5" class="form-control">
                    <span class="peringatan">*bila ada</span><br><br><br>
                </div>
             
            </div>

                <div class="row">
                    <div class="col-6 ">
                        Email Mahasiswa <br>
                        <input type="text" name="input_email" class="form-control" ><br><br>
                    </div>
                    <div class="col-6">
                        Nomor Telepon Mahasiswa <br>
                        <input type="text" name="input_telp" class="form-control"><br><br>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                    <label for="floatingSelect">Pilih Jenis Surat</label>
                        <select name="jensu" class="form-control " >
                            <option>Surat Manual</option>
                            <option>Permohonan Surat Izin KP - A</option>
                            <option>Surat Keterangan - B</option>
                            <option>Surat Permohonan Keringanan Spp - B</option>
                            <option>Surat Permohonan Beasiswa - B</option>
                            <option>Surat Keterangan - B</option>
                        </select>
                    </div>
                    <div class="col-6">
                        <label for="date">Masukkan Tanggal</label>
                        <input class="form-control" type="date" name="tanggal" >
                    </div>
                </div><br>

                <div class="row-cols-1">
                    Tujuan Surat <br>
                <input type="text" name="tujuan" class="form-control"> <br><br>
                
                Nama Mitra <br>
                <input type="text" name="nama_mitra" class="form-control"> <br><br>

                Alamat Mitra <br>
                <input type="text" name="alamat_mitra" class="form-control"><br><br>

                    <label for="Keterangan">Keterangan</label>
                    <textarea name="keterangan" class="form-control" cols="100" rows="10" class="form-control"></textarea><br><br>
               
                </div>
   
            <div class="text-end">
                <input  type="submit" class="btn btn-warning me-3" value="Jadikan Draft" name="draft">
                <input type="submit" class="btn btn-primary" value="Ajukan Surat" name="ajukan">
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