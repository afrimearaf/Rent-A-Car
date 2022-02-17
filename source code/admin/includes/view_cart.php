
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="background-color: #f2f2f2; margin:40px; padding: 5px 20px 15px 20px; border: 1px solid lightgrey; border-radius: 3px;">
                    <h3>View Items <span class="price" style="float: right; color: grey;"><i class="fa fa-shopping-cart"></i> <b></b></span></h3> <br>
                    <?php


                     if(isset($_GET['c_id'])){
                        $the_user_id = $_GET['c_id'];
                    }      
                    $query= "SELECT * FROM cart WHERE user_id = $the_user_id";
                    $select_cart= mysqli_query($connection,$query);
                    $grand_total = 0;

                    while($row=mysqli_fetch_assoc($select_cart)){
                        $db_id=$row['id'];
                        $db_user_id=$row['user_id'];
                        $db_name=$row['name'];
                        $db_price=$row['price'];
                        $db_hour=$row['hours'];
                        $db_total=$row['total_price'];
                        $db_pcode=$row['pcode'];

                        ?>
                    <p><?php echo $db_name; ?> <span class="price" style="float: right; color: grey;"><?php echo $db_price; ?> (<?php echo $db_hour; ?>)</span></p>


                    <?php $grand_total += $db_total; } ?> 



                    <hr style="border: 1px solid lightgrey;">
                    <p>Total <span class="price" style="float: right; color: grey;"><b><?php echo $grand_total; ?></b></span></p>
                </div>
            </div>
        </div>

