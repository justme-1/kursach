@extends('admin.layouts.layout')
@section('content')

{{--    цыкл для вывода слайдера и рядом лежащего--}}
    <div class="row" style="margin-top: 70px">
        <div class="col-md-6 col-sm-12 mx-auto" style="height: 60vh;" id="map">

        </div>
        <div class="col-6">
        <h1>Контакты</h1>
        <p>г.Севастополь ул.Большая Морская 22 2</p>
            <p>почта fvgrew@gmail.com</p>
            <a class="mx-auto" href="tel:+797812347654">+797812347654</a>
    </div>
    </div>


<div class="row">
    <div class="col-8 mx-auto" >

    </div>
</div>
{{--    цыкл для вывода слайдера и рядом лежащего--}}



@include('layouts.footer')

<script type="text/javascript">
    let lat =44.7419;
    let long =33.7319;
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

