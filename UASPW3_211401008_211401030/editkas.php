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
                <li class ="nav-item"><a class = "nav-link" href ="index.php" style="color: black;">BACK</a></li>
                <li class ="nav-item"><a class = "nav-link" href ="logout.php" style="color: black;">LOGOUT</a></li>
            </ul>
          </nav>  
      </div>

    <section class ="databuku-section">
        <div id="card">
            <div id="card-content">
                <div id="card-title">
                    <h2>EDIT PEMASUKAN</h2>
                    <div class="underline-title"></div>
                    <table class="table">
                    <table>
                        <?php
                            include('koneksi.php');
                            $id = $_GET['id'];
                            $show = mysqli_query($koneksi, "select * from kas where id = '$id'");
                            if(mysqli_num_rows($show) == 0)
                            {
                                echo '<script>window.history.back()</script>';
                            }
                            else
                            {
                                $d = mysqli_fetch_assoc($show);
                            }   
                        ?>
                    <form action="edit_proseskas.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <tr>
                            <td>Nama Pemasukan</td>
                            <td>:</td>
                            <td><input type="text" name="nama" style="width: 50rem; height: 2rem;" required> </td>
                        </tr>
                        <tr>
                            <td>Jumlah Pemasukan</td>
                            <td>:</td>
                            <td><input type="text" name="jumlah" style="width: 50rem; height: 2rem;" required> </td>
                        </tr>
                        <tr>
                            <td>Tanggal Pemasukan</td>
                            <td>:</td>
                            <td><input type="date" name="tanggal" style="width: 50rem; height: 2rem;" required></td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td></td>
                            <td><input id="submit-btn" type="submit" name="tambah" value="Simpan"></td>
                        </tr>
                        </table> 
                        </table>
                    </form>
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
   