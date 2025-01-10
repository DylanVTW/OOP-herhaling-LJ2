<?php

require 'vendor/autoload.php';

use Inheritance\Person; 
use Inheritance\Student;
use Inheritance\Teacher;
use Inheritance\Staff;

$person = new Person();
$person->setName('yummers');

$student = new Student();
$student->setName('Jane Doe');
$student->setStudentId(12345);
$student->setAge(17);

echo "<pre>";
var_dump($person);
var_dump($student);
echo "</pre>";