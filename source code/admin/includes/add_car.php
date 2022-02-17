
    <div class="col-md-4 container" style="width: 100%; padding:15px; margin-bottom: 15px">
        <?php
        if(isset($_POST['add_car'])){

            $car_name=$_POST['name'];
            $car_brand=$_POST['brand'];
            $car_color=$_POST['color'];
            $car_category=$_POST['category'];
            $car_image = $_POST['image'];
            $car_capability=$_POST['capability'];
            $car_tags=$_POST['tags'];
            $car_price=$_POST['price'];
            $car_pcode=$_POST['pcode'];
            $car_mileage=$_POST['mileage'];
            $car_engine=$_POST['engine'];
            $car_transmission=$_POST['transmission'];
            $car_num_of_door=$_POST['num_of_door'];


            $query= "INSERT INTO cars(`name`, `image`, `brand`, `color`, `capability`, `mileage`, `engine`, `transmission`, `num_of_door`, `category`, `price`, `tags`, `pcode`) VALUES ( '{$car_name}', '{$car_image}',  '{$car_brand}', '{$car_color}', '{$car_capability}', '{$car_mileage}', '{$car_engine}', '{$car_transmission}', '{$car_num_of_door}', '{$car_category}', '{$car_price}', '{$car_tags}', '{$car_pcode}')";

            $add_car_query= mysqli_query($connection,$query);

            if(!$add_car_query){
                die("Query Failed". mysqli_error($connection));
            }

             echo "<div class='container h4'><div class='alert alert-success pt-2 mt-4'>
                    <strong>Success!</strong> Your car has been added. " . " " . " <a href='cars.php'>View Cars</a>
                  </div></div>";
        }



        ?>
    </div>

<form class="form-horizontal" method="post" action="">
    <div class="form-group">
        <label class="col-sm-3 control-label">Car Model</label>
        <div class="col-sm-9">
            <input type="text" name="name" class="form-control" placeholder="Nissan GT-R R35">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Brand</label>
        <div class="col-sm-9">
            <input type="text" name="brand" class="form-control" placeholder="Nissan">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Color</label>
        <div class="col-sm-9">
            <input type="text" name="color" class="form-control" placeholder="Black">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label">Category</label>
        <div class="col-sm-9 form-inline">
            <select class="form-control" name="category" style="width: 25%;">
                <option >Category</option>
                <option value="Sedan">Sedan</option>
                <option value="Sports Car">Sports Car</option>
                <option value="Suv">Suv</option>
                <option value="Mini Van">Mini Van</option>
                <option value="Truck">Truck</option>
                <option value="Ambulance">Ambulance</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-3 control-label">Car Image</label>
        <div class="col-sm-9">
            <input type="file" class="form-control" style="width: 25%;" name="image">
        </div>
    </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Capability</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="6 person / 11990 kg" name="capability">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Tags</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" placeholder="Sports Car, Family" name="tags">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Price</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" name="price" placeholder="720">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">pcode</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" name="pcode" placeholder="c101">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <input type="text" class="form-control" placeholder="11.86 kmpl to 20.37 kmpl" name="mileage">
            </div>
            <div class="col-sm-4">
                <input type="text" class="form-control" placeholder="600 hp @ 6,800 rpm" name="engine">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-5 col-sm-offset-3">
                <input type="text" class="form-control" placeholder="6-Speed Automatic 62TE" name="transmission">
            </div>
            <div class="col-sm-4">
                <input type="number" class="form-control" placeholder="4" name="num_of_door">
            </div>
        </div>
    <hr>
    <div class="action-wrapper text-center">
        <div class="action-btn">
            <div class="from-group">
        <input class="btn btn-primary btn-lg" type="submit" name="add_car" value="Add Car">
    </div>
        </div>
    </div>
</form>

