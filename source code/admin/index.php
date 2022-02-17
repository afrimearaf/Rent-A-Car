<?php session_start();  ?>
<?php $connection= mysqli_connect('localhost', 'root', '', 'car'); ?>
 <?php
    $query= "SELECT * FROM cars";
    $select_all_cars= mysqli_query($connection,$query);
    $cars_count = mysqli_num_rows($select_all_cars);

    $query= "SELECT * FROM drivers";
    $select_all_drivers= mysqli_query($connection,$query);
    $driver_count = mysqli_num_rows($select_all_drivers);

    $query= "SELECT * FROM orders";
    $select_all_order= mysqli_query($connection,$query);
    $order_count = mysqli_num_rows($select_all_order);

    $query= "SELECT * FROM users";
    $select_all_user= mysqli_query($connection,$query);
    $user_count = mysqli_num_rows($select_all_user);

    $query= "SELECT * FROM contact";
    $select_all_message= mysqli_query($connection,$query);
    $message_count = mysqli_num_rows($select_all_message);

    $query= "SELECT * FROM reviews";
    $reviews= mysqli_query($connection,$query);
    $reviews_count = mysqli_num_rows($reviews);

    $query= "SELECT * FROM users WHERE status='unassigned'";
    $select_all_user= mysqli_query($connection,$query);
    $unassigned_user_count = mysqli_num_rows($select_all_user);

    $query= "SELECT * FROM orders WHERE status !='delivered'";
    $select_all_user= mysqli_query($connection,$query);
    $undelivered_order_count = mysqli_num_rows($select_all_user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rent A Car - Admin</title>
    <link rel="canonical" href="https://www.wrappixel.com/templates/pixel-admin-lite/" />
    <link rel="shortcut icon" href="./images/fav.ico" type="image/x-icon">
    <link rel="icon" href="./images/fav.ico" type="image/x-icon">
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link href="./bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
    <link href="./bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/colors/blue-dark.css" id="theme" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg "
                    href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i
                        class="fa fa-bars"></i></a>
                <div class="top-left-part"><a class="logo" href="index.php"><b class="mr-3"><img style="margin-left:24px;"
                                src="./images/logo_text.png" alt="home" /></b></a>
                </div>
                <ul class="nav navbar-top-links navbar-left m-l-20 hidden-xs">
                    <li>
                        <form role="search" class="app-search hidden-xs">
                            <input type="text" placeholder="Search..." class="form-control" disabled> <a href=""><i
                                    class="fa fa-search"></i></a>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#"  style=" font-size:20px; color:#555; padding-bottom:0px;" class="dropdown-toggle profile-pic"  data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['user_name']; ?>&nbsp;&nbsp;</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="profile.php"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="../logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <ul class="nav" id="side-menu">
                    <li style="padding: 10px 0 0;">
                        <a href="index.php" class="waves-effect"><i class="fa  fa-dashboard fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="waves-effect" data-toggle="collapse" data-target="#cars_dropdown"><i class="fa fa-car fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Cars&nbsp;</span><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cars_dropdown" class="collapse">
                            <li style="padding:8px;">
                                <a href="cars.php" class="waves-effect"><i  class="fa fa-table fa-fw"></i>View All Cars</a>
                            </li>
                            <li style="padding:8px;">
                                <a href="cars.php?source=add_car" class="waves-effect"><i class="fa fa-cab  fa-fw"></i>Add Car</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="http://localhost:8082/" class="waves-effect"><i class="fa fa-map-marker fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Track Cars</span></a>
                    </li>
                    <li>
                        <a href="javascript:;" class="waves-effect" data-toggle="collapse" data-target="#drivers_dropdown"><i class="fa fa-id-card fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Drivers&nbsp;</span><i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="drivers_dropdown" class="collapse">
                            <li style="padding:8px;">
                                <a href="drivers.php" class="waves-effect"><i  class="fa fa-table fa-fw"></i>View All Drivers</a>
                            </li>
                            <li style="padding:8px;">
                                <a href="drivers.php?source=add_driver" class="waves-effect"><i class="fa fa-user-plus  fa-fw"></i>Add Driver</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="orders.php" class="waves-effect"><i class="fa fa-table fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Orders </span> <span class="badge badge-info"> <?php echo $undelivered_order_count; ?></span></a>
                    </li>
                    <li>
                        <a href="reviews.php" class="waves-effect"><i class="fa fa-comments fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Reviews</span></a>
                    </li>
                    <li>
                        <a href="messages.php" class="waves-effect"><i class="fa fa-envelope fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Messages</span></a>
                    </li>
                    <li>
                        <a href="users.php" class="waves-effect"><i class="fa fa-users fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">User</span> <span class="badge badge-info"> <?php echo $unassigned_user_count; ?></span></a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        
                        <ol class="breadcrumb">
                            <li><span style="padding-right:4px;"><?php 
//                                date_default_timezone_set('Asia/Dhaka');
//                                    echo date('d-m-Y', time()); 
                                ?></span></li>
                        </ol>
                        <ol class="breadcrumb">
                            <li><span style="padding-right:8px;"><?php 
//                                date_default_timezone_set('Asia/Dhaka');
//                                    echo date('h:i:sa', time()); 
                                ?></span></li>
                        </ol>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i data-icon="E"
                                        class="linea-icon linea-basic"></i>
                                    <h5 class="text-muted vb">Number of Cars</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-danger"><?php echo $cars_count; ?></h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-danger" role="progressbar"
                                            aria-valuenow="<?php echo $cars_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $cars_count; ?>%">
                                            <span class="sr-only"><?php echo $cars_count; ?> Cars</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                        data-icon="&#xe01b;"></i>
                                    <h5 class="text-muted vb">Number of Drivers</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-megna"><?php echo $driver_count; ?></h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-megna" role="progressbar"
                                            aria-valuenow="<?php echo $driver_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $driver_count; ?>%">
                                            <span class="sr-only"><?php echo $driver_count; ?>% Drivers </span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <div class="col-in row">
                                <div class="col-md-6 col-sm-6 col-xs-6"> <i class="linea-icon linea-basic"
                                        data-icon="&#xe00b;"></i>
                                    <h5 class="text-muted vb">Number of Orders</h5>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    <h3 class="counter text-right m-t-15 text-primary"><?php echo $order_count; ?></h3>
                                </div>
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="progress">
                                        <div class="progress-bar progress-bar-primary" role="progressbar"
                                            aria-valuenow="<?php echo $order_count; ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $order_count; ?>%">
                                            <span class="sr-only"><?php echo $order_count; ?>% Orders</span> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3 class="box-title">View Statistics</h3>
                            <div >
                              <canvas class="flot-base w-100" style="height:40vh;" height="200px" id="myChart"></canvas>
                            </div>
                                <script>
                                const ctx = document.getElementById('myChart').getContext('2d');
                                const myChart = new Chart(ctx, {
                                    type: 'bar',
                                    data: {
                                        labels: ['All Cars', 'All Drivers', 'Orders', 'Reviews',  'Messages', 'Users'],
                                        datasets: [{
                                            label: 'Counts',
                                            data: [<?php echo $cars_count ?>, <?php echo $driver_count ?>, <?php echo $order_count ?>, <?php echo $reviews_count ?>, <?php echo $message_count ?>, <?php echo $user_count ?>],
                                            backgroundColor: [
                                                'rgba(255, 99, 132, 0.2)',
                                                'rgba(54, 162, 235, 0.2)',
                                                'rgba(255, 206, 86, 0.2)',
                                                'rgba(75, 192, 192, 0.2)',
                                                'rgba(153, 102, 255, 0.2)',
                                                'rgba(255, 159, 64, 0.2)'
                                            ],
                                            borderColor: [
                                                'rgba(255, 99, 132, 1)',
                                                'rgba(54, 162, 235, 1)',
                                                'rgba(255, 206, 86, 1)',
                                                'rgba(75, 192, 192, 1)',
                                                'rgba(153, 102, 255, 1)',
                                                'rgba(255, 159, 64, 1)'
                                            ],
                                            borderWidth: 1
                                        }]
                                    },
                                    options: {
                                        scales: {
                                            y: {
                                                beginAtZero: true
                                            }
                                        }
                                    }
                                });
                                </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Ordes
                            </h3>
                            <div class="table-responsive">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Pick Up Address</th>
                                            <th>Pick Up Date</th>
                                            <th>Pick Up Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php


                                            $query="SELECT * FROM  orders";
                                            $select_order_id= mysqli_query($connection,$query);
                                            while($row=mysqli_fetch_assoc($select_order_id)){
                                                $order_id=$row['order_id'];
                                                $user_id=$row['user_id'];
                                                $card_name=$row['card_name'];
                                                $card_number=$row['card_number'];
                                                $exp_date=$row['exp_date'];
                                                $pickup=$row['pickup'];
                                                $pick_date=$row['pick_date'];
                                                $pick_time=$row['pick_time'];
                                                $status=$row['status'];
                                        ?>
                                        <tr>
                                            <td class="txt-oflo"><?php 
                                                $query="SELECT * FROM  users WHERE user_id= $user_id";
                                                $select_user_order_id= mysqli_query($connection,$query);
                                                while($row=mysqli_fetch_assoc($select_user_order_id)){
                                                    $user_id=$row['user_id'];
                                                    $user_name=$row['user_name'];
                                                    echo $user_name; 
                                                }
                                                ?>
                                            </td>
                                            <td><?php echo $pickup; ?></td>
                                            <td class="txt-oflo"><?php echo $pick_date; ?></td>
                                            <td><span><?php echo $pick_time; ?></span></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table> <a href="orders.php">Check all the orders</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-6 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Recent Reviews</h3>
                            <div class="comment-center">
                                <?php

                                    $query = "SELECT * FROM reviews LIMIT 3";
                                    $select_reviews = mysqli_query($connection,$query);

                                    while($row=mysqli_fetch_assoc($select_reviews)){

                                        $review_id = $row['review_id'];
                                        $review_pcode = $row['review_pcode'];
                                        $user_id = $row['user_id'];
                                        $username =$row['username'];
                                        $rating =$row['rating'];
                                        $review=$row['review'];
                                        $time=$row['time'];
                                ?>
                                <div class="comment-body">
                                    <button type="button" class="btn btn-danger btn-circle btn-xl"><?php echo $rating; ?></button>
                                    <div class="mail-contnet">
                                        <h5><?php echo $username; ?></h5> <span class="mail-desc"><?php echo $review; ?></span><a href="javacript:void(0)"
                                            class="action"><i class="ti-close text-danger"></i></a> <a
                                            href="javacript:void(0)" class="action"><i
                                                class="ti-check text-success"></i></a><span
                                            class="time pull-right">April 14, 2016</span>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">You have new messages</h3>
                            <div class="message-center">
                                <?php 
                                
                                    $query = "SELECT * FROM contact LIMIT 4";
                                    $select_message = mysqli_query($connection,$query);

                                    while($row=mysqli_fetch_assoc($select_message)){

                                        $contact_id = $row['contact_id'];
                                        $name = $row['name'];
                                        $email = $row['email'];
                                        $subject =$row['subject'];
                                        $message =$row['message'];
                                ?>
                                <a href="#">
                                    <div class="user-img"> <img src="./images/users/user_<?php echo $contact_id; ?>.jpg" alt="user"
                                            class="img-circle"> <span class="profile-status online pull-right"></span>
                                    </div>
                                    <div class="mail-contnet">
                                        <h5><?php echo $name; ?></h5> <span class="mail-desc"><?php echo $subject; ?></span> <span
                                            class="time"><?php echo $message; ?></span>
                                    </div>
                                </a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center"> 2022 &copy; Rent A Car Admin brought to you by <a
                    href="https://www.linkedin.com/in/amirfaisalmahmud/">Amir Faisal Mahamud</a> </footer>
        </div>
    </div>
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="./bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <script src="js/jquery.slimscroll.js"></script>
    <script src="js/waves.js"></script>
    <script src="./bower_components/waypoints/lib/jquery.waypoints.js"></script>
    <script src="./bower_components/counterup/jquery.counterup.min.js"></script>
    <script src="./bower_components/raphael/raphael-min.js"></script>
    <script src="./bower_components/morrisjs/morris.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="./bower_components/toast-master/js/jquery.toast.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $.toast({
                heading: 'Welcome to Rent A Car',
                text: 'Have a relax. Enjoy your day with us',
                position: 'top-right',
                loaderBg: '#ff6849',
                icon: 'info',
                hideAfter: 3500,
                stack: 6
            })
        });
    </script>
</body>

</html>