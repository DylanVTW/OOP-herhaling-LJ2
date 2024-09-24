<?php
$countries = 
[
    ["land"=>"Nederland", "capital"=>"Amsterdam"],
    ["land"=>"België", "capital"=>"Brussel"],
    ["land"=>"Duitsland", "capital"=>"Berlijn"]
];
foreach ($countries as $country) 
{
    echo $country["land"]." " .$country["capital"]."<br>";
}
?>