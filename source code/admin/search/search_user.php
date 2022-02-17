<?php 

if(isset($_POST['checkboxarray'])) {
    
    foreach($_POST['checkboxarray'] as $checkboxvalues) {
        
        $bulkoption =  $_POST['bulkoption'];
        switch($bulkoption) {
            case 'assigned':
                $query = "UPDATE users SET status = '{$bulkoption}' WHERE user_id = {$checkboxvalues} ";

                $update_to_publish_status = mysqli_query($connection,$query);
                break;
                
            case 'unassigned':
                $query = "UPDATE users SET status = '{$bulkoption}' WHERE user_id = {$checkboxvalues} ";

                $update_to_draft_status = mysqli_query($connection,$query);
                break;
            case 'admin':
                $query = "UPDATE users SET position = '{$bulkoption}' WHERE user_id = {$checkboxvalues} ";

                $update_to_publish_status = mysqli_query($connection,$query);
                break;
                
            case 'user':
                $query = "UPDATE users SET position = '{$bulkoption}' WHERE user_id = {$checkboxvalues} ";

                $update_to_draft_status = mysqli_query($connection,$query);
                break;
                
            case 'delete': 
                $query="DELETE FROM users WHERE user_id = {$checkboxvalues} ";
                $delete_contact_query= mysqli_query($connection,$query);
                
                break;    
        }   
    }
}

?>
  
  <form action="" method="post">
   <table class="table table-hover text-center">
       <div id="bulkOptionsContainerfuel" class="col-xs-4" style="padding: 0px;">
            <select name="bulkoption" id="" class="form-control" >
                <option value="">Select Options</option>
                <option value="assigned">Assign</option>
                <option value="unassigned">Unassign</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
                <option value="delete">Delete</option>
            </select>
       </div>
       <div class="col-xs-4"  style="margin-bottom:12px;">
           <input type="submit" name="submit" value="Apply" class="btn btn-success">
       </div>
        <thead class="thead-dark">
            <tr>
            <th class=" text-center">Select</th>
            <th class=" text-center">User ID</th>
            <th class=" text-center">User Name</th>
            <th class=" text-center">First Name</th>
            <th class=" text-center">Last Name</th>
            <th class=" text-center">Email</th> 
            <th class=" text-center">Phone</th>
            <th class=" text-center">NID</th>
            <th class=" text-center">Address</th>
            <th class=" text-center">Position</th>
            <th class=" text-center">Status</th>
            <th class=" text-center">Change to Admin</th>
            <th class=" text-center">Change to User</th>
            <th class=" text-center">Approve</th>
            <th class=" text-center">Unapprove</th>
            <th class=" text-center">Delete</th>
        </tr>
        </thead>
        <tbody>                                    
<?php
            
    $search = $_POST['search_user'];                           
    $query= "SELECT * FROM users WHERE user_name LIKE '%$search%'";
    $select_users= mysqli_query($connection,$query);
    
    while($row=mysqli_fetch_assoc($select_users)){
        
        $user_id=$row['user_id'];  
        $user_name=$row['user_name'];
        $user_firstname=$row['firstname'];
        $user_lastname=$row['lastname'];
        $user_email=$row['email'];
        $phone=$row['phone'];
        $nid=$row['nid'];
        $address=$row['address'];
        $position=$row['position'];
        $status=$row['status'];
            
        echo "<tr>";
        ?>

        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $user_id; ?>"></td>

        <?php
            echo "<td>$user_id</td>";
            echo "<td>$user_name</td>";
            echo "<td>$user_firstname</td>";
            echo "<td>$user_lastname</td>";
            echo "<td>$user_email</td>";
            echo "<td>$phone</td>";
            echo "<td>$nid</td>";
            echo "<td>$address</td>";
            echo "<td>$position</td>";
            echo "<td>$status</td>";
            echo "<td><a href='users.php?change_to_admin={$user_id}'>Admin</a> </td>";
            echo "<td><a href='users.php?change_to_user={$user_id}'>User</a> </td>";
            echo "<td><a href='users.php?assign={$user_id}'>Assign</a> </td>";
            echo "<td><a href='users.php?unassign={$user_id}'>Unassign</a> </td>";
            echo "<td><a href='users.php?delete={$user_id}'>Delete</a> </td>";
            echo "</tr>";
        }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['change_to_admin'])){
    $the_user_id=$_GET['change_to_admin'];
    
    $query="UPDATE users SET position='admin' WHERE user_id= {$the_user_id} ";
    $admin_query= mysqli_query($connection,$query);
    
    if(!$admin_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

if(isset($_GET['change_to_user'])){
    $the_user_id=$_GET['change_to_user'];
    
    $query="UPDATE users SET position='user' WHERE user_id= {$the_user_id} ";
    $admin_query= mysqli_query($connection,$query);
    
    if(!$admin_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}
if(isset($_GET['assign'])){
    $the_user_id=$_GET['assign'];
    
    $query="UPDATE users SET status='assigned' WHERE user_id= {$the_user_id} ";
    $admin_query= mysqli_query($connection,$query);
    
    if(!$admin_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}

if(isset($_GET['unassign'])){
    $the_user_id=$_GET['unassign'];
    
    $query="UPDATE users SET status='unassigned' WHERE user_id= {$the_user_id} ";
    $admin_query= mysqli_query($connection,$query);
    
    if(!$admin_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>
        window.location.href='users.php';
        </script>";
    }
}
if(isset($_GET['delete'])){
    $the_user_id=$_GET['delete'];

    $query = "DELETE FROM users WHERE user_id= {$the_user_id}";
    $delete_msg_query = mysqli_query($connection,$query);
    if(!$delete_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('User Removed');
        window.location.href='users.php';
        </script>";
    }
}
                         
?>