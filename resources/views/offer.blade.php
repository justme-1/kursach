@extends('admin.layouts.layout')
@section('content')

    <div class="row" id="content">
        <div class="col-md-5 col-sm-12" id="objects">
            <div class=" row d-flex justify-content-between flex-wrap " >
{{--                цыкл здесь--}}
                   @foreach($subjects as $subject)
                <div class="col-6">
                    <div class="card mb-4 shadow-sm">
                        @if(Auth::check())
                            <span class="iconify" style="z-index: 100;position: absolute;left: 10px;top:10px;color: @if($subject->users()->where('id' !=Auth::user()->id)==Auth::user()){{'red'}} @else {{'white'}} @endif ;" data-icon="topcoat:like" data-inline="false"></span>
                        @endif
                        {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
                        <img class="bd-placeholder-img card-img-top" src={{json_decode($subject->images)->k1}}>
                        <div class="card-body">
                            <p class="card-text" style="font-size: smaller;overflow: hidden;height: 100px;">{{$subject->description}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" href="/object/{{$subject->id}}" class="btn btn-sm btn-outline-secondary">View</a>
                                </div>
                                <small class="text-muted">lat:{{$subject->lat}}; long:{{$subject->long}} </small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                {{--                цыкл здесь--}}
            </div>
        </div>



        <div class="col-md-7 col-sm-12 mx-auto" style="height: 87vh;" id="map">

        </div>


    </div>
    <script type="text/javascript">


        ymaps.ready(init);

        function init () {
            let geolocation = ymaps.geolocation;
            var myMap = new ymaps.Map("map", {
                    center: [54.83, 37.11],
                    zoom: 5
                }, {
                    searchControlProvider: 'yandex#search'
                }),
                @foreach($subjects as $subject)

                myPlacemark = new ymaps.Placemark([{{$subject->lat}}, {{$subject->long}}], {
                    // Чтобы балун и хинт открывались на метке, необходимо задать ей определенные свойства.
                    balloonContentHeader: "<img src='{{json_decode($subject->images)->k1}}'>",
                    balloonContentBody: '{{$subject->description}}'.slice(0,100)+ {{$subject->price}},
                    balloonContentFooter: "<a href='/object/{{$subject->id}}'>страница объекта</a>",
                    hintContent: "Хинт метки"
                });


            myMap.geoObjects.add(myPlacemark);
            @endforeach
            geolocation.get({
                provider: 'yandex',
                mapStateAutoApply: true
            }).then(function (result) {
                // Красным цветом пометим положение, вычисленное через ip.
                result.geoObjects.options.set('preset', 'islands#redCircleIcon');
                result.geoObjects.get(0).properties.set({
                    balloonContentBody: 'Мое местоположение'
                });
                myMap.geoObjects.add(result.geoObjects);
            });
        }
    </script>
    <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
@endsection

