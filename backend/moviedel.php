<?php

include "connection.php";
include "session.php";
 if(isset($_GET['id']))
 {
  
  $id=$_GET['id'];
  $sql1="SELECT * FROM `movies` WHERE id='$id'";
  $result =mysqli_query($conn,$sql1);
  $data=$result->fetch_assoc();
  $folder="images/".$data['image'];
  if(file_exists($folder))
  {
  
    
    unlink($folder);
  }

  $sql ="DELETE FROM `movies` WHERE id=$id";

  if(mysqli_query($conn,$sql))

  {
      $_SESSION['message']=" Deleted Successfully";
      header("location:movies.php");
      exit();
  
  }else
  {
      $_SESSION['message']="Something Went Wrong";
      header("location:movies.php");
      exit();
    
  }
 }





?>