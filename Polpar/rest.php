<?php
if(isset($_POST["uid"])){
    include "connection.php";
    $uid = $_POST["id"];
    $sql = mysqli_query($DATABASE_NAME, "INSERT INTO tb_entry VALUES ('$uid')");
}