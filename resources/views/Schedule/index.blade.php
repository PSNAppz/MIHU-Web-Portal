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
            Schedules
        </div>
    </div>
   <div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#26"><b>26th Sept</b></a></li>
    <li><a data-toggle="tab" href="#27"><b>27th Sept</b></a></li>
    <li><a data-toggle="tab" href="#28"><b>28th Sept</b></a></li>


  </ul>
  <div class="tab-content">
  <div id="26" class="tab-pane active">
        <h3>Events</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                        <table class="table">
                            <thead>
                                <th>Program</th>
                                <th>Time</th>
                                <th>Venue</th>
                                @if(!Auth::guest())
                                <th></th>
                                <th></th>
                            @endif
                            </thead>
                            <tbody>
      
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{{$Schedules->links()}}-->
</div>
        <div id="27" class="tab-pane fade">
            <h3>Events</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
     <div style="overflow-x:auto;">
                        <table class="table">
                            <thead>
                                <th>Program</th>
                                <th>Time</th>
                                <th>Venue</th>
                                @if(!Auth::guest())
                                <th></th>
                                <th></th>
                            @endif
                            </thead>
                            
                            
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{{$Schedules->links()}}-->
</div>
 <div id="28" class="tab-pane fade">
            <h3>Events</h3>
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    
                    <div class="panel panel-default">
                        <div class="panel-body">
     <div style="overflow-x:auto;">
                        <table class="table">
                            <thead>
                                <th>Program</th>
                                <th>Time</th>
                                <th>Venue</th>
                                @if(!Auth::guest())
                                <th></th>
                                <th></th>
                            @endif
                            </thead>
                            
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--{{$Schedules->links()}}-->
</div>
@include('layouts.footer')
@endsection
