<?php
		session_start();
		include('inc/db_connect.php');
		$d = date("d-m-Y");
		$t = date("H:i:s");
      $sql="SELECT * FROM member WHERE mem_name= '$_REQUEST[username]'";
      $rs = mysql_query($sql) or die (mysql_error());
      $data=mysql_fetch_assoc($rs);
      
      	
	      if($data['mem_name']==$_POST['username'])
	      {
	      	
	      	if($data['mem_pass']==$_POST['password'])
	      	{
	      		if(strtolower($data['mem_type'])=='admin')
	      		{
	      			$_SESSION['User']=$_POST['username'];
	      			mysql_query("INSERT INTO `logger` (`log_name`, `log_date`, `log_time`) VALUES ('$_POST[username]', '$d', '$t')") or die(mysql_error());
	      			header("Location:home.php?msg=Welcome Admin");
	      		}

	      		elseif(strtolower($data['mem_type'])=='teacher'){
	      			$sql1="SELECT * FROM teacher WHERE em_id= '$data[mem_id_1]'";
      				$rs1 = mysql_query($sql1) or die (mysql_error());
      				$data1=mysql_fetch_assoc($rs1);
      				$_SESSION['User']=$_POST['username'];
      				$status=mysql_query("SELECT * FROM online_status WHERE os_em_id=$data1[em_id]");
      				$status_result=mysql_fetch_array($status);
      				if(is_numeric($status_result['os_em_id'])){
      					mysql_query("UPDATE `online_status` SET  `os_status` =  '1' WHERE `os_em_id` =  '$data1[em_id]' ");
      				}
      				else{
      					mysql_query("INSERT INTO `online_status` (`os_em_id`, `os_status`) VALUES ('$data1[em_id]', '1')") or die(mysql_error());
      				}
      				mysql_query("INSERT INTO `logger` (`log_name`, `log_date`, `log_time`) VALUES ('$_POST[username]', '$d', '$t')") or die(mysql_error());
					header("Location:teacher_page.php?em_id=$data1[em_id]&msg=Welcome%20Teacher");
	      			
	      		}

	      		elseif(strtolower($data['mem_type'])=='student'){
	      			
	      			$sql1="SELECT * FROM student WHERE st_rollno= '$data[mem_id_1]'";
      				$rs1 = mysql_query($sql1) or die (mysql_error());
      				$data1=mysql_fetch_assoc($rs1);
      				$_SESSION['User']=$_POST['username'];
      				$status=mysql_query("SELECT * FROM online_status WHERE os_st_id=$data1[st_id]");
      				$status_result=mysql_fetch_array($status);
      				if(is_numeric($status_result['os_st_id'])){
      					mysql_query("UPDATE `online_status` SET  `os_status` =  '1' WHERE `os_st_id` =  '$data1[st_id]' ");
      				}
      				else{
      					mysql_query("INSERT INTO `online_status` (`os_st_id`, `os_status`) VALUES ('$data1[st_id]', '1')") or die(mysql_error());
      				}
      				mysql_query("INSERT INTO `logger` (`log_name`, `log_date`, `log_time`) VALUES ('$_POST[username]', '$d', '$t')") or die(mysql_error());
					header("Location:student_page.php?st_id=$data1[st_id]&msg=Welcome%20Student");
	      		}
	      		
	      	} 

		else{
			header("Location:index.php");
		}
	      	
	      }
else{
			header("Location:index.php");
}
if ($_POST['username']=="") {
	header("Location:index.php");
}
	      
	      
	  

?>