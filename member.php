<?php 
include_once('inc/db_connect.php'); 


if($_REQUEST['act3'])
{
	$_REQUEST['act3']();
}

	function save_member()
	{
		
		$R= $_REQUEST;
		
		if (is_numeric($R['mem_id']))
		{
			$sql = "UPDATE `member` SET `mem_id_1`='$R[mem_id_1]',`mem_name`='$R[mem_name]', `mem_pass`='$R[mem_pass]', `mem_type`='$R[mem_type]' WHERE mem_id= '$R[mem_id]' 
			";
			
				$msg="Member Updated Successfully.!";
		}
		else
		{
		$sql = "INSERT INTO  member (`mem_id_1` ,`mem_name` ,`mem_pass` ,`mem_type`) VALUES ('$R[mem_id_1]','$R[mem_name]',  '$R[mem_pass]',  '$R[mem_type]')";
		$msg ="Member Saved Successfully ";
		}
		$rs = mysql_query($sql) or die (mysql_error());
		
		if($rs)
		{
			header("Location:account.php?msg=$msg");	
	}
	
	}
	
###########################################
	
	function member_delete()
	{
		
		$sql="DELETE FROM member WHERE mem_id='$_REQUEST[mem_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:account.php?msg=Member delete Successfuly.");			
		}
		
		
	}  

	
	
	
?>
