<?php
header("Access-Control-Allow-Origin: *");

$key = 'AIzaSyDOk-1hyyr0M9uHCVfdMmtFAHix3D0w2PI'; //API key google map
$restuarant_search = $_GET["keyword"]; //* Decalre of Restuarant kryword
$place_type = 'restaurant'; //* Decalre of Place type
$distance_km = 1000; //* Decalre of distance kilimeter unit
$distance_m = $distance_km*1000; //* Decalre of distance meter unit
$lat_init_location = '13.8235283';
$lng_init_location = '100.5081204';

$url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat_init_location.','.$lng_init_location.'&radius='.$distance_m.'&type='.$place_type.'&keyword='.$restuarant_search.'&key='.$key;
// $url = 'https://maps.googleapis.com/maps/api/place/nearbysearch/json?location=-33.8670522,151.1957362&radius=1500&type=restaurant&keyword=cruise&key='.$key;
// $url = 'http://localhost/result.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
echo $response = curl_exec($ch);
curl_close($ch);
?>