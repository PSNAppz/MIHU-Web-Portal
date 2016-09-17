@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Import / Export</div>
                <div class="panel-body">
                    <div class="container">
                        <form>
<input type="radio" name="redirect" value="faq" onClick="document.getElementById('hidfield').value=this.value"><span>Faq</span><br>
<input type="radio" name="redirect" value="orrr" onClick="document.getElementById('hidfield').value=this.value"><span>M</span><br>
<input type="radio" name="redirect" value="{{ URL::to('downloadExcel/xls') }}" onClick="document.getElementById('hidfield').href=this.value"><span>FAQ</span>
</form>
                        <a id="hidfield" href=""><button class="btn btn-success">Download Excel xls</button></a>
                        <a href="{{ URL::to('downloadExcel/xlsx') }}"><button class="btn btn-success">Download Excel xlsx</button></a>
                        <a href="{{ URL::to('downloadExcel/csv') }}"><button class="btn btn-success">Download CSV</button></a>
                        <form action="{{ URL::to('importExcel') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
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
@endsection
