<?php 
$ip_address = '103.140.205.199';
$access_key = '1f73f1624542bac7cf837abb68f26a48';
$url = "http://api.ipapi.com/$ip_address?access_key=$access_key";
$ch = curl_init();  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $url);
$response = curl_exec($ch);
if (curl_errno($ch)) {
    $error_msg = curl_error($ch);
    echo $error_msg;
}
$arr_result = json_decode($response, true);
print_r($arr_result);

?>