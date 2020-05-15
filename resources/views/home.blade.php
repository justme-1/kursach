@extends('admin.layouts.layout')

@section('content')
    <div class="row" style="margin-top: 70px">
        <div class="col-4 mx-auto">

            <a href="/home" id="profile" class="badge badge-light">личная информация</a>
            <a href="/home/objects" id="obj" class="badge badge-light">мои объекты</a>
            <a href="/home/addObject" id="favorite" class="badge badge-light">добавить объект</a>
        </div>
    </div>

    <div class="row">

          @yield('home')

    </div>



@endsection
