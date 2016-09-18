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
            Volunteer Care Committee
        </div>
    </div>
    <div class="container">
      <div class="col-md-12 ">
          @if(!Auth::guest())
          <a class="btn btn-success" href="{{ url('/vcc/create') }}" role="button">Add New</a>
          <a  id="xlsf" href="{{ URL::to('downloadExcel/vcc/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
          <a id="xlsxf" href="{{ URL::to('downloadExcel/vcc/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
          <a id="csvf" href="{{ URL::to('downloadExcel/vcc/csv') }}"><button class="btn btn-info">Download CSV</button></a>
      @endif
          <hr>
        <div class="panel panel-default">
          <div class="panel-body">
            <table class ="table">
              <thead>
                <tr>
                  <th><center/>Date</th>
                  <th><center/><center/>Food Items</th>
                  <th><center/><center/><center/>Timing</th>
                  <th><center/>Available At</th>
                </tr>
              </thead>
              <tbody>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@endsection
