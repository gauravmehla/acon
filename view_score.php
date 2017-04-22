<?php include('inc/header.php'); ?>
<form action="save_score.php" method="post" name="score">
	<?php
if(!empty($_REQUEST['msg'])){
	echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
<table width="90%" height="50"  align="center" class="table_css">
	<tr>
        <td  class="top_header red_add"></td>
        <td class="top_header red_add" style="width:307px;"><div align="right"><a href="add_score.php?st_id=<?php echo $_REQUEST['st_id'];?>">Add Score</a></div></td>
      </tr>
</table>
<?php 
	$rs2=mysql_query("SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id] ORDER BY st_sem ASC") or die(mysql_error());
	while($data2=mysql_fetch_array($rs2)){	
?>
<table width="90%" height="50"  align="center" class="table_css">
	<tr>
		<td>
			<div>
				<h2>SEM<?php echo $data2['st_sem'];?></h2><br>
				<h6><a href="add_score.php?st_id=<?php echo $_REQUEST['st_id'];?>&act=edit_score" class="atag">Edit</a> | <a href="javascript:delete_score(<?php echo $data2['score_id']; ?>)" class="atag">Delete</a></h6>
			</div>
		</td>
	</tr>
      <tr>
		<td></td>
		<?php
			$sem = $data2['st_sem'];
			$sql1="SELECT * FROM btech_subjects WHERE btech_sem=$sem";
			$rs1=mysql_query($sql1) or die(mysql_error());
			$data1=mysql_fetch_array($rs1);
			$result = explode(",",$data1['b.tech_sub']);
			foreach($result as $key){
				echo "<td><b><font color='red'>".$key."</font></b></td>";
			}
		?>
		
	</tr>
	<tr>
		<td style="width:200px;"><b>1st Sessioal</b></td>
		<?php
			$sql="SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id]";
			$rs=mysql_query($sql) or die(mysql_error());
			$data=mysql_fetch_array($rs);
			$result = explode(",",$data['st_marks_1']);
			foreach($result as $key){
				echo "<td>".$key."</td>";
			}
		?>
		
	</tr>
	<tr>
		<td style="width:200px;"><b>2nd Sessioal</b></td>
		<?php
			$sql="SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id]";
			$rs=mysql_query($sql) or die(mysql_error());
			$data=mysql_fetch_array($rs);
			$result = explode(",",$data['st_marks_2']);
			foreach($result as $key){
				echo "<td>".$key."</td>";
			}
		?>
		
	</tr>
	<tr>
		<td style="width:200px;"><b>3rd Sessioal</b></td>
		<?php
			$sql="SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id]";
			$rs=mysql_query($sql) or die(mysql_error());
			$data=mysql_fetch_array($rs);
			$result = explode(",",$data['st_marks_3']);
			foreach($result as $key){
				echo "<td>".$key."</td>";
			}
		?>
		
	</tr>
</table>


	<input type="hidden" name="act">
	<input type="hidden" name="score_id">
	<input type="hidden" name="st_id" value="<?php echo $_REQUEST['st_id'];?>"/>
</form>

<?php 
	}
include('inc/footer.php'); 
?>