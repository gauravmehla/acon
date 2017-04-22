<form action="message_teacher.php" method="post" name="message_wall_teacher">
<?php
 	$sql="SELECT * FROM message_teacher WHERE msg_em_id = '$_REQUEST[em_id]' ORDER BY date DESC , time DESC";
	$rs = mysql_query($sql) or die(mysql_error());
	while($data=mysql_fetch_assoc($rs))
	{

 ?>

				<div class="<?php if($data['msg_no']=='mes'){echo "msg_class";} elseif($data['msg_no']=='not'){echo "msg_class_1";} elseif($data['msg_no']=='war'){echo "msg_class_2";} ?>">
					<?php echo $data['msg_desc'];?>
					

					<div class="d_t">
						Sent On <?php echo $data['date'];?> At <?php echo $data['time'];?>
						<div class="msg_e_d">
							
  <a href="javascript:message_delete_teacher(<?php echo $data['msg_id']; ?>,<?php echo $data['msg_em_id']; ?>)"> Delete </a>
  <a href="replier_teacher.php?msg_id=<?php echo $data['msg_id']; ?>&st_id=<?php echo $_REQUEST['st_id']?>">Reply</a>
                          
							
					</div>
					</div>
				</div>
				
 <?php } ?>
	<input type="hidden" name="msg_id">
	<input type="hidden" name="act2">
	<input type="hidden" name="msg_em_id">
 </form>
