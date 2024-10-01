<?php 
$servername = 'localhost';
$username = 'moses';
$password = 'M#ses';
$db = 'shopwise';
 
$conn = new MySQLi($servername,$username,$password,$db) ;
 
if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else{
    
 }
 ?>
