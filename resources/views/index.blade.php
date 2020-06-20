@extends('admin.layouts.layout')
@section('content')

{{--    цыкл для вывода слайдера и рядом лежащего--}}
    <div class="row" style="margin-top: 70px">
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade col-6 mx-auto" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/image/test.jpg" class="d-block w-100" alt="aaa">
                <div class="carousel-caption d-none d-md-block">
                    <h5>@lang('message.mainFirstSlideHeader')</h5>
                    <p>@lang('message.mainFirstSlideContent')</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="/image/test.jpg" class="d-block w-100" alt="aaa">
                <div class="carousel-caption d-none d-md-block">
                    <h5>@lang('message.mainSecondSlideHeader')</h5>
                    <p>@lang('message.mainSecondSlideContent')</p>
                </div>
            </div>
{{--            цыкл для вывода слайдов--}}
            <div class="carousel-item">
                <img src="/image/test.jpg" class="d-block w-100" alt="aaa">
                <div class="carousel-caption d-none d-md-block">
                    <h5>@lang('message.mainThirdSlideHeader')</h5>
                    <p>@lang('message.mainThirdSlideContent')</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </div>
{{--    цыкл для вывода слайдера и рядом лежащего--}}
<div class="row ourSuccess">
    <div class="col-9 mx-auto">
        <div class="jumbotron">
            <h1>@lang('message.ourSuccess')</h1>
            <p class="lead">@lang('message.ourSuccessContent')</p>
            <a class="btn btn-dark" href="" role="button">@lang('message.partners')</a>
        </div>
    </div>
</div>


<script type="javascript">
    $('.carousel').carousel();
</script>
@endsection

