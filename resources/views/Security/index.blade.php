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
            Security
        </div>
    </div>
    <div class="container">
     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#secpoint"><b>Security Points</b></a></li>
        <li><a data-toggle="tab" href="#seccordinator"><b>Security Coordinators</b></a></li>
        <li><a data-toggle="tab" href="#secshift"><b>Security Shifts</b></a></li>
        <li><a data-toggle="tab" href="#secbatch"><b>Security Batch</b></a></li>

     </ul>
<div class="tab-content">
<div id="secpoint" class="tab-pane active">
    <h3>Security Points Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  @if(!Auth::guest())
                  <a class="btn btn-success" href="{{ url('/security/create') }}" role="button">Add New Security Details</a>
                  <hr>
                  @endif
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th>Location</th>
                              <th>Near By</th>
                              <th>Person In Charge</th>
                              <th>Contact No</th>
                              @if(!Auth::guest())
                                  <th></th>
                                  <th></th>
                              @endif
                          </thead>
                          <tbody>
                              @foreach($sec as $s)
                                  <tr>
                                      <th>{{$s->location}}</th>
                                      <th>{{$s->nearby}}</th>
                                      <th>{{$s->name}}</th>
                                      <th>{{$s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('security.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['security.destroy', $s->id]]) }}
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
      {{$sec->links()}}
</div>

      <div id="seccordinator" class="tab-pane fade">
    <h3>Security Coordinator Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th>Name</th>
                              <th>Batch in charge</th>
                              <th>Contact No</th>
                              @if(!Auth::guest())
                                  <th></th>
                                  <th></th>
                              @endif
                          </thead>
                          <tbody>
                              @foreach($sec as $s)
                                  <tr>
                                      @if($s->iscord == 1)
                                      <th>{{$s->name}}</th>
                                      <th>{{$s->batch}}</th>
                                      <th>{{$s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('security.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['security.destroy', $s->id]]) }}
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
      {{$sec->links()}}

</div>

      <div id="secshift" class="tab-pane fade">
          <h3>Security Shifts Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                           <thead>
                              <th>Location</th>
                              <th>From Time</th>
                              <th>To Time</th>
                              <th>Person In Charge</th>
                              <th>Contact No</th>
                              @if(!Auth::guest())
                                  <th></th>
                                  <th></th>
                              @endif
                          </thead>
                          <tbody>
                              @foreach($sec as $s)
                                  <tr>
                                      <th>{{$s->location}}</th>
                                      <th>{{$s->from}}</th>
                                      <th>{{$s->to}}</th>
                                      <th>{{$s->name}}</th>
                                      <th>{{$s->contact}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('security.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['security.destroy', $s->id]]) }}
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
      {{$sec->links()}}

</div>

</div>
</div>

@include('layouts.footer')
@endsection
