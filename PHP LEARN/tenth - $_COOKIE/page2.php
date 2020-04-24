
<?php
	// this is how you change your cookie, setting cookie for a day
	// setcookie('username', 'Frank', time()+(86400*30));
	
	// This is how you delete your cookie, making it ends 1 hours before
	// setcookie('username', 'Frank', time()-3600); 

	if(count($_COOKIE)){ 
		echo 'There are '.count($_COOKIE).' cookie saved <br> '; 
	} else {
		echo 'There is no cookie saved'; 
	}
	
	if(isset($_COOKIE['username'])){
		$originalName = $_COOKIE['username']; 
		echo 'User ' . $originalName . ' is set <br>'; 
	} else {
		echo 'User is not set'; 
	}
	
	/*
	  On this page, goes to Dev tools > Application > you will see
	  the info of the cookies created
	*/

	
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>

<body>
	<a href= "page3.php">
</body>
</html>
