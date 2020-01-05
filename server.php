<?php 
  session_start();
	// variable declaration
	$user = "";
	$mail    = "";
	$phone    = "";
	$pin = ""; //blank default pin.
	$errors = array(); 
	$_SESSION['success'] = "";
	$result = "";
	
	// Create connection
	$db = mysqli_connect('localhost', 'root', 'Passion007!', 'aitechma');

	/* Check connection
	if (!$db) {
	  die("Connection failed: " . mysqli_connect_error());
	} else {
	  echo "Connected successfully";
	}*/
  	if (isset($_POST['submit_form'])) {
		echo "Connected successfully";
		// receive all input values from the form
		$user = mysqli_real_escape_string($db, $_POST['user']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$mail = mysqli_real_escape_string($db, $_POST['mail']);

		//form validation: ensure that the form is correctly filled
		if (empty($user)) { array_push($errors, "Username is required"); }
		if (empty($phone)) { array_push($errors, "Phone number is required"); }
		if (empty($mail)) { array_push($errors, "Email is required"); }
	    if (count($errors) == 0) {
			function generatePIN($digits = 10){
			  $i = 0;
			  while($i < $digits){
				//generate a random number between 0 and 9.
				$pin .= mt_rand(0, 9);
				$i++;
			  }
			  return $pin;
		    }
		    $pin = generatePIN(10);
			$sql = "INSERT IGNORE INTO records (user, phone, mail, pin)
				VALUES ('$user', '$phone', '$mail', '$pin')";
			mysqli_query($db, $sql);
			$result = mysqli_query($db, $sql)  or die(mysqli_errno($db) == 1062 ? "Record already saved" : 'Error querying database.');
			mysqli_close($db);
			$_SESSION['user'] = $user;
			$_SESSION['success'] = $pin;
			header('location: regreturn.php');
		}
		//$result = mysqli_query($sql) or die(mysqli_error()); 
		//echo $result;
	}
	
	//CHECK PIN
    if (isset($_POST['check'])){
		$pin = mysqli_real_escape_string($db, $_POST['pin']);
		if (empty($pin)) {
				array_push($errors, "PIN is required");
		}
	    $sql = "SELECT * FROM records WHERE pin = $pin";
		$result = mysqli_query($db, $sql);
		$row = mysqli_fetch_array($result);
		if (!$result) {
		  array_push($errors, "No Result");
		}
		$user = $row[1];
		if (count($errors) == 0) {
		  $_SESSION['user'] = $row[1];
		  $_SESSION['success'] = "Record found! Below are your details:";
		  $_SESSION['error'] = "OOOPS! Something went wrong.";
		  $_SESSION['phone'] = $row[2];
		  $_SESSION['mail'] = $row[3];
		  $_SESSION['pin'] = $row[4];
		  header('location: checkreturn.php');
		}else{
			array_push($errors, "multiple error");
			header('location: checkreturn.php');
		}
	}
?>