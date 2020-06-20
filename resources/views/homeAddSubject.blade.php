@extends('home')

@section('home')
    <div class="row col-12">
    <div class="col-6 mx-auto" id="inf">
        <form method="post" action="/object/add" id="userData" enctype="multipart/form-data">
            <div class="form-row">
                @csrf
                <div class="form-group col-md-6">
                    <label for="inputEmail">цена</label>
                    <input type="text" class="form-control" name="price" id="inputEmail" placeholder="цена" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="type">выберете тип</label>
                    <select class="custom-select" name="type" id="type" >

                        <option value="1">квартира</option>
                        <option value="2">дом</option>
                        <option value="3">участок</option>
                        <option value="4">комерческая</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <label for="rooms">введите количество комнат</label>
                    <input type="text" class="form-control" name="rooms" id="rooms" placeholder="" >
                </div>


                <div class="form-group col-md-6">
                    <label for="area">введите площадь</label>
                    <input type="text" class="form-control" name="area" id="area" placeholder="">
                </div>

                <div class="form-group col-md-6">
                    <label for="inputPassword4">добавить изображение</label>
                    <input type="file" class="form-control" multiple name="image[]" placeholder="image">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="lat">широта</label>
                    <input type="text" class="form-control" name="lat" id="lat" value="">
                </div>
                <div class="form-group col-md-6">
                    <label for="long">долгота</label>
                    <input type="text" class="form-control" id="long" name="long" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="editor">описание eng</label>
                    <textarea class="form-control" name="description" id="editor" rows="3"></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="form-group">
                    <label for="editor">описание на русском</label>
                    <textarea class="form-control" name="descriptionRu" id="editor1" rows="3"></textarea>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">добавить</button>
        </form>



    </div>
    </div>
    <div class="row">
        <div class="col-12 col-sm-12 mx-auto" >
            <div class="mx-auto" style="height: 60vh; width: 50vw;margin-left: 50%;transform: translateX(50%);" id="map">

            </div>
        </div>
    </div>

    {{--    цыкл для вывода слайдера и рядом лежащего--}}


    <script>
        CKEDITOR.replace( 'editor' );
        CKEDITOR.replace( 'editor1' );
    </script>


    <script type="text/javascript">
        let lat =30;
        let long =30;
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
                });




            // Через коллекции можно подписываться на события дочерних элементов.
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
