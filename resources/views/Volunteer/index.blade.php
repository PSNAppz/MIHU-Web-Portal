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
img {
    border-radius: 4px;
    box-shadow: 0 0 10px 3px #bbb;
    width:100%;
    height:auto;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            Volunteers
        </div>
    </div>
<div class="container">
    <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#students"><b>Volunteers</b></a></li>
    <li><a data-toggle="tab" href="#other"><b>Other Campus</b></a></li>
    <li><a data-toggle="tab" href="#devotee"><b>Devotee Volunteers</b></a></li>

  </ul>
  <div class="tab-content">
  <div id="students" class="tab-pane active">
        <h3><i>While Carrying Responsibilities Never Forget to Smile.</i></h3>
        @if(!Auth::guest())
        <a class="btn btn-success" href="{{ url('/volunteer/create') }}" role="button">Add a Volunteer</a>
        <a  id="xlsf" href="{{ URL::to('downloadExcel/volunteer/xls') }}"><button class="btn btn-info">Download Excel xls</button></a>
        <a id="xlsxf" href="{{ URL::to('downloadExcel/volunteer/xlsx') }}"><button class="btn btn-info">Download Excel xlsx</button></a>
        <a id="csvf" href="{{ URL::to('downloadExcel/volunteer/csv') }}"><button class="btn btn-info">Download CSV</button></a>
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
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Campus</th>
                                <th>Contact</th>
                                <th>Seva</th>
                                <th>Coordinator</th>
                                <th>Coordinator Contact</th>
                                @if(!Auth::guest())
                                <th>Update</th>
                                <th>Delete</th>
                            @endif
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($volunteers as $vol)
                                    <tr>

                                        <th>{{ $vol->name}}</th>
                                        <th>{{ $vol->batch}}</th>
                                        <th>{{$vol->campus}}</th>
                                    <th>{{$vol->contact}}</th>
                                    <th>{{ $vol->seva}}</th>
                                    <th>{{ $vol->cordname}}</th>
                                    <th>{{ $vol->cordcontact}}</th>

                                        @if(!Auth::guest())
                                        <th><a class="btn btn-warning" href="{{ route('volunteer.edit', $vol->id,'/edit') }}" role="button">Update</a></th>
                                        <th>  {{ Form::open(['method' => 'DELETE', 'route' => ['volunteer.destroy', $vol->id]]) }}
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
<div id="other" class="tab-pane fade">
    <h3 align="center"></h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <img src="{{asset('/images/26.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="devotee" class="tab-pane fade">
    <h3 align="center"></h3>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="alert alert-success" role="alert">
                            <h2>ID Card distribution</h2>
                            <p>Room No : N002, Engineering College</p>
                            <p>Contact : Br. Vivek</p>
                            <p>Ph: 9446405900 </p>
                        </div>
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
