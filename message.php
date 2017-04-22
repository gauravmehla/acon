
<?php 
include_once('inc/db_connect.php'); 


if($_REQUEST['act2'])
{
	$_REQUEST['act2']();
}

if($_REQUEST['act3'])
{
	$_REQUEST['act3']();
}

	function save_message()
	{
		
		$R=$_POST;
	$d = date("d-m-Y");
	$t = date("H:i:s");

	$sql = "INSERT INTO  message (`msg_no`,`date`,`time`,`msg_st_id` ,`msg_desc`) VALUES ('$R[msg_no]','$d','$t','$R[st_id]',  '$R[msg_desc]')";
	$rs = mysql_query($sql) or die (mysql_error());

	$st_id = $R['st_id'];
	if($rs)
		{
			header("Location:profiler.php?st_id=$st_id");	
		}	
	}
	
###########################################
	
	function message_delete()
	{

		$sql="DELETE FROM message WHERE msg_id='$_REQUEST[msg_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:profiler.php?st_id=$_REQUEST[msg_st_id]");			
		}
				
	}  

	function message_delete_1()
	{

		$sql="DELETE FROM message WHERE msg_id='$_REQUEST[msg_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:student_page.php?st_id=$_REQUEST[msg_st_id]");			
		}
				
	}  
	
		
?>
