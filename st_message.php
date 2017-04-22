<?php include('inc/header1.php'); ?>
	<?php
		$sql=mysql_query("SELECT * FROM student_teacher WHERE st_id=$_REQUEST[st_id]") or die(mysql_error());
		while($data=mysql_fetch_array($sql) or die(mysql_error())){
			$sql1=mysql_query("SELECT * FROM teacher WHERE em_id=$data[em_id]") or die(mysql_error());
			$data1=mysql_fetch_array($sql1);
			echo "<div class='msg_class'>";
			echo $data['s_t_msg']."<font size='2'>Sent on ".$data['date']." to ".$data1['em_fname']." at ".$data['time']."</font>";
			echo "</div>";
		}

	?>
<?php include('inc/footer.php'); ?>