<?php
    $conn = new mysqli("127.0.0.1", "root", "password1234", "donet");

// Check connection
if($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$bookname = $_POST['title'];
$category = $_POST['books-category'];

$insert_sql = "INSERT INTO Book(name,category) VALUES ('$bookname','$category')";

mysqli_query($conn, $insert_sql);
header('location: dindex.html');
exit;


mysqli_close($conn);
?>