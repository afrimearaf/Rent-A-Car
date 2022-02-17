
    <div class="col-md-4 container" style="width: 100%; padding:15px; margin-bottom: 15px">
        <?php
        
        if(isset($_GET['d_id'])){
            $the_driver_id = $_GET['d_id'];
        }
        $sql="SELECT * FROM drivers WHERE id = {$the_driver_id}";
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
        }
        if(isset($_POST['edit_driver'])){

            $driver_name=$_POST['name'];
            $driver_phone=$_POST['phone'];
            $driver_image = $_POST['image'];
            $driver_experiance=$_POST['experiance'];
            $driver_price=$_POST['price'];
            $driver_pcode=$_POST['pcode'];
            
            if(empty($driver_image)){
                $query= "SELECT * FROM drivers WHERE id = {$the_driver_id}";
                $select_image= mysqli_query($connection,$query);

                while($row= mysqli_fetch_array($select_image)){
                    $driver_image=$row['image'];
                }
            }
            

            $query= "UPDATE drivers SET `name` = '{$driver_name}', `image` = '{$driver_image}', `phone` = '{$driver_phone}', `experiance` = '{$driver_experiance}', `price` = '{$driver_price}', `pcode` = '{$driver_pcode}' WHERE id = {$the_driver_id}";

            $edit_driver_query= mysqli_query($connection,$query);

            if(!$edit_driver_query){
                die("Query Failed". mysqli_error($connection));
            }

             echo "<div class='container h4'><div class='alert alert-success pt-2 mt-4'>
                    <strong>Success!</strong> Your driver has been edited. " . " " . " <a href='drivers.php'>View Cars</a>
                  </div></div>";
        }



        ?>
    </div>

<form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" placeholder="George Walker" value="<?php echo $name; ?>">
        </div>
    </div>
    <div class="form-group">
            <label class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="phone" placeholder="01234567891" value="<?php echo $phone; ?>">
            </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Driver Image</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" style="width: 25%;" name="image">
        </div>
    </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Experiance</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" placeholder="10 years" name="experiance" value="<?php echo $experiance; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Rate</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="price" placeholder="720" value="<?php echo $price; ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">pcode</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="pcode" placeholder="d101" value="<?php echo $pcode; ?>">
            </div>
        </div>
    <hr>
    <div class="action-wrapper text-center">
        <div class="action-btn">
            <div class="from-group">
        <input class="btn btn-primary btn-lg" type="submit" name="edit_driver" value="Edit Driver">
    </div>
        </div>
    </div>
</form>

