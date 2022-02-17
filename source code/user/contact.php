




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
                <a class="nav-link" href="profile.php">Profile</a>
              </li>
                <li class="nav-item">
                <a class="nav-link" href="guide.php">Guide</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="contact.php">Contact Us</a>
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
              <h4>contact us</h4>
              <h2>let’s get in touch</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12415.208977673487!2d91.77761427437693!3d22.313430057137406!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1632855659581!5m2!1sen!2sbd=&output=embed" width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>In our country when you travel to a city alone or with your family or your friends one of the most important thing that you must have is a guide and a car to move around that city. <br><br>If they got to that city via Bus, Train or Air they may don’t have a car to move around. </p>
              <ul class="social-icons">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="#"><i class="fa fa-behance"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
                <?php


                    $connection= mysqli_connect('localhost', 'root', '', 'car'); 

                    if(isset($_POST['submit'])){

                        $name = $_POST['name'];
                        $email = $_POST['email'];
                        $subject = $_POST['subject'];
                        $message = $_POST['message'];

                        $query = "INSERT INTO contact(name, email, subject, message) VALUES ('{$name}', '{$email}', '{$subject}', '{$message}')";
                        $submit_contact = mysqli_query($connection, $query);
                        if(!$submit_contact) {
                            die("Query Failed". mysqli_error($connection));
                        }
                        else {
                            echo"
                            
                              <div class='alert alert-success alert-dismissible fade show'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                <strong>Success!</strong> Your message has been submitted.
                              </div>
                            
                            ";
                        }


                    }


                    ?>
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="contact.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="E-Mail Address" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Subject" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button style="border-radius:0px; border:none;" name="submit" type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-4">

          </div>
        </div>
      </div>
    </div>

      <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Happy Customers</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
                    <h5>Ricky Park</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/men/13.jpg" alt="user" />
                    <h5>Sergio M.</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
              
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/men/88.jpg" alt="user" />
                    <h5>Eden Hazard</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
              
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/women/95.jpg" alt="user" />
                    <h5>Emma Stone</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
              
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/women/45.jpg" alt="user" />
                    <h5>Lily Collins</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
              <div class="client-item">
                <div class="card-container" style="background-color: #a0afa9;border-radius: 5px;box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);color: #222;padding-top: 30px;position: relative;width: 500px; height:250px; max-width: 100%;text-align: center;">
                    <img class="round" style="width:100px; border: 1px solid #03BFCB;border-radius: 50%;padding: 7px; margin:auto;" src="https://randomuser.me/api/portraits/men/46.jpg" alt="user" />
                    <h5>Gareth Bale</h5>
                    <p style="color:#fff; padding-bottom:10px;">User interface designer and front-end developer and front-end developer</p>
                </div>
              </div>
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
