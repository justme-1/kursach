@extends('admin.admin')
news.blade.php
@section('content')
    <h3>наши новости</h3>
    <h5>Добавляйте и изменяйте новости</h5>
<a href="/admin/newsCreate">добавить новость</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">заголовок</th>
            <th scope="col">изображения</th>
            <th scope="col">описпние</th>
            <th scope="col">автор</th>
            <th scope="col">краткое описание</th>
        </tr>
        </thead>
        <tbody>
        @foreach($news as $k=>$v)

        <tr id="{{$v->id}}">
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->id}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->header}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light"><img src="{{$v->image}}" width="50px"/></a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->news}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->author}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->news_short}}</a></td>
        </tr>

        @endforeach

        </tbody>
    </table>
<div class="row">
    <div class="col-3 mx-auto">{{$news->links()}}</div>
</div>


@endsection
