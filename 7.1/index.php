<?php

$name = $_POST['name'];
if (empty($name)) 
{
  echo "Put some in the textbox dumbass". "<br>";
} 
else 
{
  echo "Chosen name: ".$name. "<br>";
}
?>