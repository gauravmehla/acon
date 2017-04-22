<?php include_once('inc/header.php');
	$sql="SELECT * FROM teacher WHERE em_id = '$_REQUEST[em_id]'";
	$rs = mysql_query($sql) or die(mysql_error());
	while($data=mysql_fetch_assoc($rs))
	{

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
	

	<form method="post" action="message_teacher.php">
		<select name="msg_no">
		  <option value="mes">Message</option>
		  <option value="not">Notice</option>
		  <option value="war">Warning</option>
		</select>
	<textarea name="msg_desc" class="msg_class msg_box" id="msg" rows="10" placeholder="Type Your Message Here."></textarea><br>
	<input type="submit" name="msg_button" class="button_css" value="Send">
	<input type="hidden" name="em_id" value="<?php echo $data['em_id']; ?>">
	<input type="hidden" name="act2" value="save_message"/>
	</form>

 <?php } ?>

 <?php include('message_wall_teacher.php'); ?>
 <?php include_once('inc/footer.php'); ?>




