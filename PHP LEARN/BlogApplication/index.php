<?php 
	require('config/config.php'); 
	require('config/db.php'); 
	
	// create query 
	$query = 'SELECT * FROM postreplicated ORDER BY Created_time DESC'; 
	
	// get result
	$result = mysqli_query($conn, $query); 
	
	// Fetch data 
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts); 
	
	// Free Result: 
	mysqli_free_result($result); 
	
	// Close connection
	mysqli_close($conn); 
	
?>

<?php include('inc/header.php'); ?>
<?php include('inc/navbar.php'); ?>
	<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post):?>
			<div class="well">
				<h3><?php echo $post['title']; ?></h3>
				<small> Created on <?php echo $post['Created_time']; ?> by 
				<?php echo $post['author']; ?> </small>
				<p><?php echo $post['body']; ?></p>
				<a class ="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php 
				echo $post['id']; ?>">Read More</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php include('inc/footer.php'); ?>

