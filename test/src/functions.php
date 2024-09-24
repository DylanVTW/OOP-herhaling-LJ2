<?php


function sanitizer($input) {
    return htmlspecialchars($input);

}



function upperCaseInput($input){
    return strtoupper($input);
}