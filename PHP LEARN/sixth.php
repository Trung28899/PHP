<?php
	#substr(): return a substring
	// $output = substr('Hello', 1); // start from index 1
	// $output1 = substr('Aye yo what up',1,6); // start from index 1, end at 6
	// echo $output; 
	// echo $output1; 
	
	// $output2 = strlen('Hello World');
	// echo $output2; 
	
	//$output = strpos('Hello World', 'o'); 
	//$output1 = strrpos('Hello World', 'o'); 
	//echo $output; //give the position of first char o
	//echo $output1; // give the position of the last char o
	
	//$text = "Hello World          ";
	//var_dump($text); 
	//$trimmed = trim($text); // trimmed all the space out 
	//var_dump($trimmed); 
	
	//$output = strtoupper("Hello World"); // gives Hellow World in all caps
	//$output = strtolower("Hello World");// gives Hellow World in all lower case
	//echo $output; 
	
	// $output = ucwords('hello world'); // capitalize the first letter of every word
	// echo $output; 
	
	// replace substring to new substring 
	//$text = 'Hello World'; 
	//$output = str_replace('World', 'Everyone', $text); 
	
	# is_string() test if something is a string or not
	//$val = "Hello"; 
	//$output = is_string($val); //return 1, bc this is a string
	//echo $output; 
	
	# compress a string to pass with lower memory requirement
	$string = "Cambridge Global Payments is a leading 
	provider of integrated global payments technology 
	and currency risk management solutions, 
	operating across North America, Europe, and Australia. 
	The company approached Clearbridge Mobile to create a solution that 
	would allow its customers to leverage its services anytime, 
	on-the-go directly from their mobile devices."; 
	// if we echo this we gonna see some weird output
	$compressed = gzcompress($string); 
	echo $compressed; 
	echo "<br>"; 
	// uncompress the string
	$original = gzuncompress($compressed); 
	echo $original; 
	
?>