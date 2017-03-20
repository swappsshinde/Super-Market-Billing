<?php
$user = $_POST["user"];
$pass = $_POST["pass"];
if($user=='admin' && $pass=='1234')
 {
  header('Location: admin.html'); 
	
 }
else if($user=='counter' && $pass=='1234')
 {
 header('Location: Cust_Bill.html');  
  
 } 
else
 {
  header("Location:login.php");
  echo "<script type='text/javascript'>alert('not a valid username or password!');</script>";
  exit;
 }	
?>