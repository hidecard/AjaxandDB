<?php

$json = array();
$conn = mysqli_connect("localhost","root","hidecard","testAjax");

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_array($result)){
    array_push($json,$row);
}
echo json_encode($json);
?>