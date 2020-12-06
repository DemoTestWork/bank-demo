@extends('layouts.app')


@section('title')
    {{ config('app.name') }}
@endsection

@section('content')
    <div class="container">
        <h1 class="h2 text-center text-main pt-4">{{ __('app.web.app.name') }}</h1>
        <p class="text-muted text-center">{{ __('app.web.app.slogan') }}</p>
    </div>

    <div class="bottom-shad mb-5"></div>
    <div class="row mx-md-5 px-md-5 h-100">
        <div class="col-10 col-md-8 my-auto py-4">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
                    <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>Example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
                    <div class="container">
                    <div class="carousel-caption">
                        <h1>Another example headline.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
                    <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>One more for good measure.</h1>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                    </div>
                </div>
                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="col-10 col-md-4 my-auto bg-light"> 
            <form class="mt-1 mt-md-3" action="" method="post" autocomplete="off">
                <fieldset class="text-center h6 mb-4">{{ strtoupper(__('app.authentication')) }}</fieldset>
                @csrf
                <div class="form-group mb-4 pb-3">
                    <input type="text" class="form-control" id="login" name="login" placeholder="{{  strtoupper(__('app.placeholder.login')) }}" autocomplete="off" required>
                </div>
                <div class="form-group mb-4 pb-3">
                    <input type="password" class="form-control" id="password" name="password" placeholder="{{  strtoupper(__('app.placeholder.password')) }}" autocomplete="off" required>
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn bg-main">{{__('app.to_login')}}</button>
                </div>
            </form>
        </div>
    </div>
    <div class="top-shad mt-5"></div>
    <div class="d-flex justify-content-around text-center text-muted px-md-5 my-3 mx-md-5">
        <div class="cont">
            <span class="fa fa-lock fa-3x mb-2"></span>
            <br>
            <span>{{ __('app.guaranteed_security') }}</span>
        </div>
        <div class="cont ">
            <span class="fa fa-cogs fa-3x mb-2"></span>
            <br>
            <span>{{ __('app.innovative_services') }}</span>
        </div>
        <div class="cont ">
            <span class="fa fa-mobile fa-3x mb-2"></span>
            <br>
            <span>{{ __('app.accessibility') }}</span>
        </div>
        <div class="cont">
            <span class="far fa-life-ring fa-3x mb-2"></span>
            <br>
            <span>{{ __('app.contextual_help') }}</span>
        </div>
        <div class="cont">
            <span class="fa fa-comments fa-3x mb-2"></span>
            <br>
            <span>{{ __('app.support') }}</span>
        </div>
    </div>
@endsection