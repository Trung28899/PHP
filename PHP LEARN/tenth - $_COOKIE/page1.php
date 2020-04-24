
<?php
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']); 
		
		// Read more about cookies in the 2nd php file
		// Set cookie for 1 hour
		setcookie('username', $username, time()+3600); 
		
		header('Location: page2.php'); 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
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
		<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<div>
				<label> Name </label>
				<input type="text" name = "username" class = "form-control" placeholder="Enter username" >
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</form>
	</div>
</body>
</html>
