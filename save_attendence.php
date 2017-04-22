<?php 
	include_once('inc/header.php');
	$sql="SELECT * FROM student WHERE st_course = '$_REQUEST[msg_class]'";
	$rs = mysql_query($sql) or die(mysql_error());
	$present="";
	$absent="";
	$a = $b = 0;
	while($data=mysql_fetch_assoc($rs))
	{
		if($_POST[$data['st_id']]=="present")
		{
			if($a==0)
			{
				$present = $data['st_id'].$present;
				$a++;
			}
			else
			{
				$present = $present.",".$data['st_id'];
			}
		}
		else
		{
			
			if($b==0)
			{
				$absent = $data['st_id'].$absent;
				$b++;
			}
			else
			{
				$absent = $absent.",".$data['st_id'];
			}
		}
		
	}
	echo $present."<br>";
	echo $absent."<br>";

	if(empty($present))
	{
		$present="00";
	}
	if(empty($absent))
	{
		$absent="00";
	}

	$sql1="INSERT INTO `attendence` (`att_class`, `att_date`, `att_present`, `att_absent`) VALUES ('$_REQUEST[msg_class]', '$_POST[firstinput]', '$present', '$absent');";
	$rs1 = mysql_query($sql1) or die(mysql_error());
	
	if(rs1)
	{
		$msg="Attendence Of $_POST[firstinput] has successfully saved";
		header("Location:attendence.php?msg=$msg");
	}
    include_once('inc/footer.php');
 ?>