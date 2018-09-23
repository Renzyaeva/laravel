<!DOCTYPE html>
<html>
<head>
	<title>Laravel Sample</title>
</head>
<body>
	<!-- <div><h1>Hello, <?= $name ?>!</h1></div> -->
	<ul>
		<!-- <?php foreach ($tasks as $task) : ?>
			<li><?= $task; ?></li>
		<?php endforeach; ?> -->
		<div>{{$name}}</div>
		
		@foreach ($tasks as $task)
			<li>{{$task}}</li>
		@endforeach

	</ul>
</body>
</html>