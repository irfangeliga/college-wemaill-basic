
<?php include("../koneksi.php"); 

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
    <br>
    <div class="halaman">
        <h1 style="text-align: center;">DASHBOARD</h1><br><br><br>
        <div class="container a">
            <div class="hero">
                <div class="row">
                    <div class="col">
                        <img src="image/Vektor.jpeg">
                    </div>

                    <?php
                    include("../koneksi.php");
                    $sql = "SELECT * FROM pengajuan_dosen";
                    $query = mysqli_query($con, $sql);
                    $row= mysqli_num_rows($query);

                    $sql2 = "SELECT * FROM arsip_dosen";
                    $query2 = mysqli_query($con, $sql2);
                    $row2 = mysqli_num_rows($query2);

                    echo "<div class='col'>";
                    echo "<h3>Jumlah Surat Tugas Pertahun :</h3>";
                    echo    "<div class='progress'>";
                    if($row >0 & $row <=6){
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 5%'>".$row."</div>";
                    }elseif ($row >6 & $row <=8 ) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 8%'>".$row."</div>";
                    } elseif($row >8 & $row <=10) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 10%'>".$row."</div>";
                    }elseif($row >10 & $row <=20) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 20%'>".$row."</div>";
                    }elseif($row >20 & $row <=30) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 30%'>".$row."</div>";
                    }elseif($row >30 & $row <=40) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 40%'>".$row."</div>";
                    }elseif($row >40 & $row <=50) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 50%'>".$row."</div>";
                    }elseif($row >50 & $row <=60) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 60%'>".$row."</div>";
                    }elseif($row >60 & $row <=70) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 70%'>".$row."</div>";
                    }elseif($row >70 & $row <=80) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 80%'>".$row."</div>";
                    }elseif($row >80 & $row <=90) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 90%'>".$row."</div>";
                    }elseif($row >90) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 97%'>".$row."</div>";
                    }
                    echo    "</div><br>";

                    echo    "<h3>Jumlah Arsip :</h3>";
                    echo    "<div class='progress'>";
                    if($row2 >0 & $row2 <=6){
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 5%'>".$row2."</div>";
                    }elseif ($row2 >6 & $row2 <=8 ) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 8%'>".$row2."</div>";
                    } elseif($row2 >8 & $row2 <=10) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 10%'>".$row2."</div>";
                    }elseif($row2 >10 & $row2 <=20) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 20%'>".$row2."</div>";
                    }elseif($row2 >20 & $row2 <=30) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 30%'>".$row2."</div>";
                    }elseif($row2 >30 & $row2 <=40) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 40%'>".$row2."</div>";
                    }elseif($row2 >40 & $row2 <=50) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 50%'>".$row2."</div>";
                    }elseif($row2 >50 & $row2 <=60) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 60%'>".$row2."</div>";
                    }elseif($row2 >60 & $row2 <=70) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 70%'>".$row2."</div>";
                    }elseif($row2 >70 & $row2 <=80) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 80%'>".$row2."</div>";
                    }elseif($row2 >80 & $row2 <=90) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 90%'>".$row2."</div>";
                    }elseif($row2 >90) {
                        echo    "<div class='progress-bar progress-bar-striped progress-bar-animated fs-2 fw-bold' role='progressbar' aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' style='width: 97%'>".$row2."</div>";
                    }
                    echo    "</div><br>";

                    echo "</div>";


                    ?>
                </div>
            </div><br><br>
            <div class="text-end">
                <a class="btn btn-primary " href="buat-surat-dosen.php" name="buat-surat" >Buat Surat</a>
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