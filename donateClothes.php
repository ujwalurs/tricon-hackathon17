<!-- donate-> books -->
<?php
        $conn = new mysqli("127.0.0.1", "root", "password1234", "donet");

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $email=$_SESSION['username'];
        $name=$_POST['title'];
        $category=$_POST['clothes-category'];
        $quantity=$_POST['quantity'];
        $insert_sqlB = "INSERT INTO Cloth(category,email,quantity,name) VALUES('$category','$email','$quantity','$name')";
        if ($conn->query($insert_sqlB) === TRUE) {
            header("location: dindex.html");
            exit;
        }
?>