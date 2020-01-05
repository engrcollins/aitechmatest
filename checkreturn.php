<?php
  session_start(); 
?>
<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Your Details</title>
  <link rel="stylesheet" href="./checkreturn/style.css" type="text/css">
</head>
<body>
  <div class="container">
    <div class="main">
	<h1>Dear <strong><?php echo $_SESSION['user']; ?>, </strong></h1>
	    <!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success'];
						unset($_SESSION['success']);
					?>
				<h3>
				
				<table align="center">
				  <tr  class="user">
					<td align="left">Username: </td>
					<td "align: left"><strong><?php echo $_SESSION['user']; unset($_SESSION['success']);?></strong></td>
				  </tr>
				   <tr>
					<td align="left">Phone: </td>
					<td "align: left"><strong><?php echo $_SESSION['phone'];?> </strong></td>
				  </tr>
				   <tr>
					<td align="left">Email: </td>
					<td "align: left"><strong><?php echo $_SESSION['mail'];?>, </strong></td>
				  </tr>
				   <tr>
					<td align="left">PIN: </td>
					<td "align: left"><strong><?php echo $_SESSION['pin'];?>, </strong></td>
				  </tr>
				</table>				
			</div><!--/error success-->
		<?php else: ?>
			<div class="error success" >
			  <h3>
				<?php 
				  echo $_SESSION['error'];
				?>
				<P> Click <a href="./check.php">here</a> to go back</P>
			  <h3>
			</div> <!--//error success //-->
		<?php endif ?>
	  <div id="note">
		<p>Click <a href="./index.php">here</a> to logout</p>
	  </div>
  </div><!-- /container-->
</body>
<footer>
  <p>McCollins Technologies &copy; 2020.</p>
</footer> 
</html>