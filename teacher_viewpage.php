<?php include('inc/header1.php'); 
$sql="SELECT * FROM teacher WHERE em_id = '$_REQUEST[em_id]'";
  $rs = mysql_query($sql) or die(mysql_error());
  $data=mysql_fetch_assoc($rs)
  

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
 

 <div>
		<img src="images/bullet_red.png" height="32" width="32" alt=""> Warning Message | <img src="images/bullet_yellow.png" height="32" width="32" alt=""> Official Notice |<img src="images/bullet_white.png" height="32" width="32" alt=""> Message
	</div>


	<form action="student_teacher.php" method="post">
		<textarea name="s_t_msg" class="reply msg_box" id="msg" rows="10" placeholder="Type Your Message Here."></textarea><br>
		<input type="submit" name="reply_button" class="button_css" value="Sent">
		<input type="hidden" name="st_id" value="<?php echo $_REQUEST['st_id'];?>">
		<input type="hidden" name="em_id" value="<?php echo $data['em_id'];?>">
	</form>
	
	<?php 

		$sql1=mysql_query("SELECT * FROM student_teacher WHERE st_id=$_REQUEST[st_id]") or die(mysql_error());
		while($data1=mysql_fetch_array($sql1)){
			echo "<div class='msg_class'>";
			echo $data1['s_t_msg'];
			echo "<h5><a href=''>Reply</a></h5>";
			echo "</div>";
		}
		include('inc/footer.php');
	?>
