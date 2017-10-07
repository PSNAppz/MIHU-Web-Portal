
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Marck Script" rel="stylesheet" type="text/css">


    <!--Bootstrap link-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Styles -->
    <link href="/css/parsley.css" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!--footer stylesheet-->
    <link rel="stylesheet" href="css/demo.css">
     <link rel="stylesheet" href="css/footer-basic-centered.css">

     <style>
     .crew{
         font-family:'Marck Script', sans-serif;
         font-size: 50px;
          text-decoration: underline;
     }
     .col-sm-4{
         font-family:'Marck Script', sans-serif;
         font-size: 20px;
     }
     html, body {
         background-color: #fff;
         color: #636b6f;
         font-family: 'Raleway', sans-serif;
         font-weight: 100;
         height: 100%;
         margin: 0;
     }
     footer{
     	bottom: 0;
     }
     .wrapper{
      --min-height: 100%;
      height: 100% - 200px;
      margin: 0 auto ;
     }
   </style>
    <!-- Scripts -->
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
                    MIHU
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
                        <li><a href="{{ url('/register') }}">Register</a></li>
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
    ;
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
img:hover{
border: 1px solid #636b6f;
}
</style>
    <div class="content">
        <div class="title m-b-md">
            About Us
        </div>
    </div>

   <div class="content">
<table width="100%" border="0">
<tr>
<!--<td width="54%" rowspan="3" valign="top">
              <img src="images/17-av64.jpg"></img>
</td>-->
<td width="46%">
<font style="font size=100; font-align:left;">
<p style="text-align:left;font-size:160%;">
<strong> May I Help You Portal</strong>
<br>
<br>
  <strong> Product Version : &nbsp; </strong><span style="font-family:courier;">1.1 Beta</span>
<br>
  <strong> Department Of Computer Science and Applications </strong>
<br>
<strong> Amritapuri Campus </strong>

<td>
</tr>
<tr>

</table>
</div>
<div class="jumbotron" style="margin-bottom: 0px">
         <div class="button">
           <h2 class ="crew"><b><center>The Crew</center></b></h2>
           <div class="container">
             <div class="row">
               <div class="col-sm-4">
                 <img src="images/psn.jpg" alt="psn" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">P S Narayanan <br> Bca 2014-17

               </div>
               <div class="col-sm-4">
                 <img src="images/sstest.jpg" alt="sooraj" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">Sooraj Soman <br> Bca 2014-17
               </div>

		<div class="col-sm-4">
                 <img src="images/vasudev.jpg" alt="vasudev" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">Vasudev R Nair  <br> Bca 2015-18
               </div>
		</div>
	<div class="row">
	<br>
               <div class="col-sm-4">
                 <img src="images/HARIKRISHNA AJ.jpg" alt="HARIKRISHNA AJ" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">Harikrishna A J <br> Bca 2015-18
               </div>

		<div class="col-sm-4">
                 <img src="images/harivishnu.jpeg" alt="harivishnu" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">Harivishnu M Pillai <br> Bca 2015-18
               </div>

		<div class="col-sm-4">
                 <img src="images/kc.jpg" alt="kc" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">K S Krishnachandran <br> Bca 2014-17
               </div>

		<div class="col-sm-4">
                 <img src="images/arjun.jpg" alt="arjun" class="img-circle" width=150 height=150>
		<br> <span style="text-align:center;">Arjun N M <br> Bca 2015-18
               </div>

             </div>


           </div>
      </div>
    </div>
</div>

@include('layouts.footer');
  </div>
    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <script src="/js/parsley.js"></script>


</body>
</html>
