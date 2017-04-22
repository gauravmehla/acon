<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/Login_form.css">
		<link rel="stylesheet" type="text/css" href="css/myfile.css">
		<script src="js/jquery.js"></script>
		<script src="js/login_form.js"></script>
	</head>
	<body class="ultra-main">
			
		<div id="message">
			<?php 

			if(@$_REQUEST['msg'])
			{
				echo @$_REQUEST['msg'];
			}
			else
			{
				echo "Welcome";
			}
			?>
		</div>

		<span href="#" class="button" id="toggle-login">Log in</span>

		<div id="login">

	  		<div id="triangle"></div>

		  	<h1>Log in</h1>

			<form action="check.php" method="POST" >
				<input type="text" name="username" placeholder="Username" /><p>
				<input type="password" name="password" placeholder="Password"/>
				<input type="submit" name="login" value="Login">
				<div class="guest"><a href="guest.php"><h5 style="color: #3399cc;">Are you Guest</h5 style="color: #3399cc;"></a></div>
			</form>	
			
		</div>
		<script type="text/javascript">

			$("#toggle-login").click(function(){
			 $("#login").toggle();
			});
		</script>
		
	</body>
</html>