<?php
include_once('db_connect.php');
function get_option_list($table,$col_id,$col_value,$sel=0)
{
	$sql="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($sql) or die (mysql_error());
	$option_list="<option value=0> Please Select </option>";
	while($data=mysql_fetch_assoc($rs))
	{
		if($data[$col_id]==$sel)
		{
			$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>"; 
		}
		else
		{
			$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>"; 
		}
	}
	
	return $option_list;
}

################################################################

function get_check_list($table,$col_id,$col_value,$name,$sel=0)
{
	$sql="SELECT * FROM $table ORDER BY $col_value";
	$rs=mysql_query($sql) or die (mysql_error());
	$option_list="";
	$sel=explode(",",$sel);
	while($data=mysql_fetch_assoc($rs))
	{
		if(in_array($data[$col_id],$sel))
		{
			$option_list.="<input type='checkbox' name='$name' value='$data[$col_id]' checked >$data[$col_value]<br>"; 
		}
		else
		{
			$option_list.="<input type='checkbox' name='$name' value='$data[$col_id]'>$data[$col_value]<br>"; 
		}
	}
	
	return $option_list;
}

##################################################################

function get_complete_list($table,$col_id,$col_value,$sel=0)
{
	$sql="SELECT * FROM student ORDER BY $col_value";
	$rs=mysql_query($sql) or die (mysql_error());
	$option_list="<option value=0> Please Select </option>";
	while($data=mysql_fetch_assoc($rs))
	{
		if($data[$col_id]==$sel)
		{
			$option_list.="<option value='$data[$col_id]' selected>$data[$col_value]</option>"; 
		}
		else
		{
			$option_list.="<option value='$data[$col_id]'>$data[$col_value]</option>"; 
		}
	}
	
	return $option_list;
}

function formatbytes($file, $type)
{
   switch($type){
      case "KB":
         $filesize = filesize($file) * .0009765625; // bytes to KB
      break;
      case "MB":
         $filesize = (filesize($file) * .0009765625) * .0009765625; // bytes to MB
      break;
      case "GB":
         $filesize = ((filesize($file) * .0009765625) * .0009765625) * .0009765625; // bytes to GB
      break;
   }
   if($filesize <= 0){
      return $filesize = 'unknown file size';}
   else{return round($filesize, 2).' '.$type;}
}


?>



