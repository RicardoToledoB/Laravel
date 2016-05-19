<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <style>
            body{
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <a href="{{route('home') }}" class="navbar-brand">Eloquent ORM</a>
                <ul class="nav navbar-nav">
                    <li>
                        <a href="{{route('home') }}">Home</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="jumbotron">
            <div class="container">
                <h1>Crud con eloquent-orm</h1>
                <p>Cruso Eloquent</p>
            </div>
            
        </div>
        <div class='container'>
            @yield('content');
        </div>
        

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>
</html>
