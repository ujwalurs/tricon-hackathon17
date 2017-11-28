<?php
    session_start();
    $conn = new mysqli("127.0.0.1", "root", "password1234", "donet");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $quantity = 1;
    $currentUser = $_SESSION['username'];
    
    //if ($_POST['options']==2) {
        $name = $_POST['bookdesc'];
        $item = 'Books';
        $insert_sqlR = "INSERT INTO request(item,quantity,regID) VALUES ('$item','1',570023)";
            echo"2";
        if ($conn->query($insert_sqlR) === TRUE) {
            echo"1";
            $URL="requests.php";
echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
            exit();
        }
    //}
?>