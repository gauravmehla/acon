<?php
include('inc/db_connect.php'); 
include('inc/function.php');
$pre=0;
$total=0;
$sql1="SELECT * FROM attendence";
$rs1=mysql_query($sql1) or die (mysql_error());
while($data1=mysql_fetch_array($rs1))
{
	
	$present = explode(",", $data1['att_present']);
		foreach ($present as $key) { 
			
			if($key==$_REQUEST['st_id'])
			{	
				$pre++;
			}

			}
			
		$total++;	
	
}
echo $pre."<br>";
echo $total;

$percentage = 100/$total*$pre;
echo "<br>".$percentage;

?>