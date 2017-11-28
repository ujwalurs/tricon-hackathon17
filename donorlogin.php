<?php
    session_start();
    $conn = new mysqli("127.0.0.1", "root", "password1234", "donet");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//fetch details from HTML
$email= $_POST['userid']; 
$passwd= $_POST['passwrd'];

//fetch email feilds from DB
$search_sql = "select * from Donor where email='$email' and pass='$passwd'";

//check if email is present and authenticate password
if ($emailRes=&$conn->query($search_sql)){
    $_SESSION['username']=$email;
    $_SESSION['password']=$passwd;
    header("location:dindex.html");
    exit();
} 
echo "sorry userID not registered";
?>