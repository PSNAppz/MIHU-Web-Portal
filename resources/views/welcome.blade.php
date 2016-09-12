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

        <!--footer stylesheet-->
        <link rel="stylesheet" href="css/demo.css">
	       <link rel="stylesheet" href="css/footer-basic-centered.css">

        <!--Transition Slide Scripts-->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                  height:80vh;
                  background-image:url(./images/background.jpg)
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
            .button {
              text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="logo">
              <h1>Amritavarsham63</h1>

                @if (Route::has('login'))
                    <div class="top-right links">
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    </div>
                @endif
        </div>

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
                 <a class="btn btn-primary btn-lg btn-block" href="/accomodation" role="button"><span class="glyphicon glyphicon-home"></span>&nbsp Accomodation</a>
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
      </div>
    </div>
  </div>
       <footer class="footer-basic-centered">

			      <p class="footer-company-motto">Think with heart<span class="glyphicon glyphicon-heart"></span>. Serve with hands.</p>

			         <p class="footer-links">
				             <a href="#">Home</a>
				                  ·
				             <a href="#">Blog</a>
				                  ·
				             <a href="#">Pricing</a>
				                  ·
				             <a href="#">About</a>
				                  ·
				             <a href="#">Faq</a>
				                  ·
				             <a href="#">Contact</a>
			        </p>

			<p class="footer-company-name">ASAS &copy; 2016</p>

		</footer>

        <!-- Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>
