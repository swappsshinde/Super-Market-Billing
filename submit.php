<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$p_id = $_POST['pid'];
$id=1;
$sql="select * from products where pid = $p_id";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
      echo "[".$id."] |  ".$row["pid"]."   |   ".$row["pname"]."   |   ".$row["pcat"]."   |   ".$row["pdis"];
	  #id++;
    }
  
mysql_close($conn);	
?>
