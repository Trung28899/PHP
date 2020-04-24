<!DOCTYPE html>
<html>
	<head>
		<meta charset=utf-8">
		<title></title>
	<head>
	<body>
	
	<?php 
		// I, BASIC SYNTAX: 
		echo("<strong>Hello World<strong> "); // print out with html styling
		
		// II, VARIABLES: 
		// a, variables and constant: 
		$name = 'Trinh Quang Trung'; 
		echo $name; 
		
		// note that constant doesn't have $ in front of it
		define("age", " is 20 years old", true); 
		// case-insensitive = true, optional
		echo age; 
		echo "<br>"; // new line
		
		// b, Data types: 
		// In php, string number and integer number can associate
		$string = "3"; 
		$integer = 6; 
		$sum = $string + $integer; 
		echo 'sum is: '; 
		echo $sum; // should print 9
		echo "<br><br>"; 
		
		//c, Variables scope and variable variables: 
		$fname = "David" ;
		function getName() {
			// adding global make the fname unique no matter the scope
			// without global, this function doesn't print anything
			global $fname;
			echo $fname;
		}
		getName();
		echo "<br><br>";
		
		// variable variables
		$a = 'hello';
		$hello = "Hi!";
		echo $$a; // Output: hi 
		echo "<br><br>";
		
		// III, ARRAYS: 
		//a, Declare an array: 
		$names = array("David", "Amy", "John");
		echo "Three names are: $names[0], $names[1], $names[2]"; 
		echo "<br><br>";
		
		//b, Associative array: 
		$people = array("David"=>"27", "Amy"=>"21", "John"=>"42"); 
		echo $people['David']; //27
		echo $people['Amy']; // 21
		echo $people['John']; // 42
		echo "<br><br>";
		
		//c, Multi-Dimension Array: 
		$peo = array(
		'online'=>array('David', 'Amy'),
		'offline'=>array('John', 'Rob', 'Jack'),
		'away'=>array('Arthur', 'Daniel') );  
		echo $peo['online'][0]; //Outputs "David"

		// IV, LOOPS AND CONDITIONAL STATEMENT: 
		// a, Conditional Statements: 
		// - if else, switch statements like C
		// - elseif:
		$age = 21;

		if ($age<=13) {
			echo "Child.";
		} elseif ($age>13 && $age<19) {
			echo "Teenager";
		} else {
			echo "Adult";
		} // output: Adult 
		echo "<br><br>";
		
		// b, Loops: 
		// - For loops: 
		for ($a = 0; $a < 6; $a++) {
			echo "Value of a : ". $a . "<br />";
		}
		echo "<br><br>";
		
		// - while and do while loops: like C 
		
		// - Foreach loops: 
		$name2 = array("John", "David", "Amy");
		foreach($name2 as $name){
			echo $name; 
			echo "<br>"; 
			
		}
			echo "<br><br>";
		
		// c, Include and require: 
		// <?php include 'header.php';
		// Use require when the file is required for the application to run.
		// Use include when the file is not required. The application should continue, even when the file is not found.
		
		// V. FUNCTION: 
		function mult($num1, $num2) {
			$res = $num1 * $num2;
			return $res;
		}
			echo mult(8, 3); // Output: 24
			echo "<br><br>";
			
		// VI. PREDEFINED VARIABLES: 
		// $_SERVER['HTTP_HOST'] returns the Host header 
		// from the current request.
		echo $_SERVER['HTTP_HOST'];
		echo "<br><br>";
		// _SERVER['SCRIPT_NAME'] returns the path of the current script
		echo $_SERVER['SCRIPT_NAME'];
		echo "<br><br>";
	?>
	<!--END OF PHP-->
		
		<!-- using $_POST (or $_GET) associate array 
		to access data enter to a form (see in first.php)
		 php form: -->
		<form action="second.php" method="post">
		<p>Name: <input type="text" name="name" /></p>
		<p>Age: <input type="text" name="age" /></p>
		<p><input type="submit" name="submit" value="Submit" /></p>
		</form>
		<p>Input information and click submit to continue</p>

	</body>
</html>