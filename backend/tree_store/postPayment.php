<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
move_uploaded_file($_FILES["upload"]["tmp_name"], "uploads/" . $_FILES["upload"]["name"]);
$response = [];
$strCmd = "INSERT INTO payment (goods_id, user_id, amount, picture, date_time, status) VALUES(
            '{$_POST['goodsId']}', 
            '{$_POST['userId']}', 
            '{$_POST['amount']}', 
            '{$_FILES['upload']['name']}',
            '{$_POST['datetime']}',
            '{$_POST['status']}')";
$result = $con->query($strCmd);
if ($result) {
    $response['data'] = [];
    $response['code'] = 200;
    $response['message'] = "OK";
}
echo json_encode($response);
}
?>