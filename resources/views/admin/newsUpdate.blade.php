@extends('admin.admin')

@section('content')
    <div class="row col-12">
        <div class="col-6 mx-auto" id="inf">
            <form method="post" action="/admin/newsUpdate/{{$news->id}}" id="userData" enctype="multipart/form-data">
                <div class="form-row">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="inputEmail">заголовок</label>
                        <input type="text" class="form-control" name="header" id="inputEmail" placeholder="Email" value="{{$news->header}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">автор</label>
                        <input type="text" class="form-control"  name="author" placeholder="image" value="{{$news->author}}">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lat">изображение</label>
                        <input type="file" class="form-control" name="image" id="lat" value="{{$news->image}}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="long">дата</label>
                        <input type="date" class="form-control" id="long" name="created_at" value="{{$news->created_at}}">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">описание</label>
                        <textarea class="form-control" name="news" id="exampleFormControlTextarea1" rows="3">{{$news->news}}</textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">описание</label>
                        <textarea class="form-control" name="news_short" id="exampleFormControlTextarea1" rows="3">{{$news->news_short}}</textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">изменить</button>
            </form>


            <form method="post" action="/admin/newsDelete/{{$news->id}}"  enctype="multipart/form-data">
                @csrf
                <button type="submit" class="btn btn-primary">удалить</button>
            </form>

        </div>
    </div>





@endsection
