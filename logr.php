<?php
$servername="localhost"
$id="root";
$password="";
$database_name="test";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
//now check the cnnection
if(!$conn)
{
    die("connection failed:" .mysqli_connect_error();)
}
if(isset($_post['save']))
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$number = $_POST['number'];
?>