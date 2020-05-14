@extends('layouts.layout')
@section('content')

    {{--    цыкл для вывода слайдера и рядом лежащего--}}


        <div class="row ourSuccess">
            <div class="col-9 mx-auto">
                <div class="jumbotron">
                    <img src="{{$news->image}}" class="rounded float-left w-20" style="margin-right: 20px;" alt="...">
                    <h1>{{$news->header}}</h1>
                    <p class="lead"> {{$news->author}}</p>
                    <p class="lead"> {{$news->news}}{{$news->news}}</p>
                    <p class="lead float-right"> {{$news->created_at}}</p>
                </div>
            </div>
        </div>


    <script type="javascript">
        $('.carousel').carousel();
    </script>
@endsection
