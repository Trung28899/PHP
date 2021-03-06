<?php 
	// Message vars: 
	$msg = ''; 
	$msgClass = ''; 
	
	//check for submit
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get form data
		$email = htmlspecialchars($_POST['email']); 
		$name = htmlspecialchars($_POST['name']); 
		$message = htmlspecialchars($_POST['message']); 
		
		// check required fields: 
		if((!empty($email))&&(!empty($name))&&(!empty($message))){
			// Passed
			// Check email: 
			if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
				// Failed
				$msg='Please Use A Valid Email'; 
				$msgClass = 'alert-danger'; // bootstrap stuff
			} else {
				// Passed
				// Getting info for mailing to host email
				$toEmail = 'trung28899@gmail.com'; 
				$subject = 'Contact Request From' . $name; 
				$body = '<h2> Contact Request </h2>
						<h4>Name</h4> <p>' .$name. '</p> 
						<h4>Email</h4> <p>' .$email. '</p> 
						<h4>Message</h4> <p>'.$message. '</p>'; 
	
				// Email Headers
				$header = "MINE-Version: 1-0" ."\r\n";
				$header .= "Content-Type:text/html; charset=UTF-8"."\r\n"; 
				
				// Additional Headers
				$headers .= "From: " .$name. "<". $email. ">". "\r\n"; 
				
				
				if(mail($toEmail, $subject, $body, $headers)){
					// Email sent
					$msg = "Your email has been sent"; 
					$msgClass = 'alert-success'; 
				} else {
					// Failed
					$msg = "Your email was not sent"; 
					$msgClass = 'alert-danger'; 
				}
			}
		} else {
			// Failed
			$msg='Please Fill in all Field'; 
			$msgClass = 'alert-danger'; // bootstrap stuff
		}
		
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel ="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.min.css">
</head>

<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class = "navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	
	<div class = "container">
		<?php if($msg != ''): ?>
			<div class = "alert <?php echo $msgClass; ?>"> <?php echo $msg; ?> </div>
		<?php endif; ?>
		<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
				<label> Name </label>
				<!--The value attribute is used for keeping the good textboxes value when only one of the 
				    textbox is not correct. So that the browser doesn't clear the whole form when there is 
					only 1 value not correct-->
				<input type="text" name = "name" class = "form-control" value = "<?php echo isset($_POST['name']) ? $name : ''; ?> ">
			</div>
			<div>
				<label> Email </label>
				<input type="text" name = "email" class = "form-control" value = "<?php echo isset($_POST['email']) ? $email : ''; ?> ">
			</div>
			<div>
				<label> Message </label>
				<textarea name = "message" class = "form-control"> <?php echo isset($_POST['message']) ? $message : ''; ?> </textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</form>
	</div>
</body>
</html>