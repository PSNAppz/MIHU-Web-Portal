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
            Food Details
        </div>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/food/create') }}" role="button">Add New</a>
        <a  id="xlsf" href="{{ URL::to('downloadExcel/food/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
        <a id="xlsxf" href="{{ URL::to('downloadExcel/food/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
        <a id="csvf" href="{{ URL::to('downloadExcel/food/csv') }}"><button class="btn btn-info">Download CSV</button></a>
    @endif

        <hr>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#cm"><b>Common Mess</b></a></li>
    <li><a data-toggle="tab" href="#pm"><b>Police mess</b></a></li>
    <li><a data-toggle="tab" href="#mm"><b>Media mess</b></a></li>
    <li><a data-toggle="tab" href="#si"><b>Special Invitees</b></a></li>
    <li><a data-toggle="tab" href="#c"><b>Canteens</b></a></li>

  </ul>
</div>
  <div class="tab-content">
  <div id="cm" class="tab-pane active">
        <h3 align='center'>Timings</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                             <thead>
                                <th>Meal</th>
                                <th>Time</th>
                                <th>Counter</th>
                                <th>Near by</th>
                            </thead>
                            <tbody>
                              @foreach($food as $f)
                                    <tr>
                                      @if($f->category == 0)
                                        <th>{{ $f->meal }}</th>
                                        <th>{{ $f->time }}</th>
                                        <th>{{ $f->counter }}</th>
                                        <th>{{ $f->nearby }}</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('food.edit', $f->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['food.destroy', $f->id]]) }}
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
                    <strong>Contact: Davis<br>Contact no:9495XXXXXX</strong>
                </div>
            </div>
        </div>
</div>

        <div id="pm" class="tab-pane fade">
            <h3 align='center'>Timings</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                             <thead>
                                <th>Meal</th>
                                <th>Time</th>
                                <th>Counter</th>
                                <th>Near by</th>
                            </thead>
                            <tbody>
                              @foreach($food as $f)
                                    <tr>
                                      @if($f->category == 1)
                                        <th>{{ $f->meal }}</th>
                                        <th>{{ $f->time }}</th>
                                        <th>{{ $f->counter }}</th>
                                        <th>{{ $f->nearby }}</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('food.edit', $f->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['food.destroy', $f->id]]) }}
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
                    <strong>Contact: Ferguson<br>Contact no:9495XXXXXX</strong>
                </div>
            </div>
        </div>
</div>

<div id="mm" class="tab-pane fade">
    <h3 align='center'>Timings</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table">
                     <thead>
                        <th>Meal</th>
                        <th>Time</th>
                        <th>Counter</th>
                        <th>Near by</th>
                    </thead>
                    <tbody>
                      @foreach($food as $f)
                            <tr>
                              @if($f->category == 3)
                                <th>{{ $f->meal }}</th>
                                <th>{{ $f->time }}</th>
                                <th>{{ $f->counter }}</th>
                                <th>{{ $f->nearby }}</th>
                                @if(!Auth::guest())
                                <th><a class="btn btn-warning" href="{{ route('food.edit', $f->id,'/edit') }}" role="button">Update</a></th>
                                <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['food.destroy', $f->id]]) }}
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
            <strong>Contact: Davidson<br>Contact no:9495XXXXXX</strong>
        </div>
    </div>
</div>
</div>

        <div id="si" class="tab-pane fade">
            <h3 align='center'>Timings</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                             <thead>
                                <th>Meal</th>
                                <th>Time</th>
                                <th>Counter</th>
                                <th>Near by</th>
                            </thead>
                            <tbody>
                              @foreach($food as $f)
                                    <tr>
                                      @if($f->category == 2)
                                        <th>{{ $f->meal }}</th>
                                        <th>{{ $f->time }}</th>
                                        <th>{{ $f->counter }}</th>
                                        <th>{{ $f->nearby }}</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('food.edit', $f->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['food.destroy', $f->id]]) }}
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
                    <strong>Contact: Mourinho<br>Contact no:9495XXXXXX</strong>
                </div>
            </div>
        </div>
</div>

  <div id="c" class="tab-pane fade">
            <h3 align='center'>Locations</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                          <table class="table">
                             <thead>
                                <th>Name</th>
                                <th>Location</th>
                            </thead>
                            <tbody>
                              <tr>
                                <th>North Indian Canteen</th>
                                <th>Near Stage</th>
                              </tr>
                              <tr>
                                <th>Western Canteen</th>
                                <th>Ashram</th>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
@include('layouts.footer')
@endsection
