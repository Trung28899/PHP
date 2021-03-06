<?php 
	// For unknow variables, check out config/config.php or
	// config/db.php
	require('config/config.php'); 
	require('config/db.php'); 
	
	// Check for submit
	if(isset($_POST['submit'])){
		// Get form data
		// The function is for security, you can just write $title = $_POST['title']
		$title = mysqli_real_escape_string($conn, $_POST['title']); 
		$body = mysqli_real_escape_string($conn, $_POST['body']); 
		$author = mysqli_real_escape_string($conn, $_POST['author']); 
		
		$query = "INSERT INTO postreplicated(title, author, body) VALUES('$title', '$author', '$body')"; 
		
		if(mysqli_query($conn, $query)){
			header('Location'. ROOT_URL. ''); 
		} else {
			echo "Error". mysqli_error($conn); 
		}
	}
	
		//get id
	$id = mysqli_real_escape_string($conn, $_GET['id']); 
	
	// create query 
	$query = 'SELECT * FROM posts WHERE id='.$id; 
	
	// get result
	$result = mysqli_query($conn, $query); 
	
	// Fetch data 
	$post = mysqli_fetch_assoc($result);
	// var_dump($posts); 
	
	// Free Result: 
	mysqli_free_result($result); 
	
	// Close connection
	mysqli_close($conn); 
	
	
	
?>

<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
	<div class="container">
		<h1>Add Posts</h1>
		<form method="POST" action = "<?php $_SERVER['PHP_SELF']; ?>">
			<div class = "form-group">
				<label> Title </label>
				<input type="text" name="title" class="form-control" value="<?php echo $post['title']?>">
			</div>
			<div class = "form-group">
				<label> Author </label>
				<input type="text" name="author" class="form-control" value="<?php echo $post['author']?>">
			</div>
			<div class = "form-group">
				<label> Body </label>
				<textarea name="body" class="form-control" <?php echo $post['body']?>> </textarea>
			</div>
			<input type="submit" name="submit" value="Submit" class = "btn btn-primary">
		</form>
	</div>
<?php include('inc/footer.php'); ?>

