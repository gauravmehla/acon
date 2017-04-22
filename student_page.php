<?php include_once('inc/header1.php');
  
?>

<?php 
  $stud_id=$_REQUEST['st_id'];
  $sql="SELECT * FROM student WHERE st_id = '$_REQUEST[st_id]'";
  $rs = mysql_query($sql) or die(mysql_error());
  while($data=mysql_fetch_assoc($rs))
  {

 ?>
 <div class="log_hover">
 <div class="logger">
   <img src="images/bullet_green.png" height="32" width="32">
   <b><span>Last Login : </span><?php
                  
                  $log="SELECT * FROM logger WHERE log_name='$_SESSION[User]' ORDER BY log_id DESC LIMIT 1,1";
                  $log_exec=mysql_query($log) or die(mysql_error());
                  while ($log_data=mysql_fetch_array($log_exec)) {
                    echo $log_data['log_date']." at ".$log_data['log_time'];
                  }
  ?><b>
</div>
</div>
<?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>

<?php

  $sql_1="SELECT * FROM notifier WHERE not_status=1";
  $rs_1=mysql_query($sql_1) or die(mysql_error());
  while($data_1=mysql_fetch_array($rs_1)){
  if (!empty($data_1)) {
    if($data_1['not_by']!=$_SESSION['User']){
      if ($data_1['not_to']==$_REQUEST['st_id']) {
    ?>

<div class="css_div">
  <img src="images/alert.png" height="22" width="22" alt="">
    <?php echo $data_1['not_by']." Replied A Message Sent By You.";?>
    <a href="replier_student.php?msg_id=<?php echo $data_1['msg_id']; ?>&notstatus=0&notid=<?php echo $data_1['not_id']; ?>&st_id=<?php echo $_REQUEST['st_id'];?>">Click Here. </a>
 </div>
    <?php
    }
    }
  }
  }
  
?>
<center>
    <fieldset>
        <legend><font></legend>
        <h1>DASHBOARD</h1>
      <div class="profile_css">
          <div>
            <img src="upload/<?php if(FILE_EXISTS("upload/$data[st_photo]")){echo $data['st_photo'];} else{ echo "default.png";} ?>" height="176" width="156">
          </div>
          <div class="about_css">

            Roll No : <?php echo $data['st_rollno'];?><br>
            Name : <?php echo $data['st_name'];?><br>
            Father name : <?php echo $data['st__father'];?><br>
            E-mail ID : <?php echo $data['st_mail'];?><br>
            Address : <?php echo $data['st_add1'];?><br>
            Gender : <?php echo $data['st_gender'];?><br>
            Mobile No. : <?php echo $data['st_mobile'];?><br>
          </div>
      </div>

    </fieldset>
  <div class="att_fixed">
  <div class="attendence" id="att_div_1"> Show Attendence</div>
<div class="attendence" id="att_div_2">
  <table>
    <tr>
      <td>Your Attendence is == </td>
      <td><?php
            $pre=0;
            $total=0;
            $sql2="SELECT * FROM attendence WHERE att_class='$data[st_course]'";
            $rs2=mysql_query($sql2) or die (mysql_error());
            while($data2=mysql_fetch_array($rs2))
            {
              $present = explode(",", $data2['att_present']);
                foreach ($present as $key) { 
                  if($key==$data['st_id'])
                  { 
                    $pre++;
                  }
                  }
                $total++; 
            }/*
            echo $pre."<br>";
            echo $total;*/
            
            $percentage = 100/$total*$pre;
            echo $percentage." % ";
            ?>
            <?php
              if($percentage < 75)
              {
                $final = 75-$percentage;
                echo "!! Your Attendence is <font color='red' style='font-size:18px;'>SHORT</font> (".$final.") !!";
              }
            ?>
    </td>
    </tr>
  </table>
</div>
</div>
  

 <?php } ?>

 

 <!--!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

<div class="score_1" id="score_1"> Show Score Card</div>
<div class="score_2" id="score_2">
<table width="90%" height="50"  align="center" class="table_css">
  <tr>
        <td  class="top_header red_add"> Score Card</td>
      </tr>
</table>
<?php 
  $rs2=mysql_query("SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id] ORDER BY st_sem ASC") or die(mysql_error());
  while($data2=mysql_fetch_array($rs2)){  
?>
<table width="90%" height="50"  align="center" class="table_css">
  <tr>
    <td><h2>SEM<?php echo $data2['st_sem'];?></h2></td>
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
<?php } ?>
</div>
<div id="ovth" class="score_1"> Techers Online Now</div>
<div id="ovt" >
<table style="width: 100%;background: #0057AF;"><tr><td>
  <div class="online_viewer" >
    <h3 >Online Status</h3>
    <table class="table_css" >
      <tr>
        <td>Status</td>
        <td>Id</td>
        <td>Name</td>
        <td>Mobile</td>
        <td>Action</td>
      </tr>
      <?php
        $teach=mysql_query("SELECT * FROM teacher") or die(mysql_error());
        while ($teach_1=mysql_fetch_array($teach)) {
          $onl=mysql_query("SELECT * FROM online_status WHERE os_em_id=$teach_1[em_id]") or die(mysql_error());
          $onl_1=mysql_fetch_array($onl);
          if($onl_1['os_status']==1)
            {
              $echo1= "<img src='images/bullet_green.png'><br>Online";
            } else {
              $echo1= "<img src='images/bullet_red.png'><br>Offline";
            }
          echo "<tr><td>".$echo1."</td><td>$teach_1[em_id]</td><td>$teach_1[em_fname]</td><td>$teach_1[em_mobile]</td><td><a href='teacher_viewpage.php?em_id=$teach_1[em_id]&st_id=$_REQUEST[st_id]'>View</a></td></tr> ";
        }
      ?>
    </table>
  </div>

</td></tr>
</table>
</div>

 <form action="message.php" method="post" name="message_wall_1">
  <div>
    <img src="images/bullet_red.png" height="32" width="32" alt=""> Warning Message | <img src="images/bullet_yellow.png" height="32" width="32" alt=""> Official Notice |<img src="images/bullet_white.png" height="32" width="32" alt=""> Message
  </div>
<?php
  $sql="SELECT * FROM message WHERE msg_st_id = '$_REQUEST[st_id]' ORDER BY date ASC , time DESC";
  $rs = mysql_query($sql) or die(mysql_error());
  while($data=mysql_fetch_assoc($rs))
  {

 ?>

        <div class="<?php if($data['msg_no']=='mes'){echo "msg_class";} elseif($data['msg_no']=='not'){echo "msg_class_1";} elseif($data['msg_no']=='war'){echo "msg_class_2";} ?>">
          <?php echo $data['msg_desc'];?>
          

          <div class="d_t">
            Sent On <?php echo $data['date'];?> At <?php echo $data['time'];?>
            <div class="msg_e_d">
              
  <a href="javascript:message_delete_1(<?php echo $data['msg_id']; ?>,<?php echo $data['msg_st_id']; ?>)"> Delete </a> ||
      <a href="replier_student.php?msg_id=<?php echo $data['msg_id']; ?>&st_id=<?php echo $stud_id; ?>">Reply</a>                    
              
          </div>
          </div>
        </div>
        
 <?php } ?>
  <input type="hidden" name="msg_id">
  <input type="hidden" name="act3">
  <input type="hidden" name="msg_st_id">
 </form>


<script type="text/javascript">
 
 $('#att_div_2').ready(function(){
    $('#att_div_1').slideDown();
    $('#att_div_2').hide();
    $('#ovt').hide();
  });

  $('#att_div_1').click(function(){
    $('#att_div_2').slideDown();
    $('#att_div_1').hide();
  });

  $('#att_div_2').click(function(){
    $('#att_div_1').slideDown();
    $('#att_div_2').hide();
  });
 
 $('#score_2').ready(function(){
    $('#score_1').slideDown();
    $('#score_2').hide();
  });

  $('#score_1').click(function(){
    $('#score_2').slideDown();
    $('#score_1').hide();
  });

  $('#score_2').click(function(){
    $('#score_1').slideDown();
    $('#score_2').hide();
  });

  $('#ovth').click(function(){
    $('#ovt').slideDown();
    $('#ovth').hide();
  });
  $('#ovt').click(function(){
    $('#ovth').slideDown();
    $('#ovt').hide();
  });
 
 </script>
<?php 
include('inc/footer.php'); 
?>





