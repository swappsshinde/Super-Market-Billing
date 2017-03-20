<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$pid = $_POST['pid'];
$pname = $_POST["pname"];
$pcat = $_POST["pcat"];
$pdis = $_POST["pdis"];
$pcost = $_POST["pcost"];
$pid2 = $_POST['pid2'];
$pcost2 = $_POST["pcost2"];
$pdis2 = $_POST["pdis2"];
$val = $_POST["submit"];
if($val =='add')
 {
  $sql1 = "insert into productsmain values ('$pid','$pname','$pcat','$pdis','$pcost')";
  $result1 = mysql_query($sql1);
  header("Location : Admin.html");
 }
if($val == 'edit')
 {
  $sql2 = "update productsmain set pcost='$pcost2',pdis='$pdis2' where pid = '$pid2' ";
  $result2 = mysql_query($sql2);
 header("Location : Admin.html");
}
mysql_close($conn);
?>