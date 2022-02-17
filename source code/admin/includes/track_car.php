
<?php

        if(isset($_GET['c_id'])){
            $the_car_id = $_GET['c_id'];
        }
        $sql="SELECT * FROM cars WHERE id = {$the_car_id}";
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
            $ip=$row['ip'];
        }

    $apiKey = "7b48a5d44c304d6eae18fd6c3da3844f";
    $ip = "103.140.205.196";
    $location = get_geolocation($apiKey, $ip);
    $decodedLocation = json_decode($location, true);

    echo "<pre>";
//    print_r($decodedLocation);
    echo "$decodedLocation[latitude]";
    echo "</pre>";
    echo "$decodedLocation[longitude]";
    echo "</pre>";

    $car_lat=$decodedLocation[latitude];
    $car_long=$decodedLocation[longitude];


    function get_geolocation($apiKey, $ip, $lang = "en", $fields = "*", $excludes = "") {
        $url = "https://api.ipgeolocation.io/ipgeo?apiKey=".$apiKey."&ip=".$ip."&lang=".$lang."&fields=".$fields."&excludes=".$excludes;
        $cURL = curl_init();

        curl_setopt($cURL, CURLOPT_URL, $url);
        curl_setopt($cURL, CURLOPT_HTTPGET, true);
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($cURL, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Accept: application/json'
        ));
        return curl_exec($cURL);
    }
?>

<div id="map" class="mt-3" style="width: 100%; height: 600px; margin:16px;">
            <iframe width="100%" height="550px" style="border:0;" allowfullscreen="" loading="lazy" src="https://maps.google.com/maps?q=<?php echo $car_lat; ?>,<?php echo $car_long; ?>&output=embed"></iframe>

</div>




