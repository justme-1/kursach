@extends('admin.layouts.layout')
@section('content')

{{--    цыкл для вывода слайдера и рядом лежащего--}}
    <div class="row" style="margin-top: 70px">
        <div  class="col-6">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <?$i=0;?>
            @foreach(json_decode($subject->images) as $k=>$image)

                <li data-target="#carouselExampleCaptions" data-slide-to="{{$i}}"></li>
                @php($i++)
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach(json_decode($subject->images) as $k=>$image)
            <div class="carousel-item @if($k=='k1'){{'active'}}@endif">
                <img src="{{$image}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">

                </div>
            </div>
            @endforeach
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


        <div class="col-12 mx-auto" style="display: flex;flex-wrap: wrap; justify-content: center;margin-top: 10px;border: 2px #c6c3c3">

            <?$i=0;?>
            @foreach(json_decode($subject->images) as $k=>$image)
                    <img style="width: 70px;" src="{{$image}}">
                @php($i++)
            @endforeach

        </div>
        </div>
        <div class="col-6">
<h1>Важная информация</h1>
        <p>{{$subject->description}}</p>
            <p>аренда {{$subject->type->type}}</p>
            <p>цена={{$subject->price}}рублей</p>
            <p>площадь={{$subject->area}}</p>
            <p>количество комнат={{$subject->rooms}}</p>

    </div>
    </div>
<div class="row">
    <div class="col-md-7 col-sm-12 mx-auto" style="height: 60vh;" id="map">

    </div>
</div>

<div class="row">
    <div class="col-8 mx-auto" >
        <h1>Важная информация</h1>
        <p>{{$subject->description}}</p>
        <a class="mx-auto" href="tel:{{$subject->user->phone}}">{{$subject->user->phone}}</a>
    </div>
</div>
{{--    цыкл для вывода слайдера и рядом лежащего--}}



@include('layouts.footer')

<script type="text/javascript">
    let lat ={{$subject->lat}};
    let long ={{$subject->long}};
    ymaps.ready(init);
    function init(){
        var myMap = new ymaps.Map("map", {
                center: [lat, long],
                zoom: 10
            }, {
                searchControlProvider: 'yandex#search'
            }),
            yellowCollection = new ymaps.GeoObjectCollection(null, {
                preset: 'islands#yellowIcon'
            }),
            yellowCoords = [[lat, long]];


        for (var i = 0, l = yellowCoords.length; i < l; i++) {
            yellowCollection.add(new ymaps.Placemark(yellowCoords[i]));
        }
        myMap.geoObjects.add(yellowCollection);

        // Через коллекции можно подписываться на события дочерних элементов.
        yellowCollection.events.add('click', function () { alert('Кликнули по желтой метке') });

    }
</script>
<script type="javascript">
    $('.carousel').carousel();
</script>
@endsection

