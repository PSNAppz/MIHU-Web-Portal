@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}
img {
    border-radius: 4px;
    box-shadow: 0 0 10px 3px #bbb;
    width:100%;
    height:auto;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            MAP
        </div>
    </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">Engineering College Map</div>
                            <div class="panel-body">
                                <img src="{{asset('/images/map3.PNG')}}">
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">Ayurveda Map</div>
                            <div class="panel-body">
                                <img src="{{asset('/images/ayurveda map.png')}}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@include('layouts.footer')
@endsection
