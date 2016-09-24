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

                <marquee><h2><b>
                @foreach($news as $news)
                @if($news->type==3)
                    {{$news->message}}&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                @endif
                @endforeach
            </b></h2></marquee>
            </div>
        <div class="panel panel-default">
          <div class="panel-body">
            <h2><u>Refreshment Distribution Timings</u></h2>
            <h4>The Following are the preferable timings to collect refreshments:
                <b> 2 am, 6 am, 11 am, 2 pm, 4 pm, 9 pm, 11 pm.</b>
            </h4>
            <h2><u>Refreshment Counter</u></h2>
            <h4>Opposite to<em> Amritavarsham </em>Police Mess Hall.</h4>
            <h2><u>Student Mess Food Details</u></h2>
            <h4>Location: Biotech Mess Hall <br> This mess hall will be only available for University Staffs and Students.<br>
                <br><h3><u>Schedule</u></h3>
                Sept 25th : Lunch, Dinner<br>
                Sept 26th : Breakfast, Lunch, Dinner<br>
                Sept 27th : Breakfast <b>(Lunch and Dinner will be served in the food counters inside the main venue and not in biotech mess).</b><br>
                Sept 28th : Breakfast, Lunch<br><br>
                Mess Timings<br>
                Breakfast : 7am - 9am<br>
                Lunch : 11:30am - 2pm<br>
                Dinner : 7pm - 9:30pm<br>
<h3> VCC HELPLINE: TO Be Updated</h3>
            </h4>
          </div>
        </div>
      </div>
    </div>
@include('layouts.footer')
@endsection
