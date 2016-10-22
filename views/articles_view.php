<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Мой первый блог</title>
</head>
<body>
	<div class="container">
		<h1>Мой первый блог</h1>
			<div>
				<?php foreach($art as $i):?>
					<div class="art">
						<h2>Глава <?php echo $i['id'];?></h2>
						<h3>
							<a href="function.php?id=<?=$i['id']?>"></a>
							<?=$i['title']?>
						</h3>	
						<em><?=$i['date']?></em>
						<p><?=$i['content']?></p>
					</div>
				<?php endforeach ?>
			</div>
	</div>
<div>
		<footer>Мой  первый блог <br>
		&copy; 2015</footer>
</div>

</body>
</html>