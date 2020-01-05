<?php
  session_start(); 

	if (!isset($_SESSION['user'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: #');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: #");
	}
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Successfully registered</title>
  <link rel="stylesheet" href="./regreturn/style.css" type="text/css">
</head>
  <div class="container">
    <div class="main">
	    <!-- logged in user information -->
		<?php  if (isset($_SESSION['user'])) : ?>
			<h1>Dear <strong><?php echo $_SESSION['user']; ?>, </strong></h1>
		<?php endif ?>
	    <!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<p>Congratulations!! you have been successfully registered. Your 10-digit PIN is: <span id="digit"><?php echo $_SESSION['success'];
						//unset($_SESSION['success']);
					?></span></p> 
				<p>Please keep it safe and secure!</p>
				</p>
			</div>
				<br><br>
			<div id="note">
			  <P> Click <a href="./check.php">here</a> to check your details</P>
			  <P class="back"><a href="./index.php">Back</a></P>
			  <!-- <p><a href="index.php?logout='1'">logout</a> </p>-->
			</div>
			
		<?php endif ?>
	</div>
  </div><!-- /container-->
</body>
<footer>
  <p>McCollins Technologies &copy;
  <script type="text/javascript"> 
	  var currentTime = new Date()
	  var year = currentTime.getFullYear()
	  document.write(year)
  </script>
  </p>
</footer> 
</html>