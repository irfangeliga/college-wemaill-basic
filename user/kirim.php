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
                </strong></a>
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
    
    <!-- kotak masuk -->
    <div><br><br>
    <h1 style="opacity: 60%;" class="text-center fw-bold mt-5 mb-5">Surat Masuk Konfirmasi</h1>
        <div class="row">
            <div class="col-6" >
            <ul class="nav me-auto mb-2 mb-lg-0" style="margin-left:40%;">
                    <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="kirim.php">Konfirmas</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="kirim-tolak.php" data-toggle="tab">Tolak</a>
                    </li>
                    
                </ul><br>
            </div>

            <div class="col-6 text-white">
                <span style="border:3px solid #ffffff;;height:1%; padding: 1%;padding-left: 1%;width:80%;margin-left: 25%; 
                border-radius: 10px;opacity: 100%;background-color:#000000;opacity: 80%;margin-right: auto;">
                keterangan Pengajuam : 
                    <img src="./image/hijau.png" alt="hijau"> Diterima&nbsp;&nbsp; <img src="./image/merah.png" class="img-fluid" alt="merah"> Ditolak</span>
            </div>
        </div>

        <div class="container hero2" >
            <br><br>
            <div class="row">
                <div class="col-12">
                <table  class="me-3 ms-3">
                    <thead>
                        <tr>
                            <th width="2%"></th>
                            <th width="10%"></th>
                            <th width="10%"></th>   
                        </tr>
                </thead>
                    <tbody>
                        <?php
                           

                            $sql = "SELECT * FROM konfirmasi ORDER BY id_konfirmasi DESC";
                            $query = mysqli_query($con, $sql);
                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>";
                                echo "<td>"."<img src='./image/hijau.png' alt='kotak hijau' class='img-fluid mt-2'>"."</td>";
                                echo "<td>".$siswa['jenis_surat_konfirmasi']."</td>";
                                echo "<td class='text-end' style='margin-right:10%;'>";
                                echo "<a class='btn btn-primary ' href='surat-masuk.php?id=".$siswa['id_konfirmasi']."'>Lihat</a> | ";
                                echo "<a class='btn btn-warning ' href='proses-arsip-konfirmasi.php?id=".$siswa['id_konfirmasi']."'><i class='bx bx-archive-in' ></i></a> | ";
                                echo "<a class='btn btn-danger' href='hapus-kirim.php?id=".$siswa['id_konfirmasi']."'><i class='bx bx-trash' ></i>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>"."</td>";
                                echo "<td>".$siswa['tanggal_konfirmasi']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>"."<hr>"."</td>";
                                echo "<td>"."<hr>"."</td>";
                                echo "<td>"."<hr>"."</td>";
                                echo "</tr>";
                                
                                }
                            
                        ?>
                    </tbody>
                </table><br><br>
                

        <div>
            <a class="btn btn-primary " style="margin-left: 90%;" href="buat-surat.php">Buat Surat</a>
        </div><br><br>
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