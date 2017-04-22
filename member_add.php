
<?php include_once('inc/header.php'); 
    if($_REQUEST[mem_id])
    {
      $sql="SELECT * FROM member WHERE mem_id= '$_REQUEST[mem_id]'";
      $rs = mysql_query($sql) or die (mysql_error());
      $data=mysql_fetch_assoc($rs);
    }

?>
<form id="form1" name="member_add" method="post" action="member.php">
  <div align="center">
    <table width="22%" height="176" class="table_css">
      <tr>
        <td colspan="2" ><div align="center">Add Member</div></td>
      </tr>
      <tr>
        <td ><div align="left">Enter Rollno/ ID </div></td>
        <td >
          <div align="left">
            <input type="text" name="mem_id_1" id="mem_id_1" value="<?php echo $data[mem_id_1] ?>" />
          </div></td>
      </tr>
      <tr>
        <td >Username</td>
        <td><input type="text" name="mem_name" value="<?php echo $data[mem_name] ?>" /></td>
      </tr>
      <tr>
        <td >Password</td>
        <td><input type="password" name="mem_pass" value="<?php echo $data[mem_pass] ?>" /></td>
      </tr>
      <tr>
        <td >Type</td>
        <td>
              
          <div align="left">
                  <select name="mem_type" >
                    <option value="admin" <?php if($data[mem_type]=='admin'){echo "Selected";} ?> >Admin</option>
                    <option value="teacher" <?php if($data[mem_type]=='teacher'){echo "Selected";} ?>>Teacher</option>
                    <option value="student" <?php if($data[mem_type]=='student'){echo "Selected";} ?>>Student</option>
                  </select>
            </div></td>
      </tr>
      <tr>
        <td colspan="2" ><div align="center">
          <input type="submit" name="button" class="button_css" value="Submit" />
          <input type="reset" name="button2" class="button_css" value="Reset" />
        </div></td>
      </tr>
    </table>
  </div>
  <input type="hidden" name="act3" value="save_member">
  <input type="hidden" name="mem_id" value=" <?php echo $data['mem_id']; ?>"/>
</form>
<?php include('inc/footer.php'); ?>