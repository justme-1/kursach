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
                    <a class="nav-link" href={{route('index')}}>@lang('message.main') <span class="sr-only"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('offer')}}">@lang('message.offer')</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('news')}}" >@lang('message.news')</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @lang('message.aboutUs')
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/history">@lang('message.history')</a>
                        <a class="dropdown-item" href="/services">@lang('message.services')</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="/contacts">@lang('message.contacts')</a>

                    </div>
                </li>
            </ul>
{{--            <form class="form-inline mt-2 mt-md-0">--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Register</button>--}}
{{--                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Log in</button>--}}
{{--            </form>--}}
            @if(App::getLocale()=='ru')
                <a id="en"  class="btn btn-outline-success my-2 my-sm-0"href="/locale/en">en</a>
            @else
                <a id="ru"  class="btn btn-outline-success my-2 my-sm-0"href="/locale/ru">ru</a>
            @endif
{{--            <script>--}}
{{--                function ajax(locale) {--}}
{{--                    $.ajaxSetup({--}}
{{--                        headers: {--}}
{{--                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')--}}
{{--                        }--}}
{{--                    });--}}
{{--                    {--}}
{{--                        $.ajax({--}}
{{--                            type:'GET',--}}
{{--                            url:'/locale',--}}
{{--                            data:{'locale':locale},--}}
{{--                            success:function(data){--}}
{{--                            }--}}
{{--                        });--}}
{{--                    }--}}
{{--                }--}}
{{--            </script>--}}
            @if (Route::has('login'))
                <div class="top-right links form-inline mt-2 mt-md-0">
                    @auth
                        <a class="btn btn-outline-success my-2 my-sm-0"href="{{ url('/home') }}">@lang('message.cabinet')</a>
                        <a class="btn btn-outline-success my-2 my-sm-0"href="{{ url('/home/logout') }}">@lang('message.exit')</a>
                    @else
                        <a class="btn btn-outline-success my-2 my-sm-0"href="{{ route('login') }}">@lang('message.enter')</a>

                        @if (Route::has('register'))
                            <a class="btn btn-outline-success my-2 my-sm-0" href="{{ route('register') }}">@lang('message.registration')</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </nav>
</header>
