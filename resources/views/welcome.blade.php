<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>MIHU</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!--Bootstrap link-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <!--Transition Slide Scripts-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script src=" responsiveslides.min.js"></script>
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
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                  height:80vh;
                  background-image:url(./images/homebackground.jpg)
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
                font-size: 84px;
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

            #logo {
              position:absolute;
              top:5px;
              left:5px;
            }
        </style>
    </head>
    <body>
        <div class="logo">
            <!--<div class="page-header text-center">-->
              <h1>Amritavarsham63</h1>
          <!--  </div> -->

                @if (Route::has('login'))
                    <div class="top-right links">
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    </div>
                @endif
        </div>

      <!--  <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif
-->
          <!--  <div class="content">
                <div class="title m-b-md">
                    May I Help You?
                </div>

                <div class="links">
                    <a href="#"></a>
                </div>
            </div>-->
        <div class = "flex-center position-ref full-height">
            <div class = "content">
              <ul class="rslides">
                <li><img src="images/img_1.jpg" alt=""></li>
                <li><img src="images/img_2.jpg" alt=""></li>
                <li><img src="images/img_3.jpg" alt=""></li>
              </ul>
            </div>
        </div>

        <div class="jumbotron">
          <h2><b>May I Help You Portal</b></h2>
          <p>Select the department</p>
          <p>
            <a class="btn btn-primary btn-lg" href="/accomodation" role="button">Accomodation</a>
            <a class="btn btn-primary btn-lg" href="/transportation" role="button">Transportation</a>
            <a class="btn btn-primary btn-lg" href="/medical" role="button">Medical</a>
          </p>
          <br>
          <p>
            <a class="btn btn-primary btn-lg" href="/vcc" role="button">VCC</a>
            <a class="btn btn-primary btn-lg" href="/food" role="button">Food</a>
            <a class="btn btn-primary btn-lg" href="/darshan" role="button">Darshan</a>
          </p>
          <br>
          <p>
            <a class="btn btn-primary btn-lg" href="/specialevents" role="button">Special Events</a>
            <a class="btn btn-primary btn-lg" href="/security" role="button">Security</a>
            <a class="btn btn-primary btn-lg" href="/media" role="button">Media</a>
          </p>
        </div>

        <!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
