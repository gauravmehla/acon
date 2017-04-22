<?php include_once('inc/header.php');
	$sql="SELECT * FROM teacher ORDER BY em_id";
	$rs = mysql_query($sql) or die(mysql_error());
 ?>
 
 <?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
 <form name="teacher_view" action="teacher.php" method="post"> 
    <table width="90%" height="50" border="1" align="center" class="table_css">
      <tr>
        <td colspan="5"><div align="right" class="top_header red_add"><a href="teacher_add.php">Teacher Add</a></div></td>
      </tr>
      <tr>
        <td><div align="center"><b>ID</b></div></td>
        <td><div align="center"><b>Name</b></div></td>
        <td><div align="center"><b>E-mail</b></div></td>
        <td><div align="center"><b>Mobile</b></div></td>
        <td><div align="center"><b>Action</b></div></td>
      </tr>
      <?php
      while($data=mysql_fetch_assoc($rs))
      {
      ?>
      <tr>
        <td><div align="center"><?php echo $data['em_id'];?></div></td>
        <td><div align="center"><a href="profiler_teacher.php?em_id=<?php echo $data['em_id']; ?>"><?php echo $data['em_fname'];?></a></div></td>
        <td><div align="center"><?php echo $data['em_mail'];?></div></td>
        <td><div align="center"><?php echo $data['em_mobile'];?></div></td>
        <td><div align="center"><a href="teacher_add.php?em_id=<?php echo $data['em_id']; ?>"> <img src="images/edit.gif" height="32" width="32" alt=""> Edit</a> | <a href="javascript:teacher_delete(<?php echo $data['em_id']; ?>)"> <img src="images/delete.gif" height="32" width="32" alt=""> Delete</a></a></div></td>
      </tr>
      <?php } ?>
    
    </table>
<input type="hidden" name="act1"/>
<input type="hidden" name="em_id"/>
</form>

<?php include_once('inc/footer.php'); ?>