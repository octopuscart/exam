<?php 

$host = "localhost";
$user = "getdetai_exam";
$pass = "8+COJtK4i[GX";
$db   = "getdetai_exam";
$conn = null;

try {
  $conn = new PDO("mysql:host={$host};dbname={$db};",$user,$pass);
} catch (Exception $e) {
  
}


 ?>