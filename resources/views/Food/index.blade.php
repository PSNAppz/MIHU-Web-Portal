@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
       <div class="content">
        <div class="title m-b-md">
            Food
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#pm"><b>Police Mess</b></a></li>
    <li><a data-toggle="tab" href="#nc"><b>Canteens</b></a></li>
    <li><a data-toggle="tab" href="#lm"><b>Prasad Making</b></a></li>
    <li><a data-toggle="tab" href="#mm"><b>Media Mess</b></a></li>

  </ul>
</div>
  <div class="tab-content">
  <div id="pm" class="tab-pane active">
            <h3 align='center'>Food details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <thead>
                                <th>data here </th>
                              
                            </thead>
                            <tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
</div>
 
        <div id="nc" class="tab-pane fade">
            <h3 align='center'>Food details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <thead>
                                <th>data here </th>
                              
                            </thead>
                            <tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>

 
        <div id="lm" class="tab-pane fade">
            <h3 align='center'>Food details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <thead>
                                <th>data here </th>
                              
                            </thead>
                            <tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>

  <div id="mm" class="tab-pane fade">
            <h3 align='center'>Food details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                             <thead>
                                <th>data here </th>
                              
                            </thead>
                            <tbody>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@include('layouts.footer')
@endsection
