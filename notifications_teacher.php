<?php include('inc/header2.php'); ?>
<?php
	$mem=mysql_query("SELECT * FROM member WHERE mem_name='$_SESSION[User]';")  or die(mysql_error());
	

	while($msm_1=mysql_fetch_array($mem)){
		
	if ($msm_1['mem_type']=='admin') {
		
		$sql_1="SELECT * FROM notifier WHERE not_status=0 ORDER BY date DESC , time DESC";
	}
	else{
		
		$sql_1="SELECT * FROM notifier WHERE not_status=0 AND not_to=$_REQUEST[em_id] ORDER BY date DESC , time DESC";	
	}}
	
	

	$rs_1=mysql_query($sql_1) or die(mysql_error());
	
	while($data_1=mysql_fetch_array($rs_1)){
	if (!empty($data_1)) {
		
		if ($data_1['not_by']!=$_SESSION['User']) {
			
		?>

<div class="css_div">
	<img src="images/bullet_tick.png" height="28" width="28" alt="">
		<?php echo $data_1['not_by']." Replied A Message Sent By You.";?>
		<a href="replier.php?msg_id=<?php echo $data_1['msg_id']; ?>&notstatus=0&notid=<?php echo $data_1['not_id']; ?>">Click Here. </a>
		<p align="right" class="margin_top"><b>Seen. </b><span>sent on <?php echo $data_1['date'];?> at <?php echo $data_1['time'];?></span></p>
 </div>
		<?php
		
		}
	}
	
	}
	
?>
<?php include('inc/footer.php'); ?>