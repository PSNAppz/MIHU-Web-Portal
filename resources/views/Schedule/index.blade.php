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
  </style>
    <div class="content">
        <div class="title m-b-md">
            Schedule 
        </div>
    </div>
    <div class="container">
     <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#s25"><b>Schedules On 25</b></a></li>
        <li><a data-toggle="tab" href="#s26"><b>Schedules On 26</b></a></li>
        <li><a data-toggle="tab" href="#s27"><b>Schedules On 27</b></a></li>
     </ul>

    <div class="tab-content">
      <div id="s25" class="tab-pane active">
          <h3 align='center'>Details About Programs On 25-09-2016</h3>
            <hr>
              <div class="container">
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                      <div class="panel-body">
                        <div style="overflow-x:auto;">
                          <a href="http://www.example.com/myfile.pdf#glossary">
                        
                            Click Here To See The Schedule 
                        
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
            </hr>
      </div>
    </div>

  <div class="tab-content">
    <div id="s26" class="tab-pane fade">
      <h3 align='center'>Details About Programs On 26-09-2016</h3>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <hr>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div style="overflow-x:auto;">
                      <a href="http://www.example.com/myfile.pdf#glossary">
                          Click Here To See The Schedule 
                      </a>  
                       
                    </div>
                  </div>
                </div>
              </hr>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="tab-content">
    <div id="s27" class="tab-pane fade">
      <h3 align='center'>Details About Programs On 27-09-2016</h3>
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <hr>
                <div class="panel panel-default">
                  <div class="panel-body">
                    <div style="overflow-x:auto;">
                      <a href="http://www.example.com/myfile.pdf#glossary">
                          Click Here To See The Schedule 
                      </a>  
                       
                    </div>
                  </div>
                </div>
              </hr>
            </div>
          </div>
        </div>
    </div>
  </div>
</div>>
@include('layouts.footer')
@endsection
