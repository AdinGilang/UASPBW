<?php
    //mengambil data inputan
    $npm_mhs =$_POST['npm'];
    $nilai_mhs =$_POST['nilai'];
    $perulangan =$_POST['ulangi'];

    if($nilai_mhs >= 85){
        $huruf_mutu ='A';
    }else if($nilai_mhs >= 75){
        $huruf_mutu ='B';
    }else if($nilai_mhs >= 65){
        $huruf_mutu= 'C';
    }else {
        $huruf_mutu = 'E';
    }

    for($x = 0; $x <= $perulangan;$x++){
        echo"<script> alert('".$npm_mhs." Nilai Mata Kuliah Anda Adalah :".$huruf_mutu."')</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kampus klik</title>
</head>
<body>
    <form action="" method="POST">
    <input type="text" name="npm" value=""\>
        <br>
    NILAI : <input type="text" name="nilai" value=""\>
        <br>
    ULANGI : <input type="text" name="ulangi" value=""\>
        <br>
    <button type="submit" name="proses_data">
        PROSES DATA
        </button>
    
        </form>
</body>
</html>
