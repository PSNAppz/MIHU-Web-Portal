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
            Darshan Details
        </div>
<br/>
  <div class="col-md-12 ">
      <p>Darshan Time Schedule</p>
      @if(!Auth::guest())
      <a class="btn btn-success" href="{{ url('/darshan/create') }}" role="button">Add New Timing</a>
      <a  id="xlsf" href="{{ URL::to('downloadExcel/darshan/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
      <a id="xlsxf" href="{{ URL::to('downloadExcel/darshan/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
      <a id="csvf" href="{{ URL::to('downloadExcel/darshan/csv') }}"><button class="btn btn-info">Download CSV</button></a>
  @endif

      <hr>
      <div class="panel panel-warning">
          <h3><div class="panel-heading"><span>DARSHAN TOKEN IN DISPLAY NOW</span></div></h3>

            <marquee><h2><b>
            @foreach($news as $news)
            @if($news->type==4)
                {{$news->message}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            @endif
            @endforeach
        </b></h2></marquee>
        </div>
  </div>
  <div class="container">
      <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#darshan"><b>Darshan</b></a></li>
      <li><a data-toggle="tab" href="#ins"><b>Darshan Instructions</b></a></li>

    </ul>

  <div class="tab-content">
      <div id="ins" class="tab-pane fade">
          <h3>Darshan Instructions</h3>
          <ul class="nav nav-tabs">
              <li class="active"><a data-toggle="tab" href="#eng"><b>English</b></a></li>
              <li><a data-toggle="tab" href="#mal"><b>Malayalam</b></a></li>
              <li><a data-toggle="tab" href="#tamil"><b>Tamil</b></a></li>
        </ul>
      <div class="container">
          <div class="row">
            <div class="tab-content">
            <div id="eng" class="tab-pane active">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <hr>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div style="overflow-x:auto;">
                                    <img src="{{asset('/images/eng.jpg')}}">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="mal" class="tab-pane fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <hr>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div style="overflow-x:auto;">
                                    <img src="{{asset('/images/mal.jpg')}}">
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="tamil" class="tab-pane fade">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <hr>
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div style="overflow-x:auto;">
                                    <img src="{{asset('/images/tamil.jpg')}}">
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
<div id="darshan" class="tab-pane active">
<h3 align='center'></h3>
<div class="container">
<div class="row">
<div class="col-md-10 col-md-offset-1">
  <div class="panel panel-default">
    <div class="panel-body">
      <div style="overflow-x:auto;">
      <table class ="table">
        <thead>
          <tr>
            <th>Date</th>
            <th>Darshan timings</th>
            <th>Location</th>
          </tr>
        </thead>
        <tbody>
          @foreach($darshan as $d)
          <tr>
             <th>{{ $d->date}}</th>
            <th>{{ $d->darshan_time}}</th>
            <th>{{ $d->token_loc}}</th>
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
</div>
</div>
</div>
</div>
@include('layouts.footer')
@endsection
