<?php session_start(); ?>

<?php
    
    
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




    if(isset($_POST['submit'])){
    
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $user_email=$_POST['email'];
        $phone=$_POST['phone'];
        $nid=$_POST['nid'];
        $address=$_POST['address'];
        $pass=$_POST['password'];



        $query= "UPDATE users SET firstname = '{$firstname}', lastname = '{$lastname}',  user_name = '{$username}', email =  '{$user_email}', phone = '{$phone}', nid =  '{$nid}', address = '{$address}' , password = '{$pass}' WHERE user_name = '{$username}'";

        $update= mysqli_query($connection,$query);
        

    }


?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

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
                <a class="nav-link" href="cars.php">Our Cars</a>
              </li>
                 <li class="nav-item">
                <a class="nav-link" href="drivers.php">Drivers</a>
              </li>
                <li class="nav-item">
                <a class="nav-link " href="guide.php">Guide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../logout.php">Log Out</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Porfile</h4>
              <h2><?php echo $fname . " " . $lname; ?></h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-products">
            <div class="section-heading">
              <h2 style="font-size: 26px; font-weight: 600; color: #f33f3f;">Update Profile</h2>
              <a href="order.php">view order history <i class="fa fa-angle-right"></i></a>
               
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">First Name <input name="firstname" value="<?php echo $fname; ?>" type="text" class="form-control" id="firstname" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">Last Name <input name="lastname" value="<?php echo $lname; ?>" type="text" class="form-control" id="lastname" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">User Name <input name="username" value="<?php echo $user_name; ?>" type="text" class="form-control" id="username" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">Email <input name="email" value="<?php echo $email; ?>" type="email" class="form-control" id="email" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">Phone <input name="phone" value="<?php echo $phone; ?>" type="phone" class="form-control" id="phone" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">NID <input name="nid" value="<?php echo $nid; ?>" type="number" class="form-control" id="nid" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">Address <input name="address" value="<?php echo $address; ?>" type="text" class="form-control" id="address" required=""></label>
                    </fieldset>
                  </div>
                    <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <label style="width:100% !important;">Password <input name="password" value="<?php echo $password; ?>" type="password" class="form-control" id="password" required=""></label>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button style="k; text-transform: uppercase; letter-spacing: 2px; font-weight: 800; border-radius: 0px;"  type="submit" name="submit" id="form-submit" class="filled-button">Submit</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">

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
