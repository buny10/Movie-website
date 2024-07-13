<?php 
include "header.php";
include "navbar.php";
include "connection.php";
$sql ="SELECT * FROM movies";
$result = mysqli_query($conn,$sql);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
//echo "<pre>";

//print_r($data);

//echo "</pre>";


?>


 
  <!--slider-->
  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="slider1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="image2.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://www.moviepostershop.com/images/slideshow/new-releases.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!--endslider-->


  <diV class="container mt-4">
    <div class="row mt-5">
      <h1>Now Showing</h1>
      <hr>
      <?php foreach($data as $key =>$value)  {  ?>

      <div class="col-2 pb-3">
        <a href="details.php?id=<?php echo $value['id']; ?>">
  

          <div class="card ">
            <img
              src="backend/images/<?php echo $value['image'];  ?>"
              class="card-img-top" alt="...">

          </div>
        </a>
      </div>
      <?php } ?>
      
    </div>
  </diV>

  <diV class="container mt-4">
    <div class="row mt-5">
      <h1>Upcoming Movies</h1>
      <hr>
      <div class="col-2 pb-3">
        <div class="card ">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img src="https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705677901406-dayarani.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img src="https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1704346290131-hattichap225x319.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
      <div class="col-2 pb-3">
        <div class="card">
          <img
            src="	https://d346azgjfhsciq.cloudfront.net/S3/uploads/gallery/1705060361916-teribatomainaisauljhajiya.jpg"
            class="card-img-top" alt="...">

        </div>
      </div>
    </div>
  </diV>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>


    <?php include "footer.php" ?>

    
</body>

</html>