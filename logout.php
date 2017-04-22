<?php
session_start();
include('inc/db_connect.php');
session_destroy();

if (is_numeric($_REQUEST['st_id']) || is_numeric($_REQUEST['em_id'] )) {
	echo "help me";
	mysql_query("UPDATE `online_status` SET  `os_status` =  '0' WHERE `os_st_id` =  '$_REQUEST[st_id]' ");
}
header('location:index.php?msg=Logout%20Successfully.')
?>