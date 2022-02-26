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
            <a class="navbar-brand" style="color: white;" href="./index.html">We<strong>Mail</strong></a>
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
    <h1 style="text-align: center;">Surat Terkirim Mahasiswa</h1>
        <div class="container">
        <ul class="nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                    <a class="nav-link active" aria-current="page" href="surat-terkirim.php">Mahasiswa</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="surat-terkirim-dosen.php" data-toggle="tab">Dosen</a>
                    </li>
                    
                </ul><br>

            <div class="hero hero2 tab-pane" id="mahasiswa">
                    <br><br>
                    <table  class="me-5 ms-5">
                    <thead>
                        <tr>
                            <th width="85%"></th>
                            <th width="90%"></th>  
                        </tr>
                </thead>
                    <tbody>
                        <?php
                            include("../koneksi.php");

                            $sql = "SELECT * FROM notifikasi_mhs ORDER BY id DESC";
                            $query = mysqli_query($con, $sql);
                            while($siswa = mysqli_fetch_array($query)){
                                echo "<tr>";

                                echo "<td>".$siswa['jenis_surat']."</td>";
                                echo "<td class='text-end' style='margin-right:10%;'>";
                                echo "<a class='btn btn-primary ' href='lihat-notifikasi-mhs.php?id=".$siswa['id']."'>Lihat</a> | ";
                                echo "<a class='btn btn-danger' href='hapus-notifikasi-mhs.php?id=".$siswa['id']."'><i class='bx bx-trash' ></i>Hapus</a>";
                                echo "</td>";
                                echo "</tr>";

                                echo "<tr>";
                                echo "<td>".$siswa['tanggal']."</td>";
                                echo "</tr>";
                                echo "<tr>";
                                echo "<td>"."<hr>"."</td>";
                                echo "<td>"."<hr>"."</td>";
                                echo "</tr>";
                                
                                }
                            
                            
                        ?>
                    </tbody>
                </table><br><br>
                <a class="btn btn1" href="buat-surat.php" style="color: white;background-color:#ff8855;">Buat Surat</a>
                <br><br>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


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
    
</body>
</html>

