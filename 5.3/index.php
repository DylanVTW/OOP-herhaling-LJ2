<?php
$a = 5;
$b = 1;
do
{
    $b = rand(1, 10);
    echo "Geraden:" . "$b"."<br>";

}
while($b != $a);
?>