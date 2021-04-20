<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
$conn = new mysqli('localhost','root','','test');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(username, email, password, number)
    values(?, ?, ?, ?)");
    $estmt->execute();
    echo "registration succesfully...";
    $stmt->close();
    $conn->close();
}