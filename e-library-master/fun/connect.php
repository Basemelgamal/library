<?php 
$servername="localhost";
$username="root";
$password="";
$dbasename="library";
$conn = new mysqli($servername,$username,$password,$dbasename);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>