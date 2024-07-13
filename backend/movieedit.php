<?php

include "connection.php";
include "session.php";

if(isset($_POST['submitmovie']))
{


   
   $id =$_POST['id'];
   $name=$_POST['movie'];
   $detail=$_POST['details'];
   $image=$_POST['image'];
  $sql ="UPDATE `movies` SET `name`='$name',`detail`='$detail',`image`='$image' WHERE id='$id'";
   if(mysqli_query($conn,$sql))

{
    $_SESSION['message']=" Movie updated Successfully";
    header("location:movies.php");
    exit();

}else
{
    $_SESSION['message']="Movie not updated Successfully";
    header("location:movies.php");
    exit();
  
}
}









?>
