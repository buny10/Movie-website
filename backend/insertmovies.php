<?php

include "connection.php";
include "session.php";

if(isset($_POST['submitmovie']))

{


$name=$_POST['movie'];
$detail =$_POST['details'];
//echo "<pre>";
//print_r($_FILES);
//echo "</pre>";

$filename =rand().$_FILES['image']['name'];
$tempname =$_FILES['image']['tmp_name'];
$folder ="images/".$filename;
if(move_uploaded_file($tempname,$folder))
{
 echo "uploded successfully";
 
}else
{
  echo "somethong went wrong";

}
$status="1";

$sql="INSERT INTO `movies`(`name`, `detail`, `image`, `status`) VALUES
 ('$name','$detail','$filename','$status')";
 if(mysqli_query($conn,$sql))
 {
   $_SESSION['message']= "inserted successfully";
    header("location:movies.php");
    
   exit();
 }


}


?>