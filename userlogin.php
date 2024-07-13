

<?php
include "connection.php";

session_start();

if(isset($_POST['login']))
{

     $email =$_POST['email'];
     //echo "$email";
       
     $pass =$_POST['pass'];
    // print_r($_POST);
    
     $sql ="SELECT * FROM `users` WHERE email ='$email' ";
     $result =mysqli_query($conn,$sql);
     //print_r($result);
     if($result->num_rows > 0)
     {

      $data =$result->fetch_assoc();
      if($data['email']==$email && $data['password']==$pass)
      {
       
        $_SESSION['user-email']=$email;
        $_SESSION['name']=$data['name'];
  
      
        header("Location:index.php");
        exit();

       }
    
     }
  
}







?>



