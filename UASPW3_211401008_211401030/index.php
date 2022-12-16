<?php
session_start();
include "koneksi.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

$Jumlah_kas=mysqli_query($koneksi, "select sum(jumlah) as kas from kas");
$total=mysqli_fetch_array($Jumlah_kas);

$Jumlah_out=mysqli_query($koneksi, "select sum(jumlah) as keluar from keluar");
$total_out=mysqli_fetch_array($Jumlah_out);
?>

<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="style.css"/>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        
        <!--Judul Tab-->
        <title>Boekoe Kas</title>
        <link rel="stylesheet" href="style.css">
    </head>
    
    <body>
    <!-- Navbar -->
      <div class="fixed-top">
          <nav class="navbar navbar-dark" style="background-color: #F2DFD7 ;">
          <a class="navbar-brand" href="#">
              <img src="boekoe.png" width="150"alt="">
            </a>
            <ul class ="nav justify-content-end">
                <li class ="nav-item"><a class = "nav-link" href ="#home" style="color: black;">HOME</a></li>
                <li class ="nav-item"><a class = "nav-link" href ="#datakas" style="color: black;">DATA PEMASUKAN</a></li>
                <li class ="nav-item"><a class = "nav-link" href ="#datakeluar" style="color: black;">DATA PENGELUARAN</a></li>
                <li class ="nav-item"><a class = "nav-link" href ="logout.php" style="color: black;">LOGOUT</a></li>
            </ul>
          </nav>  
      </div>
    <!-- Navbar -->

    <!--MASTHEAD-->
    <header class="masthead" id="home">
      <div class="d-flex justify-content-center">
          <div class="fakeimage">
              <img src="boekoe.png" width="600" alt="">
          </div>
      </div>
    </header>


    <section class ="databuku-section">
        <div class="d-flex justify-content-center">
            <div class="d-flex justify-content-center">
                <div class="kotak" style="margin-left: 12rem;">
                    <div id="card-content">
                        <div id="card-title">
                            <h4>JUMLAH PEMASUKAN</h4>
                            <div class="underline-title"></div>
                                <table class="table">
                                    <table><?php echo "Rp.".number_format($total['kas']); ?></table>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>      
                <div class="kotak">
                <div id="card-content">
                    <div id="card-title">
                        <h4>JUMLAH PENGELUARAN</h4>
                        <div class="underline-title"></div>
                            <table class="table">
                                <table><?php echo "Rp.".number_format($total_out['keluar']); ?></table>
                            </table>
                        </div>
                    </div>
                </div>
                </div>   
            </div>
        </div>
    </section>
        


    <!-- SECTION PEMASUKAN-->
    <section class ="dataanggota-section" id="datakas">
        <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DATA PEMASUKAN</h2>
                <div class="underline-title"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Penyetor</th>
                            <th>Jumlah Pemasukan</th>
                            <th>Tanggal Pemasukan</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM kas  ORDER BY id ASC");
                        $id = 0;
                        while ($data = mysqli_fetch_array($query)) {
                            $id++;
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jumlah']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><a href="editkas.php ?id=<?php echo $data['id'];?>"><img src="5.png" alt="" width="75px"></a></td>
                            <td><a href="hapuskas.php ?id=<?php echo $data['id'];?>"><img src="6.png" alt="" width="75px"></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <button id="submit-btn"><a href="tambahkas.php" role="button" aria-pressed="true" style="color: white;">Tambah</a></button>
                
                </div>
            </div>
        </div>
    </section>  


    <!-- SECTION DATA PENGELUARAN-->
    <section class ="databuku-section" id="datakeluar">
        <div id="card">
        <div id="card-content">
            <div id="card-title">
                <h2>DATA PENGELUARAN</h2>
                <div class="underline-title"></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Pengeluaran</th>
                            <th>Jumlah Pengeluaran</th>
                            <th>Tanggal Pengeluaran</th>
                            <th>Edit</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM keluar  ORDER BY id ASC");
                        $id = 0;
                        while ($data = mysqli_fetch_array($query)) {
                            $id++;
                        ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['jumlah']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><a href="editkeluar.php ?id=<?php echo $data['id'];?>"><img src="5.png" alt="" width="75px"></a></td>
                            <td><a href="hapuskeluar.php ?id=<?php echo $data['id'];?>"><img src="6.png" alt="" width="75px"></a></td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <button id="submit-btn"><a href="tambahkeluar.php" role="button" aria-pressed="true" style="color: white;">Tambah</a></button>
                </div>
            </div>
        </div>
    </section>  

    <!--FOOTER-->
    <footer class="footer  small text-center text-white-50">
      <div class="container px-4 px-lg-5">&copy; putri&angel</div>
    </footer>

   
    </body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>