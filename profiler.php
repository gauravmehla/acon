<?php include_once('inc/header.php');
	$sql="SELECT * FROM student WHERE st_id = '$_REQUEST[st_id]'";
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
						<img src="upload/<?php if(FILE_EXISTS("upload/$data[st_photo]")){echo $data['st_photo'];} else{ echo "default.png";} ?>" height="176" width="156">
					</div>
					<div class="about_css">

						Roll No : <?php echo $data['st_rollno'];?><br>
						Name : <?php echo $data['st_name'];?><br>
						Father name : <?php echo $data['st__father'];?><br>
						E-mail ID : <?php echo $data['st_mail'];?><br>
						Address : <?php echo $data['st_add1'];?><br>
						Gender : <?php echo $data['st_gender'];?><br>
						Mobile No. : <?php echo $data['st_mobile'];?><br>
					</div>
			</div>

		</fieldset>
	

	<form method="post" action="message.php">
		<select name="msg_no">
		  <option value="mes">Message</option>
		  <option value="not">Notice</option>
		  <option value="war">Warning</option>
		</select>
	<textarea name="msg_desc" class="msg_class msg_box" id="msg" rows="10" placeholder="Type Your Message Here."></textarea><br>
	<input type="submit" name="msg_button" class="button_css" value="Send">
	<input type="hidden" name="st_id" value="<?php echo $data['st_id']; ?>">
	<input type="hidden" name="act2" value="save_message"/>
	</form>

 <?php } ?>

 <?php include('message_wall.php'); ?>
 <?php include_once('inc/footer.php'); ?>




