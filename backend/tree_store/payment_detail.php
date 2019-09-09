<?php
if ($_SERVER['REQUEST_METHOD'] =='POST'){

    $response = [];
    $strCmd = "SELECT *, goods.picture AS goods_picture, payment.id AS payment_id, payment.picture AS payment_picture FROM payment 
        LEFT JOIN goods ON goods.id = payment.goods_id
        WHERE payment.id = '{$_GET['id']}' 
        ORDER BY payment.id DESC";
        $result = $con->query($strCmd);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        if ($result->num_rows != 0) {
            $response['data'] = $data[0];
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