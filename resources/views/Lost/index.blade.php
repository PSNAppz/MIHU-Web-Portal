@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 5vw;
}

.m-b-md {
    margin-bottom: 30px;
}

</style>
<div class="content">
    <div class="title m-b-md">
        Lost &amp; Found
    </div>
</div>
<div class="container">
  <ul class="nav nav-tabs">
     <li class="active"><a data-toggle="tab" href="#valuables"><b>Valuables</b></a></li>
     <li><a data-toggle="tab" href="#people"><b>People</b></a></li>
  </ul>
</div>
<div class="tab-content">
  <div id="valuables" class="tab-pane active">
    <div class="container">
      <h3>Lost and found items</h3>
      @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/lost/create') }}" role="button">Add New</a>
      @endif
      <hr>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Location</th>
                          </thead>
                          <tbody>
                              @foreach($lost as $s)
                                  <tr>
                                      @if($s->category==0)
                                      <th><img src="images/{{$s->image}}" width="100" height="100" alt="image unavailable"></th>
                                      <th>{{ $s->description}}</th>
                                      <th>{{ $s->location}}</th>
                                      @if(!Auth::guest())
                                      <th><a class="btn btn-warning" href="{{ route('lost.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                      <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['lost.destroy', $s->id]]) }}
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

    <div id="people" class="tab-pane">
      <div class="container">
        <h3>Missing people</h3>
        @if(!Auth::guest())
          <a class="btn btn-success" href="{{ url('/lost/create') }}" role="button">Add New</a>
        @endif
        <hr>
      </div>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                            <table class="table">
                            <thead>
                              <th>Image</th>
                              <th>Description</th>
                              <th>Location</th>
                            </thead>
                            <tbody>
                                @foreach($lost as $s)
                                    <tr>
                                        @if($s->category==1)
                                        <th><img src="images/{{$s->image}}" width="100" height="100" alt="image unavailable"></th>
                                        <th>{{ $s->description}}</th>
                                        <th>{{ $s->location}}</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('lost.edit', $s->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['lost.destroy', $s->id]]) }}
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
