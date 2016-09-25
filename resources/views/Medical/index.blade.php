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
        $('#acc').dataTable();
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
                @if (Auth::guest())
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
</style>
    <div class="content">
        <div class="title m-b-md">
            Medical Assistance
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#doc"><b>Doctors & Shifts</b></a></li>
    <li><a data-toggle="tab" href="#emer"><b>Emergency</b></a></li>
  </ul>
  <div class="tab-content">
  <div id="doc" class="tab-pane active">
        <h3><i>Medical Details</i></h3>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/medical/create') }}" role="button">Add Medical Info</a>
        <a  id="xlsf" href="{{ URL::to('downloadExcel/medical/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
        <a id="xlsxf" href="{{ URL::to('downloadExcel/medical/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
        <a id="csvf" href="{{ URL::to('downloadExcel/medical/csv') }}"><button class="btn btn-info">Download CSV</button></a>
    @endif
        <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div style="overflow-x:auto;">
                            <table id="acc" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                          <th>Location</th>
                          <th>Doctor</th>
                          <th>Contact</th>
                          <th>Discipline</th>
                          <th>Time Shift</th>
                          @if(!Auth::guest())
                          <th></th>
                          <th></th>
                      @endif
                        </thead>
                        <tbody>
                          @foreach($medical as $med)
                              <tr>
                                  <th>{{ $med->loc}}</th>
                                  <th>{{ $med->doc}}</th>
                                  <th>{{ $med->contact}}</th>
                                  <th>{{ $med->dis}}</th>
                                  <th>{{ $med->shift}}</th>
                                  @if(!Auth::guest())
                                  <th><a class="btn btn-warning" href="{{ route('medical.edit', $med->id,'/edit') }}" role="button">Update</a></th>
                                  <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['medical.destroy', $med->id]]) }}
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
<!--paginator here-->
</div>
<div id="emer" class="tab-pane fade">
    <h3></h3>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <hr>
            <center style="font-size:20px"><strong>Ambulance</strong></center>
            <div class="panel panel-default">
                <div class="panel-body">
                    <div style="overflow-x:auto;">
                  <table class="table">
                    <thead>
                      <th>Name</th>
                      <th>Contact</th>
                    </thead>
                    <tbody>
                      @foreach($emergency as $emer)
                          <tr>
                            @if($emer->service=='Ambulance')
                              <th>{{ $emer->name}}</th>
                              <th>{{ $emer->contact}}</th>
                              @if(!Auth::guest())
                              <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                              <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy', $emer->id]]) }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                              {{ Form::close() }}</th>
                              @endif
                            @endif
                          </tr>
                      @endforeach
                    </tbody>
                  </table>
              </div>
                </div>
              </div>
              <hr>
              <center style="font-size:20px"><strong>Wheelchair & Equipments</strong></center>
              <div class="panel panel-default">
                <div class="panel-body">
                  <table class="table">
                    <thead>
                      <th>Name</th>
                      <th>Contact</th>
                    </thead>
                    <tbody>
                      @foreach($emergency as $emer)
                          <tr>
                            @if($emer->service=='Wheelchair')
                              <th>{{ $emer->name}}</th>
                              <th>{{ $emer->contact}}</th>
                              @if(!Auth::guest())
                              <th><a class="btn btn-warning" href="{{ route('emergency.edit', $emer->id,'/edit') }}" role="button">Update</a></th>
                              <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['emergency.destroy', $emer->id]]) }}
                              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                              {{ Form::close() }}</th>
                              @endif
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
</div>
</div>

@include('layouts.footer')
</body>
