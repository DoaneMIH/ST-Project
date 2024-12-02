<?php 
$user_email = $_POST['user_email'];
$user_password = $_POST['user_password'];

require 'database.php'; //My database location

if($conn -> connect_error){
    die('Connection Failed! : ' .$conn->connect_error);
} else {
    $stmt = $conn->prepare("INSERT INTO user (user_email,user_password) VALUES (?,?)");
    $stmt->bind_param("ss", $user_email, $user_password);
    $stmt->execute();
    $stmt->close();
    $conn->close();

    //After storing sa Database ma open ang LOGIN PAGE
    include_once 'login.php';
}
?>