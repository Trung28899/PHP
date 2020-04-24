<!--USING session Superglobal variable-->
<?php
	session_start(); 
	
	$name = $_SESSION['name']; 
	$email = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Session</title>
</head>

<body>
	<h4> You have Subscribed with the email <?php echo $email;  ?> <h4>
	<a href="page3.php"> Go to page3 </a>
</body>
</html>
