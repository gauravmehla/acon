<?php 
include_once('inc/db_connect.php'); 


if($_REQUEST['act'])
{
	$_REQUEST['act']();
}

	function save_student()
	{
		
		$R= $_REQUEST;
		$R['st_qul']=implode(",",$R['st_qul']);

		$name  = $_FILES["st_photo"]["name"];
	    $tmp_name = $_FILES["st_photo"]["tmp_name"];

	    if(isset($name))
	    {
	      if(!empty($name))
	      {
	        echo "OK";

	        $location = "upload/";

	        if(move_uploaded_file($tmp_name, $location.$name)){
	          echo "Uploaded..!";
	        }
	      }
	      else
	      {
	        echo "Please Select a Valid File.";
	      }
	    }

		$R['st_photo'] = $name;

		if (is_numeric($R['st_id']))
		{
			$sql = "UPDATE `student` SET `st_name`='$R[st_name]', `st__father`='$R[st__father]', `st_rollno`='$R[st_rollno]',`st_mail`='$R[st_mail]',`st_add1`='$R[st_add1]', `st_add2`='$R[st_add2]', `st_city`='$R[st_city]', `st_state`='$R[st_state]', `st_country`='$R[st_country]', `st_nat`='$R[st_nat]', `st_gender`='$R[st_gender]', `st_qul`='$R[st_qul]', `st_course`='$R[st_course]', `st_photo`='$R[st_photo]',  `st_mobile`='$R[st_mobile]', `st_hobbies`='$R[st_hobbies]' WHERE st_id= '$R[st_id]' 
			";
			
			
				echo $_REQUEST['st_id'];

				$msg="student Updated Successfully.!";
		}
		else
		{
		$sql = "INSERT INTO  student (`st_name` ,`st__father` ,`st_rollno` ,`st_mail`,`st_add1` ,`st_add2` ,`st_city` ,`st_state` ,`st_country` ,`st_nat` ,`st_gender` ,`st_qul` ,`st_course`,`st_photo` ,`st_mobile` ,`st_hobbies`) VALUES ('$R[st_name]',  '$R[st__father]', '$R[st_rollno]','$R[st_mail]', '$R[st_add1]',  '$R[st_add2]',  '$R[st_city]',  '$R[st_state]',  '$R[st_country]',  '$R[st_nat]',  '$R[st_gender]',  '$R[st_qul]',  '$R[st_course]', '$R[st_photo]',  '$R[st_mobile]',  '$R[st_hobbies]')";
		$msg ="Student Saved Successfully ";
		}
		$rs = mysql_query($sql) or die (mysql_error());
		
		if($rs)
		{
			header("Location:student_view.php?msg=$msg");	
	}
	
	}
	
###########################################
	
	function student_delete()
	{
		
		$sql="DELETE FROM student WHERE st_id='$_REQUEST[st_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:student_view.php?msg=Student delete Successfuly.");			
		}
		
		
	}  

	
	
	
?>
