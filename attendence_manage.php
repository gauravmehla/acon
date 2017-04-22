<?php include_once('inc/header.php');
	$sql="SELECT * FROM student WHERE st_course = '$_REQUEST[msg_class]'";
	$rs = mysql_query($sql) or die(mysql_error());
 ?>
 
 <?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
 <form name="sampleform" method="post" action="save_attendence.php"> 

    <table width="90%" height="50"  align="center" class="table_css">
      <tr>
        <td colspan="4" class="top_header red_add"></td>
        <td class="top_header red_add" style="width:307px;"><a href="show_attendence.php?class=<?php echo $_REQUEST[msg_class]; ?>">Show Attendence</a></td>
      </tr>
      <tr class="table_top">
        <td colspan="2"><div align="center"></div></td>
        <td><div align="center">Select Date</div></td>
        <td><div align="center">
			<input type="text" name="firstinput" size=20 > <small><a href="javascript:showCal('Calendar1')">Select Date</a></small>
        </div></td>
        <td>&nbsp;</td>
      </tr>
      <tr class="table_top">
        <td><div align="center"><b>ID</b></div></td>
        <td><div align="center"><b>Name</b></div></td>
        <td><div align="center"><b>Father Name</b></div></td>
        <td><div align="center"><b>Mobile</b></div></td>
        <td><div align="center"><b>Action</b></div></td>
      </tr>
      <?php
      while($data=mysql_fetch_assoc($rs))
      {
      ?>
      <tr>
        <td><div align="center"><?php echo $data['st_id'];?></div></td>
        <td><div align="center"><a href="profiler.php?st_id=<?php echo $data['st_id']; ?>"><?php echo $data['st_name'];?></a></div></td>
        <td><div align="center"><?php echo $data['st__father'];?></div></td>
        <td><div align="center"><?php echo $data['st_mobile'];?></div></td>
        <td><div align="center">
          <input name="<?php echo $data['st_id'];?>" type="radio"  value="present" <?php ?> Checked/> Present
          <input name="<?php echo $data['st_id'];?>" type="radio"  value="absent" <?php ?>/> Absent
        </div></td>
      </tr>
      <?php } ?>
    </table>
<div align="center" style="margin:10px;"><input type="submit" class="button_css" value="save"></div>
<input type="hidden" name="msg_class" value="<?php echo $_REQUEST[msg_class]; ?>">
</form>

<?php include_once('inc/footer.php'); ?>