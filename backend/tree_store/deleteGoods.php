<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){
    $response = [];
    $strCmd = "DELETE FROM goods";
    $strCmd .= " WHERE id = '{$_GET['id']}'";
    $result = $con->query($strCmd);
    if ($result) {
        $response['data'] = [];
        $response['code'] = 200;
        $response['message'] = "OK";
    }
    echo json_encode($response);
}
?>