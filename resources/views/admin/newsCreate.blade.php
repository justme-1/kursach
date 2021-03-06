@extends('admin.admin')

@section('content')
    <div class="row col-12">
        <div class="col-6 mx-auto" id="inf">
            <form method="post" action="/admin/newsCreate" id="userData" enctype="multipart/form-data">
                <div class="form-row">
                    @csrf
                    <div class="form-group col-md-6">
                        <label for="header">заголовок</label>
                        <input type="text" class="form-control" name="header" id="header" placeholder="Email">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">автор</label>
                        <input type="text" class="form-control"  name="author" placeholder="image" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lat">изображение</label>
                        <input type="file" class="form-control" name="image" id="lat" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="long">дата</label>
                        <input type="date" class="form-control" id="long" name="created_at" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="editor1">описание</label>
                        <textarea class="form-control" name="news" id="editor1" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="editor">краткое описание</label>
                        <textarea class="form-control" name="news_short" id="editor" rows="3"></textarea>
                    </div>
                </div>


                <button type="submit" class="btn btn-primary">изменить</button>
            </form>



        </div>
    </div>





@endsection
