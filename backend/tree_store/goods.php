<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
    $response = [];
    $strCmd = "SELECT * FROM goods ORDER BY id DESC";
    $result = $con->query($strCmd);
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    if ($result->num_rows != 0) {
        $response['data'] = $data;
        $response['code'] = 200;
        $response['message'] = "OK";
    } else {
        $response['data'] = [];
        $response['code'] = 200;
        $response['message'] = "OK";
    }
    echo json_encode($response);
}
?>