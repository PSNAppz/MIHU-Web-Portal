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

        <!--Bootstrap link-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--footer stylesheet-->
        <link rel="stylesheet" href="css/demo.css">
	       <link rel="stylesheet" href="css/footer-basic-centered.css">

        <!--Transition Slide Scripts-->
        <script src="js/responsiveslides.min.js"></script>
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
                font-family: 'Raleway', sans-serif;
                font-weight: 500;
                height: 100vh;
                margin: 0;
            }
            .navbar-brand{
                font-size: 30px;
            }

            .full-height {
                  height:80vh;
                  background-image:url(./images/background.jpg);
                  background-repeat: no-repeat;
                  background-attachment: fixed;
                  background-position: center;
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

            .rslides {
              position: relative;
              list-style: none;
              overflow: hidden;
              width: 100%;
              padding: 0;
              margin: 0;
              border-radius: 10px;
            }

            .rslides li {
              -webkit-backface-visibility: hidden;
              position: absolute;
              display: none;
              width: 100%;
              left: 0;
              top: 0;
            }

            .rslides li:first-child {
              position: relative;
              display: block;
              float: left;
            }

            .rslides img {
              display: block;
              height: auto;
              float: left;
              width: 100%;
              border: 0;
            }

            .button {
              text-align: center;
            }
        </style>
    </head>
    <body>
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
                Amritavarsham 63
            </a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            <span class="glyphicon glyphicon-user">&nbsp;</span>{{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>


        <div class = "flex-center position-ref full-height">
            <div class = "content">
              <ul class="rslides">
                <li><img src="images/amma1.jpg" alt=""></li>
                <li><img src="images/amma2.jpg" alt=""></li>
                <li><img src="images/amma3.jpg" alt=""></li>
              </ul>
            </div>
        </div>

       <div class="jumbotron" style="margin-bottom: 0px">
         <div class ="button">
           <h2><b>May I Help You Portal</b></h2>
           <p>Select the department</p>
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
               <a class="btn btn-primary btn-lg btn-block" href="/vcc" role="button"><span class="glyphicon glyphicon-user"></span>&nbsp&nbsp&nbsp&nbspVCC</a>
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
             <a class="btn btn-primary btn-lg btn-block" href="/media" role="button"><span class="glyphicon glyphicon-facetime-video"></span>&nbsp Media</a>
           </div>
         </div>
         <br>
           <div class="row">
             <div class="col-sm-4 col-md-offset-4" >
               <a class="btn btn-danger btn-lg btn-block" href="/coordinator" role="button"><span class="glyphicon glyphicon-star-empty"></span>&nbsp Coordinators</a>
             </div>
           </div>
        </div>
      </div>
    </div>
  </div>
  @include('layouts.footer')
    </body>
</html>
