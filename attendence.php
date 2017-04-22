<?php include('inc/header.php'); ?>
<?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
	<form action="attendence_manage.php" method="post">
    <div align="center">
     
      <table width="20%" >
        
        <tr>
          <th colspan="2" scope="col"><h1>Attendence System</h1></th>
        </tr>
        <tr>
          <th colspan="2" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th scope="col">Select Class</th>
          <th scope="col"><select name="msg_class" id="msg_class">
            <?php echo get_option_list("course","course_id","course_name",$data[st_course]); ?>
          </select></th>
        </tr>
        <tr>
          <th colspan="2" scope="col">&nbsp;</th>
        </tr>
        <tr>
          <th colspan="2" scope="col">
            
            <div align="right">
              <input type="submit" name="button" class="button_css" value="Submit" />  
              <input type="reset" name="button2" class="button_css" value="Reset" />
              </div>
          <div align="center"></div></th>
      </tr>
      </table>
</div>

</form>
    <?php include('inc/footer.php'); ?>