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
</style>
    <div class="content">
        <div class="title m-b-md">
            Medical Assistance
        </div>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/medical/create') }}" role="button">Add New Medical Details</a>
        @endif
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#biotech"><b>Ashram Side</b></a></li>
    <li><a data-toggle="tab" href="#stage"><b>College Side</b></a></li>


  </ul>
  <div class="tab-content">
  <div id="biotech" class="tab-pane active">
        <h3>Doctor Details</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                      <table class="table">
                        <thead>
                          <th>Location</th>
                          <th>Doctor</th>
                          <th>Contact</th>
                          <th>Discipline</th>
                        </thead>
                        <tbody>
                          @foreach($medical as $med)
                              <tr>
                                @if($med->side=='0')
                                  <th>{{ $med->loc}}</th>
                                  <th>{{ $med->doc}}</th>
                                  <th>{{ $med->contact}}</th>
                                  <th>{{ $med->dis}}</th>
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
                        <div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                        <div id="carbonads-container">
                            <div class="carbonad">
                                <div id="azcarbon">
                                    <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                    <span class="carbonad-text">Medical Aid Post 1 near Biotech Canteen</span>
                                </div>
                            </div>
                        </div>

                        <div class="glyphicon glyphicon-plus">Medical AidPost 2</div>
                        <div id="carbonads-container">
                            <div class="carbonad">
                                <div id="azcarbon">
                                    <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                    <span class="carbonad-text">Medical Aid Post 2  left side Biotech cannteen</span>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        <div id="stage" class="tab-pane fade">
            <h3>Doctor Details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                            <thead>
                              <th>Location</th>
                              <th>Doctor</th>
                              <th>Contact</th>
                              <th>Discipline</th>
                            </thead>
                            <tbody>
                              @foreach($medical as $med)
                                  <tr>
                                    @if($med->side=='1')
                                      <th>{{ $med->loc}}</th>
                                      <th>{{ $med->doc}}</th>
                                      <th>{{ $med->contact}}</th>
                                      <th>{{ $med->dis}}</th>
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
                            <div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                            <div id="carbonads-container">
                                <div class="carbonad">
                                    <div id="azcarbon">
                                        <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                        <span class="carbonad-text">Medical Aid Post 1  left side Main stage</span>
                                    </div>
                                </div>
                            </div><div class="glyphicon glyphicon-plus">Medical AidPost 1</div>
                            <div id="carbonads-container">
                                <div class="carbonad">
                                    <div id="azcarbon">
                                        <span><span class="carbonad-image"><a href="location1" target="_blank"><img width="130" height="100" border="0" src="https://assets.servedby-buysellads.com/p/manage/asset/id/32130" class="carbonad-image carbonad-img" style="max-width:130px;"></a></span>
                                        <span class="carbonad-text">Medical Aid Post 2  right side Main stage</span>
                                    </div>
                                </div>
                            </div>

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
