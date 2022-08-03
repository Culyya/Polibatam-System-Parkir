<?php
if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['nim'])&& isset($_POST['noplat'])){
    include 'connection.php';
    $uid =  $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $noplat = $_POST['noplat'];

    $sql = mysqli_query($dbconnect, "INSERT INTO tb_data VALUES ('$uid','$nama','$nim','$noplat')");
    
    header("location: Form.php");
}