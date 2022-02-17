<?php session_start();  ?>

<?php 

    $connection= mysqli_connect('localhost', 'root', '', 'car'); 


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
<!--
                <div class="top-left-part"><a class="logo" href="index.php"><b style="padding-right:0px; margin-right:0px;"><img
                                src="./images/logo_car.png" alt="home" style="padding-right:0px; margin-right:0px;" /></b><span
                            class="hidden-xs" style="padding-left:0px; margin-left:0px;"><img style="padding-left:0px; margin-left:0px;" src="./images/logo_text.png" alt="home" /></span></a>
                </div>
-->
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
        <!-- Left navbar-header -->
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
                                aria-hidden="true"></i><span class="hide-menu">Orders</span> <span class="badge badge-info"> <?php echo $undelivered_order_count; ?></span></a>
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
                                aria-hidden="true"></i><span class="hide-menu">User</span>  <span class="badge badge-info"> <?php echo $unassigned_user_count; ?></span></a>
                    </li>
                    
                    <li>
                        <a href="profile.php" class="waves-effect"><i class="fa fa-user fa-fw"
                                aria-hidden="true"></i><span class="hide-menu">Profile</span></a>
                    </li>
                </ul>
<!--
                <div class="center p-20">
                    <span class="hide-menu"><a href="http://wrappixel.com/templates/pixeladmin/" target="_blank"
                            class="btn btn-danger btn-block btn-rounded waves-effect waves-light">Upgrade to
                            Pro</a></span>
                </div>
-->
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">View All Users</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <ol class="breadcrumb">
                            <li><a href="index.php">Dashboard </a></li>
                            <li class="active"> Users</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /row -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                        <?php 

                            if(isset($_POST['checkboxarray'])) {

                                foreach($_POST['checkboxarray'] as $checkboxvalues) {

                                    $bulkoption =  $_POST['bulkoption'];
                                    switch($bulkoption) {
                            //            case 'published':
                            //                $query = "UPDATE fuel SET fuel_status = '{$bulkoption}' WHERE fuel_id = {$checkboxvalues} ";
                            //
                            //                $update_to_publish_status = mysqli_query($connection,$query);
                            //                break;
                            //                
                            //            case 'draft':
                            //                $query = "UPDATE fuel SET fuel_status = '{$bulkoption}' WHERE fuel_id = {$checkboxvalues} ";
                            //
                            //                $update_to_draft_status = mysqli_query($connection,$query);
                            //                break;

                                        case 'delete': 
                                            $query="DELETE FROM reviews WHERE review_id = {$checkboxvalues} ";
                                            $delete_contact_query= mysqli_query($connection,$query);

                                            break;    
                                    }   
                                }
                            }

                            ?>

                              <form action="" method="post">
                               <table class="table  table-hover ">
                                   <div id="bulkOptionsContainerfuel" class="col-xs-4" style="padding: 0px;">
                                        <select name="bulkoption" id="" class="form-control" >
                                            <option value="">Select Options</option>
                                            <option value="draft" disabled>Draft</option>
                                            <option value="published" disabled>Add</option>
                                            <option value="delete">Delete</option>
                                        </select>
                                   </div>
                                   <div class="col-xs-4"  style="margin-bottom:12px;">
                                       <input type="submit" name="submit" value="Apply" class="btn btn-success">
                                   </div>
                                    <thead class="thead-dark">
                                        <tr>
                                        <th>Select</th>
                                        <th>Review ID</th>
                                        <th>Review Pcode</th>
                                        <th>User ID</th>
                                        <th>user Name</th>
                                        <th>Rating</th>
                                        <th>Review</th>
                                        <th>Time</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>                                    
                            <?php

                                    $query = "SELECT * FROM reviews";
                                    $select_reviews = mysqli_query($connection,$query);

                                    while($row=mysqli_fetch_assoc($select_reviews)){

                                        $review_id = $row['review_id'];
                                        $review_pcode = $row['review_pcode'];
                                        $user_id = $row['user_id'];
                                        $username =$row['username'];
                                        $rating =$row['rating'];
                                        $review=$row['review'];
                                        $time=$row['time'];

                                        echo "<tr>";
                                        ?>

                                        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $review_id; ?>"></td>

                                        <?php
                                        echo "<td>$review_id</td>";
                                        echo "<td>$review_pcode</td>";
                                        echo "<td>$user_id</td>";
                                        $query="SELECT * FROM  users WHERE user_id= $user_id";
                                        $select_user_order_id= mysqli_query($connection,$query);
                                        while($row=mysqli_fetch_assoc($select_user_order_id)){
                                            $user_id=$row['user_id'];
                                            $user_name=$row['user_name'];

                                            echo "<td><a href='./user_profile.php?u_id=$user_id'>$user_name</a></td>";
                                        }
//                                        echo "<td>$username</td>";
                                        echo "<td>$rating</td>";
                                        echo "<td>$review</td>";
                                        echo "<td>$time</td>";
                                        echo "<td><a href='reviews.php?delete={$review_id}'>Delete</a></td>";
                                        echo "</tr>";
                                    }
                            ?>                        
                                    </tbody>
                                </table>
                            </form>
                            <?php
                            if(isset($_GET['delete'])){
                                $the_review_id=$_GET['delete'];

                                $query = "DELETE FROM reviews WHERE review_id= {$the_review_id}";
                                $delete_review_query = mysqli_query($connection,$query);
                                if(!$delete_review_query){

                                    die("Query Failed". mysqli_error($connection));

                                }
                                else {
                                    echo"<script>alert('Review Removed');
                                    window.location.href='reviews.php';
                                    </script>";
                                }
                            }

                        ?>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2022 &copy; Rent A Car Admin brought to you by <a
                    href="https://www.linkedin.com/in/amirfaisalmahmud/">Amir Faisal Mahamud</a> </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="./bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="./bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
</body>

</html>