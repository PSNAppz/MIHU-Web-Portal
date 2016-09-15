@extends('layouts.app')

@section('content')
<style>
.content {
    text-align: center;
}

.title {
    font-size: 84px;
}

.m-b-md {
    margin-bottom: 30px;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Security
        </div>
    </div>
    <div class="container">
    <ul class="nav nav-tabs">
     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#secpoint"><b>Security Points</b></a></li>
        <li><a data-toggle="tab" href="#seccordinator"><b>Security Coordinators</b></a></li>
        <li><a data-toggle="tab" href="#secshift"><b>Security Shifts</b></a></li>
        <li><a data-toggle="tab" href="#secbatch"><b>Security Batch</b></a></li>

     </ul>
      <div class="tab-content">
      <div class="panel panel-default">
       <div id="secpoint" class="tab-pane active">
        <h3>Security Points Details</h3>
            <p>Security Points Details are shown below.</p>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
             <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th>Location</th>
                                <th>Near By</th>
                                <th>Person In Charge</th>
                                <th>Contact No</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </hr>
          </div>
        </div>
      </div>
      </div>
      </div>
      </div>
    </ul>
</div>

<div id="seccordinator" class="tab-pane fade">
        <h3>Security Coordinator Details</h3>
            <p>Security Coordinator Details are shown below.</p>
         <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <hr>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <table class="table">
                            <thead>
                                <th></th>
                                <th>Name</th>
                                <th>In Chrge Of</th>
                                <th>Contact No</th>
                            </thead>
                        </table>
                    </div>
                </div>
            </hr>
        </div>
    </div>
</div>
</div>


    @include('layouts.footer')
@endsection
<script src="/js/parsley.js"></script>
