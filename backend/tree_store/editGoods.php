<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if ($_FILES["upload"]["name"]) {
        move_uploaded_file($_FILES["upload"]["tmp_name"], "uploads/" . $_FILES["upload"]["name"]);
    }

    $response = [];
    $strCmd = "UPDATE goods SET name = '{$_POST['name']}', 
             detail = '{$_POST['detail']}', 
             price = '{$_POST['price']}' ";
    if ($_FILES["upload"]["name"]) {
        $strCmd .= ", picture = '{$_FILES['upload']['name']}'";
    }
    $strCmd .= "WHERE id = '{$_POST['id']}'";
    $result = $con->query($strCmd);
    if ($result) {
        $response['data'] = [];
        $response['code'] = 200;
        $response['message'] = "OK";
    }

    echo json_encode($response);

}
?>