<?php 

	/*This page showing how array got passed by cookie (within one page)*/
	$user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35]; 
	
	// preparing $user to be used by setcookie() because 
	// setcookie() wont process an array that is not serialized
	$user = serialize($user); 
	
	setcookie('user', $user, time()+(86400*30)); 
	
	// Suppose $user1 is a var in another page, here is how you can access it
	$user1 = unserialize($_COOKIE['user']); 
	
	print_r($user1); 
?>