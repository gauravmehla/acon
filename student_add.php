<?php include_once('inc/header.php'); 
		if($_REQUEST[st_id])
		{
			$sql="SELECT * FROM student WHERE st_id= '$_REQUEST[st_id]'";
			$rs = mysql_query($sql) or die (mysql_error());
			$data=mysql_fetch_assoc($rs);
		}

?>

<form action="student.php" method="post" enctype="multipart/form-data" onsubmit="return valid_student(this);">
<table width="90%" border="1" align="center" class="table_css addform">
  <tr>
    <td colspan="4"><div align="center"><strong>Student Registration Form</strong></div></td>
  </tr>
  <tr>
    <td><div align="center">Name</div></td>
    <td><div align="center">
      <label>
      <input type="text" name="st_name" id="st_name" value="<?php echo $data[st_name] ?>" />
      </label>
    </div></td>
    <td><div align="center">Father Name</div></td>
    <td><div align="center">
      <label>
      <input type="text" name="st__father" id="st_father" value="<?php echo $data[st__father] ?>" />
      </label>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Roll No.</div></td>
    <td><div align="center">
      <input type="text" name="st_rollno" id="st_rollno" value="<?php echo $data[st_rollno] ?>"/>
    </div></td>
    <td><div align="center">E-mail ID</div></td>
    <td><div align="center">
      <input type="text" name="st_mail" id="st_mail" value="<?php echo $data[st_mail] ?>" />
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Adress #1</div></td>
    <td><div align="center">
      <label>
      <textarea name="st_add1" id="st_add1" cols="45" rows="5"> <?php echo $data[st_add1] ?> </textarea>
      </label>
    </div></td>
    <td><div align="center">Address #2</div></td>
    <td><div align="center">
      <label>
      <textarea name="st_add2" id="st_add2" cols="45" rows="5" ><?php echo $data[st_add2] ?></textarea>
      </label>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">City</div></td>
    <td><div align="center">
      <select name="st_city" id="st_city" >
      <?php echo get_option_list("city","city_id","city_name",$data[st_city]); ?>
      </select>
      </div></td>
    <td><div align="center">State</div></td>
    <td><div align="center">
      <select name="st_state" id="st_state" >
      
      <?php echo get_option_list("state","state_id","state_name",$data[st_state]); ?>
            </select>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Country</div></td>
    <td><div align="center">
      <select name="st_country" id="st_country" >
      <?php echo get_option_list("country","country_id","country_name",$data[st_country]); ?>
            </select>
    </div></td>
    <td><div align="center">Nationality</div></td>
    <td><div align="center">
      <input type="text" name="st_nat" id="st_nat" value="<?php echo $data[st_nat] ?>"/>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Gender</div></td>
    <td><div align="center">
      
    <input name="st_gender" type="radio" id="st_gender" value="Male" <?php if($data[st_gender]=="Male") echo "checked"; ?>/>
    Male
    <input name="st_gender" type="radio" id="st_gender" value="Female" <?php if($data[st_gender]=="Female") echo "checked"; ?>/>
    Female</div></td>
    <td><div align="center">Qualification</div></td>
    <td><div align="center">
    	<div >
      <p align="left"><?php echo get_check_list("course","course_id","course_name","st_qul[]",$data[st_qul])?></p>
      </div>
      </div></td>
  </tr>
  <tr>
    <td><div align="center">Course</div></td>
    <td><div align="center">
      <select name="st_course" id="st_course" value="<?php echo $data[st_course] ?>">
      <?php echo get_option_list("course","course_id","course_name",$data[st_course]); ?>
            </select>
    </div></td>
    <td><div align="center">Photo</div></td>
    <td><div align="center">
      <input type="file" name="st_photo" id="st_photo" value="<?php echo $data[st_photo] ?>"/>
    </div></td>
  </tr>
  <tr>
    <td><div align="center">Hobbies</div></td>
    <td><div align="center">
      <textarea name="st_hobbies" id="st_hobbies" cols="45" rows="5" ><?php echo $data[st_hobbies] ?></textarea>
    </div></td>
    <td><div align="center">Mobile</div></td>
    <td><div align="center">
      <input type="text" name="st_mobile" id="st_mobile"  value="<?php echo $data[st_mobile] ?>"/>
    </div></td>
  </tr>
  <tr>
    <td colspan="4"><div align="center">
      <input type="submit" name="button" class="button_css" id="button" value="Submit" />
      <input type="reset" name="button2" class="button_css" id="button2" value="Reset" />
    </div></td>
  </tr>
</table>

<input type="hidden" value="save_student" name="act" />
<input type="hidden" name="st_id" value=" <?php echo $data['st_id']; ?>"/>
</form>

<?php include_once('inc/footer.php'); ?>