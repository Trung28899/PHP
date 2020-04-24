<!--USING session Superglobal variable-->
<?php
	// session_start(); 
	
	// $name = $_SESSION['name']; 
	// $email = $_SESSION['email']; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Search User</title>
	<link rel = "stylesheet" href = "https://bootswatch.com/4/cerulean/bootstrap.min.css">
	
	<script>
		function showSuggestion(str){
			if(str.length == 0)
			{
				document.getElementById('output').innerHTML = ''; 
			} else {
				// AJAX Request: 
				/*See this link: 
				  https://www.w3schools.com/js/js_ajax_http_send.asp */
				var xmlhttp = new XMLHttpRequest(); 
				xmlhttp.onreadystatechange = function(){
					if(this.readyState == 4 && this.status==200){
						document.getElementById('output').innerHTML = this.responseText; 
					}
				}
				xmlhttp.open("GET", "suggest.php?q="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>

<body>
	<div class = "container">
		<h1> Search user </h1>
		<form method = "post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			Search User: <input type="text" class = "form-control" onkeyup="showSuggestion(this.value)">
		</form>
		<p> Suggestion: <span id="output" style="font-weight:bold"> </span></p>
	</div>
</body>
</html>
