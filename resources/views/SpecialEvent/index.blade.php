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
            Special Events
        </div>
    </div>
    <div class="container">
     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#seventsaree"><b>Saree Distribution</b></a></li>
        <li><a data-toggle="tab" href="#seventpension"><b>Pension Distribution</b></a></li>
        <li><a data-toggle="tab" href="#seventmarriage"><b>Marriage</b></a></li>
     </ul>
 </div>
<div class="tab-content">
<div id="seventsaree" class="tab-pane active">
    <h3 align='center'>Saree Distribution Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

      <div id="seventpension" class="tab-pane fade">
    <h3 align='center'>Pension Distribution Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                          <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>

      <div id="seventmarriage" class="tab-pane fade">
          <h3 align='center'>Marriage Details</h3>
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <div style="overflow-x:auto;">
                          <table class="table">
                           <thead>
                              <th></th>
                              <th>Date</th>
                              <th>Time</th>
                              <th>Location</th>
                              <th>Coordinator</th>
                              <th>ContactNo</th>
                          </thead>
                          <tbody>
                          </tbody>
                      </table>
                  </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
</div>
@include('layouts.footer')
@endsection