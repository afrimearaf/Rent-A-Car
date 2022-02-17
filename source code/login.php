<?php session_start(); ?>
<?php 

$connection= mysqli_connect('localhost', 'root', '', 'car');

if(isset($_POST['login'])){
    
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    
    $sql="SELECT * FROM users WHERE user_name ='{$name}'";
    $select_user_query = mysqli_query($connection, $sql);

    if(!$select_user_query){
        
        die("Query Failed". mysqli_error($connection));
        
    }
    while($row=mysqli_fetch_assoc($select_user_query)){
        
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
    
    if($name !== $user_name && $pass !==  $password){
        
        header("Location: index.php");  
        
    }
    
    else if($name == $user_name && $pass ==  $password && $status == 'assigned' && $position  == 'admin'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['firstname'] = $fname;
        $_SESSION['lastname'] = $lname;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['mid'] = $nid;
        $_SESSION['address'] = $address;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = $status;

        header("Location: admin"); 
        
    }
    
        else if($name == $user_name && $pass ==  $password && $status == 'assigned' && $position  == 'user'){
        
        $_SESSION['user_id'] = $user_id;
        $_SESSION['user_name'] = $user_name;
        $_SESSION['firstname'] = $fname;
        $_SESSION['lastname'] = $lname;
        $_SESSION['position'] = $position;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['mid'] = $nid;
        $_SESSION['address'] = $address;
        $_SESSION['password'] = $password;
        $_SESSION['status'] = $status;

        header("Location: user"); 
            
        
    }
    

    else{
        
        header("Location: index.php"); 

    }
        
}

?>