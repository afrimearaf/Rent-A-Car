<?php 

if(isset($_POST['checkboxarray'])) {
    
    foreach($_POST['checkboxarray'] as $ordervalueid) {
        
        $bulkoption =  $_POST['bulkoption'];
        
        switch ($bulkoption) {
            case 'delivered': 
                $query = "UPDATE orders SET status = '{$bulkoption}' WHERE order_id = {$ordervalueid} ";
                $approve_order_query = mysqli_query($connection, $query);
                
                break;
                
            case 'undelivered': 
                $query = "UPDATE orders SET status = '{$bulkoption}' WHERE order_id = {$ordervalueid} ";
                $unapprove_order_query = mysqli_query($connection, $query);
                
                break;   
                
            case 'delete': 
                $query="DELETE FROM orders WHERE order_id = {$ordervalueid} ";
                $delete_order_query= mysqli_query($connection,$query);
                
                break;       
        }
    }
}


?>
 

 <form action="" method="post">
  <table class="table table-hover">
   
         <div id="bulkOptionsContainerorder" class="col-xs-4"  style="padding: 0px;">
           
            <select name="bulkoption" id="" class="form-control" >
                <option value="">Select Options</option>
                <option value="undelivered">Unapprove</option>
                <option value="delivered">Approve</option>
                <option value="delete">Delete</option>
            </select>
      
       </div>
       <div class="col-xs-4" style="margin-bottom:12px;">

           <input type="submit" name="submit" value="Apply" class="btn btn-success">
       </div>
        <thead class="thead-dark">
            <tr>
                <th>Select</th>
                <th>Order ID</th>
                <th>User Name</th>
                <th>Name on Card</th>
                <th>Card Number</th>
                <th>Exp Date</th>
                <th>PickUP Address</th>
                <th>PickUP Date</th>
                <th>PickUP Time</th>
                <th>Order Status</th>
                <th>Order Time</th>
                <th>View Items</th>
                <th>Approve</th>
                <th>Unapprove</th>
                <th>Delete Order</th>
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
        $order_time=$row['order_time'];

        echo "<tr>";
        ?>

        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $order_id; ?>"></td>

        <?php

        echo "<td>$order_id</td>";
        $query="SELECT * FROM  users WHERE user_id= $user_id";
        $select_user_order_id= mysqli_query($connection,$query);
        while($row=mysqli_fetch_assoc($select_user_order_id)){
            $user_id=$row['user_id'];
            $user_name=$row['user_name'];

            echo "<td><a href='./user_profile.php?u_id=$user_id'>$user_name</a></td>";
        }
        echo "<td>$card_name</td>";
        echo "<td>$card_number</td>";
        echo "<td>$exp_date</td>";
        echo "<td>$pickup</td>";
        echo "<td>$pick_date</td>";
        echo "<td>$pick_time</td>";
          
        echo "<td>$status</td>";  
        echo "<td>$order_time</td>"; 
        echo "<td><a href='orders.php?source=view_cart&c_id={$user_id}'>View Items</a> </td>";
        echo "<td><a href='orders.php?approve=$order_id'>Approve</a> </td>";
        echo "<td><a href='orders.php?unapprove=$order_id'>Unapprove</a> </td>";
        echo "<td><a href='orders.php?delete=$order_id'>Delete</a> </td>";
        echo "</tr>";
    }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['approve'])){
    $the_order_id=$_GET['approve'];
    
    $query="UPDATE orders SET status='delivered' WHERE order_id= {$the_order_id} ";
    $approve_order_query= mysqli_query($connection,$query);
    
    if(!$approve_order_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Order Approved');
        window.location.href='orders.php';
        </script>";
    }
}

if(isset($_GET['unapprove'])){
    $the_order_id=$_GET['unapprove'];
    
    $query="UPDATE orders SET status='undelivered' WHERE order_id= {$the_order_id} ";
    $unapprove_order_query= mysqli_query($connection,$query);
    
    if(!$unapprove_order_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Order Unpproved');
        window.location.href='orders.php';
        </script>";
    }
}

if(isset($_GET['delete'])){
    $the_order_id=$_GET['delete'];
    
    $query="DELETE FROM orders WHERE order_id= {$the_order_id}";
    $delete_query= mysqli_query($connection,$query);
    if(!$delete_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Order Removed');
        window.location.href='orders.php';
        </script>";
    }
}


                         
?>