
    <div class="col-md-4 container" style="width: 100%; padding:15px; margin-bottom: 15px">
        <?php
        if(isset($_POST['add_driver'])){

            $driver_name=$_POST['name'];
            $driver_phone=$_POST['phone'];
            $driver_image = $_POST['image'];
            $driver_experiance=$_POST['experiance'];
            $driver_price=$_POST['price'];
            $driver_pcode=$_POST['pcode'];


            $query = "INSERT INTO `drivers`(`name`, `phone`, `image`, `experiance`, `price`, `pcode`) VALUES ('{$driver_name}','{$driver_phone}','{$driver_image}','{$driver_experiance}','{$driver_price}','{$driver_pcode}')";

            $add_driver_query= mysqli_query($connection,$query);

            if(!$add_driver_query){
                die("Query Failed". mysqli_error($connection));
            }
             echo "<div class='container h4'><div class='alert alert-success pt-2 mt-4'>
                    <strong>Success!</strong> Your driver has been added. " . " " . " <a href='drivers.php'>View Drivers</a>
                  </div></div>";
        }
        ?>
    </div>

<form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label class="col-sm-3 control-label">Name</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" placeholder="George Walker">
        </div>
    </div>
    <div class="form-group">
            <label class="col-sm-3 control-label">Phone</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="phone" placeholder="01234567891">
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
                <input type="number" class="form-control" placeholder="10 years" name="experiance">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Rate</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="price" placeholder="720">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">pcode</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="pcode" placeholder="d101">
            </div>
        </div>
    <hr>
    <div class="action-wrapper text-center">
        <div class="action-btn">
            <div class="from-group">
        <input class="btn btn-primary btn-lg" type="submit" name="add_driver" value="Add Driver">
    </div>
        </div>
    </div>
</form>

