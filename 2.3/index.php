<?php
date_default_timezone_set("Europe/Amsterdam");

$day = date('l');

switch ($day) {
    case  "Monday":
        echo "Het is vandaag maandag";
        break;
    case "Tuesday":
        echo "Het is vandaag dinsdag";
        break;
    case "Wednesday":
        echo "Het is vandaag woensdag";
        break;
    case "Thursday":
        echo "Het is vandaag donderdag";
        break;
    case "Friday":
        echo "Het is vandaag vrijdag";
        break;
        default:
        echo "Geniet van je dag";
} 