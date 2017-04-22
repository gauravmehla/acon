<?php include('inc/header.php'); ?>

<?php
	if(!empty($_REQUEST['act'])){
		$text=$_REQUEST['todo'];
		$rs=mysql_query("UPDATE `todo` SET `todo_text`='$text'") or die(mysql_error());	
	}
	$rs1=mysql_query("SELECT * FROM todo") or die(mysql_error());	
	$data=mysql_fetch_array($rs1);
?>
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
		?>

<div class="css_div">
	<img src="images/alert.png" height="22" width="22" alt="">
		<?php echo $data_1['not_by']." Replied A Message Sent By You.";?>
		<a href="replier.php?msg_id=<?php echo $data_1['msg_id']; ?>&notstatus=0&notid=<?php echo $data_1['not_id']; ?>">Click Here. </a>
 </div>
		<?php
		
		}
	}
	}
	
?>
<div class="super_main">

	<div class="fst_block">
		<table><tr><td>
		<div class="show_clock">
			<table>
				<tr>
					<h1>Today</h1>
				</tr>
				<tr>
					<p>
						<span id="clock"></span>
					</p>
				</tr>
			</table>
		</div>
		</td></tr>
		<tr><td>

		<div class="status">
			<table border="1">
				<tr><td>
						<h1>Status</h1>
					</td>
				</tr>
				<tr><td>
					<div id="status_box">
						<?php 
							$a=0;
							$b=0;
							$rs=mysql_query("SELECT * FROM student") or die (mysql_error());
							while($data1=mysql_fetch_array($rs)){$a++;}
							$rs2=mysql_query("SELECT * FROM teacher") or die (mysql_error());
							while($data2=mysql_fetch_array($rs2)){$b++;}

							$directory="library/ebooks/";
							$directory1="library/videos/";
							$c=0;
							$d=0;
							foreach (glob($directory . "*") as $filename) 
							{
								$c++;
							}
							foreach (glob($directory1 . "*") as $filename) 
							{
								$d++;
							}
						?>
						<p><img src="images/bullet_green.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>No. Of Students : <?php echo $a;?></p>
						<p><img src="images/bullet_green.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>No. Of Faculty : <?php echo $b;?></p>
						<center><br><h3><img src="images/bullet_yellow.png" height="32" width="32" alt="">Library</h3><br></center>
						<p><img src="images/bullet_green.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>No. Of E-Books : <?php echo $c;?></p>
						<p><img src="images/bullet_green.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>No. Of Videos : <?php echo $d;?></p>

						<center><br><h3><img src="images/bullet_red.png" height="32" width="32" alt="">Last Login</h3><br></center>
						<p><img src="images/bullet_green.png" height="32" width="32" alt=""><?php
								
								$log="SELECT * FROM logger WHERE log_name='$_SESSION[User]' ORDER BY log_id DESC LIMIT 1,1";
								$log_exec=mysql_query($log) or die(mysql_error());
								while ($log_data=mysql_fetch_array($log_exec)) {
									echo $log_data['log_date']." at ".$log_data['log_time'];
								}
							?></p>
					</div>
					</td>
				</tr>
			</table>
		</div>

		</td></tr>
	</table>
	</div>

<div class="sec_block">
	<table><tr><td>
	<div class="section">
		<h2>SECTION</h2>
		<p>
			<table width="100%">
				<tr>
					<td align="center"><a href="student_view.php"><img src="images/student-icon.png" height="128" width="128" alt=""></a></td>
					<td align="center"><a href="teacher_view.php"><img src="images/Teacher-icon.png" height="128" width="128" alt=""></a></td>
					<td align="center"><a href="account.php"><img src="images/Admin-icon.png" height="128" width="128" alt=""></a></td>
				</tr>
				<tr>
					<td align="center" class="tag"><a href="student_view.php"><h3>STUDENT</h3></a></td>
					<td align="center" class="tag"><a href="teacher_view.php"><h3>TEACHER</h3></a></td>
					<td align="center" class="tag"><a href="account.php"><h3>MEMBER</h3></a></td>
				</tr>
			</table>
		</p>
	</div>
</td></tr>
<tr><td>
	<div class="section">
		<h2>Featured Applications</h2>
		<p>
			<table width="100%">
				<tr>
					<td align="center"><a href="attendence.php"><img src="images/folder_library.png" height="128" width="128" alt=""></a></td>
					<td align="center"><a href="test_score.php"><img src="images/test_score.png" height="150" width="150" alt=""></a></td>
					<td align="center"><a href="library.php"><img src="images/main_library.png" height="128" width="128" alt=""></a></td>
				</tr>
				<tr>
					<td align="center" class="tag"><a href="attendence.php"><h3>ATTENDENCE</h3></a></td>
					<td align="center" class="tag"><a href="test_score.php"><h3>TEST SCORE</h3></a></td>
					<td align="center" class="tag"><a href="library.php"><h3>LIBRARY</h3></a></td>
				</tr>
			</table>
		</p>
	</div>
</td></tr>
	</table>
</div>
	<div class="todo">
		<table>
			<tr>
				<td><h1>To Do</h1></td></tr>
			<tr><td>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="todo_form">
					
						<textarea name="abc" id="target" cols="20" rows="5" class="todobox" style="font-family:comic sans ms;font-size:2em;padding:4px;" style="color:#003399"><?php echo $data['todo_text'];?></textarea>
						<input type="hidden" name="todo" value="" id="todo">
						<input type="hidden" name="act" id="act">
				</form>
			</td></tr>
		</table>
	</div>
	
	<div class="notifier">
		
		<table>
			<tr>
				<td><h1><?php for($x=0;$x<7;$x++){echo "&nbsp";}?>Notifications<?php for($x=0;$x<7;$x++){echo "&nbsp";}?></h1></td></tr>
			<tr><td>
				<div id="notification">
					<?php
						$directory2= "library/temp/ebook/";
						$e=0;
						foreach (glob($directory2 . "*") as $filename) 
							{
								$e++;
							}
						$directory3= "library/temp/videos/";
						$f=0;
						foreach (glob($directory3 . "*") as $filename) 
							{
								$f++;
							}
					?>
					<center>
					<p><img src="images/bullet_red.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>E-Book Request's : <?php echo $e;?></p>
					<p><img src="images/bullet_red.png" height="32" width="32" alt=""><b style="color:rgb(42, 236, 65);">T </b>Video Request's : <?php echo $f;?></p>
					<p><input type="button" class="button_css extra_margin" value="View" id="view_lib"/></p></center>
					
				</div>
			</td></tr>
		</table>
		
	</div>

<div class="footer">
	<div style="width:100%;" id="notifier">
		<center><h2>All Notifications</h2></center>
		<table class="table_css" >
		                    <tr>
		                        <td>Sr. No.</td>
		                        <td>File Name</td>
		                        <td>File Size</td>
		                        <td>File Type</td>
		                        <td>Action</td>
		                    </tr>
		                       <?php
		                       
		                       $g=1;
		                        foreach (glob($directory2 . "*") as $filename) 
		                            {
		                                ?>

		                                    
		                                    <tr><td><center><?php echo $g.")";?></center></td><td><center><h3><?php echo basename($filename);?></center></h3></td><td><?php echo formatbytes($filename,"MB");?></td><td>E-book</td><td><center><a href="temp_upload.php?file_name=<?php echo $filename;?>&file_type=ebook" class="button_css a_button">Upload</a></center></td></tr>
									
		                         <?php
		                                $g++;
		                            }

		                            foreach (glob($directory3 . "*") as $filename) 
		                            {
		                            	?>
			                            <tr><td><center><?php echo $g.")";?></center></td><td><center><h3><?php echo basename($filename);?></center></h3></td><td><?php echo formatbytes($filename,"MB");?></td><td>Video</td><td><center><a href="temp_upload.php?file_name=<?php echo $filename; ?>&file_type=video" class="button_css a_button">Upload</a></center></td></tr>
								<?php
										$g++;
		                            }
		                        ?>

		                        
		                        	<?php
		                        		if($g==1){
		                        			
		                        			echo "<tr><td colspan=\"5\">No Data Found.</td></tr>";
		                        		}
		                        	?>

            			</table>

					</div>
<span>2014 &#169; Contant Management System &#174;</span>
</div>

</div>

<script>
	var dayarray=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday")
	var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")

	function getthedate(){
		var mydate=new Date()
		var year=mydate.getYear()

		if (year < 1000)
			year+=1900
		
		var day=mydate.getDay()
		var month=mydate.getMonth()
		var daym=mydate.getDate()
		
		if (daym<10)
			daym="0"+daym
		
		var hours=mydate.getHours()
		var minutes=mydate.getMinutes()
		var seconds=mydate.getSeconds()
		var dn="AM"
		
		if (hours>=12)
			dn="PM"
		
		if (hours>12){
			hours=hours-12
		}
		
		if (hours==0)
			hours=12
		
		if (minutes<=9)
			minutes="0"+minutes
		
		if (seconds<=9)
			seconds="0"+seconds
		
		var cdate="<small><font><b>"+dayarray[day]+", "+montharray[month]+" "+daym+", "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
		+"</b></font></small>"
		
		if (document.all)
			document.all.clock.innerHTML=cdate
		else if (document.getElementById)
			document.getElementById("clock").innerHTML=cdate
		else
			document.write(cdate)
	}
	if (!document.all&&!document.getElementById)
	getthedate()
	function goforit(){
		if (document.all||document.getElementById)
		setInterval("getthedate()",1000)
	}

	
			$( "#target" ).focusout(function() {
  				var todo_text = $( "#target" ).val();
  					$('#todo').attr("value",todo_text);
					$('#act').attr("value","1");
			  	    $('#todo_form').submit();	
			});
		
			$('#view_lib').click(function(){
       		 $('#notifier').slideToggle( "slow" );
   			 });
			$('#view_lib').ready(function(){
       		 $('#notifier').hide();
   			 });


			$('#reset').click(function(){
				$('#search_textfield').val('');
				showHint_1("");
				$( "#search_textfield" ).focus();
			});

</script>


<script type="text/javascript" src="js/myfile_1.js"></script>