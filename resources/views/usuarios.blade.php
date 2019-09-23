<!DOCTYPE html>
<html>
<head>
	<title>usuarios</title>
</head>
<body>

	<h1><?php echo e($titulo) ?></h1>


	<ul>
		@forelse ($usuarios as $a)

			<li>{{$a}}</li>

		@empty 
			 <p>no  se encuentran  usuarios </p>


		@endforelse	


	</ul>

</body>
</html>