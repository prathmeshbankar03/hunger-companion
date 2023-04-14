<?php 
include_once "connection.php";

$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm-password'];

$sql = "SELECT * FROM register_data WHERE username = '$username'";
$result = $con->query($sql);
if($result->num_rows > 0){
    echo "Username already exists";
} else {
    if($password == $confirm_password){
        $sql = "INSERT INTO `register_data` (`email`, `username`, `phone`, `password`) VALUES ('$email', '$username', '$phone', '$password')";
        $con->query($sql);
        header("Location: ./login.html");
    } else header("Location: ../registration.php");
}
?>