<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    	Главная страница
    	<form action="/tasks/search" method="get">
			<input type="text" name="search" placeholder="Поиск" />
			<button type="submit">Создать</button>
		</form>
    	
    	@foreach ($tasks as $task)
  			<p>Это задача {{ $task->name }} <a href="/task/delete/{{ $task->id }}">(удалить)</a></p>
		@endforeach
		
		<form action="/task/create" method="get">
			<input type="text" name="name" placeholder="Имя" />
			<button type="submit">Создать</button>
		</form>
    </body>
</html>
