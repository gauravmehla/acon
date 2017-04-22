<?php 
include_once('inc/db_connect.php'); 


if($_REQUEST['act1'])
{
	$_REQUEST['act1']();
}


	function save_teacher()
	{
		

		 $R= $_REQUEST;
		 $R['em_dob']=$R['firstinput'];
		$R['em_qul']=implode(",",$R['em_qul']);
		
		$name  = $_FILES["em_photo"]["name"];
	    $tmp_name = $_FILES["em_photo"]["tmp_name"];	

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

		$R['em_photo'] = $name;
		
		if (is_numeric($R['em_id']))
		{
			$sql = "UPDATE `teacher` SET `em_fname`='$R[em_fname]', `em_lname`='$R[em_lname]', `em_add`='$R[em_add]', `em_gender`='$R[em_gender]', `em_dob`='$R[em_dob]', `em_mobile`='$R[em_mobile]', `em_mail`='$R[em_mail]', `em_state`='$R[em_state]', `em_qul`='$R[em_qul]', `em_uni`='$R[em_uni]',  `em_ex`='$R[em_ex]', `em_pre`='$R[em_pre]' , `em_photo`='$R[em_photo]', `em_spec`='$R[em_spec]' WHERE em_id= '$R[em_id]' 
			";

				$msg="Teacher Updated Successfully.!"; 
		}
		else
		{
		$sql = "INSERT INTO `teacher` (`em_fname`, `em_lname`, `em_gender`, `em_dob`, `em_mobile`, `em_add`, `em_mail`, `em_state`, `em_qul`, `em_uni`, `em_ex`, `em_pre`, `em_photo`, `em_spec`) VALUES ('$R[em_fname]', '$R[em_lname]', '$R[em_gender]', '$R[em_dob]', '$R[em_mobile]', '$R[em_add]','$R[em_mail]', '$R[em_state]', '$R[em_qul]', '$R[em_uni]', '$R[em_ex]', '$R[em_pre]', '$R[em_photo]', '$R[em_spec]')";
		$msg ="Teacher Saved Successfully ";
		}
		$rs = mysql_query($sql) or die (mysql_error());
		
		if($rs)
		{
			header("Location:teacher_view.php?msg=$msg");	
	}
	
	}
	
###########################################
	
	function teacher_delete()
	{
		
		$sql="DELETE FROM teacher WHERE em_id='$_REQUEST[em_id]'";

		$rs = mysql_query($sql) or die (mysql_error());
		if($rs)
		{
			header("Location:teacher_view.php?msg=Teacher delete Successfuly.");			
		}
		
		
	}  
	
	
?>
