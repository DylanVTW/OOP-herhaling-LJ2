<?php
if (isset($_GET['firstname']) && isset($_GET['lastname'])) 
{
  $firstname = htmlspecialchars($_GET['firstname']); 
  $lastname = htmlspecialchars($_GET['lastname']);
  
  echo "Full Details: <br>";
  echo "First Name: " . $firstname . "<br>";
  echo "last name: " . $lastname . "<br>";
  echo "Hooray";
} 

else 
{
  echo "Vult iets in";
}
?>