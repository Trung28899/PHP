<h1> Ignore the warning </h1>
<!-- SETTING COOKIE, SKIP TO LINE 33-->
<?php 
	//setcookie(name, value, expire, path, domain, secure, httponly);
/*
- name: Specifies the cookie's name
- value: Specifies the cookie's value
- expire: Specifies (in seconds) when the cookie is to expire. 
The value: time()+86400*30, will set the cookie to expire in 30 days. 
If this parameter is omitted or set to 0, the cookie will expire at the end of the session (when the browser closes). 
Default is 0.
- path: Specifies the server path of the cookie. 
If set to "/", the cookie will be available within the entire domain. 
If set to "/php/", the cookie will only be available within the php directory and all sub-directories of php. 
The default value is the current directory in which the cookie is being set.
- domain: Specifies the cookie's domain name. To make the cookie available on all subdomains of example.com, 
set the domain to "example.com".
- secure: Specifies whether or not the cookie should only be transmitted over a secure, HTTPS connection. 
TRUE indicates that the cookie will only be set if a secure connection exists. Default is FALSE.
- httponly: If set to TRUE, the cookie will be accessible only through the HTTP protocol 
(the cookie will not be accessible to scripting languages). Using httponly helps reduce identity theft using XSS attacks. 
Default is FALSE.
*/
	$val = "Trung";
setcookie("user", $val, time() + (86400 * 30), '/'); 

//Outputs "Value is: John"

?>

<html>
<body>

<!--VI, PREDEFINED VARIABLES (CONTINUE):  -->
<!-- POST is the preferred method for sending form data.
	   	    GET should NEVER be used for sending passwords or other sensitive information!
			When using POST or GET, proper validation of form data through 
			filtering and processing is vitally important to protect your form from hackers and exploits!-->
Welcome <?php echo $_POST["name"]; ?><br />
Your age: <?php echo $_POST["age"]; 
echo "<br><br>";
?>

<!-- Using Global Array $_SESSION to store values
	THIS PART DOESN'T WORK THO
-->
<?

$_SESSION['color'] = "red";
$_SESSION['name'] = "Trung";
echo"Your Name Is: " . $_SESSION['name'];
echo "<br><br>";
?>

<!-- COOKIES: -->
<!-- A cookie is a small file that the server embeds on the user's computer, often used to identify users -->
<!-- Create cookies using setcookie() function, setcookie() must be used before html tag  -->
<?php 
// See setcookie() above
if(isset($_COOKIE['user'])) {
  echo "User From Cookie Is: ". $_COOKIE['user'];
  echo "<br><br>";
}
//Outputs "Value is: Trung"
?>

<!--VII, FILE MANIPULATIONS:  -->
<?php
	//a, Open and write into a file: 
	$myfile = fopen("names.txt", "w");
	$txt = "John\n";
	fwrite($myfile, $txt);
	$txt = "David\n";
	fwrite($myfile, $txt);
	fclose($myfile);
?>

<?php
	//b, Appending into a file: 
	$myFile = "test.txt";
	$fh = fopen($myFile, 'a');
	fwrite($fh, "Some text");
	fclose($fh);
?>


<?php
	//c,Reading from a file:
	echo("Here are sometext in the file: ");
	$read = file('names.txt');
	foreach ($read as $line) {
	echo $line .", ";
}
echo "<br><br>";
?>

<!--VIII, OBJECT ORIENTED:  -->
<!-- a, Object and classes in PHP: -->
<?php 
class Dog {
  public $legs=4;
  public function display() {
    echo $this->legs;
  }
}
$d1 = new Dog();
$d1->display(); //4

$d2 = new Dog();
$d2->legs = 2;
$d2->display(); //2
echo "<br><br>";
?>

<!-- b, Constructor and Destructor PHP: -->
<!-- CONSTRUCTOR: -->
<?php
class Person {
  public $name;
  public $age;
  public function __construct($name, $age) { // note key word __construct is the constructor key word in php
    $this->name = $name;
    $this->age = $age;
	echo "Object created"; 
  }
}
$p = new Person("David", 42);
echo "<br><br>";
?>

<!-- DESTRUCTOR: -->
<!--When the script ends the object is automatically destroyed, 
which calls the destructor and outputs the message "Object destroyed". -->
<?php
class Person1 {
  public function __destruct() {
    echo "<br>" . "<br>" . "Object destroyed";
  }
}
$p1 = new Person1();
// output will be at the end of the page
?>

<!-- c, Class Inheritance: -->
<?php 
class Animal1 {
  public $name1;
  public function hi1() {
    echo "Hi from Animal";
  }
}
class Dog1 extends Animal1 {
}

$d = new Dog1();
// If there is no constructor, destructor is automatically created
$d->hi1();
?>

<!-- c, Implement, abstract classes see sololearn, php, object oriented php, class inheritance,  -->

</body>
</html>

<!-- Check out $_SESSION -->