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
                $query="DELETE FROM contact WHERE contact_id = {$checkboxvalues} ";
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
            <th class="text-center">Message ID</th>
            <th class="text-center">Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Subject</th>
            <th class="text-center">Message</th>
<!--            <th>Message Date</th>-->
            <th class="text-center">Delete Message</th>
        </tr>
        </thead>
        <tbody>                                    
<?php
                               
        $query = "SELECT * FROM contact";
        $select_message = mysqli_query($connection,$query);
        
        while($row=mysqli_fetch_assoc($select_message)){
            
            $contact_id = $row['contact_id'];
            $name = $row['name'];
            $email = $row['email'];
            $subject =$row['subject'];
            $message =$row['message'];
//            $msg_date=$row['msg_date'];
            
            echo "<tr>";
            ?>

            <td><input type="checkbox" class="checkboxes" name="checkboxarray[]" value="<?php echo $contact_id; ?>"></td>

            <?php
            echo "<td>$contact_id</td>";
            echo "<td>$name</td>";
            echo "<td>$email</td>";
            echo "<td>$subject</td>";
            echo "<td>$message</td>";
//            echo "<td>$msg_date</td>";
            echo "<td><a href='message.php?delete={$contact_id}'>Delete</a></td>";
            echo "</tr>";
        }
?>                        
        </tbody>
    </table>
</form>
<?php
if(isset($_GET['delete'])){
    $the_contact_id=$_GET['delete'];

    $query = "DELETE FROM contact WHERE contact_id= {$the_contact_id}";
    $delete_msg_query = mysqli_query($connection,$query);
    if(!$delete_query){

        die("Query Failed". mysqli_error($connection));

    }
    else {
        echo"<script>alert('Message Removed');
        window.location.href='message.php';
        </script>";
    }
}
                         
?>