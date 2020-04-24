<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8">
		<title></title>
	<head>
<body>
<!--BONUSES-->
	
<!--IX, BONUS: -->
<!--a, Dates and timestamp: -->
<?php
/*
	echo "<br>"; 
	echo date('d'); // date
	echo "<br>"; 
	echo date('m');// month
	echo "<br>"; 
	echo date('Y'); // year
	echo "<br>";
	echo date('l');	// Day of the week
	echo "<br>"; 
	echo date('Y/m/d'); // date
	echo "<br>"; 
	echo date('d-m-Y'); // date
	echo "<br>"; 
	echo date('h'); // hours
	echo ":"; 
	echo date('i'); // minute
	echo ":"; 
	echo date('s'); // seconds
	echo ":"; 
	echo date('a'); // AM or PM
	echo "<br>"; 
	echo "time is: " . date("h:i:sa"); 
	echo "<br>";
*/
?>

<?php
	// Set time zone: 
	date_default_timezone_set('America/New_York'); 
	echo "<br>" . "time is: " . 
	date("h:i:sa");
	
	/*Unix timestamp is a long integer 
	containing the number of seconds between
	the Unix epoch Jan 1 1970 00:00:00 
	and the time specifed*/
	/*see format of mktime time: 
	mktime( $hour, $minute, $second, $month, $day, $year, $is_dst)*/
	
	$timestamp = mktime(10,14,54,8,28,1999); 
	//echo $timestamp;
	echo"<br>"; 
	echo date('d/m/Y', $timestamp); 
	
	$timestamp2 = strtotime('7:00pm March 22 2016'); 
	echo"<br>"; 
	echo date('d/m/Y', $timestamp2);
	
	// not working properly
	$timestamp3 = strtotime('tommorrow'); 
	$timestamp4 = strtotime('next Sunday'); 
	$timestamp5 = strtotime('+ 2 Months');
?>
<!--IX, BONUS: -->
<!--IX, BONUS: -->
<!--IX, BONUS: -->
	
</body>
</html>