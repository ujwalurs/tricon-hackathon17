<?php
    $conn = new mysqli("127.0.0.1", "root", "password1234", "donet");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$name= $_POST['name'];
$email= $_POST['email']; 
$contact = $_POST['mobno'];;
$add= $_POST['address'];
$passwd= $_POST['passwrd'];

if($_POST['options']==1)
{
$insert_sqlD = "INSERT INTO Donor VALUES ('$name','$email','$contact','$add','$passwd')";
}
else
{
    $regid=$_POST['verinum'];
    $insert_sqlN = "INSERT INTO NGO VALUES ('$name','$regid','$contact','$add','$email','$passwd')";
    
}

if ($conn->query($insert_sqlD) === TRUE) {
    $_SESSION["username"]=$email;
    $_SESSION["password"]=$passwd;
    header("location:dindex.html");
    $conn->close();
    exit();
}
else if ($conn->query($insert_sqlN) === TRUE)
{
    $_SESSION["username"]=$email;
    $_SESSION["password"]=$passwd;
    header("location:ohtml.php");
    $conn->close();
    exit();
}
else {
header("location:login.html");
}
  
?>