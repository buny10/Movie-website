<?php
include "connection.php";
include "session.php";
include "navbar.php";
include "sidebar.php";

$sql="SELECT * FROM users";
$result=mysqli_query($conn,$sql);
$data=mysqli_fetch_all($result,MYSQLI_ASSOC);
?>



<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

  <nav class="alert alert-primary" style="background-color:#dle7dd;">
    <div class="row">
      <div class=" col-6">
        <h6>List of movies</h6>
      </div>   
    </div>   
</nav>
<table class="table">
<thead>
      <tr>
        <th scope="col-1">S.N</th>
        <th scope="col-1">Name</th>
        <th scope="col-1">Email</th>
      </tr>
    </thead>
    <tbody>
      <?php
    $i=1;
    foreach($data as $key =>$value)
    {
    ?>
      <tr>
        <th scope="row">
          <?php echo $i++; ?>
        </th>
        <td>
          <?php echo $value['name']?>
        </td>
        <td>
      <?php echo $value['email']?>
    </td>
    </tr>
    <?php
    }
    ?>
    </tbody>
    </table>
    </main>


    <?php
include "footer.php";
?>