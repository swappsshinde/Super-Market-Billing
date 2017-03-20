<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$pid = $_POST["pid"];
$sql = "delete from productsmain where pid = '$pid'";
$result = mysql_query($sql);
header('Location: admin.html');
?>