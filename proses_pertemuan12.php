<?php
include "koneksi.php";

//if (isset($_POST['submit'])) {
    $npm = $_POST['inputan_npm'];
    $nama = $_POST['inputan_nama'];
    $prodinya = $_POST['inputan_prodi'];

    $proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (npm, nama_mahasiswa, prodi) VALUES ('$npm', '$nama', '$prodinya')") or die(mysqli_error($koneksi));

    if ($proses) {
        echo "<script>
                alert('Data berhasil disimpan');
                window.location.href='pertemuan12.php';
              </script>";
    } else {
    echo "<script>
                alert('Data Gagal disimpan');
                window.location.href='pertemuan12.php';
              </script>";
    }
    
    // if ($nilainya != "" && $perulangan != "") {
    //     if ($nilainya >= 85) {
    //         $mutunya = 'A';
    //     } elseif ($nilainya >= 75) {
    //         $mutunya = 'B';
    //     } elseif ($nilainya >= 65) {
    //         $mutunya = 'C';
    //     } else {
    //         $mutunya = 'E';
    //     }
    // }

    // for ($i = 1; $i <= $perulangan; $i++) {
    //     // echo "<script>alert('" . $npm . " Nilai mata kuliah anda adalah: " . $mutunya . "')</script>";
    //     echo $npm . ' Nilai mata kuliah anda adalah: ' . $mutunya . '<br>';
    // }
//}