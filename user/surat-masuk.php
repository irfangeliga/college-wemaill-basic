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
                    header('Location: kirim.php');
                }
                
                $id = $_GET['id'];
                $sql = "SELECT * FROM konfirmasi WHERE id_konfirmasi =$id";
                $query = mysqli_query($con, $sql);
                $siswa = mysqli_fetch_assoc($query);
                
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
            <script>
            function printPage() {
            window.print();
            
            }
            </script>
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

    <div class="container">
        <h1 style="text-align: center;">Surat Masuk</h1><br><br>
            <div class="hero2 hero">
                <br>
                <div class="row">
                    <div class="col-2">
                        <img src="image/logo.png" alt="" style="width: 70%;height:auto;">
                    </div>
                    <div class="col-10">
                        <h3>Universitas Kristen Duta Wacana </h3>
                        <h1>FAKULTAS TEKNOLOGI INFORMASI</h1>
                        <ul>
                            <li><p class="fs-4" >Program Studi Informatika</p></li>
                            <li> <p class="fs-4">Program Studi Sistem Informasi</p></li>
                        </ul>
                    </div>
                    <hr width="5px" size="5px">
                    <div class="judul" style="text-align: center">
                        <br>
                    <u><h2> <?php echo $siswa['jenis_surat_konfirmasi'] ?></h2></u>
                    NOMOR:&nbsp;<?php echo $siswa['id_konfirmasi'] ?> /B/FTI/2021 <br><br><br>
                    </div>
                    <div class="content">
                    <?php echo $siswa['keterangan_konfirmasi'] ?><br><br><br><br> 
                    </div>
                     
                <div class="konten">
                <table class="table table-bordered border-primary">
                    <thead class="text-center">
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nim</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        

                        <?php
                               
                                $no = 1;
                                $no2 = 2;
                                $no3 = 3;
                                $no4 = 4;
                                $no5 = 5;
                                
                                    echo "<tr>";
                                    
                                    echo "<td>".$no."</td>";
                                    echo "<td>".$siswa['nama_konfirmasi']."</td>";
                                    echo "<td>".$siswa['nim_konfirmasi']."</td>";

                                    
                                    echo "</tr>";

                                    if(!empty($siswa['nama2_konfirmasi']) && !empty($siswa['nim2_konfirmasi'])){
                                        echo "<tr>";
                                    
                                        echo "<td>".$no2."</td>";
                                        echo "<td>".$siswa['nama2_konfirmasi']."</td>";
                                        echo "<td>".$siswa['nim2_konfirmasi']."</td>";

                                        
                                        echo "</tr>";
                                    }

                                    if(!empty($siswa['nama3_konfirmasi']) && !empty($siswa['nim3_konfirmasi'])){
                                        echo "<tr>";
                                    
                                        echo "<td>".$no3."</td>";
                                        echo "<td>".$siswa['nama3_konfirmasi']."</td>";
                                        echo "<td>".$siswa['nim3_konfirmasi']."</td>";

                                        
                                        echo "</tr>";
                                    }

                                    if(!empty($siswa['nama4_konfirmasi']) && !empty($siswa['nim4_konfirmasi'])){
                                        echo "<tr>";
                                    
                                        echo "<td>".$no4."</td>";
                                        echo "<td>".$siswa['nama4_konfirmasi']."</td>";
                                        echo "<td>".$siswa['nim4_konfirmasi']."</td>";

                                        
                                        echo "</tr>";
                                    }

                                    if(!empty($siswa['nama5_konfirmasi']) && !empty($siswa['nim5_konfirmasi'])){
                                        echo "<tr>";
                                    
                                        echo "<td>".$no5."</td>";
                                        echo "<td>".$siswa['nama5_konfirmasi']."</td>";
                                        echo "<td>".$siswa['nim5_konfirmasi']."</td>";

                                        
                                        echo "</tr>";
                                    }

                                
                                
                                ?>

                    </tbody>
                    </table><br><br><br><br><br><br><br><br>
                </div>
                <div class="text-end">
                    <p>Di Bawah Ini Yang Mengesahkan</p><br><br><br><br><br><br>
                    <p class="me-5"><u>( <?php echo $siswa['pejabat']?> )</u></p><br><br><br>
                </div>
                    <?php
                    echo "<a href='cetak.php?id=".$siswa['id_konfirmasi']."'><button class='btn btn-primary'>Cetak Surat</button></a>"
                    ?>
                </div>
            
            </div>
            
    </div><br>

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