<?php session_start(); 

error_reporting(0);


?>
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

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body  style="background-color: #eee;">

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
                <a class="nav-link " href="cars.php">Our Cars</a>
              </li>
                <li class="nav-item">
                <a class="nav-link active" href="drivers.php">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="guide.php">Guide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
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
              <h4>TRAVEL PARTNERS</h4>
              <h2>Your Partner is Waiting</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <form action="driver_review.php" method="post">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6 card" style="border-radius:4px; background-color: #fff;">
    <?php 

    $connection= mysqli_connect('localhost', 'root', '', 'car'); 
      
    if(isset($_GET['d_code'])){
        $the_driver_code=$_GET['d_code'];
    }
      
    $sql="SELECT * FROM drivers WHERE pcode = '$the_driver_code'";
    $select_driver_query = mysqli_query($connection, $sql); 

    
    if(!$select_driver_query){

        die("Query Failed". mysqli_error($connection));

    }

    while($row=mysqli_fetch_assoc($select_driver_query)){

        $id=$row['id'];
        $name=$row['name'];
    }
                
    if(isset($_POST['review'])){

        $user_id=$_SESSION['user_id'];
        $username = $_SESSION['user_name'];
        $review_pcode=$_POST['d_code'];
        $rating=$_POST['rating'];
        $message=$_POST['message'];
        
        $query2 = "INSERT INTO reviews(review_pcode, user_id, username, rating, review, time) VALUES ('{$review_pcode}', '$user_id', '{$username}', '$rating', '{$message}', now())";

        $review_driver_query= mysqli_query($connection,$query2);

        if(!$review_driver_query){
                die("Query Failed". mysqli_error($connection));
            }
        else{
            echo"
                            
              <div class='alert alert-success alert-dismissible fade show  pt-2 mt-4'>
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                <strong>Success!</strong> Your Review has been submitted.
              </div>

            ";
        }
        $query_count= "UPDATE drivers SET reviews = reviews+1 WHERE pcode = '$review_pcode'";
                    
        $update_review_count= mysqli_query($connection,$query_count);
        if(!$update_review_count){
                die("Query Failed". mysqli_error($connection));
        }
    }







    ?>
                
                    <h2 class="text-center mt-5 mb-4" style="font-weight:300;">Write A Review</h2>
                    <h5 class="mt-3 mb-2 pl-2" style="font-weight:400;">Driver Name</h5>
                    <span class="mb-4" style="padding:8px; border:2px solid #ddd; font-weight:300;"><?php  echo $name; ?></span>
                    <input type="hidden" class="" id="d_code" name="d_code" value="<?php  echo $the_driver_code; ?>">
                    <h5 class="mt-3 mb-2 pl-2" style="font-weight:400;">Review</h5>
                    <div class="form-inline mb-4" style="padding:8px;">
                        <div class="form-check-inline "><span class="pr-3">Bad </span>
                          <label class="form-check-label" for="radio1">
                            <input type="radio" class="form-check-input" id="radio1" name="rating" value="1" checked>
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="rating" value="2">
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="rating" value="3">
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="rating" value="4">
                          </label>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio2">
                            <input type="radio" class="form-check-input" id="radio2" name="rating" value="5">
                          </label> 
                        </div>
                        <span class="pl-1">Good</span>
                    </div>
                    <h5 class="mt-3 mb-2 pl-2" style="font-weight:400;">Your Review</h5>
                    <div class="contact-form">
                        <textarea style="border:2px solid #ddd;" name="message" class="form-control" id="message" placeholder="Your Review" required=""></textarea>
                    </div>
                    <button style="border-radius:0px; border:none;" name="review" type="submit" id="form-submit" class="filled-button mb-4">Submit</button>
                </div>
                <div class="col-md-3">
                </div>
            </div>
        </form>
      </div>
    </div>

    
    <div class="team-members" style="margin-top: 20px; ">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading" style="border-bottom:none; ">
              <h2></h2>
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


  </body>

</html>
