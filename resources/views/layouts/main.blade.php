<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    <title></title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('main.index') }}">Главная</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('about.index') }}">О нас</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Статьи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts.index') }}">Контакты</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            <!--<nav>
                <ul>
                    <li><a href=" {{ route('main.index') }} ">Главная</a></li>
                    <li><a href=" {{ route('about.index') }} ">О нас</a></li>
                    <li><a href=" {{ route('posts.index') }}">Статьи</a></li>
                    <li><a href=" {{ route('contacts.index') }}">Контакты</a></li>
                </ul>
            </nav>-->
        </div>
        
        <div>
            @yield('content')
        </div>
    </div>
</body>
</html>