<?php

$people[] = "Steve"; 
$people[] = "John"; 
$people[] = "Kathy"; 
$people[] = "Evan"; 
$people[] = "Anthony"; 
$people[] = "Tom"; 
$people[] = "Linda"; 
$people[] = "Shawn"; 
$people[] = "Olivia"; 
$people[] = "Brad"; 
$people[] = "Mike"; 
$people[] = "Nick"; 
$people[] = "Orange"; 
$people[] = "Funny"; 

// Get Query String

$q = $_REQUEST['q']; 

$suggestion = ""; 

// Get suggestion

if($q != ""){
	$q = strtolower($q); 
	$len = strlen($q); 
	foreach($people as $person){
		// find the first occurance
		if(stristr($q, substr($person, 0, $len))){
			if($suggestion === "")
			{
				$suggestion = $person; 
			} else {
				$suggestion .= ", $person";
			}
		}
	}
}

echo $suggestion === "" ? "No Suggestion" : $suggestion; 

?>