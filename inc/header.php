<?php 
    session_start();
    

    if(isset($_SESSION['User'])){
?>
        <div class="header_menu"> <img src="images/admin.gif" height="15" width="15" alt="" style="top: 2;"> Welcome <?php echo $_SESSION['User']; ?></div>
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

<html>
	<head>
    	<title>CMS Content Management System </title>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/myfile.css">
        <link rel="stylesheet" href="css/home.css">
        <link rel="stylesheet" href="css/footer.css">
        <script src="js/validation.js" type="text/javascript" ></script>
        <script language="javascript" src="js/cal2.js"></script>
        <script language="javascript" src="js/jquery-ui.js"></script>
        <script language="javascript" src="js/jquery.js"></script>
        <script language="javascript" src="js/cal_conf2.js"></script>
        <script language="javascript" src="js/myfile.js"></script>
        <script src="js/jquery.js"></script>
        
    </head>
<body onLoad="goforit()">
    <div class="top_over">
        <h1>Advanced Content Oriented Notifier</h1>
        <table width="90%" align="center"  class="table_css top_header">
          <tr>
            <td><div aligm="center"><a href="home.php"><img src="images/home.png" height="48" width="48" alt=""> Home</a></div></td>
            <td><div aligm="center"><a href="notifications.php"><img src="images/notification.png" height="44" width="44" alt=""> Notification</a></div></td>
            <td><div align="center"><a href="student_view.php"> <img src="images/student.png" height="41" width="42" alt=""> Student</a></div></td>
            <td><div align="center"><a href="teacher_view.php"> <img src="images/teacher.png" height="40" width="36" alt=""> Staff</a></div></td>
            <td><div align="center"><a href="account.php"> <img src="images/customers.gif" height="32" width="32" alt=""> Account</a></div></td>
            <td><div align="center"><a href="attendence.php"> <img src="images/attendence.png" height="35" width="33" alt=""> Attendence</a></div></td>
            <td><div align="center"> <a href="test_score.php"> <img src="images/score.png" height="38" width="33" alt=""> Scores</a></div></td>
            <td><div align="center"> <a href="library.php"> <img src="images/library.png" height="42" width="45" alt="">Library</a> </div></td>
            <td><div align="center"><a href="logout.php"> <img src="images/logout.png" height="32" width="32" alt=""> Logout</div></td>
          </tr>
        </table>
</div>
    <br />
<br />
<?php include('demo.php'); ?>
