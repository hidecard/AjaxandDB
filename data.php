<?php

$name = $_POST['name'];
$age= $_POST['age'];
$password= $_POST['password'];
$conn = mysqli_connect("localhost","root","hidecard","testAjax");

$sql = "INSERT INTO users (name, age, password) VALUES ('$name','$age','$password')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ". $sql. "<br>". mysqli_error($conn);
}
?>