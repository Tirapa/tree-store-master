<?php



include ("constants.php");
$con = mysqli_connect("localhost", "id10799440_db_tree_store", "123456", "id10799440_db_tree_store");



if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else {
    echo "connect successfull";

}
if (isset($_GET['apis'] == 'login')) {
    if($_GET['apis'] == "login"){

    

    $response = [];

    $strIsUser = "SELECT * FROM users WHERE username = '{$_POST['username']}' AND password = '{$_POST['password']}'";
    $result = $con->query($strIsUser);
    if ($result->num_rows != 0) {
        $response['data'] = $result->fetch_assoc();
        $response['code'] = 200;
        $response['message'] = "OK";
    } else {
        $response['data'] = [];
        $response['code'] = 404;
        $response['message'] = "NOT_FOUND";
    }
}

    echo json_encode($response);

}

?>