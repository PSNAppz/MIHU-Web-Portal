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
            Embracing The World
            <br>
            <span style="font-size:20px">Participants of Embracing the World Exhibition</span>
        </div>
    </div>

<div class="row">
    <div class="col-md-6">
        <div class="container">
            <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#sevadetails"><b>Embracing The World</b></a></li>
          </ul>
        <div class="tab-content">
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingOne">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                              <b class="h3">ETW-Stall</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <p><i>
                              <div class="row">

                                  <div class="col-md-4">
                                      <a href="#" class="circle">
                                          <img src="{{asset('/images/itotb.jpeg')}}" style="border-radius:20px;">
                                          <p>What to take your special selfie ?? visit Embracing the world</p>
                                      </a>
                                  </div>

                                  <div class="col-md-3">
                                      <a href="#" class="circle">
                                          <img src="{{asset('/images/win.jpeg')}}"style="border-radius:20px;">
                                          <p>Win & Smile !!Visit Embracing the world</p>
                                      </a>
                                  </div>
                              </div></i></p>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingTwo">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <b class="h3">Amrita Serve</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                      <img src="{{asset('/images/as.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <b class="h3">Amrita Darshanam</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                      <img src="{{asset('/images/ad.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                              <b class="h3">Integrated Amrita Meditation</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/iam.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <b class="h3"> Amrita Yoga</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/iam.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingsix1">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix1" aria-expanded="false" aria-controls="collapsesix1">
                              <b class="h3">AYUDH</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsesix1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix1">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/ayudh.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingsix">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                              <b class="h3"> Amrita University</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/au.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingseven">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                              <b class="h3">HuT Labs</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
            1                           <img src="{{asset('/images/htl.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingeight">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                              <b class="h3"> Robotics</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                <!--       <img src="{{asset('/images/robotics.jpeg')}}" style="border-radius:200px;">-->
                                <p>Will update soon...</p>
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingnine">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                              <b class="h3">CREATE</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/create.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col-md-6">
        <div class="container">
            <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#sevadetails"><b>Embracing The World</b></a></li>
          </ul>
        <div class="tab-content">
            <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingeleven">
                      <h4 class="panel-title">
                          <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseeleven" aria-expanded="true" aria-controls="collapseeleven">
                              <b class="h3">Ammachi Labs</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseeleven" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingeleven">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/ammachilabs.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingtwelve">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsetwelve" aria-expanded="false" aria-controls="collapsetwelve">
                              <b class="h3"> Cyber Security</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsetwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwelve">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/cssn.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingthirteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsethirteen" aria-expanded="false" aria-controls="collapsethirteen">
                              <b class="h3">IoT, BigData & Visualization</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsethirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingthirteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                     <!--  <img src="{{asset('/images/itotb.jpeg')}}" style="border-radius:200px;">-->
                                     will update soon...
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingFfourteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsefourteen" aria-expanded="false" aria-controls="collapsefourteen">
                              <b class="h3">E-Learning</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsefourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFfourteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/el.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingfifteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsefifteen" aria-expanded="false" aria-controls="collapsefifteen">
                              <b class="h3"> Center for Wireless Networks & Applications</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsefifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfifteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/cfwna.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingsixteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsesixteen" aria-expanded="false" aria-controls="collapsesixteen">
                              <b class="h3">Amrita Civil Service Academy</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsixteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                      <img src="{{asset('/images/acsa.jpeg')}}"style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingseventeen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseseventeen" aria-expanded="false" aria-controls="collapseseventeen">
                              <b class="h3">Amrita Shilpa Kalakshetra</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseseventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseventeen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                      <img src="{{asset('/images/ask.jpeg')}}"style="border-radius:500px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingeighteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapseeighteen" aria-expanded="false" aria-controls="collapseeighteen">
                              <b class="h3"> Amrita Institute of Medical Sciences</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapseeighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeighteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/aims.jpeg')}}" style="border-radius:500px;">
                                  </a>
                              </div>
                              </div>
                              </div>
                      </div>
                  </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingnineteen">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsenineteen" aria-expanded="false" aria-controls="collapsenineteen">
                              <b class="h3">Biotechnology</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnineteen">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/bt.jpeg')}}" style="border-radius:200px;">
                                  </a>
                              </div>
                              </div>
                      </div>
                  </div>
              </div>
              <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="headingtwenty">
                      <h4 class="panel-title">
                          <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapsetwenty" aria-expanded="false" aria-controls="collapsetwenty">
                              <b class="h3">Balakendra</b>
                          </a>
                      </h4>
                  </div>
                  <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingtwenty">
                      <div class="panel-body" style="color: #4000ff; font-size: 18px; font-family: 'Roboto Slab', serif;">
                          <div class="row">
                              <div class="col-md-5">
                                  <a href="#" class="circle">
                                       <img src="{{asset('/images/balakendra.jpeg')}}" style="border-radius:200px;">
                                  </a>
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


@include('layouts.footer')
</body>
