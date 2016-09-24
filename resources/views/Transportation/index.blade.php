
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
            Transportation
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
        <li  class="active"><a data-toggle="tab" href="#train"><b>Train</b></a></li>
    <li><a data-toggle="tab" href="#bus"><b>Bus</b></a></li>
    <li><a data-toggle="tab" href="#other"><b>Other</b></a></li>
    <li><a data-toggle="tab" href="#parking"><b>Parking Locations</b></a></li>
  </ul>
  <div class="tab-content">
  <div id="bus" class="tab-pane fade">
        <h3>Bus Timings</h3>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/transportation/create') }}" role="button">Add New Bus</a>
        <a  id="xlsf" href="{{ URL::to('downloadExcel/transportation/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
        <a id="xlsxf" href="{{ URL::to('downloadExcel/transportation/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
        <a id="csvf" href="{{ URL::to('downloadExcel/transportation/csv') }}"><button class="btn btn-info">Download CSV</button></a>
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
                                <th>Bus No</th>
                                <th>Driver Contact No</th>
                                <th>From</th>
                                <th>Destination</th>
                                <th>Departure Time</th>
                                <th>Parking Location</th>
                                <th>Status</th>
                                @if(!Auth::guest())
                                <th></th>
                                <th></th>
                            @endif
                            </thead>
                            <tbody>
                                @foreach($transportations as $tr)
                                    <tr>
                                        <th>{{ $tr->busno}}</th>
                                        <th>{{ $tr->contact}}</th>
                                        <th>{{ $tr->from}}</th>
                                        <th>{{ $tr->dest}}</th>
                                        <th>{{ $tr->deptime}}</th>
                                        <th>{{ $tr->parking}}</th>
                                        <th>@if ($tr->status == 1)
                                                <span class="label label-danger">Out Of Service</span>
                                            @else
                                                <span class="label label-success">Available</span>
                                            @endif</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('transportation.edit', $tr->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['transportation.destroy', $tr->id]]) }}
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
    {{$transportations->links()}}
</div>

<div id="other" class="tab-pane fade">
    <h3>Other Transportation</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="overflow-x:auto;">
                    <table class="table">
                        <thead>
                            <th>Transport type</th>
                            <th>Name</th>
                            <th>Contact</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>Auto</th>
                                <th>X</th>
                                <th>485748754</th>
                            </tr>
                            <tr>
                                <th>Auto</th>
                                <th>Y</th>
                                <th>485748754</th>
                            </tr>
                            <tr>
                                <th>Traveller</th>
                                <th>C</th>
                                <th>485748754</th>
                            </tr>
                            <tr>
                                <th>Car</th>
                                <th>M</th>
                                <th>485748754</th>
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

        <div id="train" class="tab-pane active">
            <h3>Train Timings</h3>
            <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#south"><b>Towards TVM</b></a></li>
            <li><a data-toggle="tab" href="#north"><b>Towards Ernakulam</b></a></li>
          </ul>
        <div class="container">
            <div class="row">
              <div class="tab-content">
              <div id="south" class="tab-pane active">
              <div class="container">
                  <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                          <hr>
                          <div class="panel panel-default">
                              <div class="panel-heading"><b>From Kayankulam Towards TVM </b></div>
                              <div class="panel-body">
                                  <div style="overflow-x:auto;">
                                      <img src="{{asset('/pdf/kayan.pdf')}}">
                                  </div>
                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading"><b>From Karunagapally Towards TVM </b></div>
                              <div class="panel-body">
                                  <div style="overflow-x:auto;">
                                      <img src="{{asset('/pdf/karutvc.pdf')}}">
                                  </div>
                              </div>
                          </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div id="north" class="tab-pane fade">
              <div class="container">
                  <div class="row">
                      <div class="col-md-10 col-md-offset-1">
                          <hr>
                          <div class="panel panel-default">
                              <div class="panel-heading"><b>From Kayankulam Towards EKM via Alleppy </b></div>
                              <div class="panel-body">
                                  <div style="overflow-x:auto;">
                                      <img src="{{asset('/pdf/kayanal.pdf')}}"></div>

                              </div>
                          </div>
                          <div class="panel panel-default">
                              <div class="panel-heading"><b>From Karunagapally Towards EKM via Kottayam</b></div>
                              <div class="panel-body">
                                  <div style="overflow-x:auto;">
                                      <img src="{{asset('/pdf/kayanktym.pdf')}}"></div>
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
<div id="parking" class="tab-pane fade">
    <h3>Parking</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="overflow-x:auto;">
                    <table class="table">
                        <thead>
                            <th>Vehicle</th>
                            <th>Location</th>
                        </thead>
                        <tbody>
                            <tr>
                                <th>General</th>
                                <th>Loc</th>
                            </tr>
                            <tr>

                                <th>Bus</th>
                                <th>Loc</th>

                            </tr>
                            <tr>

                                <th>VIP</th>
                                <th>Loc</th>
                            </tr>
                            <tr>
                                <th>VVIP</th>
                                <th>Loc</th>
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

</div>
</div>
@include('layouts.footer')

@endsection
