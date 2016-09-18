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
            Special Events
        </div>
    </div>
    <div class="container">
     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#seventsaree"><b>Saree Distribution</b></a></li>
        <li><a data-toggle="tab" href="#seventpension"><b>Pension Distribution</b></a></li>
        <li><a data-toggle="tab" href="#seventmarriage"><b>Marriage</b></a></li>
     </ul>
<div class="tab-content">
<div id="seventsaree" class="tab-pane active">
    <h3>Saree Distribution Details</h3>
    @if(!Auth::guest())
    <a class="btn btn-success" href="{{ url('/specialevent/create') }}" role="button">Add New</a>
    <a  id="xlsf" href="{{ URL::to('downloadExcel/specialevent/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
    <a id="xlsxf" href="{{ URL::to('downloadExcel/specialevent/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
    <a id="csvf" href="{{ URL::to('downloadExcel/specialevent/csv') }}"><button class="btn btn-info">Download CSV</button></a>
@endif

    <hr>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                              @if(!Auth::guest())
                              <th></th>
                              <th></th>
                          @endif
                          </thead>
                          <tbody>
                              @foreach($se as $s)
                                  <tr>
                                      @if($s->category==0)
                                      <th>{{ $s->date}}</th>
                                      <th>{{ $s->time}}</th>
                                      <th>{{ $s->location}}</th>
                                      <th>{{ $s->coordinator}}</th>
                                      <th>{{ $s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('specialevents.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['specialevents.destroy', $s->id]]) }}
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
      {{$se->links()}}
</div>

      <div id="seventpension" class="tab-pane fade">
    <h3 align='center'>Pension Distribution Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  @if(!Auth::guest())
                  <a class="btn btn-success" href="{{ url('/specialevents/create') }}" role="button">Add New Accommodation Details</a>
                  @endif
                  <hr>
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                              @if(!Auth::guest())
                              <th></th>
                              <th></th>
                          @endif
                          </thead>
                          <tbody>
                              @foreach($se as $s)
                                  <tr>
                                      @if($s->category==1)
                                      <th>{{ $s->date}}</th>
                                      <th>{{ $s->time}}</th>
                                      <th>{{ $s->location}}</th>
                                      <th>{{ $s->coordinator}}</th>
                                      <th>{{ $s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('specialevents.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['specialevents.destroy', $s->id]]) }}
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
      {{$se->links()}}

</div>

      <div id="seventmarriage" class="tab-pane fade">
          <h3 align='center'>Marriage Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  @if(!Auth::guest())
                  <a class="btn btn-success" href="{{ url('/specialevents/create') }}" role="button">Add New Accommodation Details</a>
                  @endif
                  <hr>
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                           <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                              @if(!Auth::guest())
                              <th></th>
                              <th></th>
                          @endif
                          </thead>
                          <tbody>
                              @foreach($se as $s)
                                  <tr>
                                      @if($s->category==2)
                                      <th>{{ $s->date}}</th>
                                      <th>{{ $s->time}}</th>
                                      <th>{{ $s->location}}</th>
                                      <th>{{ $s->coordinator}}</th>
                                      <th>{{ $s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('specialevents.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['specialevents.destroy', $s->id]]) }}
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
      {{$se->links()}}
  </div>
  </div>
</div>
@include('layouts.footer')
@endsection
