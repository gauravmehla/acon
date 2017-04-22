
<?php include_once('inc/header2.php');
  $sql="SELECT * FROM teacher WHERE em_id = '$_REQUEST[em_id]'";
  $rs = mysql_query($sql) or die(mysql_error());
  while($data=mysql_fetch_assoc($rs))
  {

 ?>
 <?php
if(!empty($_REQUEST['msg'])){
	echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
<center>
		<fieldset>
				<legend><font></legend>
				<h1>DASHBOARD</h1>
			<div class="profile_css">
					<div>
						<img src="upload/<?php if(FILE_EXISTS("upload/$data[em_photo]")){echo $data['em_photo'];} else{ echo "default.png";} ?>" height="176" width="156">
					</div>
					<div class="about_css">

						ID : <?php echo $data['em_id'];?><br>
						Name : <?php echo $data['em_fname']." ".$data['em_lname'];?><br>
						Date Of Birth : <?php echo $data['em_dob'];?><br>
						E-mail ID : <?php echo $data['em_mail'];?><br>
						Address : <?php echo $data['em_add'];?><br>
						Gender : <?php echo $data['em_gender'];?><br>
						Mobile No. : <?php echo $data['em_mobile'];?><br>
					</div>
			</div>

		</fieldset>
 <?php } ?>

 <div>
		<img src="images/bullet_red.png" height="32" width="32" alt=""> Warning Message | <img src="images/bullet_yellow.png" height="32" width="32" alt=""> Official Notice |<img src="images/bullet_white.png" height="32" width="32" alt=""> Message
	</div>

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
							
  <a href="javascript:message_delete_teacher(<?php echo $data['msg_id']; ?>,<?php echo $data['msg_em_id']; ?>)"> Delete </a> ||
  <a href="replier_teacher.php?msg_id=<?php echo $data['msg_id']; ?>&em_id=<?php echo $_REQUEST['em_id']?>">Reply</a>
                          
							
					</div>
					</div>
				</div>
				
 <?php } ?>	

<?php
	$abc=mysql_query("SELECT * FROM student_teacher WHERE em_id=$_REQUEST[em_id]") or die(mysql_error());
	while ($xyz=mysql_fetch_array($abc)) {
		
		$sql1=mysql_query("SELECT * FROM student WHERE st_id=$xyz[st_id]") or die(mysql_error());
			$data1=mysql_fetch_array($sql1);
			echo "<div class='msg_class'>";
			echo $xyz['s_t_msg']."<font size='2'> || Sent on ".$xyz['date']." by ".$data1['st_name']." at ".$xyz['time']."</font>";
			echo "</div>";
	}
?>


<?php include('inc/footer.php'); ?>