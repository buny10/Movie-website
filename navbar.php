<nav class="navbar navbar-expand-lg bg-body-tertiary navbarcolor sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <image style="height:50px;" height="10%" src="gray simple and minimalist cinema house film production logo.png">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact us</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Bookings
            </a>
            <ul class="dropdown-menu  navbarcolor">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">Ticket Rates</a>
          </li>
        </ul>
        <ul class="navbar-nav">
          <li><!-- Button trigger modal -->
        
          
          <?php
            session_start();
           
          if(isset($_SESSION['user-email'])) { ?>
            <h5><i class="bi bi-user" ></i><?php echo $_SESSION['name']; ?></h5>

          <?php } else { ?>
            <button type="button" class="btn btn-light" style="background-color:yellow !important;" data-bs-toggle="modal" data-bs-target="#exampleModal">
              <i class="bi bi-person-circle"></i> Login
            </button>
            <?php } ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Modal -->
  <div style="backgroud-color: !important;" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header" style="border: none;">

          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-6" style="border-right: 1px solid black;">
              <h5>Please Login Here</h5>

              <form method="post" action="userlogin.php" >
                <div>
                  <div  class="pt-4"><input name="email" type="email" placeholder="Enter your email" rounded-0></div>
                  <div  class="pt-4"> <input name="pass" type="password" placeholder="password" rounded-0></div>
                </div>
                <button type="submit" name="login" class="btn btn-primary rounded-0 mt-2 ps-3 pe-3">Login</button>
              </form>

            </div>
            <div class="col-6">
              <h5>Register Here</h5>
            <form method="POST" action="register.php" >
              <div class="pt-4"><input type="text" name="name" placeholder="Enter your name" rounded-0></div>
              <div class="pt-4"> <input style="margin-top: 3%;" type="email" name="email" placeholder="emaail here" rounded-0></div>
              <div class="pt-4"> <input type="password" name="password" placeholder="password" rounded-0></div>

              <button class="btn btn-primary rounded-0 mt-2 ps-3 pe-3" type="submit" name="register" style="border-radius: 4% !important;">Register here</button>

            </form>
            </div>
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save Changes</button>
        </div>
      </div>
    </div>
  </div>