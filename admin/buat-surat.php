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
    <h1 style="text-align: center;">Buat Surat</h1>
    <div class="container">
        <div class="hero1">
            <h1><b>Surat Keputusan Dekan</b></h1>
            <hr><br><br>
            <form>
              <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Nomor Surat</b></label><br>
                <input type="input" width="5%" placeholder="No surat"aria-describedby="emailHelp"  ><b> / B / FTI / 2021</b>
              </div><br>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Judul Surat</b></label>
                <input type="input" placeholder="Masukkan judul surat" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div><br>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Menimbang</b></label>
                <input type="text-area" placeholder="isi poin penting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div><br>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Mengingat</b></label>
                <input type="text-area" placeholder="isi poin penting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div><br>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label"><b>Menetapkan</b></label>
                <input type="text-area" placeholder="isi poin penting" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div><br>
              <div class="row">
                <div class="col-4">
                  <div class="mb-3 me-5">
                    <label for="exampleInputEmail1" class="form-label"><b>Lokasi Penetapan</b></label><br>
                    <input type="input" width="5%" placeholder="lokasi penetapan"aria-describedby="emailHelp" class="form-control">
                  </div>
                </div>
                <div class="col-4">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><b>Tanggal Penetapan</b></label><br>
                    <input type="date" width="5%" placeholder="lokasi penetapan"aria-describedby="emailHelp" class="form-control align-it" >
                  </div>
                </div>
              </div>
              <a href="" class="btn btn5 btn-success">kirim</a>
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