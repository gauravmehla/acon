<?php include('inc/header.php'); ?>
  <?php
    if($_REQUEST['act']=='edit_score'){
      $sql1="SELECT * FROM st_score WHERE st_id=$_REQUEST[st_id]";
      $rs1=mysql_query($sql1);
      $data1=mysql_fetch_array($rs1);
    }
  ?>
	<form action="save_score.php" method="post" >
		<table width="90%" height="50"  align="center" class="table_css">
			<tr>
				<!-- main Row-->
				<td colspan="8">Student Test Scorer</td>
			</tr>


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
			  <td width="13%"><div align="center"> Student Name:</div></td>
			  <td width="14%"><div align="center">
			    <select name="st_name">
			      <?php
		                        $rs=mysql_query("SELECT * FROM student WHERE st_id = $_REQUEST[st_id]") or die(mysql_error());
		                        while($data=mysql_fetch_array($rs)){
		                            echo "<option value=".$data['st_rollno'].">".$data['st_name']."</option>";
		                        }
		           ?>
		        </select>
		      </div></td>
		  </tr>
          <?php 
		                        $rs=mysql_query("SELECT * FROM student") or die(mysql_error());
		                        $data=mysql_fetch_array($rs); 
		   ?>
       
			<tr> 
			  <td colspan="2"><div align="center">1st Sessional</div></td>
			  <td><div align="center">
			    <input type="text" name="txt11" id="txt11" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt12" id="txt12" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt13" id="txt13" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt14" id="txt14" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt15" id="txt15" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt16" id="txt16" placeholder=""/>
			  </div></td>
		  </tr>
			<tr>
			  <td colspan="2"><div align="center">2nd Sessional</div></td>
			  <td><div align="center">
			    <input type="text" name="txt21" id="txt21" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt22" id="txt22" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt23" id="txt23" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt24" id="txt24" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt25" id="txt25" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt26" id="txt26" placeholder=""/>
			  </div></td>
		  </tr>
			<tr>
			  <td colspan="2"><div align="center">3rd Sessional</div></td>
			  <td><div align="center">
			    <input type="text" name="txt31" id="txt31" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt32" id="txt32" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt33" id="txt33" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt34" id="txt34" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt35" id="txt35" placeholder=""/>
			  </div></td>
			  <td><div align="center">
			    <input type="text" name="txt36" id="txt36" placeholder=""/>
			  </div></td>
		  </tr>
          <tr>
          	<td colspan="3"><div align="center"></div></td>
          	<td><div align="center">
              
          	  <input type="submit" name="button" id="button" value="Submit" class="button_css" />
          	</div></td>
          	<td><div align="center">
          	  <input type="reset" name="button2" id="button2" value="Reset" class="button_css" />
          	</div></td>
            <td colspan="3">&nbsp;</td>
          </tr>
		</table>
      <p>&nbsp;</p>

<input type="hidden" name="st_id" value="<?php echo $_REQUEST['st_id'];?>"/>
</form>
<script>
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

   $('#st_sem').change(function(){
   		var st_sem = $(this).val();
   		var cse = $('#st_stream').val();
   		if(cse=='cse')
   		{
   		if(st_sem=='1'){
   			$('#txt11').attr("placeholder","Math");
   			$('#txt12').attr("placeholder","Physics");
   			$('#txt13').attr("placeholder","BioTechnology");
   			$('#txt14').attr("placeholder","E.E.E");
   			$('#txt15').attr("placeholder","Manufacturing Processes");
   			$('#txt16').attr("placeholder","F.C.P");
   			$('#txt21').attr("placeholder","Math");
   			$('#txt22').attr("placeholder","Physics");
   			$('#txt23').attr("placeholder","BioTechnology");
   			$('#txt24').attr("placeholder","E.E.E");
   			$('#txt25').attr("placeholder","Manufacturing Processes");
   			$('#txt26').attr("placeholder","F.C.P");
   			$('#txt31').attr("placeholder","Math");
   			$('#txt32').attr("placeholder","Physics");
   			$('#txt33').attr("placeholder","BioTechnology");
   			$('#txt34').attr("placeholder","E.E.E");
   			$('#txt35').attr("placeholder","Manufacturing Processes");
   			$('#txt36').attr("placeholder","F.C.P");
   		}
   		else if(st_sem=='2'){
   			$('#txt11').attr("placeholder","Math");
   			$('#txt12').attr("placeholder","Physics");
   			$('#txt13').attr("placeholder","English");
   			$('#txt14').attr("placeholder","Electrical Technology");
   			$('#txt15').attr("placeholder","Chemistry");
   			$('#txt16').attr("placeholder","Engineering Drawing");
   			$('#txt21').attr("placeholder","Math");
   			$('#txt22').attr("placeholder","Physics");
   			$('#txt23').attr("placeholder","English");
   			$('#txt24').attr("placeholder","Electrical Technology");
   			$('#txt25').attr("placeholder","Chemistry");
   			$('#txt26').attr("placeholder","Engineering Drawing");
   			$('#txt31').attr("placeholder","Math");
   			$('#txt32').attr("placeholder","Physics");
   			$('#txt33').attr("placeholder","English");
   			$('#txt34').attr("placeholder","Electrical Technology");
   			$('#txt35').attr("placeholder","Chemistry");
   			$('#txt36').attr("placeholder","Engineering Drawing");
   		}
   		else if(st_sem=='3'){
        $('#txt11').attr("placeholder","Math");
        $('#txt12').attr("placeholder","Data Structure");
        $('#txt14').attr("placeholder","Analog Communication");
        $('#txt16').attr("placeholder","D.B.M.S");
        $('#txt13').attr("placeholder","Discrete Mathematics");
        $('#txt15').attr("placeholder","Internet Fundamentals");
        
        
        $('#txt21').attr("placeholder","Math");
        $('#txt22').attr("placeholder","Data Structure");
        $('#txt24').attr("placeholder","Analog Communication");
        $('#txt26').attr("placeholder","D.B.M.S");
        $('#txt23').attr("placeholder","Discrete Mathematics");
        $('#txt25').attr("placeholder","Internet Fundamentals");
        
        
        $('#txt31').attr("placeholder","Math");
        $('#txt32').attr("placeholder","Data Structure");
        $('#txt34').attr("placeholder","Analog Communication");
        $('#txt36').attr("placeholder","D.B.M.S");
        $('#txt33').attr("placeholder","Discrete Mathematics");
        $('#txt35').attr("placeholder","Internet Fundamentals");


   		}
   		else if(st_sem=='4'){
        $('#txt13').attr("placeholder","OOP");
        $('#txt12').attr("placeholder","Digital Electronics");
        $('#txt16').attr("placeholder","MicroProcessor");
   			$('#txt11').attr("placeholder","Programming Language");
   			$('#txt15').attr("placeholder","COA");
   			$('#txt14').attr("placeholder","BEM");
   			
   			
        $('#txt23').attr("placeholder","OOP");
        $('#txt22').attr("placeholder","Digital Electronics");
        $('#txt26').attr("placeholder","MicroProcessor");
   			$('#txt21').attr("placeholder","Programming Language");
   			$('#txt25').attr("placeholder","COA");
   			$('#txt24').attr("placeholder","BEM");
   			
   			
        $('#txt33').attr("placeholder","OOP");
        $('#txt32').attr("placeholder","Digital Electronics");
        $('#txt36').attr("placeholder","MicroProcessor");
   			$('#txt31').attr("placeholder","Programming Language");
   			$('#txt35').attr("placeholder","COA");
   			$('#txt34').attr("placeholder","BEM");
   			
   			
   		}
   	}
   });
</script>

<?php include('inc/footer.php'); ?>