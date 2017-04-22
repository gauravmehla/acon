<?php include('inc/header1.php'); ?>

	
		<?php
 	$sql="SELECT * FROM message WHERE msg_id = '$_REQUEST[msg_id]'";
	$rs = mysql_query($sql) or die(mysql_error());
	$data=mysql_fetch_assoc($rs)
	

 ?>
 <?php

	if(isset($_REQUEST['notstatus'])){
		mysql_query("UPDATE `notifier` SET  `not_status` =  '0' WHERE  `not_id` =$_REQUEST[notid];") or die(mysql_error());
	}

?>
	
				<div class="<?php if($data['msg_no']=='mes'){echo "msg_class";} elseif($data['msg_no']=='not'){echo "msg_class_1";} elseif($data['msg_no']=='war'){echo "msg_class_2";} ?>">
					<?php echo $data['msg_desc'];?>
					

					<div class="d_t">
						Sent On <?php echo $data['date'];?> At <?php echo $data['time'];?>
						<div class="msg_e_d">
							
  <a href="javascript:message_delete(<?php echo $data['msg_id']; ?>,<?php echo $data['msg_st_id']; ?>)"> Delete </a> || 
  <a href="replier.php?msg_id=<?php echo $data['msg_id']; ?>">Reply</a>
                          
							
					</div>
					</div>
				</div>
<fieldset>
	<legend align="center">REPLY</legend>
<?php
 	$sql1="SELECT * FROM reply WHERE msg_id = '$_REQUEST[msg_id]'";
	$rs1 = mysql_query($sql1) or die(mysql_error());
	while($data1=mysql_fetch_assoc($rs1))
	{

 ?>
	
				<div class="reply_box">
					<?php echo $data1['reply_desc'];?>
					

					<div class="d_t">
						Sent On <?php echo $data1['date'];?> At <?php echo $data1['time'];?> By <b><?php echo $data1['sent_by'];?></b>
						<div class="msg_e_d">
							
  						<a href="reply_save.php?reply_id=<?php echo $data1['reply_id']; ?>&msg_id=<?php echo $data['msg_id']; ?>"> Delete </a>

                          
							
					</div>
					</div>
				</div>
				
 <?php } ?>
 </fieldset>
<center>
	<form method="post" action="reply_save.php">
	<textarea name="reply_desc" class="reply msg_box" id="msg" rows="10" placeholder="Type Your Message Here."></textarea><br>
	<input type="submit" name="reply_button" class="button_css" value="Reply">
	<input type="hidden" name="msg_id" value="<?php echo $data['msg_id']; ?>">
	<input type="hidden" name="reply_user" value="<?php echo $_SESSION['User']; ?>">
	<input type="hidden" name="reply_by" value="student">
	<input type="hidden" name="st_id" value="<?php echo $_REQUEST['st_id'];?>">
	</form>
</center>

<?php include('inc/footer.php'); ?>