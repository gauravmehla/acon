<form action="message.php" method="post" name="message_wall">
	<div>
		<img src="images/bullet_red.png" height="32" width="32" alt=""> Warning Message | <img src="images/bullet_yellow.png" height="32" width="32" alt=""> Official Notice |<img src="images/bullet_white.png" height="32" width="32" alt=""> Message
	</div>
<?php
 	$sql="SELECT * FROM message WHERE msg_st_id = '$_REQUEST[st_id]' ORDER BY date ASC , time DESC";
	$rs = mysql_query($sql) or die(mysql_error());
	while($data=mysql_fetch_assoc($rs))
	{

 ?>
	
				<div class="<?php if($data['msg_no']=='mes'){echo "msg_class";} elseif($data['msg_no']=='not'){echo "msg_class_1";} elseif($data['msg_no']=='war'){echo "msg_class_2";} ?>">
					<?php echo $data['msg_desc'];?>
					

					<div class="d_t">
						Sent On <?php echo $data['date'];?> At <?php echo $data['time'];?>
						<div class="msg_e_d">
							
  <a href="javascript:message_delete(<?php echo $data['msg_id']; ?>,<?php echo $data['msg_st_id']; ?>)"> Delete </a> || 
  <a href="replier.php?msg_id=<?php echo $data['msg_id']; ?>&st_id=<?php echo $_REQUEST['st_id']?>">Reply</a>
                          
							
					</div>
					</div>
				</div>
				
 <?php } ?>
	<input type="hidden" name="msg_id">
	<input type="hidden" name="act2">
	<input type="hidden" name="msg_st_id">
 </form>
