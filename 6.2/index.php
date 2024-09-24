<?php
$prices = [100, 200, 300, 400, 500];
$i = 0;

while ($i < count($prices) && $prices[$i] < 500) {
    echo "Oude prijs: " . $prices[$i] . "<br><br>";

    $prices[$i] += 50;
    
    echo "Nieuwe prijs: " . $prices[$i] . "<br>";
    

    $i++;
}
?>