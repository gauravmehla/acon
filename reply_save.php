<?php
	include('inc/db_connect.php');
	$R=$_REQUEST;
	$d = date("d-m-Y");
	$t = date("H:i:s");
	
	echo $R['st_id'];
	if($_REQUEST['reply_by']=='student'){
		if(empty($R['reply_id'])){
	$sql_1="INSERT INTO `notifier` (`msg_id`, `not_by`, `not_to`, `not_status`, `date`, `time`) VALUES ('$R[msg_id]', '$R[reply_user]', '$R[st_id]', '1', '$d', '$t');";
	$rs_1=mysql_query($sql_1) or die(mysql_error());
	$sql="INSERT INTO `reply` (`msg_id`, `sent_by`, `reply_desc`, `date`, `time`) VALUES ('$R[msg_id]', '$R[reply_user]', '$R[reply_desc]', '$d', '$t')";
	$rs=mysql_query($sql) or die(mysql_error());
	if ($rs) {
		header("Location:replier_student.php?msg_id=$_REQUEST[msg_id]&st_id=$_REQUEST[st_id]");
	}
	}

	else{
		$sql="DELETE FROM reply WHERE reply_id=$R[reply_id]";
		$rs=mysql_query($sql) or die(mysql_error());
		if ($rs) {
			header("Location:replier_student.php?msg_id=$_REQUEST[msg_id]&st_id=$_REQUEST[st_id]");
		}	
	}
	}

	else{

	if(empty($R['reply_id'])){
		
		
	$sql_1="INSERT INTO `notifier` (`msg_id`, `not_by`, `not_to`, `not_status`, `date`, `time`) VALUES ('$R[msg_id]', '$R[reply_user]', '$R[st_id]', '1', '$d', '$t');";
	$rs_1=mysql_query($sql_1) or die(mysql_error());
	$sql="INSERT INTO `reply` (`msg_id`, `sent_by`, `reply_desc`, `date`, `time`) VALUES ('$R[msg_id]', '$R[reply_user]', '$R[reply_desc]', '$d', '$t')";
	$rs=mysql_query($sql) or die(mysql_error());
	if ($rs) {
		header("Location:replier.php?msg_id=$_REQUEST[msg_id]&st_id=$_REQUEST[st_id]");
	}
	}

	else{
		$time=$R['msgtime'];
		$sql="DELETE FROM reply WHERE reply_id=$R[reply_id]";
		mysql_query("DELETE FROM notifier WHERE time='$time'") or die(mysql_error());
		$rs=mysql_query($sql) or die(mysql_error());
		if ($rs) {
			header("Location:replier.php?msg_id=$_REQUEST[msg_id]&st_id=$_REQUEST[st_id]");
		}	
	}
	}
?>