<?php 
    session_start();
    
    $_SESSION['User'] = 'Guest';
?>
        <div class="header_menu"><img src="images/guest.png" height="22" width="28" alt="">Welcome <?php echo $_SESSION['User']; ?></div>
<?php include_once('db_connect.php'); ?>
<?php include_once('function.php'); 
		ini_set("display_errors",0);
?>

<html>
	<head>
    	<title>CMS [Guest Session]</title>
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
        <h1>Content Management System</h1>
        <table width="90%" align="center"  class="table_css top_header">
          <tr>
            <td><div align="center"><a href="logout.php"><img src="images/logout.png" height="50" width="55" alt="">Logout</div></td>
          </tr>
        </table>
    </div>
    <br />
    <br />
