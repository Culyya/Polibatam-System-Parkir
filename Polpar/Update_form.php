<?php
include('connection.php'); // Meng-includekan koneksi database

if(isset($_POST['id']) && isset($_POST['nama']) && isset($_POST['nim'])&& isset($_POST['noplat'])){
       $nama = $_POST['nama']; // membuat variabel judul untuk menampung data inputan judul
        $nim = $_POST['nim']; // membuat variabel pengarang untuk menampung data inputan pengarang
        $noplat = $_POST['noplat'];
        $id = $_POST['id']; // membuat variabel id untuk menampung data id buku
   
     
    $sql = mysqli_query($dbconnect, "UPDATE tb_data SET nama='$nama', nim='$nim', noplat='$noplat' WHERE id='$id'");
    if($sql){
        mysqli_query($dbconnect, "DELETE * FROM tb_entry");
    }
    header("location: Form.php");
       
   }

?>
