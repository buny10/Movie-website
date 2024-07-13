<?php
include "header.php";
include "navbar.php";
include "connection.php";
if (isset($_GET['id']))
{
  
  $id=$_GET['id'];
  $sql1="SELECT * FROM `movies` WHERE id='$id'";
  $result =mysqli_query($conn,$sql1);
  $data=$result->fetch_assoc();

}

?>

    <!-- Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">...</div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Navbarend -->
    <div class="container mt-3">
      <div class="row">
        <div class="col-3">
          <div class="row">
            <div class="col">
              <div class="card" style="background-color: black">
              <?php  if(!empty($data['image']))   {           ?>
                <img
                  src="backend/images/<?php echo $data['image'];  ?>"
                  class="card-img-top"
                  alt="..."
                />
                <?php  }  ?>
              </div>
              <p class="text-center">Now Showing</p>
              <?php if(!empty ($data['name']))  {  ?>
              <h5 class="text-center">
                <?php echo $data['name']; ?>
              </h5>
              <p
                style="text-align: justify; font-size: 12px"
                class="text-center"
              >
              <span id="less">
              
              <button class="btn btn-link" style="color:white" id="show-more">show more..</button>
              </span>
              <span id="more" style="display: none;">
               <?php echo $data['detail']; ?>
                <button class="btn btn-link" id="show-less" style="color: white;">show less</button>
              </span>
              
              </p>
              <?php } ?>
            </div>
          </div>
        </div>
     
      
    

    <div class="col-9">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" style="background-color:  gray !important;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                 <h5> Select Date, Language & time slots </h5>
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" style="background-color:  black !important;" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <div><p>Select date</p></div>
                 <div class="row">
                  <div class="col-3">
                    <div class="row">
                      <div class="col-6 mt-0">
                        <p>Today</p>
                        <button class="btn btn-primary ps-3 pe-3"><span class="datesize">Feb</span><br>18<br><span class="datesize">sun</span></button>
                      </div>
                      <div class="col-6 mt-0">
                        <p>Tommorow</p>
                        <button class="btn btn-primary ps-3 pe-3"><span class="datesize">Feb</span><br>19<br><span class="datesize">mon</span></button>
                      </div>
                    </div>
                  </div>
                  <div class="col-9 d-flex flex-row-reverse">
                    <input type="date" class="form-control  "  name="" value="" style="height:30px; width:200px;"   >

                 </div>
                 
                 <div class="row" >
                  <div  class="col"><p>Please Note</p><h5>Tickets will be required for all admissions. Infants will not be admitted.

                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-3">
                      <h5>Timings </h5>
                  </div>
                  <div class="col-9">
                  <button type="" style="color: azure !important;" class="btn btn-outline-success">11:00</button>&nbsp; &nbsp;<button type="" style="color: azure !important;" class="btn btn-outline-success">13:00</button>&nbsp; &nbsp;
                  <button style="color: azure !important;" type="" class="btn btn-outline-success">15:00</button>
                  </div>
                 </div>
              </div>
            </div>
            </div>
            </div>
            <div class="accordion-item" >
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" style="background-color: red !important; Margin-top:2% !impoprtant;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                 <h5> Select your seats</h5>
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" style="background-color: black !important;" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                 <div>
                  <table>
                  <tr >
                    <td><h5>A</h5></td>
                    <?php
                    $a=1;
                    for($i=1;$i<=6;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;" class="img1" data-price="300" data-id="<?php echo $a++ ; ?>" alt=""></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                  <td><h5>B<h5></td>
                  <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"   alt=""></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td><h5>C</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"   alt=""></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td><h5>D</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td><h5>E</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td ><h5>F</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td ><h5>G</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td ><h5>H</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                  <tr>
                    <td ><h5>I</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"  ></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                  </tr> -->
                  <tr>
                    <td ><h5>J</h5></td>
                    <?php
                    for($i=1;$i<=16;$i++)
                    {  ?>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <?php
                    }
                    ?>
                    <!-- <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td>
                    <td><img src="seats3.jpg"style="cursor:pointer;"></td> -->
                  </tr>
                </table>
                 </div>
                   <div>
                    <div class="row p-3">
                      <div class="col-10">
                    <span style="color:white !important;" id="price">0</span>
                    </div>
                    <div class="col-2">
                    <form action="book.php" method="post">
                      <?php  if(isset($_SESSION['user-email'])) { ?>
                    <input type="hidden" id="totalprice" value="" name="price">
                    <input type="hidden" id="ticket" value="" name="price">
                    <button type="submit"   class="btn btn-success btn-sm" name="book">Book Now</button>
                  </form>
                  <?php } else { ?>
                    <span style="color:yellow !important;"> Login First</span>
                    <?php } ?>
                  </div>
                  </div>
                   </div>
                </div>
              </div>
            </div>
            <div class="accordion-item">
                  </div>
              </div>
            </div>
        
        
      </div>
    </div>
     
</div>
</div>
<button data-id="1" data-body="5" id="user"></button>

<?php 
include "footer.php"
?>

<script>
  // $(document).ready(function(){
  //    alert("ready");
  // });
  
  // $(this).attr('src','esewa1.png');
   // alert(data);
   let count=0;
   let ticket=0;
   $('.img1').click(function(e){
    var price = $(this).attr('data-price');
    
    var cost=parseInt(price);
    var data = $(this).attr('data-id');
    
    if (data=="b")
    {
      $(this).attr('src','seats3.jpg');
      $(this).attr('data-id','');
      count=count-cost;
      ticket -=1;

    }else{
      $(this).attr('src','esewa1.png');
      $(this).attr('data-id','b');
      count=count+cost;
      ticket +=1;

    }
    $("#price").html(count);
    $("#totalprice").attr('value',count);
    $("#ticket").attr('value',ticket);
  });
   
</script>

  </body>
</html>
