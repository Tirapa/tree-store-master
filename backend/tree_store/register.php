<?php

if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $name = $_POST['name'];

    $password = password_hash($password, PASSWORD_DEFAULT);

    include 'constants.php';

    $sql = "INSERT INTO users (name,username, password) VALUES ('$name', '$username', '$password')";

    if ( mysqli_query($conn, $sql) ) {
        $result["success"] = "1";
        $result["message"] = "success";

        echo json_encode($result);
        mysqli_close($conn);

    } else {

        $result["success"] = "0";
        $result["message"] = "error";

        echo json_encode($result);
        mysqli_close($conn);
    }
}

?>