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
            Darshan Details
        </div>
    </div>
<br/>
<br/>
<br/>
<br/>
<div class="container">
  <div class="col-md-12 ">
    @if(!Auth::guest())
    <a class="btn btn-success" href="{{ url('/darshan/create') }}" role="button">Add New Timing</a>
    @endif
    <hr>
    <div class="panel panel-default">
      <div class="panel-body">
        <div style="overflow-x:auto;">
        <table class ="table">
          <thead>
            <tr>
              <th>Darshan timings</th>
              <th>Date</th>
              <th>Token distribution</th>
              <th>Token timing</th>
              <th>Contact name</th>
              <th>Contact no:</th>
            </tr>
          </thead>
          <tbody>
            @foreach($darshan as $d)
            <tr>
              <th>{{ $d->darshan_time}}</th>
              <th>{{ $d->date}}</th>
              <th>{{ $d->token_loc}}</th>
              <th>{{ $d->token_time}}</th>
              <th>{{ $d->contact_name}}</th>
              <th>{{ $d->contact_no}}</th>
              @if(!Auth::guest())
              <th><a class="btn btn-warning" href="{{ route('darshan.edit', $d->id,'/edit') }}" role="button">Update</a></th>
              <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['darshan.destroy', $d->id]]) }}
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
@include('layouts.footer')
@endsection
