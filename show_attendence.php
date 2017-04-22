<?php 
include('inc/header.php');
	$sql="SELECT * FROM attendence WHERE att_class = '$_REQUEST[class]'";
	$rs = mysql_query($sql) or die(mysql_error());
?>

	<table class="table_css">
		<tr>
			<td>Name</td>
			<td>Roll No.</td>
			<td>Status</td>
			
		</tr>
<?php

	while($data = mysql_fetch_array($rs))
	{
		
		
?>
<tr>
	<td  colspan="3"><div class="mid_table"><h3><?php echo $data['att_date'];?></h3></div></td>
</tr>
<?php
		
		$present = explode(",", $data['att_present']);
		foreach ($present as $key) { 
			
			
			$rs1 = mysql_query("SELECT * FROM student Where st_id = $key") or die(mysql_error());
			$data1 = mysql_fetch_array($rs1);
?>
<tr>
<td><?php echo $data1['st_name'];?></td>
<td><?php echo $data1['st_rollno'];?></td>
<td><?php if($key==00){echo "Absent";} else{echo "Present";}?></td>
</tr>
<?php
}
}
?>
