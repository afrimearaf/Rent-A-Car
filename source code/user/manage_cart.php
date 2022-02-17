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


    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    
      <?php 
session_start(); 

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

    if(isset($_POST['pid'])){
        $the_product_id=$_POST['pid'];
        $the_name=$_POST['name'];
        $the_price=$_POST['price'];
        $the_pcode=$_POST['pcode'];
        $the_hour = 1;
        
        
        $query = "SELECT * FROM cart where user_id = '$user_id'";
        $select_cart_query = mysqli_query($connection, $query); 


        if(!$select_cart_query){

            die("Query Failed". mysqli_error($connection));

        }

        while($row=mysqli_fetch_assoc($select_cart_query)){
            $db_id=$row['id'];
//            $db_user_id=$row['user_id'];
            $db_name=$row['name'];
            $db_price=$row['price'];
            $db_hour=$row['hours'];
            $db_total=$row['total_price'];
            $db_pcode[]=$row['pcode'];
        }
        
        if(in_array("$the_pcode", $db_pcode)){
            echo"<script>
            
                alert('Item Already Added');
                window.location.href='cart.php';
                </script>";
        }
        else {
            $sql = "INSERT INTO cart (user_id, name, price, hours, total_price, pcode) VALUES ($user_id, '{$the_name}', '{$the_price}', '{$the_hour}', '{$the_price}', '{$the_pcode}')";
            
            $create_cart_query= mysqli_query($connection,$sql);
            
            if(!$create_cart_query){
                die("Query Failed". mysqli_error($connection));
            }
            else {
                echo"<script>
                alert('Item Added');
                window.location.href='cart.php';
                </script>";
            }
        }
    }



if(isset($_POST['remove_item'])){
    echo $rmv_pcode=$_POST['pcode'];
    
    $sqll = "DELETE FROM cart WHERE pcode = '$rmv_pcode' AND user_id = '$user_id'";
    
    $delete_cart_item = mysqli_query($connection, $sqll); 


        if(!$delete_cart_item){

            die("Query Failed". mysqli_error($connection));

        }
        else {
            echo"<script>alert('Item Removed');
            window.location.href='cart.php';
            </script>";
    }
}




if (isset($_POST['ihour'])) {
    echo $ihour = $_POST['ihour'];
    echo $ipcode = $_POST['ipcode'];
    echo $iprice = $_POST['iprice'];

    $totalprice = $ihour * $iprice;

    $stmt = $connection->prepare('UPDATE cart SET hours=?, total_price=? WHERE pcode=?');
    $stmt->bind_param('iis',$ihour,$totalprice,$ipcode);
    $stmt->execute();
    }




?>
      
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
