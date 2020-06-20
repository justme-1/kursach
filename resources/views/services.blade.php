@extends('admin.layouts.layout')
@section('content')

    {{--    цыкл для вывода слайдера и рядом лежащего--}}
    <div class="row" style="margin-top: 70px">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade col-6 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to=0 class="active" ></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to=1 ></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to=2 ></li>

            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/partners.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>запускаем программу партнерства</h5>
                        <p>вы можете стать нашим партнером </p>
                    </div>
                </div>


                    <div class="carousel-item">
                        <img src="/image/apart.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Вы можете сдать недвижимость быстрее</h5>
                            <p>мы сделаем все легко и быстро</p>
                        </div>
                    </div>


                        <div class="carousel-item">
                            <img src="/image/test.jpg" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>оставайтесь с нами</h5>
                                <p>скоро будут новые услуги</p>
                            </div>
                        </div>

                {{--            цыкл для вывода слайдов--}}

            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>
        </div>
    </div>

    {{--    цыкл для вывода слайдера и рядом лежащего--}}


        <div class="row ourSuccess">
            <div class="col-9 mx-auto">
                <div class="jumbotron">
                    <img src="/image/partners.jpg" class="rounded float-left w-25" style="margin-right: 20px;" alt="...">
                    <h1>@lang('messages.startPartners1')</h1>
                    <p class="lead"> @lang('messages.partnersContent1')</p>
                    <a class="btn btn-dark" href="#" role="button">@lang('messages.partnersShowProgram')</a>
                </div>
            </div>
        </div>
    <div class="row ourSuccess">
        <div class="col-9 mx-auto">
            <div class="jumbotron">
                <img src="/image/apart.jpg" class="rounded float-left w-20" style="margin-right: 20px;" alt="...">
                <h1>@lang('messages.startPartners2')</h1>
                <p class="lead"> @lang('messages.partnersContent2')</p>
                <a class="btn btn-dark" href="#" role="button">@lang('messages.partnersShowProgram')</a>
            </div>
        </div>
    </div>
    <div class="row ourSuccess">
        <div class="col-9 mx-auto">
            <div class="jumbotron">
                <img src="/image/test.jpg" class="rounded float-left w-20" style="margin-right: 20px;" alt="...">
                <h1>@lang('messages.startPartners3')</h1>
                <p class="lead"> @lang('messages.partnersContent3')</p>
                <a class="btn btn-dark" href="#" role="button">@lang('messages.partnersShowProgram')</a>
            </div>
        </div>
    </div>


    <script type="javascript">
        $('.carousel').carousel();
    </script>
@endsection
