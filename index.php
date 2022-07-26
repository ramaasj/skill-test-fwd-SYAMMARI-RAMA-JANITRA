<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FULLSTACK | SYAMMARI RAMA JANITRA</title>
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>
    <h1>SELEKSI SI ARKATAMA FULL STACK WEB DEVELOPMENT</h1>
    <h1>20081010150 | SYAMMARI RAMA JANITRA</h1><br>

    <p>KETIK DATA ANDA DENGAN FORMAT BERIKUT:</p>
    <div class="inputs">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="NAME" required="required" placeholder="NAMA"><br><br>
            <input type="number" name="AGE" required="required" placeholder="UMUR"><br><br>
            <input type="text" name="CITY" required="required" placeholder="KOTA"><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>

    <?php
    if(isset($_POST['submit'])){
        $NAME = $_POST['NAME'];
        $CAP_NAME = strtoupper($NAME);
        $AGE = $_POST['AGE'];
        $CITY = $_POST['CITY'];
        $CAP_CITY = strtoupper($CITY);

        $insert = mysqli_query($koneksi, "INSERT INTO inputs VALUES (NULL,'".$CAP_NAME."','".$AGE."','".$CAP_CITY."')");
        if($insert){
            echo 'Data Berhasil Disimpan';
        }else{
            echo 'Gagal disimpan';
        }
    }
    ?>

    
</body>
</html>