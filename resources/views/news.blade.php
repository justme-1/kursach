@extends('admin.layouts.layout')
@section('content')

    {{--    цыкл для вывода слайдера и рядом лежащего--}}
    <div class="row" style="margin-top: 70px">
        <div id="carouselExampleCaptions" class="carousel slide carousel-fade col-6 mx-auto" data-ride="carousel">
            <ol class="carousel-indicators">
                <?$i=-1;?>
                    <li data-target="#carouselExampleCaptions" data-slide-to={{$i++}} class="active" ></li>
                @foreach($news as $k=>$v)
                    <li data-target="#carouselExampleCaptions" data-slide-to={{$i++}} ></li>
                @endforeach
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/image/test.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>sgfagaeg wrgaerg</h5>
                        <p>garhe hesdh r thsh</p>
                    </div>
                </div>
                @foreach($news as $k=>$v)
                <div class="carousel-item">
                    <img src="{{$v->image}}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        @if(App::isLocale('en'))
                            <h5>{{$v->header}}</h5>
                        @else
                            <h5>{{$v->headerRu}}</h5>
                        @endif
                        <p class="lead"> {{$v->author}}</p>
                        @if(App::isLocale('en'))
                            <p class="lead"> {{$v->news_short}}</p>
                        @else
                            <p class="lead"> {{$v->news_shortRu}}</p>
                        @endif
                    </div>
                </div>
                @endforeach
                {{--            цыкл для вывода слайдов--}}

            </div>
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

    {{--    цыкл для вывода слайдера и рядом лежащего--}}

    @foreach($news as $k=>$v)
        <div class="row ourSuccess">
            <div class="col-9 mx-auto">
                <div class="jumbotron">
                    <img src="{{$v->image}}" class="rounded float-left w-20" width="200px" height="200px" style="margin-right: 20px;" alt="...">
                    @if(App::isLocale('en'))
                    <h1>{{$v->header}}</h1>
                    @else
                        <h1>{{$v->headerRu}}</h1>
                    @endif
                    <p class="lead"> {{$v->author}}</p>
                    @if(App::isLocale('en'))
                        <p class="lead"> {{$v->news_short}}</p>
                    @else
                        <p class="lead"> {{$v->news_shortRu}}</p>
                    @endif
                    <a class="btn btn-dark" href="/news/{{$v->id}}" role="button">@lang('message.showNews')</a>
                </div>
            </div>
        </div>

    @endforeach
    <div class="row ">
    <div class="mx-auto">{{$news->links()}}</div>
    </div>
    <script type="javascript">
        $('.carousel').carousel();
    </script>
@endsection
