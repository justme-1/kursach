@extends('home')

@section('home')
    <div class="row" id="content">
        <div class="col-10 mx-auto" id="objects">
            <div class=" row d-flex justify-content-between flex-wrap " >
                {{--                цыкл здесь--}}
                @foreach($subjects as $subject)
                    <div class="col-3">
                        <div class="card mb-4 shadow-sm">
                            {{--                            <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
                            <img class="bd-placeholder-img card-img-top" src={{json_decode($subject->images)->k1}}>
                            <div class="card-body">
                                <p class="card-text" style="font-size: smaller;overflow: hidden;height: 100px;">{{$subject->description}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a type="button" href="/home/object/{{$subject->id}}" class="btn btn-sm btn-outline-secondary">изменить №{{$subject->id}}</a>
                                    </div>
                                    <small class="text-muted">lat:{{$subject->lat}}; long:{{$subject->long}} </small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{--                цыкл здесь--}}
            </div>
        </div>




@endsection
