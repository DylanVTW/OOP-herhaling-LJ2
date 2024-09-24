<?php


$score = 80;

switch ($score) {
    case $score >=90:
        echo "Geweldig";
        break;
    case $score >=80:
        echo "Goed";
        break;
    case $score >=70:
        echo "Voldoende";
        break;
    case $score >=60:
        echo "Onvoldoende";
        break;  
        default:"aapje";

        $pass = $score >= 55 ? "Geslaagd" : "Niet geslaagd";

    echo $pass;


} 