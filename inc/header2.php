<?php 
    session_start();
    

    if(isset($_SESSION['User'])){
?>
        <div class="header_menu">Welcome <?php echo $_SESSION['User']; ?></div>
<?php
    }
    else{
        $msg="Please login To Continue.";
        header("Location:index.php?msg=$msg");
    }

?>
<?php include_once('db_connect.php'); ?>
<?php include_once('function.php'); 
		ini_set("display_errors",0);
?>
<?php 
  $sql="SELECT * FROM teacher WHERE em_id = '$_REQUEST[em_id]'";
  $rs = mysql_query($sql) or die(mysql_error());
  while($data=mysql_fetch_assoc($rs))
  {

 ?>

<html>
	<head>
    	<title> PhP Project </title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/myfile.css">
        <link rel="stylesheet" href="css/footer.css">
        <link rel="stylesheet" href="css/home.css">
        <script src="js/validation.js" type="text/javascript" ></script>
        <script language="javascript" src="js/cal2.js"></script>
        <script language="javascript" src="js/cal_conf2.js"></script>
        <script language="javascript" src="js/myfile.js"></script>
        <script src="js/jquery.js"></script>
        
    </head>
<body>
    <div class="top_over">
        <h1>Advanced Content Oriented Notifier</h1>
        <table width="90%" align="center"  class="table_css top_header">
          <tr>
            <td><div align="center"><a href="teacher_page.php?em_id=<?php echo $data['em_id'] ?>"><img src="images/home.png" height="48" width="48" alt="">Home</a></div></td>
            <td><div align="center"><a href="st_message.php?st_id=<?php echo $data['st_id'] ?>"><img src="images/message.png" height="48" width="48" alt="">Messages</a></div></td>
            <td><div aligm="center"><a href="notifications_teacher.php?em_id=<?php echo $data['em_id'] ?>"><img src="images/notification.png" height="44" width="44" alt=""> Notification</a></div></td>
            <td><div align="center"> <a href="library_teacher.php?em_id=<?php echo $data['em_id'] ?>"> <img src="images/library.png" height="42" width="45" alt="">Library</a> </div></td>
            <td><div align="center"><a href="logout.php?em_id=<?php echo $data['em_id'] ?>"><img src="images/logout.png" height="50" width="55" alt="">Logout</div></td>
          </tr>
        </table>
    </div>
    <br />
    <br />
<?php } ?>
