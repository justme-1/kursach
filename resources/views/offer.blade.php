@extends('admin.layouts.layout')
@section('content')



    <div class="row" id="content">
        <div class="col-11 mx-auto mt-5">
        <form class="form-inline row" action="/home/objectFilter" method="post" enctype="multipart/form-data">
           @csrf
           <button id="result" class="btn btn-primary mb-2"></button>
            <div class="form-group mb-2">
            <select class="custom-select" name="type" id="type">
                <option selected>@lang('message.chooseType')</option>
                <option value="1">@lang('message.chooseApartment')</option>
                <option value="2">@lang('message.chooseHouse')</option>
                <option value="3">@lang('message.chooseLand')</option>
                <option value="4">@lang('message.chooseCommercial')</option>
            </select>
            </div>
            <div class="form-group mb-2">
                <label for="price1" class="sr-only">@lang('message.choosePriceBefore')</label>
                <input type="text" class="form-control"name="price1" id="price1" placeholder="@lang('message.choosePriceBefore')">
            </div>
            <div class="form-group mx-sm-3 mb-2">
                <label for="price2" class="sr-only">@lang('message.choosePriceAfter')</label>
                <input type="text" class="form-control"name="price2" id="price2" placeholder="@lang('message.choosePriceAfter')">
            </div>
            <div class="form-group mb-2">
            <select class="custom-select" name="rooms" id="rooms">
                <option selected>@lang('message.chooseRooms')</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>
            </div>
            <div class="form-group mb-2">
            <select class="custom-select" name="area" id="area">
                <option selected>@lang('message.chooseArea')</option>
                <option value="1">1-50</option>
                <option value="2">50-100</option>
                <option value="3">100-200</option>
                <option value="4">&gt 200</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary mb-2">@lang('message.find')</button>
        </form>
        </div>
        <script>
            let type=document.getElementById('type');
            let price1=document.getElementById('price1');
            let price2=document.getElementById('price2');
            let rooms=document.getElementById('rooms');
            let area=document.getElementById('area');
            type.addEventListener('change',ajax);
            price1.addEventListener('change',ajax);
            price2.addEventListener('change',ajax);
            rooms.addEventListener('change',ajax);
            area.addEventListener('change',ajax);
            function ajax() {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                {
                    $.ajax({
                        type:'GET',
                        url:'/filter',
                        data:{ 'type': type.value, 'price1': price1.value, 'price2': price2.value,'rooms': rooms.value,'area': area.value},
                        success:function(data){
                            let afterParse=JSON.parse(data);
                            document.getElementById('result').innerHTML=afterParse.count;
                            let divWithObjectInf;
                            subj=document.getElementById('subjects');
                            subj.innerHTML=null;
                            for(let key in afterParse.subjects){
                                divWithObjectInf=document.createElement('div');
                                divWithObjectInf.className="col-6";
                                divWithObjectInf.innerHTML='<div class="card mb-4 shadow-sm">'+
                                    '<img class="bd-placeholder-img card-img-top" src='+JSON.parse(afterParse.subjects[key]['images']).k1+'>'+
                                    '<div class="card-body">'+
                                '<p class="card-text" style="font-size: smaller;overflow: hidden;height: 100px;">'+afterParse.subjects[key]['description']+'</p>'+
                                '<div class="d-flex justify-content-between align-items-center">'+
                                '<div class="btn-group">'+
                                '<a type="button" href="/object/'+afterParse.subjects[key]['id']+' class="btn btn-sm btn-outline-secondary">View</a>'+
                                '</div>'+
                                '<small class="text-muted">цена:'+afterParse.subjects[key]['price']+'; площадь:'+afterParse.subjects[key]['area']+' </small>'+
                                '</div></div></div>';
                                subj.appendChild(divWithObjectInf);


                            }
                        }
                    });
                }
            }
        </script>

        <div class="col-md-5 col-sm-12" id="objects">


            <div class=" row d-flex justify-content-between flex-wrap " id="subjects" >
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
                            @if(App::isLocale('en'))
                            <p class="card-text" style="font-size: smaller;overflow: hidden;height: 100px;">{{$subject->description}}</p>
                            @else
                                <p class="card-text" style="font-size: smaller;overflow: hidden;height: 100px;">{{$subject->descriptionRu}}</p>
                            @endif
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a type="button" href="/object/{{$subject->id}}" class="btn btn-sm btn-outline-secondary">@lang('message.view')</a>
                                </div>
                                <small class="text-muted">@lang('message.price'):{{$subject->price}}; @lang('message.area'):{{$subject->area}} </small>
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
    <script>
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
                    @if(App::isLocale('en'))
                    balloonContentBody: '{{substr($subject->description,0,100)}}'+ {{$subject->price}},
                    @else
                    balloonContentBody: '{{substr($subject->descriptionRu,0,100)}}'+ {{$subject->price}},
                    @endif
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

