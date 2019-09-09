<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $response = [];
    $strCmd = "UPDATE payment SET status = '2'";
    $strCmd .= " WHERE id = '{$_GET['id']}'";
    $result = $con->query($strCmd);
    if ($result) {
        $response['data'] = [];
        $response['code'] = 200;
        $response['message'] = "OK";
    } else {
        $response['data'] = [];
        $response['code'] = 404;
        $response['message'] = "NOT_FOUND";
    }

    echo json_encode($response);

}
?>