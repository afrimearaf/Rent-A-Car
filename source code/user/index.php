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
              <li class="nav-item active">
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
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>Most Exclisuve Vehicles</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>exclusive</h4>
            <h2>Quick Time Response</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>discover</h4>
            <h2>Perfect Travel Experience</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2 style="font-size: 26px; font-weight: 600; color: #f33f3f;">SELECT YOUR RIDE</h2>
              <a href="cars.php">view all cars <i class="fa fa-angle-right"></i></a>
               
            </div>
          </div>
            
            <?php 

            $connection= mysqli_connect('localhost', 'root', '', 'car'); 

            $sql="SELECT * FROM cars LIMIT 3";
            $select_cars_query = mysqli_query($connection, $sql); 
            
            
            if(!$select_cars_query){

                die("Query Failed". mysqli_error($connection));

            }
            
            while($row=mysqli_fetch_assoc($select_cars_query)){
                
                
                $id=$row['id'];
                $name=$row['name'];
                $image=$row['image'];
                $brand=$row['brand'];
                $color=$row['color'];
                $capability=$row['capability'];
                $mileage=$row['mileage'];
                $engine=$row['engine'];
                $transmission=$row['transmission'];
                $num_of_door=$row['num_of_door'];
                $category=$row['category'];
                $price=$row['price'];
                $tags=$row['tags'];
                $reviews=$row['reviews'];
                




            ?>  
            

            
            
            
          <div class="col-md-4">
            <div class="product-item">
              <a href="car.php?c_id=<?php echo $id; ?>"><img src="../admin/images/<?php echo $image; ?>" alt=""></a>
              <div class="down-content">
                <a href="car.php?c_id=<?php echo $id; ?>"><h4><?php echo $name; ?></h4></a>

                <p>Mileage: <?php echo $mileage; ?> and Engine: <?php echo $engine; ?></p>
                <ul class="stars">
                  <li><?php echo $price; ?>/= BDT per hour</li>
                  
                </ul>
<!--                                  <h6>$25.75</h6>-->
                <span>Reviews (<?php echo $reviews; ?>)</span>
              </div>
            </div>
          </div>
            <?php } ?>
        </div>
      </div>
    </div>


    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              
                <h2 style="font-size: 26px; font-weight: 600; color: #f33f3f;">VIEW YOUR TRAVEL</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for a tour guide?</h4>
              <p>There’s no reason to be just a mere tourist anymore, not when locals can show you an edgier, more beautiful and more authentic version of their city. Your can explore it by yourself.</p>
                <div class="timeline-content">
                    <ul>
                    <li>
                        <a href="guide.php">
                            <span><h5 style="font-size: 18px ; font-weight:400 !important; color: #f33f3f;">Choose Location</h5></span>
                            <h6 style="font-size: 15px ; font-weight:300 !important; color: #888;">Tell us whether your destination is Inside City or Outside City.</h6>
                        </a>
                    </li>
                        <li>
                        <a href="cars.php">
                            <span><h5 style="font-size: 18px ; font-weight:400 !important; color: #f33f3f;">Pick your Preferred Car</h5></span>
                            <h6 style="font-size: 15px ; font-weight:300 !important; color: #888;">Tell us the type of car you are looking for (SUV, Sedan or Microbus).</h6>
                        </a>
                    </li>
                        <li>
                        <a href="drivers.php">
                            <span><h5 style="font-size: 18px ; font-weight:400 !important; color: #f33f3f;">Choose Your Riding Partner</h5></span>
                            <h6 style="font-size: 15px ; font-weight:300 !important; color: #888;">Tell us when and where you want the car to be.</h6>
                        </a>
                    </li>
                    </ul>
                </div>
<!--              <a href="about.html" class="filled-button">Read More</a>-->
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/travel.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
      
      
        <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Drivers</h2>
            </div>
          </div>
            <?php 
            
            $connection= mysqli_connect('localhost', 'root', '', 'car'); 
            
            $sql="SELECT * FROM drivers LIMIT 3";
            $select_drivers_query = mysqli_query($connection, $sql); 
            
            
            if(!$select_drivers_query){

                die("Query Failed". mysqli_error($connection));

            }
            
            while($row=mysqli_fetch_assoc($select_drivers_query)){
                
                
                $id=$row['id'];
                $name=$row['name'];
                $image=$row['image'];
                $phone=$row['phone'];
                $experiance=$row['experiance'];
                $price=$row['price'];
                $reviews=$row['reviews'];
            

            ?> 
            
          <div class="col-md-4">
            <div class="product-item">
              <a href="driver.php?d_id=<?php echo $id; ?>"><img src="../admin/images/<?php echo $image; ?>" alt=""></a>
              <div class="down-content">
                <a href="car.php?c_id=<?php echo $id; ?>"><h4><?php echo $name; ?></h4></a>

                <p><?php echo $experiance; ?> years of experiance</p>
                <ul class="stars">
                  <li><?php echo $price; ?>/= BDT per hour</li>
                  
                </ul>
                <span>Reviews (<?php echo $reviews; ?>)</span>
              </div>
            </div>
          </div>
            
            <?php } ?>




        </div>
      </div>
    </div>  
      
      
      
      
      
    
      
      
    <div class="container">
        <div class="section-heading" style=" margin-top:20px;">
            <h2 style="font-size: 26px; font-weight: 600; color: #f33f3f;">HOW IT WORKS</h2>
        </div>
    </div>
      
    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>WE OFFER AFFORDABLE PRICE</h4>
                <p>If you hire a car from us that would be affordable for you because there is no hidden charges. We are open to our clients.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>WIDE RANGE OF BRANDS</h4>
                <p>In our service we have 100 premium cars, micro bus, pick up, ambulance as well as truck, covered van and commercial vehicles.</p>

              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <div class="icon">
                <i class="fa fa-gear"></i>
              </div>
              <div class="down-content">
                <h4>DEDICATED SUPPORT</h4>
                <p>Our system will provide you the faithful support. They always have been committed to you. You can use the car as you need.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action" style="margin-bottom:100px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <div class="section-heading">
              
                <h2 style=" margin-top:50px; font-size: 26px; font-weight: 600; color: #f33f3f;">FREQUESNTLY ASKED QUESTIONS</h2>
            </div>
            <ul class="accordion">
              <li>
                  <a>Is the price fixed?</a>
                  <div class="content">
                      <p>Yes. However, it may be adjusted in case of your requirement based on Car Type, Model, and Service Availability etc.</p>
                  </div>
              </li>
              <li>
                  <a>Is there any others service charege?</a>
                  <div class="content">
                      <p>There is no extra hidden charge for hire. After rent service sharges, fuel costs, and driver allowance are all-inclusive have to provided by your own.</p>
                  </div>
              </li>
              <li>
                  <a>Can I add any extra car outside the list?</a>
                  <div class="content">
                      <p>You can add an addition in case you are looking for a specific model car. In that case, our car rental service will make an attempt to get a specific car based on your requirements. However, the service charge may also be adjusted depending on your requirement (i.e.- Car Type, model, and service availability).</p>
                  </div>
              </li>
              <li>
                  <a>What is the purpose of the tour guide?</a>
                  <div class="content">
                      <p>Tour guide belongs to a map for each and every single city. While you are visiting a city or destination places you can get help from the tour guide.</p>
                  </div>
              </li>
            </ul>
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
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                 
      if(! cleared[t.id]){                     
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
