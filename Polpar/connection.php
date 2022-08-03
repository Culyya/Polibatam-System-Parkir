<?php
$dbhost = 'localhost' ;
$dbuser = 'root' ;
$dbpassword = '' ;
$dbname = 'db_polpar';

$dbconnect = new mysqli($dbhost, $dbuser, $dbpassword, $dbname);

if ($dbconnect->connect_error) {
    die('Server Error');
}
?>