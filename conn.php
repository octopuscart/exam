<?php 

$host = "localhost";
$user = "j2k5e6r5_octopus";
$pass = "India$2017";
$db   = "j2k5e6r5_exam";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>