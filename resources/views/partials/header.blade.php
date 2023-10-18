<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body>
        <nav class="green" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="/" class="brand-logo">Boat Co.</a>
                <ul class="right hide-on-med-and-down">
                    <li><a href="/">Home</a></li>
                    <li><a href="/boats">Boats</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="btn waves-effect waves-blue blue btn-flat">Logout</button>
                        </form>
                        @else
                    <li><a class="btn blue" href="/login">Login</a></li>
                    @endauth
                    </li>
                </ul>
                <ul id="nav-mobile" class="sidenav">
                    <li><a href="/">Home</a></li>
                    <li><a href="/boats">Boats</a></li>
                    <li><a href="/contact">Contact</a></li>
                    @auth
                    <li><form action="/logout" method="POST"  >
                            @csrf
                            <button class="btn waves-effect waves-blue blue btn-flat">Logout</button>
                        </form>
                        @else
                    <li><a href="/login">Login</a></li>
                    @endauth
                    </li>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>