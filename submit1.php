<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("bill");
$p_id = $_POST['pid'];
$id=1;
$val = $_POST['submit'];
$total=0;
if($val == 'sub')
{	
$sql="select * from productsmain where pid = $p_id";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
        $row1 = $row["pid"];
        $row2 = $row["pname"];
        $row3 = $row["pcat"];
        $row4 = $row["pdis"];
	    $row5 = $row["pcost"];
		
	}	
	
	$sql1 = "INSERT INTO products VALUES ('$row1', '$row2', '$row3', '$row4',$row5);";
	 $result1 = mysql_query($sql1);
	header('Location: Cust_Bill.html');  
	

}
if($val=='gen')
{
 $sql="select * from products";
$result = mysql_query($sql);
while($row = mysql_fetch_array($result, MYSQL_ASSOC)) 
	{
      echo "[".$id."] |  ".$row["pid"]."   |   ".$row["pname"]."   |   ".$row["pcat"]."   |   ".$row["pdis"]."  |  ".$row["pcost"]."</br>";
	  $id++;
	  $row["pcost"]=$row["pcost"]-($row["pcost"]*$row["pdis"]/100);
	  $total = $total+$row["pcost"]; 
	  
	  
	}
     $sql2 = "delete from products";
     $result2 = mysql_query($sql2);	
	 if(!$result2)
	 {
		echo "error";
	 }

	echo " THE TOTAL AMOUNT TO BE PAID IS ".$total;

}

mysql_close($conn);	
?>