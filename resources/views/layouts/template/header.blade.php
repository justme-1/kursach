<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href=#>>rent</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href={{route('index')}}>Главная <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('offer')}}">предложения</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news')}}" >Новости</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        О компании
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/history">история</a>
                        <a class="dropdown-item" href="#">услуги</a>
                        <a class="dropdown-item" href="#">награды</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">мемтонахождение</a>
                        <a class="dropdown-item" href="#">партерство</a>
                        <a class="dropdown-item" href="#">как с нами связаться</a>

                    </div>
                </li>
            </ul>
{{--            <form class="form-inline mt-2 mt-md-0">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button>--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button>--}}
{{--            </form>--}}
            @if (Route::has('login'))
                <div class="top-right links form-inline mt-2 mt-md-0">
                    @auth
                        <a class="btn btn-outline-success my-2 my-sm-0"href="{{ url('/home') }}">личный кабинет</a>
                    @else
                        <a class="btn btn-outline-success my-2 my-sm-0"href="{{ route('login') }}">Вход</a>

                        @if (Route::has('register'))
                            <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('register') }}">Регистрация</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
</header>
