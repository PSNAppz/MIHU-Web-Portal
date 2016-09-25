
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
            Medical Assistance
        </div>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/medical/create') }}" role="button">Add New Doctor Details</a>
        @endif
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/emergency/create') }}" role="button">Add New Emergency Details</a>
        @endif
    </div>
<div class="container">
    <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#stage"><b>College Side</b></a></li>
    <li ><a data-toggle="tab" href="#ashram"><b>Ashram Side</b></a></li>
    <li><a data-toggle="tab" href="#emer"><b>Emergency</b></a></li>

  </ul>
  <div class="tab-content">
  <div id="ashram" class="tab-pane fade">
        <h3>Amritakripa Hospital</h3>
        <h3>Doctor Details</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                      <table class="table">
                        <thead>
                          <th>Location</th>
                          <th>Doctor</th>
                          <th>Contact</th>
                          <th>Discipline</th>
                          <th>Time Shift</th>
                        </thead>
                        <tbody>
                          @foreach($medical as $med)
                              <tr>
                                @if($med->side=='0')
                                  <th>{{ $med->loc}}</th>
                                  <th>{{ $med->doc}}</th>
                                  <th>{{ $med->contact}}</th>
                                  <th>{{ $med->dis}}</th>
                                  <th>{{ $med->shift}}</th>
                                  @if(!Auth::guest())
                                  <th><a class="btn btn-warning" href="{{ route('medical.edit', $med->id,'/edit') }}" role="button">Update</a></th>
                                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['medical.destroy', $med->id]]) }}
                                  {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                  {{ Form::close() }}</th>
                                  @endif
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
</div>
        <div id="stage" class="tab-pane active">
            <h3>Doctor Details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div style="overflow-x:auto;">
                          <table class="table">
                            <thead>
                              <th>Location</th>
                              <th>Doctor</th>
                              <th>Contact</th>
                              <th>Discipline</th>
                              <th>Time Shift</th>
                            </thead>
                            <tbody>
                              @foreach($medical as $med)
                                  <tr>
                                    @if($med->side=='1')
                                      <th>{{ $med->loc}}</th>
                                      <th>{{ $med->doc}}</th>
                                      <th>{{ $med->contact}}</th>
                                      <th>{{ $med->dis}}</th>
                                      <th>{{ $med->shift}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('medical.edit', $med->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['medical.destroy', $med->id]]) }}
                                      {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                      {{ Form::close() }}</th>
                                      @endif
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
        {{$medical->links()}}
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            <div style="overflow-x:auto;">
    <div id="carbonads-container">
        <div class="carbonad">
            <div id="azcarbon">
                <span><span class="carbonad-image">
                    <h3>Medical Aid Post   left side Main stage Near Police Control Room.</h3>
                    <h3>Medical Clinic Near Cloak Room.</h3>

    <img src="{{asset('images/medical.jpg')}}" class="carbonad-image carbonad-img"></span>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</div>

<div id="emer" class="tab-pane fade">
    <h3></h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <hr>
            <center style="font-size:20px"><strong>Ambulance</strong></center>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="overflow-x:auto;">
                  <table class="table">
                    <thead>
                      <th>Name</th>
                      <th>Contact</th>
                    </thead>
                    <tbody>
                      @foreach($emergency as $emer)
                          <tr>
                            @if($emer->service=='Ambulance')
                              <th>{{ $emer->name}}</th>
                              <th>{{ $emer->contact}}</th>
                              @if(!Auth::guest())
                              <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                              <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy', $emer->id]]) }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                              {{ Form::close() }}</th>
                              @endif
                            @endif
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
                </div>
              </div>
              <hr>
              <center style="font-size:20px"><strong>Wheelchair & Equipments</strong></center>
              <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>Name</th>
                      <th>Contact</th>
                    </thead>
                    <tbody>
                      @foreach($emergency as $emer)
                          <tr>
                            @if($emer->service=='Wheelchair')
                              <th>{{ $emer->name}}</th>
                              <th>{{ $emer->contact}}</th>
                              @if(!Auth::guest())
                              <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                              <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy', $emer->id]]) }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                              {{ Form::close() }}</th>
                              @endif
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
</div>
</div>
@include('layouts.footer')

@endsection
