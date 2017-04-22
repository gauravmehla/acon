<?php
	include('inc/db_connect.php');
	$R=$_REQUEST;

	if ($R['act']=='delete_score') {
		$sql="DELETE FROM st_score WHERE score_id='$_REQUEST[score_id]'";
		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:view_score.php?msg=Test Scores deleted Successfuly.&st_id=$_REQUEST[st_id]");			
		}
	}

	else{
	$marks1 = $R['txt11'].",".$R['txt12'].",".$R['txt13'].",".$R['txt14'].",".$R['txt15'].",".$R['txt16'];
	$marks2 = $R['txt21'].",".$R['txt22'].",".$R['txt23'].",".$R['txt24'].",".$R['txt25'].",".$R['txt26'];
	$marks3 = $R['txt31'].",".$R['txt32'].",".$R['txt33'].",".$R['txt34'].",".$R['txt35'].",".$R['txt36'];
	$sql="INSERT INTO `st_score` (`st_class`, `st_stream`, `st_id`, `st_sem`, `st_marks_1`, `st_marks_2`, `st_marks_3`) VALUES ('$R[st_class]', '$R[st_stream]', '$R[st_id]', '$R[st_sem]', '$marks1', '$marks2', '$marks3')";
	$rs= mysql_query($sql) or die(mysql_error());
	if ($rs) {
		header("Location:view_score.php?msg=Scores%20Inserted%20Successfully..!&st_id=$_REQUEST[st_id]");
	}
	}

?>