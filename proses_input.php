<?php
    include './koneksi.php';

    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $jenisps = $_POST['jenisps'];
    $tanggal = $_POST['tanggal'];

    $query = "INSERT INTO tabelps VALUES(NULL,'$nama', '$umur', '$jenisps', '$tanggal')";

    mysqli_query($koneksi, $query);

    echo "<script> data berhasil ditambahkan </script>";
    echo "<script> window.location='./index.php'</script>";
?>
