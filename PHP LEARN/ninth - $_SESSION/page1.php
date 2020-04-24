<!--USING session Superglobal variable-->
<?php
	if(isset($_POST['submit'])){
		// When ever you want to use $_SESSION superglobal variable, 
		// you have to run session start at the beginning of php 
		session_start(); // start the session_cache_expire

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);
		
		// When hit submit, this function somehow make the page direct to page2.php
		header('Location: page2.php'); 
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
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
				<input type="text" name = "name" class = "form-control" placeholder="Enter name" >
			</div>
			<div>
				<label> Email </label>
				<input type="text" name = "email" class = "form-control" placeholder = "Enter Email">
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary"> Submit </button>
		</form>
	</div>
</body>
</html>
