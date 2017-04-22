<?php include_once("inc/header.php");
		if($_REQUEST[em_id])
		{
			$sql="SELECT * FROM teacher WHERE em_id= '$_REQUEST[em_id]'";
			$rs = mysql_query($sql) or die (mysql_error());
			$data=mysql_fetch_assoc($rs);
		}

?>

<form action="teacher.php" method="post" enctype="multipart/form-data" onsubmit="return valid_teacher(this);" name="sampleform">
  <table width="90%" border="1" align="center" class="table_css">
    <tr>
      <td colspan="4"><div align="center"><strong>Employee Management System</strong></div>        <div align="center"></div>        <div align="center"></div>        <div align="center"></div></td>
    </tr>
    <tr>
      <td><div align="center">First Name</div></td>
      <td><div align="center">
        <input type="text" name="em_fname" id="em_fname" value="<?php echo $data[em_fname] ?>"/>
      </div></td>
      <td><div align="center">Last Name</div></td>
      <td><div align="center">
        <input type="text" name="em_lname" id="em_lname" value="<?php echo $data[em_lname] ?>"/>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Gender</div></td>
      <td><div align="center">
        <input type="radio" name="em_gender" id="radio" value="Male" <?php if($data[em_gender]=="Male") echo "checked"; ?> />Male
        <input type="radio" name="em_gender" id="radio2" value="Female" <?php if($data[em_gender]=="Female") echo "checked"; ?>/>Female
      </div></td>
      <td><div align="center">Date Of Birth</div></td>
      <td><div align="center">
    
    <input type="text" name="firstinput" size=20 value="<?php echo $data[em_dob] ?>"> <small><a href="javascript:showCal('Calendar1')">Select Date</a></small>

      </div></td>
    </tr>
    <tr>
      <td><div align="center">Mobile</div></td>
      <td><div align="center">
        <input type="text" name="em_mobile" id="em_mobile" value="<?php echo $data[em_mobile] ?>" />
      </div></td>
      <td><div align="center">Address</div></td>
      <td><div align="center">
        <textarea name="em_add" id="em_add" cols="45" rows="5"><?php echo $data[em_add] ?></textarea>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">E-Mail</div></td>
      <td><div align="center">
        <input type="text" name="em_mail" id="em_mail" value="<?php echo $data[em_mail] ?>" />
      </div></td>
      <td><div align="center">State</div></td>
      <td><div align="center">
        <select name="em_state" id="em_state">
        	<?php echo get_option_list("state","state_id","state_name",$data[em_state]); ?>
        </select>
        </div></td>
    </tr>
    <tr>
      <td><div align="center">Qualification</div></td>
      <td><div align="center">
      	<div >
      <p align="left"><?php echo get_check_list("course","course_id","course_name","em_qul[]",$data[em_qul])?></p>
      </div>
      </div></td>
      <td><div align="center">University / Institute</div></td>
      <td><div align="center">
        <input type="text" name="em_uni" id="em_uni" value="<?php echo $data[em_uni] ?>"/>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">No. of Years Of Experience</div></td>
      <td><div align="center">
        <input type="text" name="em_ex" id="em_ex" value="<?php echo $data[em_ex] ?>"/>
      </div></td>
      <td><div align="center">Previous Organisation</div></td>
      <td><div align="center">
        <input type="text" name="em_pre" id="em_pre" value="<?php echo $data[em_pre] ?>"/>
      </div></td>
    </tr>
    <tr>
      <td><div align="center">Photo</div></td>
      <td><div align="center">
        <input type="file" name="em_photo" id="em_photo" />
      </div></td>
      <td><div align="center">Specialization</div></td>
      <td><div align="center">
        <input type="text" name="em_spec" id="em_spec" value="<?php echo $data[em_spec] ?>"/>
      </div></td>
    </tr>
    <tr>
      <td colspan="4"><div align="center">
        <input type="submit" name="submit" class="button_css" id="submit" value="Submit" />
        <input type="reset" name="reset"  class="button_css" id="reset" value="Reset" />
      </div></td>
    </tr>
  </table>
<input type="hidden" value="save_teacher" name="act1" />
	<input type="hidden" name="em_id" value=" <?php echo $data['em_id']; ?>"/>
</form>


<script type="text/javascript">
  addCalendar("Project", "Project", "em_dob", "Project");
</script>
<?php include_once("inc/footer.php"); ?>

  <script language="javascript" src="js/cal2.js"></script>
  <script language="javascript" src="js/cal_conf2.js"></script>
