

<?php include_once('inc/header.php');
	$sql="SELECT * FROM member ORDER BY mem_id";
	$rs = mysql_query($sql) or die(mysql_error());
 ?>
 
 <?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
 <form name="member_view" action="member.php" method="post"> 
    <table width="90%" height="50"  align="center" class="table_css">
      <tr>
        <td colspan="5" class="top_header red_add"><div align="right"><a href="member_add.php">Add Member</a></div></td>
      </tr>
      <tr class="table_top">
        <td><div align="center"><b>ID</b></div></td>
        <td><div align="center"><b>Name</b></div></td>
        <td><div align="center"><b>Type</b></div></td>
        <td><div align="center"><b>Action</b></div></td>
      </tr>
      <?php
      while($data=mysql_fetch_assoc($rs))
      {
      ?>
      <tr>
        <td><div align="center"><?php echo $data['mem_id'];?></div></td>
        <td><div align="center"><?php echo $data['mem_name'];?></div></td>
        <td><div align="center"><?php echo $data['mem_type'];?></div></td>
        <td><div align="center"><a href="member_add.php?mem_id=<?php echo $data['mem_id']; ?>"> <img src="images/edit.gif" height="32" width="32" alt=""> Edit</a> | <a href="javascript:member_delete(<?php echo $data['mem_id']; ?>)"> <img src="images/delete.gif" height="32" width="32" alt=""> Delete</a></a></div></td>
      </tr>
      <?php } ?>
    
    </table>
<input type="hidden" name="act3"/>
<input type="hidden" name="mem_id"/>
</form>

<?php include_once('inc/footer.php'); ?>
