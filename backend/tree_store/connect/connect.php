<?php

include"constants.php";
$con = mysqli_connect("localhost","root"," ","db_tree_store");

if (!$con){
    echo "Database connect failed";
} else {
    echo "connect successfull";
}

?>