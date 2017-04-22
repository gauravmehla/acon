

<?php include_once('inc/header.php');
	$sql="SELECT * FROM member ORDER BY mem_id";
	$rs = mysql_query($sql) or die(mysql_error());
 ?>
 
 <?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
 <form action="noticer_manage.php" method="post">
   <div align="center">
     <table width="30%">
       <tr>
         <th colspan="2" scope="col"><div align="center">NOTICER</div></th>
       </tr>
       <tr>
         <th scope="row"><div align="center" >Enter Your Message</div></th>
         <td><div align="center">
           <textarea name="msg_desc" id="msg_desc" class="msg_class" cols="45" rows="5"></textarea>
         </div></td>
       </tr>
       <tr>
         <th scope="row"><div align="center">Class</div></th>
         <td>
           <div align="left">
             <select name="msg_class" id="msg_class">
               <?php echo get_option_list("course","course_id","course_name",$data[st_course]); ?>
             </select>
           </div></td>
       </tr>
       <tr>
         <th scope="row">Type</th>
         <th scope="row"><div align="left">
           <select name="msg_no">
             <option value="mes">Message</option>
             <option value="not">Notice</option>
             <option value="war">Warning</option>
           </select>
         </div></th>
       </tr>
       <tr>
         <th colspan="2" scope="row">
           
           <div align="right">
             <input type="submit" name="submit" class="button_css" value="Submit" />
             <input type="reset" name="reset" class="button_css" value="Reset" />
           </div>
         <div align="center"></div></th>
       </tr>
     </table>
   </div>
</form>
<?php include_once('inc/footer.php'); ?>
