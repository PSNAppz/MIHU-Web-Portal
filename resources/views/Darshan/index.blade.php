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
            Darshan Details
        </div>
    </div>
<div class="container">
  <div class="col-md-10 col-md-offset-1">
    <div class="panel panel-default">
      <div class="panel-body">
        <table class ="table">
          <thead>
            <tr>
              <th>From</th>
              <th>To</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            @foreach($darshan as $d)
            <tr>
              <th>{{ $d->time_from}}</th>
              <th>{{ $d->time_till}}</th>
              <th>{{ $d->date}}</th>
            </tr>
            @endforeach
          </tbody>
        </table>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/darshan/create') }}" role="button">Add New Timing</a>
        @endif
      </div>
    </div>
  </div>
</div>
@include('layouts.footer')
@endsection
