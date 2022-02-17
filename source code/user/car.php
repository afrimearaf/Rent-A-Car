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
      
      <style>
      body > div.best-features.about-features > div > div > form > div:nth-child(4) > ul > p > button:hover {
            background-color: #121212 !important;
            color: #fff !important;
          }
      
      </style>

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
                <a class="nav-link active" href="cars.php">Our Cars</a>
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
      
      
      
    <?php 

    $connection= mysqli_connect('localhost', 'root', '', 'car'); 
      
    if(isset($_GET['c_id'])){
        $the_car_id=$_GET['c_id'];
    }
      
    $sql="SELECT * FROM cars WHERE id = $the_car_id";
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
        $pcode=$row['pcode'];

    }





    ?>
      


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
                  
        <div class="row">

              <div class="col-md-12">
                <div class="section-heading">
                  <h2 style="font-size: 26px; font-weight: 500; color: #f33f3f;">RENT WITH EASE</h2>
                </div>
                <div class="messgae">
                </div>  
              </div>
              <div class="col-md-8">
                <div class="right-image">
                  <img src="../admin/images/<?php echo $image; ?>" alt="">
                </div>
              </div>
              <div class="col-md-8">
                <div class="left-content">
                    <h3 style="color: #1a6692; margin-top: 20px; margin-bottom: 20px;"><?php echo $name; ?></h3>
                    <h5>Brand: <span><p style="display: inline-block; border-bottom:none; padding-bottom:0; "><?php echo  $brand; ?></p></span></h5>
                    <h5>Color: <span><p style="display: inline-block; border-bottom:none; padding-bottom:0;"><?php echo $color; ?></p></span></h5>
                    <h5>Engine: <span><p style="display: inline-block; border-bottom:none; padding-bottom:0;"><?php echo $engine; ?></p></span></h5>
                    <h5>Transmission: <span><p style="display: inline-block; border-bottom:none; padding-bottom:0;"><?php echo $transmission; ?></p></span></h5>
                    <h5>Mileage: <span><p style="display: inline-block; border-bottom:none; padding-bottom:0;"><?php echo $mileage; ?></p></span></h5>


                </div>
              </div>
                <div class="col-md-8">
                <div class="section-heading" style="margin-bottom: 0px;">
                  <p style="margin-top: 20px;  border-bottom:none; padding-bottom:0; font-size: 18px;">This is a <?php echo $color; ?> <?php echo $category; ?> which is capable of carrying <?php echo $capability; ?>. It has <?php echo $num_of_door; ?> automated doors. So pick your travel date in advance, as per your schedule. and grab this vehical. Rent this <?php echo $name; ?> convertible for your next move</p>
                </div>
                    <ul class="hire">
                        <form action="manage_cart.php" method="post" class="form_submit">
                            <p style="font-size: 18px;"><img src='../admin/images/taka.svg' alt='' style='width:24px; height:24px;'><?php echo $price; ?>/= per hour
                                <button name="add_to_cart" style="margin-left:10%;" class="filled-button">rent Now</button>
                            </p>
                            <input type="hidden" class="pid" name="pid" value="<?php echo $id; ?>"> 
                            <input type="hidden" class="name" name="name" value="<?php echo $name; ?>"> 
                            <input type="hidden" class="price" name="price" value="<?php echo $price; ?>"> 
                            <input type="hidden" class="pcode" name="pcode" value="<?php echo $pcode; ?>"> 
                        </form>


                    </ul>
              </div>
           

        </div>
      </div>
    </div>

    
<div class="team-members" style="margin-top: 20px; margin-bottom:0px;">
    <div class="row" style="background:#efefff;">
      <div class="col-md-12">
        <div class="container section-heading" >
            <div class="section-heading" style="border-bottom:none; ">
                <h2 class=" container mt-5">Reviews</h2>
            </div>
        </div>
              <?php 
              
              
              $sql0 = "SELECT * FROM reviews WHERE review_pcode ='$pcode'";
              $selct_reviews = mysqli_query($connection, $sql0); 
              $total_rating=0;
              
              if(!$selct_reviews){

                die("Query Failed". mysqli_error($connection));

            }

            while($row=mysqli_fetch_assoc($selct_reviews)){


                $review_id=$row['review_id'];
                $review_id_cnt[]=$row['review_id'];
                $review_pcode=$row['review_pcode'];
                $user_id=$row['user_id'];
                $username=$row['username'];
                $rating=$row['rating'];
                $review=$row['review'];
                $time=$row['time'];
                $total_rating += $rating;

            }
              
              $count = count($review_id_cnt);
              
              
              ?>
                  	
    	<div class="container">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating"><?php echo round($total_rating/$count,2) ; ?></span> / 5</b>
    					</h1>
    					<div class="mb-3">
                            <?php
                            for ($i = 0; $i < 5; $i++) {
                                $ratingClass = "fa fa-star star-light mr-1 main_star";
                                if($i <= $rating) {
                                    $ratingClass = "text-warning";
                                }
                            
                            
                            ?>
    						<i class='fa fa-star star-light mr-1 <?php echo $ratingClass; ?>'></i>
                            
                            <?php  } ?>
	    				</div>
    					<h3><span id="total_review"><?php echo $count; ?></span> Review</h3>
    				</div>
                    
    				<div class="col-sm-4">
    					<h6> 
                            <div class="progress-label-left"><b>5</b> <i class="fa fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">
                                <?php 
                                
                                $sql_five = "SELECT `review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time` FROM `reviews` WHERE review_pcode='$pcode' AND rating=5";
                                $selct_five_star = mysqli_query($connection, $sql_five); 
                                while($row=mysqli_fetch_assoc($selct_five_star)){
                                    $five_star_cnt[]=$row['review_id'];
                                }
                                $star_five = count($five_star_cnt);
                                echo $star_five;
                                
                                $fiveStarRatingPercent = round(($star_five/$count)*100);
				                $fiveStarRatingPercent = !empty($fiveStarRatingPercent)?$fiveStarRatingPercent.'%':'0%';	
                                ?>
                                </span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress" style="width:<?php echo $fiveStarRatingPercent; ?>"> <?php echo $fiveStarRatingPercent; ?>
                                </div>
                            </div>
                        </h6>
    					<h6>
                            <div class="progress-label-left"><b>4</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">
                                <?php 
                                
                                $sql_four = "SELECT `review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time` FROM `reviews` WHERE review_pcode='$pcode' AND rating=4";
                                $selct_four_star = mysqli_query($connection, $sql_four); 
                                while($row=mysqli_fetch_assoc($selct_four_star)){
                                    $four_star_cnt[]=$row['review_id'];
                                }
                                $star_four = count($four_star_cnt);
                                $fourStarRatingPercent = round(($star_four/$count)*100);
				                $fourStarRatingPercent = !empty($fourStarRatingPercent)?$fourStarRatingPercent.'%':'0%';
                                echo $star_four;
                                ?>
                                </span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" id="four_star_progress" style="width:<?php echo $fourStarRatingPercent; ?>"><?php echo $fourStarRatingPercent; ?></div>
                            </div>               
                        </h6>
    					<h6>
                            <div class="progress-label-left"><b>3</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">
                                <?php 
                                
                                $sql_three = "SELECT `review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time` FROM `reviews` WHERE review_pcode='$pcode' AND rating=3";
                                $selct_three_star = mysqli_query($connection, $sql_three); 
                                while($row=mysqli_fetch_assoc($selct_three_star)){
                                    $three_star_cnt[]=$row['review_id'];
                                }
                                $star_three = count($three_star_cnt);
                                echo $star_three;
                                $threeStarRatingPercent = round(($star_three/$count)*100);
				                $threeStarRatingPercent = !empty($threeStarRatingPercent)?$threeStarRatingPercent.'%':'0%';
                                ?>
                                </span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow=""style="width:<?php echo $threeStarRatingPercent; ?>" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"><?php echo $threeStarRatingPercent; ?></div>
                            </div>               
                        </h6>
    					<h6>
                            <div class="progress-label-left"><b>2</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">
                                <?php 
                                
                                $sql_two = "SELECT `review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time` FROM `reviews` WHERE review_pcode='$pcode' AND rating=2";
                                $selct_two_star = mysqli_query($connection, $sql_two); 
                                while($row=mysqli_fetch_assoc($selct_two_star)){
                                    $two_star_cnt[]=$row['review_id'];
                                }
                                $star_two = count($two_star_cnt);
                                echo $star_two;
                                $twoStarRatingPercent = round(($star_two/$count)*100);
				                $twoStarRatingPercent = !empty($twoStarRatingPercent)?$twoStarRatingPercent.'%':'0%';
                                ?>
                                </span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress" style="width:<?php echo $twoStarRatingPercent; ?>"><?php echo $twoStarRatingPercent; ?></div>
                            </div>               
                        </h6>
    					<h6>
                            <div class="progress-label-left"><b>1</b> <i class="fa fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">
                                <?php 
                                
                                $sql_one = "SELECT `review_id`, `review_pcode`, `user_id`, `username`, `rating`, `review`, `time` FROM `reviews` WHERE review_pcode='$pcode' AND rating=1";
                                $selct_one_star = mysqli_query($connection, $sql_one); 
                                while($row=mysqli_fetch_assoc($selct_one_star)){
                                    $one_star_cnt[]=$row['review_id'];
                                }
                                $star_one = count($one_star_cnt);
                                echo $star_one;
                                $oneStarRatingPercent = round(($star_one/$count)*100);
				                $oneStarRatingPercent = !empty($oneStarRatingPercent)?$oneStarRatingPercent.'%':'0%';
                                ?>
                                </span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress" style="width:<?php echo $oneStarRatingPercent; ?>"><?php echo $oneStarRatingPercent; ?></div>
                            </div>               
                        </h6>
            
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<a href="car_review.php?c_code=<?php echo $pcode; ?>" style="text-transform: uppercase; letter-spacing: 1px; font-weight: 800; border-radius: 0px; width:50%; " class="filled-button">Review</a>
    				</div>
    			</div>


    	<div class="mt-5 ml-5 mr-5" id="review_content" >
            <div class="list-group">
            <?php 
            $sql99 = "SELECT * FROM reviews WHERE review_pcode ='$pcode'";
                  $selct_review = mysqli_query($connection, $sql99); 

                  if(!$selct_review){

                    die("Query Failed". mysqli_error($connection));

                }
            while($row=mysqli_fetch_assoc($selct_review)){


                    $review_id=$row['review_id'];
                    $review_id_cnt[]=$row['review_id'];
                    $review_pcode=$row['review_pcode'];
                    $user_id=$row['user_id'];
                    $username=$row['username'];
                    $rating=$row['rating'];
                    $review=$row['review'];
                    $time=$row['time'];

            ?>
                <div class="border border-gray p-2 mb-3 " style="background:#fff;">
                    <div class="d-flex align-items-start">
                        <img class="me-2 avatar-sm rounded-circle mr-5 ml-3" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Generic placeholder image" width="64px">
                        <div class="w-100">
                            <h5 class=""><?php echo $username; ?> <small class="text-muted"> <?php echo $time; ?></small></h5>
                            <div class="">
                                <?php echo $review; ?>
                                <br>
                            <?php
                            for ($i = 1; $i < 6; $i++) {
                                $ratingClass = "fa fa-star star-light mr-1 main_star";
                                if($i <= $rating) {
                                    $ratingClass = "text-warning";
                                }
                            
                            
                            ?>
    						<i class='fa fa-star star-light mr-1 <?php echo $ratingClass; ?>'></i>
                            
                            <?php  } ?>
                            </div>
                        </div>
                    </div> 
                </div>
                
                <?php } ?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>




<script>
//    var rating_data = 0;
//
//    $(document).on('mouseenter', '.submit_star', function(){
//        
//        var rating = $(this).data('rating');
//        reset_background();
//        for(var count = 1; count <= rating; count++)
//        {
//            $('#submit_star_'+count).addClass('text-warning');
//        }
//    });
//    
//    function reset_background()
//    {
//        for(var count = 1; count <= 5; count++)
//        {
//            $('#submit_star_'+count).addClass('star-light');
//            $('#submit_star_'+count).removeClass('text-warning');
//        }
//    }
//    
//    $(document).on('mouseleave', '.submit_star', function(){
//        
//    reset_background();
//    for(var count = 1; count <= rating_data; count++)
//    {
//        $('#submit_star_'+count).removeClass('star-light');
//        $('#submit_star_'+count).addClass('text-warning');
//    }
//    });
//    
//     $(document).on('click', '.submit_star', function(){
//
//        rating_data = $(this).data('rating');
//
//    });
//    
//    $('#save_review').click(function(){
//
//        var user_id = $('#user_id').val();
//        var user_name = $('#user_name').val();
//        var pcode = $('#pcode').val();
//        var user_review = $('#user_review').val();
//
//        if(user_review == '')
//        {
//            alert("Please Fill The Field");
//            return false;
//        }
//        else
//        {
//            $.ajax({
//                url:"rating.php",
//                method:"POST",
//                data:{user_id:user_id, user_name:user_name, pcode:pcode, rating_data:rating_data, user_review:user_review},
//                success:function(data)
//                {
//                    $('#review_modal').modal('hide');
//
//                    load_rating_data();
//
//                    alert(data);
//                }
//            })
//        }
//
//    });

</script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
        
        
//    $(document).ready(function(){
//        $(".add_to_cart").click(function(e){
//            e.preventDefault();
//            var $form = $(this).closest(".form_submit");
//            var pid = $form.find(".pid").val();
//            var name = $form.find(".name").val();
//            var price = $form.find(".price").val();
//            var pcode = $form.find(".pcode").val();
//            
//            $.ajax({
//                url: 'manage_cart.php',
//                method: 'post',
//                data: {id:pid, name:name, price:price, pcode:pcode}, 
//                success:function(response){
//                    $("message").html(response);
//                }
//            });
//        });
//    }); 
        
        
        
        
    </script>


  </body>

</html>
