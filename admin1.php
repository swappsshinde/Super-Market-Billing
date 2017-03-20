<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$pid = $_POST["pid"];
$pname = $_POST["pname"];
$pcat = $_POST["pcat"];
$pdis = $_POST["pdis"];
$pcost = $_POST["pcost"];

 
  $sql1 = "insert into productsmain values ('$pid','$pname','$pcat','$pdis','$pcost')";
  $result1 = mysql_query($sql1);
  header('Location : admin.html');
 
mysql_close($conn);
?>