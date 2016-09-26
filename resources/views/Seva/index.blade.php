<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet" />
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.7/integration/bootstrap/3/dataTables.bootstrap.js"></script>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<!--Bootstrap link-->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<!-- Styles -->
<link href="/css/parsley.css" rel="stylesheet">
<link href="/css/app.css" rel="stylesheet">
<!--footer stylesheet-->
<link rel="stylesheet" href="css/demo.css">
 <link rel="stylesheet" href="css/footer-basic-centered.css">


<!-- DATA TABLES DONOT TOUCH-->

    <script>
    $(document).ready(
     function() {
        $('#cord').dataTable();
     }
    )
</script>
<script>
    window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
</script>

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container">
        <div class="navbar-header">

            <!-- Collapsed Hamburger -->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <!-- Branding Image -->
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if(Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ url('/home') }}">Home</a>
                                <a href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>
<div class ="wrapper">
@include('messages');

<style>
html, body {
    background-color: #fff;
    color: #636b6f;
    font-family: 'Raleway', sans-serif;
    font-weight: 500;
    height: 100%;
    margin: 0;
}
.content {
    text-align: center;
}

.title {
    font-size: 6vw;
}

.m-b-md {
    margin-bottom: 30px;
}

img {
    border-radius: 4px;
    box-shadow: 0 0 10px 3px #bbb;
    width:100%;
    height:auto;
}

</style>
    <div class="content">
        <div class="title m-b-md">
            Seva Details
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#sevadetails"><b>Seva Details</b></a></li>
    <li><a data-toggle="tab" href="#samiti"><b>Samithi Seva Details</b></a></li>
    <li><a data-toggle="tab" href="#other"><b>Other Campus Volunteers</b></a></li>
  </ul>

  <div class="tab-content">
  <div id="sevadetails" class="tab-pane active">
      <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="h1">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#c1" aria-expanded="false" aria-controls="c1">
                May I Help You Seva
              </a>
            </h4>
          </div>
          <div id="c1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h1">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#coor"><b>Coordinators</b></a></li>
                <li><a data-toggle="tab" href="#seva"><b>Seva Instructions</b></a></li>
                <li><a data-toggle="tab" href="#shift"><b>Duty Shifts</b></a></li>

              </ul>
            <div class="container">
                <div class="row">
                  <div class="tab-content">
                  <div id="coor" class="tab-pane active">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Coordinators</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihucord.PNG')}}">
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="seva" class="tab-pane fade">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Seva Instructions</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuinst.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="shift" class="tab-pane fade">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Duty Shifts</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty1.png')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty2.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty3.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty4.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty5.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty6.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty7.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty8.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              <div class="panel panel-default">
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/mihuduty9.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="vol" class="tab-pane fade">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Volunteers</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/kayanal.jpg')}}">
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>
         <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
          <div class="panel-heading" role="tab" id="h2">
            <h4 class="panel-title">
              <a role="button" data-toggle="collapse" data-parent="#accordion" href="#c2" aria-expanded="false" aria-controls="c2">
                Venue Management Seva
              </a>
            </h4>
          </div>
          <div id="c2" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="h2">
            <div class="panel-body">
                <ul class="nav nav-tabs">
                <li><a data-toggle="tab" href="#coo"><b>Coordinators</b></a></li>
                <li><a data-toggle="tab" href="#venueshift"><b>Duty Shifts</b></a></li>
              </ul>
            <div class="container">
                <div class="row">
                  <div class="tab-content">
                  <div id="coo" class="tab-pane fade">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Coordinators</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <img src="{{asset('/images/venueManage.PNG')}}">
                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div id="venueshift" class="tab-pane fade">
                  <div class="container">
                      <div class="row">
                          <div class="col-md-10 col-md-offset-1">
                              <hr>
                              <div class="panel panel-default">
                                  <div class="panel-heading"><b>Duty Shifts</b></div>
                                  <div class="panel-body">
                                      <div style="overflow-x:auto;">
                                          <a href="/venue/1.html">Day Shift I</a><br>
                                          <a href="/venue/2.html">Day Shift II</a><br>
                                          <a href="/venue/3.html">Early Morning Shift</a><br>
                                          <a href="/venue/4.html">Evening Shift I</a><br>
                                          <a href="/venue/5.html">Evening Shift II</a><br>
                                          <a href="/venue/6.html">Night Shift</a><br>

                                      </div>
                                  </div>
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>

              </div>
                        </div>
                    </div>
            </div>
          </div>
        </div>

        <!-- New Here-->
      </div>
  </div>

 <!-- <div id="students" class="tab-pane active">
        <h3><i>While Carrying Responsibilities Never Forget to Smile.</i></h3>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/seva/create') }}" role="button">Add a Seva</a>
        <a  id="xlsf" href="{{ URL::to('downloadExcel/seva/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
        <a id="xlsxf" href="{{ URL::to('downloadExcel/seva/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
        <a id="csvf" href="{{ URL::to('downloadExcel/seva/csv') }}"><button class="btn btn-info">Download CSV</button></a>
    @endif
        <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                        <table id="cord" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                              <tr>
                                <th>Place</th>
                                <th>Seva</th>
                                <th>Location</th>
                                <th>Coordinator</th>
                                <th>Contact</th>
                                @if(!Auth::guest())
                                <th>Update</th>
                                <th>Delete</th>
                            @endif
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($seva as $seva)
                                    <tr>
                                        <th>{{ $seva->place}}</th>
                                        <th>{{ $seva->seva}}</th>
                                        <th>{{$seva->location}}</th>
                                        <th>{{$seva->coordinator}}</th>
                                        <th>{{$seva->contact}}</th>
                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('seva.edit', $seva->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['seva.destroy', $seva->id]]) }}
                                        {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                                        {{ Form::close() }}</th>
                                        @endif
                                    </tr>
                                @endforeach
                          </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
paginator here
</div> -->

<div id="other" class="tab-pane fade">
      <div class="container">
          <div class="row">
              <div class="col-md-10 col-md-offset-1">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          <img src="{{asset('/images/other-seva.jpg')}}">
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div id="samiti" class="tab-pane fade">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <img src="{{asset('/images/samiti.jpg')}}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--paginator here-->
</div>
</div>
</div>

@include('layouts.footer')
</body>
