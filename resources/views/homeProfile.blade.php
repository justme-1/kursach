@extends('home')

@section('home')

    <div class="col-6 mx-auto" id="inf">
    <form method="post" action="/userData/update" id="userData" enctype="multipart/form-data">
        <div class="form-row">
            @csrf
            <div class="form-group col-md-6">
                <label for="inputEmail4">почта</label>
                <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Email" value="{{$user->email}}">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">пароль</label>
                <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Password">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">номер телефона</label>
            <input type="tel" class="form-control" id="inputAddress"name="phone" placeholder="tel" value="{{$user->phone}}">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Имя</label>
                <input type="text" class="form-control" id="inputCity" name="name" value="{{$user->name}}">
            </div>
            <div class="form-group col-md-6">
                <label for="pic">фото пользователя</label>
                <input type="file" class="form-control" id="pic" name="pic" value="">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">изменить</button>
    </form>

    </div>


@endsection
