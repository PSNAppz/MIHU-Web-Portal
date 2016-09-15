@extends('layouts.app')
<head>
    
</head>

@section('content')
<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;
    height: 100%;
    margin: 0;
}
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Our Proud Coordinators
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#students"><b>Coordinators</b></a></li>
  </ul>
  <div class="tab-content">
  <div id="students" class="tab-pane active">
        <h3><i>While Carrying Responsibilities Never Forget to Smile.</i></h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(!Auth::guest())
                <a class="btn btn-success" href="{{ url('/coordinator/create') }}" role="button">Add a Coordinator</a>
            @endif
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                        <table id="cord" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Name</th>
                                <th>Seva</th>
                                <th>Occupation</th>
                                <th>Contact</th>
                                @if(!Auth::guest())
                                <th>Update</th>
                                <th>Delete</th>
                            @endif
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($coordinators as $cord)
                                    <tr>

                                        <th>{{ $cord->name}}</th>
                                        <th>{{ $cord->seva}}</th>
                                        @if($cord->occupation == 1)
                                        <th>Faculty</th>
                                    @elseif($cord->occupation==2)
                                        <th>Student</th>
                                    @else
                                        <th>Other</th>
                                    @endif
                                        <th>{{ $cord->contact}}</th>

                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('coordinator.edit', $cord->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['coordinator.destroy', $cord->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}</th>
                                        @endif
                                    </tr>
                                @endforeach
                          </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--paginator here-->
</div>
</div>
</div>

@include('layouts.footer')
