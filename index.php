<?php
  include('server.php');
?>

<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Register</title>
  <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
  <div class="container">
	  <div class="regForm">  
		<h1>Welcome</h1>
		<br>	
        <div class="field">		
			<form action="index.php" method="post">
			  <?php //include('errors.php'); ?>
			  <fieldset>
				<legend>
				  Please fill this form and submit to register.
				</legend>
				<table>
				  <tr class="user">
					<td align="left"><label for="user"><b>Username</b><span class="req">*: </span></label></td>
					<td "align: right"><input type="text" name="user" id="user" maxlength="12" placeholder="Type your username here" required autocomplete="off" value="<?php echo $user; ?>"></td>
				  </tr>
				  <tr class="phone field">
				    <td align="left"><label for="phone"><b>Phone Number</b><span class="req">*: &nbsp </span></label></td>
				    <td "align: right"><input type="text" name="phone" id="phone" maxlength="11" placeholder="e.g: 08012345678" required autocomplete="off" value="<?php echo $phone; ?>"></td>
				  </tr>
				  <tr class="mail field">
				    <td align="left"><label for="mail"><b>Email Address</b><span class="req">*: </span></label></td>
				    <td "align: right"><input type="mail" name="mail" id="mail" maxlength="32" placeholder="someone@example.com" required autocomplete="off" value="<?php echo $mail; ?>"></td>
				  </tr>
				</table>
				  <p class="note">NOTE: fields marked asterisks(*) are important.</p>
			  </fieldset>
			  <br>
			  <button type="submit" class="button" name="submit_form"/><b>Submit Form</b></button>
			</form>
			<br><br><br>			
		  <div class="check">
		    <h4>Already registered? Click <a href="./check.php" target="_blank">here</a> to check your details</h4>
		  </div>
      </div>
	  </div> <!-- /regForm-->
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