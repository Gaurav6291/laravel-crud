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
        <a href="todo_show"><div class="btn btn-danger">Back</div></a> <br/><br/>  
       <form action="{{route('todo.update', [$todoArr->id])}}" method="post">
           @csrf
           <table class="table table-borderless">
               <tr>
                   <td>
                       First Name
                   </td>
                   <td>
                       <input type="text" name="f_name" required value={{$todoArr->f_name}} />
                   </td>
               </tr>
               <tr>
                   <td>
                      Last Name
                   </td>
                   <td>
                       <input type="text" name="l_name" value={{$todoArr->l_name}} />
                   </td>
               </tr>
               <tr>
                   <td>
                       <input style="border-radius:15px; background-color:teal" type="submit" name="submit" />
                   </td>
               </tr>
           </table>
       </form>
        </div>
    </body>
</html>
