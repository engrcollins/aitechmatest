<?php
  include('server.php');
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Check Details</title>
  <link rel="stylesheet" href="./check/style.css" type="text/css">
</head>
<body>
    <div class="container">
	  <form class="pin-form" action="check.php" name="check" method="post">
	    <?php //include('errors.php'); ?>
	    <h1>Welcome</h1>		
		<fieldset>
		  <legend>Kindly input your 10-digit PIN to check your details</legend>
	      <br>
		  <div class="field-wrap">
		    <label for="pin"><b>PIN<span class="req">*: </span></b></label>
			<input type="password" name="pin" maxlength="10" placeholder="Type your PIN here" required autocomplete="off" value="">
		  </div>
	    </fieldset>
		<br>
		<button type="submit" class="button" name="check" /><b>Check Details</b></button>
		<div class="new-user">
		    <h4>New user? Click <a href="./index.php">here</a> to register.</h4>
		</div>
	  </form><!-- /form -->
	</div>		
</body>
<footer>
  <p>McCollins Technologies &copy; 2020.</p>
</footer> 
</html>