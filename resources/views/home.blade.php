@extends('layouts.layout')

@section('content')
    <div class="row" style="margin-top: 70px">
        <div class="col-4 mx-auto">

            <a href="/home/profile" id="profile" class="badge badge-light">личная информация</a>
            <a href="#" id="obj" class="badge badge-light">объекты</a>
            <a href="#" id="favorite" class="badge badge-light">избранные</a>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mx-auto" id="inf">
          @yield('home')

        </div>
    </div>



@endsection
