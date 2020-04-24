<?php require 'inc/header.php';
	/* difference between include and require is 
	if include a non existing file
	page will show error but display any thing else
	that valid on the page

	When u use require, if the file u require is non
	existing, it won't display any other valid items*/
?>	
	<h1>Home</h1>

<?php include 'inc/footer.php';

?>	