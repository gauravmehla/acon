
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

	$sql = "INSERT INTO  message_teacher (`msg_no`,`date`,`time`,`msg_em_id` ,`msg_desc`) VALUES ('$R[msg_no]','$d','$t','$R[em_id]',  '$R[msg_desc]')";
	$rs = mysql_query($sql) or die (mysql_error());

	$em_id = $R['em_id'];
	if($rs)
		{
			header("Location:profiler_teacher.php?em_id=$em_id");	
		}	
	}
	
###########################################
	
	function message_delete_teacher()
	{

		$sql="DELETE FROM message_teacher WHERE msg_id='$_REQUEST[msg_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:profiler_teacher.php?em_id=$_REQUEST[msg_em_id]");			
		}
				
	}  

	function message_delete_teacher_1()
	{

		$sql="DELETE FROM message WHERE msg_id='$_REQUEST[msg_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:teacher_page.php?em_id=$_REQUEST[msg_em_id]");			
		}
				
	}  
	
		
?>
