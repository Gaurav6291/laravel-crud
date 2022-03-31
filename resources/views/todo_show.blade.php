<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>

    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">    
        <a href="todo_create"><button class="btn btn-primary">Add Records</button></a> <br/><br/>  
        <table class="table table-dark">
                <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                @foreach($todoArr as $todo)
                <tr>
                    <td>{{$todo -> id}}</td>
                    <td>{{$todo -> f_name}}</td>
                    <td>{{$todo -> l_name}}</td>
                    <td><a href="todo_delete/{{$todo->id}}">Delete</a></td>
                    <td><a href="todo_edit/{{$todo->id}}">Edit</a></td>
                </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>
