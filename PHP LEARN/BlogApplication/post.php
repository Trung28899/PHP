<?php 
	/*THIS PAGE DISPLAY ALL DETAILS OF 1 POST, 
	  USER CAN TRANSFER TO EDIT AND DELETE POST*/
	require('config/config.php'); 
	require('config/db.php'); 
	
		// Check for delete
	if(isset($_POST['delete'])){
		// Get form data
		// The function is for security, you can just write $title = $_POST['delete_id']
		$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']); 
		
		$query = "DELETE FROM postreplicated WHERE id = {$delete_id}";
 
		
		if(mysqli_query($conn, $query)){
			header('Location'. ROOT_URL. ''); 
		} else {
			echo "Error". mysqli_error($conn); 
		}
	}
	
	//get id
	$id = mysqli_real_escape_string($conn, $_GET['id']); 
	
	// create query 
	$query = 'SELECT * FROM postreplicated WHERE id='.$id; 
	
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
		<a href="<?php echo ROOT_URL; ?>" class = "btn btn-default">Back</a>
		<h1><?php echo $post['title']; ?></h1>
		<h3><?php echo $post['title']; ?></h3>
		<small> Created on <?php echo $post['Created_time']; ?> by 
		<?php echo $post['author']; ?> </small>
		<p><?php echo $post['body']; ?></p>
		<hr>
		
		<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']."?id=".$id; ?>">
			<input type="hidden" name="delete_id" value="<?php echo $post['id']?>">
			<input type="submit" name="delete" value="delete" class "btn btn-danger"> </input>
		</form>
		<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']?>" class="btn btn-default">
			Edit
		</a>
	</div>
<?php include('inc/footer.php'); ?>
