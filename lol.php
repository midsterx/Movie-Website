<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "/discover/movie?primary_release_date.gte=2014-09-15&primary_release_date.lte=2014-10-22");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$parsed_json = curl_exec($ch);
$parsed_json = json_decode($parsed_json);

foreach($parsed_json->results->collection1 as $collection){
    echo $collection->title->text . '<br>';
    echo $collection->title->href . '<br>';
    echo $collection->posted . '<br><br>';
}

curl_close($ch);
?>