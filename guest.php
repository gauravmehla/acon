<?php include('inc/guest_header.php'); ?>
<?php
if(!empty($_REQUEST['msg'])){
  echo "<div id=\"message1\" align=\"center\" class=\"message_box\"><span><h1>".$_REQUEST[msg]."</h1><img src=\"images/button_cancel.png\" height=\"22\" width=\"22\" alt=\"\" class=\"msg_cancel\" id=\"msg_cancel\"></span></div>";
}
?>
<table class="table_css table_color">
    <tr>
        <td id="opt1" style=""><a href="#">Previous Year's Question Papers</a></td>
        <td id="opt2" style=""><a href="#">E-Books</a></td>
        <td id="opt3" style=""><a href="#">Video Tutorials</a></td>
    </tr>
</table>
    <div id="opt_main">
        <div id="opt_fst">
            <div align="center"><h1 style="margin:20px;">Question Paper Downloader</h1></div>
        <form method="post" action="download.php">
          <table width="100%" align="center">

            <tr>
                <td width="8%"><div align="center">Select Class: </div></td><td width="13%">
            <div align="center">
                          <select name="st_class" id="st_class">
                            <option value="">-- Please Select --</option>
                            <?php 
                            
                                $rs=mysql_query("SELECT * FROM course") or die(mysql_error());
                                while($data=mysql_fetch_array($rs)){
                                if($data['course_id']==$data1['st_class']){$cs='selected';}else{$cs='';}
                                    echo "<option value=\"".$data['course_id']."\" ".$cs.">".$data['course_name']."</option>";
                            }
                            ?>
                          </select>
                      </div></td>
  <td width="13%"><div align="center">Select Stream</div></td><td width="13%">
<div align="center">
                      <select name="st_stream" id="st_stream">
                        <option value="">-- Please Select --</option>
                      </select>
                </div></td>
  <td width="13%"><div align="center">Select Semester</div></td><td width="13%">
<div align="center">
                      <select name="st_sem" id="st_sem">
                        <option value="0">-- Please Select --</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                        <option value="5">V</option>
                        <option value="6">VI</option>
                        <option value="7">VII</option>
                        <option value="8">VIII</option>
                      </select>
                </div></td>
              
          
                <th scope="col"><input type="submit" name="button" id="button" value="Download" class="button_css"/></th>
              </tr>
            </table>
            </form>
        </div>
      <div id="opt_sec">
        <div class="red_side1" id="upload_file1"></div>
            <div class="red_side_1" id="upload_file_11">
                <form action="guest_upload.php?em_id=<?php echo $_REQUEST['em_id']?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="upload" id="upload">
                    <input type="submit" class="button_css">
                    <input type="hidden" value="upload_temp_book" name="act">
                </form>
            </div>
            <div class="book_store">
                <center><h3 id="red_line">* Right Click and Save link As to <b>Download</b></h3></center>
                <table class="table_css" style="width:98%;margin-left:1%;">
                    <tr>
                        <td>Sr. No.</td>
                        <td>File Name</td>
                        <td>File Size</td>
                        <td>Action</td>
                    </tr>
                       <?php
                       $directory="library/ebooks/";
                       $a=1;
                        foreach (glob($directory . "*") as $filename) 
                            {
                                ?>

                                    
                                    <tr><td><center><?php echo $a.")";?></center></td><td><center><h3><?php echo basename($filename);?></center></h3></td><td><?php echo formatbytes($filename,"MB");?></td><td><center><a href="<?php echo $filename; ?>" class="button_css a_button">Download</a></center></td></tr>

                                <?php
                                $a++;
                            }
                        ?>
            </table>
             </div>
      </div>
        <div id="opt_thd">
            <div class="red_side" id="upload_file"></div>
            <div class="red_side_1" id="upload_file_1">
                <form action="guest_upload.php?em_id=<?php echo $_REQUEST['em_id']?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="upload" id="upload">
                    <input type="submit" class="button_css">
                    <input type="hidden" value="upload_temp_video" name="act">
                </form>
            </div>
            <div class="video_store">
                <center><h3 id="red_line">* Right Click and Save link As to <b>Download</b></h3></center>
                <table class="table_css" style="width:98%;margin-left:1%;">
                    <tr>
                        <td>Sr. No.</td>
                        <td>File Name</td>
                        <td>File Size</td>
                        <td>Action</td>
                    </tr>
                       <?php
                       $directory="library/videos/";
                       $a=1;
                        foreach (glob($directory . "*") as $filename) 
                            {
                                ?>

                                    
                                    <tr><td><center><?php echo $a.")";?></center></td><td><center><h3><?php echo basename($filename);?></center></h3></td><td><?php echo formatbytes($filename,"MB");?></td><td><center><a href="<?php echo $filename; ?>" class="button_css a_button">Download</a><center></td></tr>

                                <?php
                                $a++;
                            }
                        ?>
            </table>
             </div>
        </div>
    </div>




                                                <!--//  Jquery Code -->

<script>

    $('#opt1').click(function(){
        $('#opt_sec').hide();
        $('#opt_thd').hide();
        $('#opt_fst').show();
        $('#opt1').attr("style","background:rgb(192, 61, 61);");
        $('#opt2').attr("style","background:#0057af;");
        $('#opt3').attr("style","background:#0057af;");
    });
    $('#opt2').click(function(){
        $('#opt_fst').hide();
        $('#opt_thd').hide();
        $('#opt_sec').show();
        $('#opt1').attr("style","background:#0057af;");
        $('#opt3').attr("style","background:#0057af;");
        $('#opt2').attr("style","background:rgb(192, 61, 61);");
    });
    $('#opt3').click(function(){
        $('#opt_sec').hide();
        $('#opt_fst').hide();
        $('#opt_thd').show();
        $('#opt1').attr("style","background:#0057af;");
        $('#opt2').attr("style","background:#0057af;");
        $('#opt3').attr("style","background:rgb(192, 61, 61);"); 
    });

    $('#upload_file').click(function(){
        $('#upload_file_1').slideToggle( "slow" );
    });

    $('#upload_file1').click(function(){
        $('#upload_file_11').slideToggle( "slow" );
    });
    $('#opt_main').ready(function(){
        $('#opt_sec').hide();
        $('#opt_thd').hide();
        $('#opt_fst').show();
        $('#opt1').attr("style","background:rgb(192, 61, 61);"); 
        $('#upload_file_1').hide();
        $('#upload_file_11').hide();
    });

    
    $(document).ready(function(){
    
    var btech_stream = [
        {display: "Computer Science", value: "cse" }, 
        {display: "Mechanical", value: "me" }, 
        {display: "Electronics", value: "ece" },
        {display: "Information technology", value: "it" }];

    $("#st_class").change(function() {
            var parent = $(this).val(); 
            
            switch(parent){ 
                  case '4':
                    list(btech_stream);
                    break;
                default: 
                    $("#st_stream").html('');  
                    $("#st_stream").append("<option>-- Please Select--</option>");
                    break;
               }
    });

    
    function list(array_list)
    {
        $("#st_stream").html(""); 
        $(array_list).each(function (i) { 
            $("#st_stream").append("<option value=\""+array_list[i].value+"\">"+array_list[i].display+"</option>");
        });
    }

    });

</script>

<?php include('inc/footer.php'); ?>