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
                <input type="radio" name="redirect"  onClick="changeVal(8)"><span>VCC</span><br>
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

}
</script>
@include('layouts.footer')
@endsection
