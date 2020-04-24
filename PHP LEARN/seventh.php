<?php
/*
	// Check for posted data
	if(filter_has_var(INPUT_POST, 'data')){
		echo 'Data Found'; 
	} else {
		echo 'No Data'; 
	}
	
	echo "</br>"; 
*/

/*
	# Email validation
	if(filter_has_var(INPUT_POST, 'data')){
		$email = $_POST['data']; 
		
		// remove illegal characters from email (like // \\ ( ) , etc...) 
		$email= filter_var($email, FILTER_SANITIZE_EMAIL); 
		echo $email . '<br>'; 
		
		// Check the santitize version of input: 
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			echo 'Sanitized Email is Valid'; 
		} else {
			echo 'Sanitized Email is not valid'; 
		}
		
		
		// Check if email is valid or not
		if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
			echo 'Email is Valid'; 
		} else {
			echo 'Email is not valid'; 
		}
	} 
*/	// Email Validation ends here

		# Here are all the Prewritten Validation we can do: 
		
		# FILTER_VALIDATE_BOOLEAN
		# FILTER_VALIDATE_EMAIL
		# FILTER_VALIDATE_FLOAT
		# FILTER_VALIDATE_INT
		# FILTER_VALIDATE_IP
		# FILTER_VALIDATE_REGEXP
		# FILTER_VALIDATE_URL
		
		# Here are all the Prewritten santitize we can do:
		
		# FILTER_SANITIZE_EMAIL
		# FILTER_SANITIZE_ENCODED
		# FILTER_SANITIZE_NUMBER_FLOAT
		# FILTER_SANITIZE_NUMBER_INT
		# FILTER_SANITIZE_SPECIAL_CHARS
		# FILTER_SANITIZE_STRING
		# FILTER_SANITIZE_URL 
		
		// Integer validation
		/*
		$num = 23; 
		if(filter_var($num, FILTER_VALIDATE_INT)){
			echo $num . 'is a number'; 
		} else {
			echo $num . ' is NOT a number'; 
		} */ // int validate ends here
		
		// Integer Sanitization: 
		/*
		$number = '4h3j4h3kjh4j4h4324h32k4h3'; 
		var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
		*/ // int sanitize ends here
		
		// See php front to back part 14 at 16:00 min for this
		/*
		$filter = array(
			"data" => FILTER_SANITIZE_EMAIL, 
			"data2" => array(
				"filter" => FILTER_SANITIZE_NUMBER_INT; 
				"option" => array(
					"min_range" => 1, 
					"max_range" => 100
				)
			)
		); 
		
		print_r(filter_input_array(INPUT_POST, $filters)); 
		*/
		
?>


<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text", name="data">
	<!--<input type="text", name="data2">-->
	<button type="submit">Submit</button>
</form>