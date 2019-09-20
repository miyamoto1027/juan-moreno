<!DOCTYPE html>
<html>
<head>
	<title>usuarios</title>
</head>
<body>

	<h1><?php echo e($titulo) ?></h1>


	<ul>
		<?php foreach ($usuarios as $a):?>

			<li><?php echo e($a) ?></li>


		<?php endforeach; ?>	


	</ul>

</body>
</html>