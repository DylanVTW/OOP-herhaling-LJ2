<?php
$grades = [8.5, 7.0, 6.5, 9.0, 4.5];
foreach ($grades as $x){
    echo "$x <br>";
    if ($x >= 5.5){
        echo "Voldoende <br><br>";
    }else{
        echo "Onvoldoende <br><br>";
    }
}
?>