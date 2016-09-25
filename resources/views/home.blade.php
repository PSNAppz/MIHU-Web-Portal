@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <div class="well well-sm">
                    Welcome, {{ Auth::user()->name }}

                </div>

                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">Import / Export</div>
                <div class="panel-body">
                <form>
                <input type="radio" name="redirect" onClick="changeVal(1)"><span>Accommodations</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(2)"><span>Transportation</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(3)"><span>Darshan</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(4)"><span>Security</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(5)"><span>Special Event</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(6)"><span>Food</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(7)"><span>Coordinator</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(8)"><span>Staff Volunteer</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(9)"><span>Seva</span><br>
                <input type="radio" name="redirect"  onClick="changeVal(10)"><span>Volunteers</span><br>
                </form>
                <a  id="xlsf" href=""><button class="btn btn-success">Download Excel xls</button></a>
                <a id="xlsxf" href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
                <a id="csvf" href=""><button class="btn btn-success">Download CSV</button></a>

                <form id="import" action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="file" name="import_file" />
                    <button class="btn btn-primary">Import File</button>
                </form>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading"><span class="glyphicon glyphicon-barcode">Admin-Logs</span></div>

            <div class="panel-body">
                <div class="well well-sm">
                    @if(Auth::user()->name=="PSNAppZ")<th><a href="{{ URL::to('home/clearlogs') }}"><button class="btn btn-danger">Clear Logs</button></a></th>@endif
                    <hr>
                    @foreach($logs as $log)
                        <p><b>#{{$log->id}}</b> {{ $log->name}} @if($log->actionval == 1)<span class="label label-success">{{$log->action}}</span>
                        @elseif($log->actionval == 2)
                            <span class="label label-warning">{{$log->action}}</span>
                        @elseif($log->action == "Cleared Logs")
                            <span class="label label-info">{{$log->action}}</span>
                        @else
                            <span class="label label-danger">{{$log->action}}</span>
                        @endif
                              {{ $log->created_at}}</p>
                    @endforeach
            </div>

            </div>
        </div>

        <div class="panel panel-warning">
            <div class="panel-heading"><span class="glyphicon glyphicon-barcode">Announcements</span></div>

            <div class="panel-body">
                                {!! Form::open(array('route' => 'welcome.store','data-parsley-validate' => '')) !!}
                                {{ Form::label('type', 'Type:') }}
                                {{ Form::select('type', array('0' => 'General', '1' => 'Lost & Found','2' => 'Special','3'=>'VCC'), null, array('class' => 'form-control'))}}
                                {{ Form::label('message','Description:')}}
                                {{ Form::textarea('message',null,array('class'=> 'form-control','required'=> ''))}}
                                {{ Form::submit('Announce!',array('class'=>'btn btn-success','style' =>'margin-top:20px;'))}}
                                {!! Form::close() !!}
            </div>
            </div>
        </div>
            </div>
        </div>
    </div>
</div>
<script>
function changeVal(value){
    var a = parseInt(value);
    if(a == 1){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/accommodations/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/accommodations/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/accommodations/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/accommodations') }}";
    }
    if(a == 2){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/transport/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/transport/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/transport/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/transport') }}";
    }
    if(a == 3){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/darshan/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/darshan/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/darshan/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/darshan') }}";
    }
    if(a == 4){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/security/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/security/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/security/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/security') }}";
    }
    if(a == 5){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/specialevent/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/specialevent/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/specialevent/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/specialevent') }}";
    }
    if(a == 6){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/food/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/food/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/food/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/food') }}";
    }
    if(a == 7){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/coordinator/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/coordinator/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/coordinator/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/coordinator') }}";
    }
    if(a == 8){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/staff/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/staff/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/staff/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/staff') }}";
    }
    if(a == 9){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/seva/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/seva/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/seva/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/seva') }}";
    }
    if(a == 10){
        var csv = document.getElementById("csvf");
        var xls = document.getElementById("xlsf");
        var xlsx = document.getElementById("xlsxf");

        csv.href = "{{ URL::to('downloadExcel/volunteer/csv') }}";
        xls.href = "{{ URL::to('downloadExcel/volunteer/xls') }}";
        xlsx.href = "{{ URL::to('downloadExcel/volunteer/xlsx') }}";

        var x = document.getElementById("import");
        x.action="{{ URL::to('importExcel/volunteer') }}";
    }

}
</script>
@include('layouts.footer')
@endsection
