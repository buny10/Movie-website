<?php
include "connection.php";
 session_start();
if(isset($_POST['book']))
{
//     print_r($_POST);
//     die();
  $price= $_POST['price'];
  $email =$_SESSION['user-email'];
  $num=$_POST['ticket'];
  $sql ="SELECT * FROM `users` WHERE email ='$email' ";
  $result =mysqli_query($conn,$sql);
  //print_r($result);
  if($result->num_rows > 0)
  {

   $data =$result->fetch_assoc();
   $userid=$data['id'];
   for($i=1;$i<=$num;$i++)
   {
   $ticket=rand();
   $sql1="INSERT INTO `order`( `userid`, `ticket_no`) VALUES ('userid','ticket_no')";
   (mysqli_query($conn,$sql1));
   }
   
    header("location:booked.php");
    exit();
   
 }

}





















?>