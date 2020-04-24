<?php include 'server-info.php'; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>System Info</title>
		<link rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	</head>
<body>
	<div class = "container">
		<h1>Server & File Info</h1>
	
		<?php if($server): ?>
			<ul class="list-group">
				<?php foreach($server as $key => $value): ?>
					<li class="list-group-item">
						<strong> 
							<?php echo $key; ?>:
							<?php echo $value; ?>
						</strong>
					</li>
				<?php endforeach; ?>
			</ul>
		
		<?php endif; ?>
		
		<h1>Client Info Bro</h1>
	
		<?php if($client): ?>
			<ul class="list-group">
				<?php foreach($client as $key => $value): ?>
					<li class="list-group-item">
						<strong> 
							<?php echo $key; ?>:
							<?php echo $value; ?>
						</strong>
					</li>
				<?php endforeach; ?>
			</ul>
		
		<?php endif; ?>		
	
	</div>
	
</body>
</html>
