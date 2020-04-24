<?php
	#$_SERVER SUPERGLOBAL
	// Create Server array: 
	$server = [
		'Host Server Name' 
		=> $_SERVER['SERVER_NAME'], 
		'Server Software'
		=> $_SERVER['SERVER_SOFTWARE'],
		'Document Root'
		=> $_SERVER['DOCUMENT_ROOT'],
		'Current Page'
		=> $_SERVER['PHP_SELF'],
		'Absolute Path'
		=> $_SERVER['SCRIPT_FILENAME'], 
		'Server Request Method'
		=> $_SERVER['REQUEST_METHOD']
	];

	// Create Client array: 
	$client = [
		'Client System Info' 
		=> $_SERVER['HTTP_USER_AGENT'],
		'Client IP' 
		=> 	$_SERVER['REMOTE_ADDR'],
		'Remote Port'
		=> $_SERVER['REMOTE_PORT']
	];

	






	/*
	echo $server['Host Server Name'];
	// both output: localhost
	echo('<br>'); 
	echo $server['Server Software'];
	// output is apache something...
	
	echo('<br>'); 
	echo $server['Document Root'];
	// output is the root directory of the server
	
	echo('<br>'); 
	echo $server['Current Page'];
	
	echo('<br>'); 
	echo $server['Absolute Path'];
	*/
	
	/*
	echo('<br>'); 
	echo $client['Client System Info'];
	echo('JUST TESTING BRO'); 
	
	echo('<br>'); 
	echo $client['Client IP'];
	
	echo('<br>'); 
	echo $client['Remote Port'];
	*/
?>