<?php
if ($_SERVER['REQUEST_METHOD']=='POST') {
 move_uploaded_file($_FILES["upload"]["tmp_name"], "uploads/" . $_FILES["upload"]["name"]);
 
 $response = [];
 $strCmd = "INSERT INTO goods(name, detail, price, picture) VALUES(
             '{$_POST['name']}',
             '{$_POST['detail']}',
             '{$_POST['price']}',
             '{$_FILES['upload']['name']}')";
 $result = $con->query($strCmd);
 if ($result) {
     $response['data'] = [];
     $response['code'] = 200;
     $response['message'] = "OK";
 }

 echo json_encode($response);

}
?>