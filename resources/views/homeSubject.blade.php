@extends('home')

@section('home')
    <div class="row col-12">
    <div class="col-6 mx-auto" id="inf">
        <form method="post" action="/object/update/{{$subject->id}}" id="userData" enctype="multipart/form-data">
            <div class="form-row">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail">цена</label>
                    <input type="text" class="form-control" name="price" id="inputEmail" placeholder="Email" value="{{$subject->price}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">добавить изображение</label>
                    <input type="file" class="form-control" multiple name="image" placeholder="image">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lat">широта</label>
                    <input type="text" class="form-control" name="lat" id="lat" value="{{$subject->lat}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="long">долгота</label>
                    <input type="text" class="form-control" id="long" name="long" value="{{$subject->long}}">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="editor">описание</label>
                    <textarea class="form-control" name="description" id="editor" rows="3">{{$subject->description}}</textarea>
                </div>
            </div>



            <button type="submit" class="btn btn-primary">изменить</button>
        </form>


        <form method="post" action="/object/delete/{{$subject->id}}"  enctype="multipart/form-data">
                @csrf
            <button type="submit" class="btn btn-primary">удалить</button>
        </form>

    </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 mx-auto" >
            <div class="mx-auto" style="height: 60vh; width: 50vw;margin-left: 50%;transform: translateX(50%);" id="map">

            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace( 'editor' );
    </script>
    {{--    цыкл для вывода слайдера и рядом лежащего--}}





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
                },{
                    balloonMaxWidth: 200,
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
            myMap.events.add('click', function (e) {
                if (!myMap.balloon.isOpen()) {
                    var coords = e.get('coords');
                    document.getElementById('lat').value=coords[0].toPrecision(6);
                    document.getElementById('long').value=coords[1].toPrecision(6);
                    myMap.balloon.open(coords, {
                        contentHeader:'Событие!',
                        contentBody:'<p>вы выбрали местоположение</p>' +
                            '<p>Координаты объекта: ' + [
                                coords[0].toPrecision(6),
                                coords[1].toPrecision(6)
                            ].join(', ') + '</p>',
                        contentFooter:'<sup>Щелкните еще раз</sup>'
                    });
                }
                else {
                    myMap.balloon.close();
                }
            });

            // Обработка события, возникающего при щелчке
            // правой кнопки мыши в любой точке карты.
            // При возникновении такого события покажем всплывающую подсказку
            // в точке щелчка.
            myMap.events.add('contextmenu', function (e) {
                myMap.hint.open(e.get('coords'), 'Кто-то щелкнул правой кнопкой');
            });

            // Скрываем хинт при открытии балуна.
            myMap.events.add('balloonopen', function (e) {
                myMap.hint.close();
            });
        }
    </script>




@endsection
