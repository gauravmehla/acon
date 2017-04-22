<?php
	session_start();
	include('inc/db_connect.php');
	$d = date("d-m-Y");
	$t = date("H:i:s");
	$session =  $_SESSION['User'];
	$sql="INSERT INTO `student_teacher` (`st_id`, `em_id`, `date`, `time`, `st_by`, `s_t_msg`) VALUES ('$_POST[st_id]', '$_POST[em_id]', '$d', '$t', '$session','$_POST[s_t_msg]');";
	$rs=mysql_query($sql) or die(mysql_error());
	if ($rs) {
		echo "(y)";
	}
?>