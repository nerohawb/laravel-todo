<!doctype html>
<html lang="en">
    <head>

        <title>Todo App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/app.css">
        <link rel="stylesheet" type="text/css" href="css/todos.css">


    </head>
    <body>
    <h1 class='page-header text-center'>Create your Todos Today!</h1>
    <div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success text-center">
            {{ Session::get('success')}}
        </div>
    @endif
    @yield('content')
    </div>

    <script src="js/app.js"></script>
    
    </body>
    
</html>
