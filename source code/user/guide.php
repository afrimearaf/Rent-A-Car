<?php session_start(); 
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
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/owl.css">
      <style>
        .tabs button:hover {
          background-color: #f33f3f;
        }

        /* Create an active/current tablink class */
        .tabs button.active {
          background-color: #f33f3f;
        }
      </style>

  </head>

  <body>

    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  

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
                <a class="nav-link " href="drivers.php">Drivers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="guide.php">Guide</a>
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
              <h4>RENTAL FLEET</h4>
              <h2>Explore by your own</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-size: 26px; font-weight: 500; color: #f33f3f;">RENT WITH EASE</h2>
            </div>
          </div>
           
                        <div class="col-md-12">
                <div class="tabs " style="overflow: hidden; background-color: #333;">
                    <button style="background-color: inherit; color:white; font-weight:700;float: left;border: none;outline: none;cursor: pointer;padding: 14px 16px;transition: 0.3s;font-size: 17px;border-right:1px solid #333;" class="tablinks" onclick="openCity(event, 'dhaka')" id="defaultOpen">Dhaka</button>
                    <button style="background-color: inherit; color:white; font-weight:700;float: left;border: none;outline: none;cursor: pointer;padding: 14px 16px;transition: 0.3s;font-size: 17px;border-right:1px solid #333;" class="tablinks" onclick="openCity(event, 'ctg')">Chittagong</button>
                    <button style="background-color: inherit; color:white; font-weight:700;float: left;border: none;outline: none;cursor: pointer;padding: 14px 16px;transition: 0.3s;font-size: 17px;border-right:1px solid #333;" class="tablinks" onclick="openCity(event, 'coxs')">Cox's Bazar</button>
                    <button style="background-color: inherit; color:white; font-weight:700;float: left;border: none;outline: none;cursor: pointer;padding: 14px 16px;transition: 0.3s;font-size: 17px;border-right:1px solid #333;" class="tablinks" onclick="openCity(event, 'shylet')">Shylet</button>
                </div>
                <div id="dhaka" class="tabcontent" style="">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d116834.0097778199!2d90.34928576871451!3d23.780777744581084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1635626863949!5m2!1sen!2sbd" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div id="ctg" class="tabcontent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118103.33518909621!2d91.74982775043046!3d22.326078104796622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd8a64095dfd3%3A0x5015cc5bcb6905d9!2sChattogram!5e0!3m2!1sen!2sbd!4v1635626978896!5m2!1sen!2sbd" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
                
                <div id="shylet" class="tabcontent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57903.129524585274!2d91.82596244902398!3d24.89983731643669!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x375054d3d270329f%3A0xf58ef93431f67382!2sSylhet!5e0!3m2!1sen!2sbd!4v1635627553225!5m2!1sen!2sbd" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <div id="coxs" class="tabcontent">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59415.15048673002!2d91.967882538403!3d21.45097439382655!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc7ea2ab928c3%3A0x3b539e0a68970810!2sCox&#39;s%20Bazar!5e0!3m2!1sen!2sbd!4v1635627686290!5m2!1sen!2sbd" width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>

            <div class="col-lg-3">

            </div>
          <div class="col-md-12">
            <div class="text-content">
<!--
              <h4>RENTAL FLEET</h4>
              <h2>Your Ride is Waiting</h2>
-->
            </div>
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
        function openCity(evt, cityName) {
          var i, tabcontent, tablinks;
          tabcontent = document.getElementsByClassName("tabcontent");
          for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
          }
          tablinks = document.getElementsByClassName("tablinks");
          for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
          }
          document.getElementById(cityName).style.display = "block";
          evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
        </script>


  </body>

</html>
