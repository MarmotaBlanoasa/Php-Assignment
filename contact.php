<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "assiggmentdb";



$conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);
    if(isset($_POST['submit'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['details'])){
            
            $name = $_POST['name'];
            $email = $_POST['email'];
            $details = $_POST['details'];
            
            $query = "insert into contact(name,email,details) values('$name', '$email', '$details')";

            $run = mysqli_query($conn, $query) or die(mysqli_error());
            if($run){
                echo "Success";
            }else{
                echo "Form not Submitted";
            }
        }else{
            echo "All fields required";
        }
    }

?>
