<?php
$host = 'localhost';
$username = 'root';
$password = ' ';
$dbname = 'db_tree_store'

$conn = mysqli_connect("localhost","root"," ","db_tree_store")

if (mysqli_connect_errno()){
    echo "database is not found: ".mysqli_connect_error();
    exit();
}
mysqli_query($conn,"SET NAMES utf8");
}
?>

