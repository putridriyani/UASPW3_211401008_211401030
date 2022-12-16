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
    
    <?php
    include('#sectionhome');
    
        if(isset($_GET['id']))
        {
            include('koneksi.php');
            $id    = $_GET['id'];
            $cek    = mysqli_query($koneksi, "select id from kas
            where id = '$id'") or die($mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else
            {
                $del = mysqli_query($koneksi, "delete from kas where id = '$id'");
                if ($del)
                {
                    echo "<h3>Data pemasukan berhasil dihapus</h3>";   
                    echo "<script>window.location = 'index.php';</script>";    
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'index.php'>Kembali </a>";
                }
            }
        }
    
        else
        {
            echo "<script>window.history.back()</script>";
        }
    ?>
    
    <body>
        
    </body>
</html>