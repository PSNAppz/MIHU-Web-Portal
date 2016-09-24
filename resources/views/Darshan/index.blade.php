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
<div class="container">
  <div class="col-md-12 ">
      <p>Darshan Time Schedule</p>
      @if(!Auth::guest())
      <a class="btn btn-success" href="{{ url('/darshan/create') }}" role="button">Add New Timing</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/darshan/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/darshan/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/darshan/csv') }}"><button class="btn btn-info">Download CSV</button></a>
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
              <th>Location of Dist</th>
              <th>Token timing</th>
            </tr>
          </thead>
          <tbody>
            @foreach($darshan as $d)
            <tr>
              <th>{{ $d->darshan_time}}</th>
              <th>{{ $d->date}}</th>
              <th>{{ $d->token_loc}}</th>
              <th>{{ $d->token_time}}</th>
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
<center>
<div class="panel panel-default">
    <div class="panel-body">
        <div style="overflow-x:auto;">
<div id="carbonads-container">
    <div class="carbonad">
        <div id="azcarbon">
<img src="{{asset('images/darshan.png')}}" class="carbonad-image carbonad-img"></span>
        </div>
    </div>
</div>
</div>
</div>
</div>
</center>
@include('layouts.footer')
@endsection
