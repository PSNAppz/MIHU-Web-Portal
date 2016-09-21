
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
            Transportation
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#bus"><b>Bus</b></a></li>
    <li><a data-toggle="tab" href="#public"><b>Public</b></a></li>
    <li><a data-toggle="tab" href="#train"><b>Train</b></a></li>
     <li><a data-toggle="tab" href="#other"><b>Other</b></a></li>


  </ul>
<div class="tab-content">
  <div id="bus" class="tab-pane active">
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

<div id="public" class="tab-pane fade">
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
        <div id="train" class="tab-pane fade">
            <h3>Train Timings</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            DATA HERE

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<div id="other" class="tab-pane fade">
            <h3>Carpool Details</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            DATA HERE

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
