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
          <div class="panel panel-warning">
              <div class="panel-heading"><span class="glyphicon glyphicon-barcode">VCC Announcements</span></div>

                <marquee><b>
                @foreach($news as $news)
                @if($news->type==3)
                    {{$news->message}}&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endif
                @endforeach
            </b></marquee>
            </div>
        <div class="panel panel-default">
          <div class="panel-body">
            TEST
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@endsection
