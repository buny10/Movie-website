<?php

include "connection.php";
include "session.php";
include "navbar.php";
include "sidebar.php";

$sql = "SELECT * FROM movies ";
$result = mysqli_query($conn,$sql);
$data =mysqli_fetch_all($result, MYSQLI_ASSOC);
//echo "<pre>";
// print_r($data);
// echo "</prev>";



?>


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <nav class="alert alert-primary" syle="baclground-color:#dle7dd;">
       
        <div class="row">
            <div class="col-6">
            <h6>List of MOvies</h6>

         

</div>
<div class="col-6 d-flex flex-row-reverse">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  method="POST" action="insertmovies.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Name</label>
    <input type="text" name="movie"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Details</label>
    <textarea name="details"  class="form-control" id="exampleInputpassword"> </textarea>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file"  name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
</div>
<button type="submit" name="submitmovie" class="btn btn-primary">Submit</button>
</form>
      </div>
    
    </div>
  </div>
</div>

</div>
</div>
</nav>
<?php
 include "message.php";

?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">SN</th>
      <th scope="col">Movies Name</th>
      <th scope="col">Details</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php

    $i=1;
   foreach($data as $key =>$value)
   {

   
    ?>

    <tr>
      <th scope="row"><?php echo $i++; ?></th>
      <td><?php  echo $value['name'];  ?></td>
      <td>
        <textarea rows="" cols="">
          <?php  echo $value['detail'];   ?>
       </textarea>
      </td>
  
      <td> <img src="images/<?php echo $value['image']; ?>"height="80">  </td>
      <td> <?php  echo $value['status']    ?>    </td>
      <td>
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $value['id']; ?>"
>
  Edit
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal-<?php echo $value['id']     ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Record</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  method="POST" action="movieedit.php">
        <input type="hidden" name="id" value="<?php echo $value['id']; ?>">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Movie Name</label>
    <input type="text" name="movie" value="<?php echo $value['name'];  ?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">

    <label for="exampleInputPassword1" class="form-label">Details</label>
    <textarea name="details"  class="form-control" id="exampleInputpassword"> <?php echo $value['detail']  ?></textarea>
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Image</label>
    <input type="file" value="<?php echo $value['image'];  ?>" name="image" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
 
</div>
<button type="submit" name="submitmovie" class="btn btn-primary">Save Changes</button>
</form>
      </div>
      <!--<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" name="submitmovie" class="btn btn-primary">Save changes</button>
      </div>-->
    </div>
  </div>
</div>
        <a href="moviedel.php?id=<?php echo $value['id'];?>" class="btn btn-danger btn-sm">Delete</a>
        

      </td>
  
    
</tr >
<?php } ?>
  </tbody>
</table>

    </main>
  

  </div>
</div>

<?php

include "footer.php";
?>
