<!DOCTYPE html>
<html>
<head>
	<title>Task list</title>
</head>
<body>
	<ul>
		@foreach($tasks as $task)
			<li>{{$task->body}}</li>
		@endforeach
	</ul>
</body>
</html>