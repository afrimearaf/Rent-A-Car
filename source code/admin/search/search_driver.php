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
                $query="DELETE FROM drivers WHERE id = {$checkboxvalues} ";
                $delete_car_query= mysqli_query($connection,$query);
                
                break;    
        }   
    }
}

?>
  
  <form action="" method="post">
   <table class="table table-hover">
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
           <a href="drivers.php?source=add_driver" class="btn btn-primary">Add New Driver</a>
       </div>
        <thead class="thead-dark">
            <tr>
                <th>Select</th>
                <th>Driver ID</th>
                <th>Driver Name</th>
                <th>Image</th>
                <th>Phone</th>
                <th>Experiance</th>
                <th>Rate</th>
                <th>Pcode</th>
                <th>Reviews</th>
                <th>Edit Car</th>
                <th>Delete Post</th>
            </tr>
        </thead>
        <tbody>                                    
<?php
      
    $search = $_POST['search_driver'];
    $sql="SELECT * FROM drivers WHERE name LIKE '%$search%'";
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
        $pcode=$row['pcode'];

        
        echo "<tr>";
        ?>
        
        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $id; ?>"></td>
        
        <?php
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td><img width=100 src='./images/$image' alt='images'></td>";
        echo "<td>$phone</td>";
        echo "<td>$experiance</td>";
        echo "<td>$price</td>";
        echo "<td>$pcode</td>";
        echo "<td>$reviews</td>";
        echo "<td><a href='drivers.php?source=edit_driver&d_id={$id}'>Edit</a> </td>";
        echo "<td><a href='drivers.php?delete={$id}'>Delete</a> </td>";
        echo "</tr>";
    }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['delete'])){
    $the_driver_id=$_GET['delete'];
    
    $query="DELETE FROM drivers WHERE id= {$the_driver_id}";
    $delete_query= mysqli_query($connection,$query);
    if(!$delete_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Driver Removed');
        window.location.href='drivers.php';
        </script>";
    }
}
                         
?>