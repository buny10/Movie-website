<?php
include "connection.php";
session_start();

if(isset($_POST['register']))
{
   $email=$_POST['email'];
   $name=$_POST['name'];
   $password=$_POST['password'];
}
$sql="INSERT INTO users(email,name,password) 
VALUES ('$email','$name','$password')";
if(mysqli_query($conn,$sql))
{
  // $_SESSION['message']="inserted succcessfully";
  header("location:index.php");
  exit();
}
else{
    // $_SESSION['message']="not inserted succcessfully";
    header("location:index.php");
    exit(); 
}
?>