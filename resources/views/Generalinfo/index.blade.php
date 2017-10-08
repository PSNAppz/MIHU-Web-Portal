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
            General Informations
        </div>
    </div>

    <br>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#gen"><b>General Info</b></a></li>
        <li><a data-toggle="tab" href="#locate"><b>Location Information</b></a></li>

    </ul>
    <div class="tab-content">
    <div id="gen" class="tab-pane active">
        <h3 align="center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/general5.PNG')}}">
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/general6.PNG')}}">
                        </div>
                    </div>
                </div>
            </div>
            <div>
            </div>
        </div>
    </div>
    <div id="locate" class="tab-pane fade">
        <h3 align="center"></h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/map3.PNG')}}">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@include('layouts.footer')

@endsection
