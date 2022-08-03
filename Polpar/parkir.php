<?php
if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['nim'])&& isset($_POST['noplat'])&& isset($_POST['jam_masuk'])){
    include 'connection.php';
    $uid =  $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $noplat = $_POST['noplat'];
    $jam_masuk = $_POST['jam_masuk'];
    $jam_keluar = $_POST['jam_keluar'];


    $sql = mysqli_query($dbconnect, "INSERT INTO tb_parkir VALUES ('$uid','$nama','$nim','$noplat','$jam_masuk')");
    
    header("location: Form.php");
}