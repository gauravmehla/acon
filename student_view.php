<?php include_once('inc/header.php');
	$sql="SELECT * FROM student ORDER BY st_id";
	$rs = mysql_query($sql) or die(mysql_error());
 ?>
 
 <?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
 <form name="student_view" action="student.php" method="post"> 
    <table width="90%" height="50"  align="center" class="table_css">
      <tr>
        <td colspan="4" class="top_header red_add"></td>
        <td class="top_header red_add" style="width:307px;"><div align="right" style="width: 311px;"><a href="noticer.php">Send Notice</a> | <a href="student_add.php">Student Add</a></div></td>
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
        <td><div align="center"><a href="student_add.php?st_id=<?php echo $data['st_id']; ?>"> <img src="images/edit.gif" height="32" width="32" alt=""> Edit</a> | <a href="javascript:student_delete(<?php echo $data['st_id']; ?>)"> <img src="images/delete.gif" height="32" width="32" alt=""> Delete</a></a></div></td>
      </tr>
      <?php } ?>
    </table>
<input type="hidden" name="act"/>
<input type="hidden" name="st_id"/>
</form>

<?php include_once('inc/footer.php'); ?>