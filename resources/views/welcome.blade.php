<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }
        .content {
            text-align: center;
        }
        .title {
            font-size: 84px;
        }
        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }
        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif
    <div class="content">
        <img src="https://seeklogo.com/images/C/club-alianza-lima-logo-59D4B44345-seeklogo.com.png" alt="Club Alianza Lima Logo">
        <div class="title m-b-md">
            Laravel
        </div>
        <div class="links">
            <!-- Aquí empieza el CRUD de la tabla DataCrud -->
            <div class="card">
                <div class="card-header">DataCrud List</div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Campo 1</th>
                                <th>Campo 2</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($datacruds as $datacrud)
                                <tr>
                                    <td>{{ $datacrud->id }}</td>
                                    <td>{{ $datacrud->campo1 }}</td>
                                    <td>{{ $datacrud->campo2 }}</td>
                                    <td>
                                        <a href="{{ route('datacrud.show', $datacrud->id) }}" class="btn btn-primary">View</a>
                                        <a href="{{ route('datacrud.edit', $datacrud->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('datacrud.destroy', $datacrud->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('datacrud.create') }}" class="btn btn-success">Create DataCrud</a>
                </div>
            </div>
            <!-- Fin del CRUD de la tabla DataCrud -->
            <!-- Otros enlaces -->
            <a href="https://laravel.com/docs">Docs</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://blog.laravel.com">Blog</a>
            <a href="https://nova.laravel.com">Nova</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
    </div>
</div>
</body>
</html>
