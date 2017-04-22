<?php
	include_once('inc/header1.php');
  	$sql="SELECT * FROM student WHERE st_course = '$_REQUEST[msg_class]'";
  	$rs = mysql_query($sql) or die(mysql_error());
  	while($data=mysql_fetch_assoc($rs))
  	{
  		
  		$R=$_POST;
		$d = date("d-m-Y");
		$t = date("H:i:s");
		$sql1 = "INSERT INTO  message (`msg_no`,`date`,`time`,`msg_st_id` ,`msg_desc`) VALUES ('$R[msg_no]','$d','$t','$data[st_id]',  '$R[msg_desc]')";
		$rs1 = mysql_query($sql1) or die (mysql_error());
 	 }

  if($rs)
			{
				header("Location:noticer.php?msg=Message Sent Successfully.!");	
			}	
?>