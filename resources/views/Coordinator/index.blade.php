
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
            Our Proud Coordinators
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#students"><b>Students</b></a></li>
    <li><a data-toggle="tab" href="#teachers"><b>Faculties</b></a></li>
    <li><a data-toggle="tab" href="#others"><b>Others</b></a></li>



  </ul>
  <div class="tab-content">
  <div id="students" class="tab-pane active">
        <h3>Student Coordinators</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                @if(!Auth::guest())
                <a class="btn btn-success" href="{{ url('/coordinator/create') }}" role="button">Add a Coordinator</a>
            @endif
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
<!--paginator here-->
</div>
        <div id="teachers" class="tab-pane fade">
            <h3>Faculty Coordinators</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-body">


                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>


<div id="others" class="tab-pane fade">
    <h3>Other Coordinators</h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <hr>
            <div class="panel panel-default">
                <div class="panel-body">


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
