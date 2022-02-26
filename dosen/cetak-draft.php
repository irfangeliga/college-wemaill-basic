<?php
    include('../koneksi.php');
    if( !isset($_GET['id']) ){
        header('Location: kirim.php');
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
    $sql = "SELECT * FROM draft_dosen WHERE id_draft = $id";
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
            <script>
            function printPage() {
            window.print();
            
            }
            </script>
</head>
<body style="background: rgb(228, 224, 224);">
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
                    </div><br><br><br>
                    <hr width="5px" size="5px">
                    <div class="judul" style="text-align: center">
                        <br>
                    <u><h2> <?php echo $siswa['jenis_surat_draft'] ?></h2></u>
                    NOMOR: &nbsp;<?php echo $siswa['id_draft'] ?> /B/FTI/2021 <br><br><br>
                    </div>
                    <div class="content">
                    <?php echo $siswa['keterangan_draft'] ?><br><br><br><br>
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
                                 echo "<td>".$siswa['nama_draft']."</td>";
                                 echo "<td>".$siswa['nik_draft']."</td>";
                                 echo "</tr>";
                                ?>

                    </tbody>
                    </table>
                </div>
                
                <a href="" onclick="printPage()" >Cetak Surat</a>
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