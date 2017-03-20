<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$pid2 = $_POST["pid2"];
$pcost2 = $_POST["pcost2"];
$pdis2 = $_POST["pdis2"];
  $sql2 = "update productsmain set pcost='$pcost2',pdis='$pdis2' where pid = '$pid2' ";
  $result2 = mysql_query($sql2);
 header('Location : admin.html');
mysql_close($conn);
?>