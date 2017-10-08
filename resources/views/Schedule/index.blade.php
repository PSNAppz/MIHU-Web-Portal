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
.color {
    color: black;
    font-weight: bold;
    padding: 15px;
    border-left: 2px solid #ccc;
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
            Event Schedule
        </div>
    </div>

    <br>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#9"><b>9th</b></a></li>
    <!--    <li><a data-toggle="tab" href="#27"><b>27th</b></a></li>-->

    </ul>
    <div class="tab-content">
    <!--<div id="8" class="tab-pane active">
        <h3 align="center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/8.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>-->
    <div id="9" class="tab-pane active">
        <h3 align="center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/general1.PNG')}}">
                            <img src="{{asset('/images/general2.PNG')}}">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
<!--    <div id="27" class="tab-pane fade">
        <h3 align="center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/27a.jpg')}}">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/27b.jpg')}}">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/27c.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>-->
</div>
</div>
@include('layouts.footer')

@endsection
