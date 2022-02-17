<?php session_start(); ?>



<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Rent A Car</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
      
<?php
//session_destroy();


    $connection= mysqli_connect('localhost', 'root', '', 'car'); 

    if(isset($_SESSION['user_name'])){
        $username = $_SESSION['user_name'];
        
        $sql= "SELECT * FROM users WHERE user_name = '{$username}' ";
        $profile= mysqli_query($connection, $sql);
        
        while($row=mysqli_fetch_array($profile)){
        
            $user_id=$row['user_id'];
            $fname=$row['firstname'];
            $lname=$row['lastname'];
            $position=$row['position'];
            $user_name=$row['user_name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $nid=$row['nid'];
            $address=$row['address'];
            $password=$row['password'];
            $status=$row['status'];
        }
    }


    $sqls = "SELECT * FROM orders";
    $fetch_order_query= mysqli_query($connection,$sqls);
    while($rows=mysqli_fetch_array($fetch_order_query)){
        
        $order_id=$rows['order_id'];
        $all_user_id =$rows['user_id'];
        $card_name=$rows['card_name'];
        $card_number=$rows['card_number'];
        $exp_date=$rows['exp_date'];
        $pickup=$rows['pickup'];
        $pick_date=$rows['pick_date'];
        $pick_time=$rows['pick_time'];
        
        
    }

    if(isset($_POST['order'])){

        $this_user_id=$user_id;
        $cardname=$_POST['cardname'];
        $cardnumber=$_POST['cardnumber'];
        $expdate=$_POST['expdate'];
        $pickup=$_POST['pickup'];
        $pickdate=$_POST['pickdate'];
        $picktime=$_POST['picktime'];

        
        if(in_array("$this_user_id", "$all_user_id")){
            echo"
            
            <div class='alert alert-warning alert-dismissible fade show pt-2 mt-4'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>You have already pending order. </strong> Try again later
            </div>
            <script>
                window.location.href='cart.php';
            </script>";
        }
        else {
            $sql= "INSERT INTO orders(user_id, card_name, card_number, exp_date, pickup, pick_date, pick_time) VALUES ( '{$this_user_id}', '{$cardname}', '{$cardnumber}', '{$expdate}', '{$pickup}', '{$pickdate}', '{$picktime}')";

            $place_order_query= mysqli_query($connection,$sql);

            if(!$place_order_query){
                    die("Query Failed". mysqli_error($connection));
                }
            else{
                header("Location: confirm_order.php"); 
            }
        }
    }

    $sqls = "SELECT * FROM orders WHERE user_id = $user_id";
    $fetch_order_query= mysqli_query($connection,$sqls);
    while($rows=mysqli_fetch_array($fetch_order_query)){
        
        $order_id=$rows['order_id'];
        $card_name=$rows['card_name'];
        $card_number=$rows['card_number'];
        $exp_date=$rows['exp_date'];
        $pickup=$rows['pickup'];
        $pick_date=$rows['pick_date'];
        $pick_time=$rows['pick_time'];
        
        
    }



?>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>rent<em> a </em>car</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link active" href="cars.php">Our Cars</a>
              </li>
                <li class="nav-item">
                <a class="nav-link " href="drivers.php">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="../logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
      
      
      



    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>RENTAL FLEET</h4>
              <h2>Your Ride is Waiting</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="section-heading">
          <h2 style="font-size: 26px; font-weight: 500; color: #f33f3f;">THANKS FOR HIRING US</h2>
        </div>
        </div>
        <div>
              <div class="container bootdey">
                <div class="row invoice row-printable">
                    <div class="col-md-10">
                        <div class="panel panel-default plain" id="dash_0">
                            <div class="panel-body p30">
                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="invoice-logo">
                                        <ul class="list-unstyled">
                                           <li><strong>Invoice: </strong>#<?php echo $order_id; ?></li>
                                            <li><strong>PickUp Time:</strong> <?php echo $pick_date . ". " . $pick_time; ?></li>
                                            <li><strong>From:</strong> <?php echo $pickup; ?></li>
                                            <li><strong>Card Number:</strong> <?php echo $card_number; ?></li> 
                                        </ul>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="invoice-from">
                                        <ul class="list-unstyled text-right">
                                            <li><?php echo $fname . " " . $lname; ?></li>
                                            <li><?php echo $address; ?></li>
                                            <li><?php echo $phone; ?></li>
                                            <li><?php echo $email; ?></li>
                                        </ul>
                                    </div>
                                </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="invoice-items">
                                            <div class="table-responsive" style="overflow: hidden; outline: none;" tabindex="0">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="per60 text-center">Description</th>
                                                            <th class="per15 text-center">Hour</th>
                                                            <th class="per25 text-center">Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                        
                        
                               
                                                        $query= "SELECT * FROM cart where user_id = $user_id";
                                                        $select_cart= mysqli_query($connection,$query);
                                                        $grand_total = 0;

                                                        while($row=mysqli_fetch_assoc($select_cart)){
                                                            $db_id=$row['id'];
                                                            $db_user_id=$row['user_id'];
                                                            $db_name=$row['name'];
                                                            $db_price=$row['price'];
                                                            $db_hour=$row['hours'];
                                                            $db_total=$row['total_price'];
                                                            $db_pcode=$row['pcode'];

                                                            ?>
                                                            <tr>

                                                            <td><?php echo $db_name; ?></td>
                                                            <td class="text-center"><?php echo $db_hour; ?></td>
                                                            <td class="text-center"><img src='../admin/images/taka.svg' alt='' style='width:24px; height:24px;'><?php echo $db_total; ?> BDT</td>
                                                            <tr>
                                                            <?php
                                                            $grand_total += $db_total; 
                                                            } 

                                                        ?>
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="2" class="text-right">Total:</th>
                                                            <th class="text-center"><img src='../admin/images/taka.svg' alt='' style='width:24px; height:24px;'> <?php echo $grand_total; ?> BDT</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="invoice-footer mt25">
                                            <p class="text-center">Record a payment on a customer invoice <button class="btn btn-danger" onclick="window.print()"><i class="fa fa-print mr5"></i> Print</button></p>
                                        </div>
                                    </div>
                                    <!-- col-lg-12 end here -->
                                </div>
                                <!-- End .row -->
                            </div>
                        </div>
                        <!-- End .panel -->
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
            </div>
        </div>

      
    </div>

    
    <div class="team-members" style="margin-top: 20px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="border-bottom:none; ">
<!--              <h2>Reviews</h2>-->
            </div>
          </div>


        </div>
      </div>
    </div>





    
  <footer id="main-footer" style="background: #222; color: #fff; padding: 32px 0;">
    <div class="container footer-container">
        <div class="row" style="margin:  32px 0px;">
            <div class="col-md-3">
               <h3>Get in Touch</h3>
                <p style="color:#fff; margin-top:32px;">7-14, Nikunja Housing Society South Khulshi, Chittagong, Chittagong, Bangladesh</p>
              </div>
              <div class="col-md-3">
                <h3>Email Newsletter</h3>
                <form style=" margin-top:32px;">
                  <input style=" width: 90%; padding: 0.5rem; margin-bottom: 0.5rem;" type="email" placeholder="Enter Email...">
                  <a href="#" style="text-transform: uppercase; letter-spacing: 2px; font-weight: 800; border-radius: 0px; width:90%; " class="filled-button">Subscribe</a>
                </form>
              </div>
              <div class="col-md-3">
                <h3 >Site Links</h3>
                <ul class="list" style=" margin-top:32px;">
                  <li class="foot"><a href="#">Help & Support</a></li>
                  <li  class="foot"><a href="#">Privacy Policy</a></li>
                  <li  class="foot"><a href="#">About Us</a></li>
                  <li  class="foot"><a href="#">Contact</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 style="margin-bottom:20px;">Join Our Club</h2>
                <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
              </div>
        </div>
      <div>
        <p class="foot">
          Copyright &copy; Rent A Car by <a href="https://www.linkedin.com/in/amirfaisalmahmud/">Amir Faisal Mahamud</a> 2021, All Rights Reserved
        </p>
      </div>
    </div>
  </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
        
    
        

    
    </script>
      <script>
          
          $(document).ready(function(){
              
              $(".ihour").on('change', function(){
                  var $el = $(this).closest('tr');
                  
                  var ipcode = $el.find(".ipcode").val();
                  var iprice = $el.find(".iprice").val();
                  var ihour = $el.find(".ihour").val();
                  location.reload(true);
                  
                  $.ajax({
                      url: 'manage_cart.php',
                      method: 'post',
                      cache: false,
                      data: {ihour:ihour,ipcode:ipcode,iprice:iprice},
                      success: function(response) {
                          console.log(response);
                      }
                  });
              });
          });
      
      
      </script>


  </body>

</html>
