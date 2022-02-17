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
                $query="DELETE FROM cars WHERE id = {$checkboxvalues} ";
                $delete_car_query= mysqli_query($connection,$query);
                
                break;    
        }   
    }
}

?>
  
  <form action="" method="post" class="table-responsive">
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
           <a href="cars.php?source=add_car" class="btn btn-primary">Add New Car</a>
       </div>
        <thead class="thead-dark">
            <tr>
                <th>Select</th>
                <th>Car ID</th>
                <th>Car Name</th>
                <th>Brand</th>
                <th>Category</th>
                <th>Image</th>
                <th>Milage</th>
                <th>Engine</th>
                <th>Transmission</th>
                <th>Doors</th>
                <th>Capability</th>
                <th>Tags</th>
                <th>Price</th>
                <th>Reviews</th>
                <th>pcode</th>
                <th>Track Car</th>
                <th>Edit Car</th>
                <th>Delete Post</th>
            </tr>
        </thead>
        <tbody>                                    
<?php
         
    $search = $_POST['search_car'];
    $sql="SELECT * FROM cars WHERE name LIKE '%$search%'";
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

        
        echo "<tr>";
        ?>
        <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $id; ?>"></td>
        
        <?php
        echo "<td>$id</td>";
        echo "<td>$name</td>";
        echo "<td>$brand</td>";
        echo "<td>$category</td>";
        echo "<td><img width=100 src='./images/$image' alt='images'></td>";
        echo "<td>$mileage</td>";
        echo "<td>$engine</td>";
        echo "<td>$transmission</td>";
        echo "<td>$num_of_door</td>";
        echo "<td>$capability</td>";
        echo "<td>$tags</td>";
        echo "<td>$price</td>";
        echo "<td>$reviews</td>";
        echo "<td>$pcode</td>";
        echo "<td><a href='http://localhost:8082/'>Track</a> </td>";
        echo "<td><a href='cars.php?source=edit_car&c_id={$id}'>Edit</a> </td>";
        echo "<td><a href='cars.php?delete={$id}'>Delete</a> </td>";
        echo "</tr>";
    }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['delete'])){
    $the_car_id=$_GET['delete'];
    
    $query="DELETE FROM cars WHERE id= {$the_car_id}";
    $delete_query= mysqli_query($connection,$query);
    if(!$delete_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Car Removed');
        window.location.href='cars.php';
        </script>";
    }
}
                         
?>

                       
