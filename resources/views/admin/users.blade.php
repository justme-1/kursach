@extends('admin.admin')

@section('content')
    <h3>пользователи</h3>
    <h5>Добавляйте и изменяйте пользователей/h5>
<a href="/admin/addUsers">добавить новость</a>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">имя</th>
            <th scope="col">изображения</th>
            <th scope="col">телефон</th>
            <th scope="col">почта</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $k=>$v)

        <tr id="{{$v->id}}">
            <td><a href="/admin/usersUpdate/{{$v->id}}" class="badge badge-light">{{$v->id}}</a></td>
            <td><a href="/admin/usersUpdate/{{$v->id}}" class="badge badge-light">{{$v->name}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->image}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->phone}}</a></td>
            <td><a href="/admin/newsUpdate/{{$v->id}}" class="badge badge-light">{{$v->email}}</a></td>
        </tr>

        @endforeach

        </tbody>
    </table>
<div class="row">
    <div class="col-3 mx-auto">{{$users->links()}}</div>
</div>


@endsection
