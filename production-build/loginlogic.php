<?php

include_once "connection.php";

$loginEntity = $_POST['inputEntity'];
$password = $_POST['loginpassword'];

$sql = "SELECT `password` FROM `register_data` WHERE `email` = '$loginEntity' OR `phone` = '$loginEntity'";
$result = $con->query($sql);
if($result->num_rows == 1){
    if($result->fetch_assoc()['password'] == $password){
        session_start();
        $_SESSION['auth'] = true;
        header("Location: index.php");
    } else echo "Wrong password Bro Enter it again";
} else{
    header("Location: register.php");
}
?>