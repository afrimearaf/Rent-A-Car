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
            $search = $_POST['search_review'];
            $query = "SELECT * FROM reviews WHERE rating LIKE '%$search%'";
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