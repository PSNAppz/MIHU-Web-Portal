<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIHU</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">


        <!--Bootstrap link-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--footer stylesheet-->
        <link rel="stylesheet" href="css/demo.css">
	       <link rel="stylesheet" href="css/footer-basic-centered.css">


        <script>
        $(function() {
          $(".rslides").responsiveSlides();
        });
        </script>
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Lato', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }
            .navbar-brand{
                font-size: 30px;
            }
            .full-height {
                  height:60vh;
                  width: 100%;
                  background-size: cover;
                  background-image:url(./images/background64.jpg);
                  background-repeat: no-repeat;
                  //background-attachment: fixed;
                  background-position:center;
                  background-size:cover;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 6vw;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            .button {
              text-align: center;
            }
            .news {
              width:100%;
              margin-top:0px;
              background-image: url(./images/orangepink.jpg);
              background-position:center;
              --background-attachment: fixed;
              background-size:cover;
              background-repeat: no-repeat;
              text-align: center;
            }
            div.col-sm-9 div {
              height: 250px;
              font-size: 28px;
            }
            .heading   {
              height:100px;
              width:200px;
              position:absolute;
              margin-left: 500px;
            }
            .well{
                font-family: 'Muli',sans-serif;
            }
            .newsbody {
              width: 100%;
              float:right;
              height: 300px;
              margin: 0px;
              --background-image: url('./images/note.jpg');
            }
            @media screen and (max-width: 810px) {
              #section1, #section2, #section3, #section41, #section42  {
                margin-left: 150px;
              }
            }
            img {
                border-radius: 4px;
                box-shadow: 0 0 10px 3px #bbb;
                width:450px;
                height:550px;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target="#myScrollspy" data-offset="20">
    <nav class="navbar navbar-default navbar-static-top" style="margin-bottom:0px">
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
                <b>May I Help You Portal</b>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user">&nbsp;</span>{{ Auth::user()->name }} <span class="caret"></span>
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

  <img src="./images/background64.jpg" class="img-responsive" style="width:100%" alt="Welcome to Amritavarsham 64">
  <marquee style="color:#900000;font-size:28px;font-family: 'Open Sans', sans-serif;"><strong><a href="https:www.amrita.ac.in/live" style="text-decoration:none"><span style="color:#900000; "class="glyphicon glyphicon-hd-video"></span> Watch Amrita Varsham 64 Live .......Click here</a></strong></marquee>
       <div class="jumbotron" style="margin-bottom: 0px">
         <div class ="button">
           <p><b>Select the department</b></p>
           <div class="container">
             <div class="row">
               <div class="col-sm-4" >
                 <a class="btn btn-primary btn-lg btn-block" href="/accommodation" role="button"><span class="glyphicon glyphicon-home"></span>&nbsp Accommodation</a>
               </div>
               <div class="col-sm-4" >
                 <a class="btn btn-primary btn-lg btn-block" href="/transportation" role="button"><span class="glyphicon glyphicon-plane"></span>&nbsp Transportation</a>
               </div>
               <div class="col-sm-4" >
                 <a class="btn btn-primary btn-lg btn-block" href="/medical" role="button"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp&nbsp Medical</a>
               </div>
             </div>
           <br>
           <div class ="row">
             <div class="col-sm-4" >
               <a class="btn btn-primary btn-lg btn-block" href="/vcc" role="button"><span class="glyphicon glyphicon-heart"></span>&nbsp&nbsp&nbspVCC</a>
             </div>
             <div class="col-sm-4" >
               <a class="btn btn-primary btn-lg btn-block" href="/food" role="button"><span class="glyphicon glyphicon-cutlery"></span>&nbsp&nbsp Food</a>
             </div>
             <div class="col-sm-4" >
               <a class="btn btn-primary btn-lg btn-block" href="/darshan" role="button"><span class="glyphicon glyphicon-eye-open"></span>&nbsp Darshan</a>
             </div>
          </div>
           <br>
           <div class ="row">
             <div class="col-sm-4" >
               <a class="btn btn-primary btn-lg btn-block" href="/specialevents" role="button"><span class="glyphicon glyphicon-time"></span> Special Events</a>
            </div>
            <div class="col-sm-4" >
              <a class="btn btn-primary btn-lg btn-block" href="/security" role="button"><span class="glyphicon glyphicon-lock"></span>&nbsp Security</a>
            </div>
            <div class="col-sm-4" >
             <a class="btn btn-primary btn-lg btn-block" href="/seva" role="button"><span class="
                 glyphicon glyphicon-heart"></span>&nbsp Seva</a>
           </div>
         </div>
         <br>
         <div class ="row">
           <div class="col-sm-4" >
             <a class="btn btn-primary btn-lg btn-block" href="/schedules" role="button"><span class="glyphicon glyphicon-calendar"></span> Schedules</a>
          </div>
          <div class="col-sm-4" >
              <a class="btn btn-danger btn-lg btn-block" href="/coordinator" role="button"><span class="glyphicon glyphicon-star-empty"></span>&nbsp Coordinators</a>
          </div>
          <div class="col-sm-4" >
           <a class="btn btn-primary btn-lg btn-block" href="/generalinfo" role="button"><span class="glyphicon glyphicon-italic"></span>&nbsp General Info</a>
         </div>
         <div class="col-sm-12">
             <br>
             <a class="btn btn-success btn-lg btn-block" href="/etw" role="button"><span class="glyphicon glyphicon-globe"></span>&nbsp Embracing the World Exhibition</a>
         </div>
       </div>
       <br>
       <div class="row">
         <div class="col-sm-4 col-sm-offset-4">
           <a class="btn btn-primary btn-lg btn-block" href="/lost" role="button"><span class="glyphicon glyphicon-briefcase"></span>&nbsp Lost &amp; Found</a>
         </div>
       </div>
       <br>
        </div>
      </div>
    </div>
    <div class="news">
    <div class="newsbody">
      <h1><b>News Feed</b> <small><i>#BeInformed</i></small></h1>
      <br>
    </div>
    <div id="" style="overflow-y: scroll; height:400px; width:100%;">
      <div class="col-sm-10 col-md-offset-1">
          @foreach($newsfeed as $news)
              @if($news->type==1)
                  <div class="well" style="background-color:#00E5FF;border-radius:20px;"><b style="font-size:20px;word-wrap:break-word;">{{$news->message}}</b></div>
          @elseif($news->type==0)
          <div class="well" style="border-radius:20px;"><b style="font-size:20px;word-wrap:break-word;">{{$news->message}}</b></div>
          @elseif($news->type==3)
          <div class="well" style="border-radius:20px;"><b style="font-size:20px;word-wrap:break-word;">{{$news->message}}</b> </div>
          @else
              <div class="well" style="background-color:#ff5252;border-radius:20px;"><b style="font-size:20px;word-wrap:break-word;color:white;">{{$news->message}}</b></div>
          @endif
            @if (!Auth::guest())
            <span>
              {{ Form::open(['method' => 'DELETE', 'route' => ['welcome.destroy', $news->id]]) }}
              {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
              {{ Form::close() }}
            </span>
            @endif
          @endforeach
      </div>
      </div>
     </div>

 </div>
  @include('layouts.footer')
    </body>
</html>
