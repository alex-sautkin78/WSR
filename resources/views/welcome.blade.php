<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Улучши свой город</title>
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery-3.5.1.min.js"></script>
    <script src="public/js/script2.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Городской портал</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ route('home') }}">Заявки</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Войти</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Регистрация</a></li>
                        @endif
                    @endif
                @endif
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron">
    <div class="container">
        <h1>Привет, дорогой друг!</h1>
        <p>
            Вместе мы сможем улучшить наш любимый город. Нам очень сложно узнать обо всех проблемах города, поэтому мы
            предлагаем тебе помочь своему городу!
        </p>
        <p>
            Увидел проблему? Дай нам знать о ней и мы ее решим!
        </p>
        <p>
            <a class="btn btn-success btn-lg" href="{{ route('home') }}" role="button">Сообщить о проблеме</a>
            <a class="btn btn-primary btn-lg" href="#" role="button">Присоедениться к проекту</a>
        </p>
    </div>
</div>
<div class="container">
    <h2>Последние решенные проблемы</h2>
    <br>
    @if(count($data) > 0)
        <div class="row">
            @foreach($data as $el)
                @if(\App\Models\Status::find($el->status_id)->name == 'Решена')
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="{{ $el->path }}" alt="{{ $el->name }}">
                            <div class="info">{{ $el->created_at }}</div>
                            <div class="info"> {{ $el->name }}</div>
                            <div class="info"> {{ $el->description }}</div>
                            <div class="info">{{ \App\Models\Category::find($el->category_id)->name }}</div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
<div class="container mt-4">
    <div class="container mt-4" id="otvet"></div>
    <div class="container mt-4" id="appl_count"></div>
</div>
<script src="public/js/bootstrap.js"></script>
</body>
</html>
