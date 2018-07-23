<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8"><!-- default sysnt from bootstrap -->

  <title>Welcome to Laravel</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1"><!-- Bootstrao 3 is mobile first -->
  <meta name="keywords" content="">
  <meta name="description" content="">

  <!-- stylesheets css -->
  <link rel="stylesheet" href="css/bootstrap.min.css">  <!-- default bootstap css -->

  <link rel="stylesheet" href="css/animate.min.css">

  <link rel="stylesheet" href="css/et-line-font.css">
  <link rel="stylesheet" href="css/font-awesome.min.css"> <!-- default css from font awesome -->

  <link rel="stylesheet" href="css/vegas.min.css">
  <link rel="stylesheet" href="css/angam.css"> <!-- my Style css -->
  <link href="css/round-about.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> 
  <!-- deafualt css from  google -->
 <!-- Stylesheeet End -->
</head>
<body>
  <!-- header the Navigation bar -->
  <div id="app")>
        <nav class="navbar navbar-inverse navbar-static-top">
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
                    <a class="navbar-brand" href="{{ url('/home') }}"> Laravel Blog  
                    </a>
                    <ul class="nav navbar-nav">
                     
                     <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">About </a></li>
                     
                      <li class="{{ Request::is('landing') ? "active" : "" }}"><a href="/landing">Landing Page</a></li>
                     <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact</a></li>
                 </ul>
                    
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
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>
    <!-- Close the Navigation Bar -->
    
<!-- preloader section -->
<section class="preloader">
  <div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<!-- home section -->
<section id="home">
  <div class="container"> <!-- Bootstrap for page layout-->
    <div class="row">

      <div class="col-md-offset-2 col-md-8 col-sm-12">
        <div class="home-thumb">
          <h1 class="wow fadeInUp " data-wow-delay="0.4s">Welcome to Laravel Ver 5.4 </h1>
                <h3 class="wow fadeInUp" data-wow-delay="0.6s">First Application <strong> with Laravel Framework </strong><br>
                <a href="https://www.youtube.com/channel/UC6kwT7-jjZHHF1s7vCfg2CA/playlists" class="btn btn-lg btn-default " data-wow-delay="0.8s">Watch on youtube</a>
              <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-lg btn-success smoothScroll wow fadeInUp" data-wow-delay="1.0s">Notify me!</a>
        </div>
      </div>

    </div>
  </div>    
</section>

<!-- about section -->
<section id="about">
  <div class="container">
    <div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="images/about-img.png" class="img-responsive wow fadeInUp" alt="About">
      </div>

      <div class="col-md-6 col-sm-12">
        <div class="about-thumb">
          <div class="section-title">
            <h1 class="wow fadeIn" data-wow-delay="0.2s"> Laravel</h1>
            <h3 class="wow fadeInUp" data-wow-delay="0.4s">What is Laravel</h3>
          </div>
          <div class="wow fadeInUp" data-wow-delay="0.6s">
            <p>
              Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern and based on Symfony. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar.  </p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>




<!-- feature section -->
<section id="feature">
  <div class="container">
    <div class="row">
      
      <svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Responsive</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.8s">
          <div class="media-object media-left">
            <i class="icon icon-refresh"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object media-left">
            <i class="icon icon-chat"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="clearfix text-center col-md-12 col-sm-12">
        <a href="http://localhost:8000/contact" class="btn btn-default smoothScroll">Talk to us</a>
      </div>

    </div>
  </div>
</section>
  </div>
     <!-- Page Content -->
    <div class="container-fluid" style="background-color: white;">

      <!-- Introduction Row -->
      <h1 class="my-4" style="text-align: center;">About Us <br>
        <small>It's Nice to Meet You!</small>
      </h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

      <!-- Team Members Row -->
      <div class="row">
        <div class="col-lg-12">
          <h2 class="my-4">Our Team</h2>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
        <div class="col-lg-4 col-sm-6 text-center mb-4">
          <img class="rounded-circle img-fluid d-block mx-auto" src="http://placehold.it/200x200" alt="">
          <h3>John Smith
            <small>Job Title</small>
          </h3>
          <p>What does this team member to? Keep it short! This is also a great spot for social links!</p>
        </div>
      </div>

    </div>
    <!-- /.container -->


</section>
<!-- footer section -->
<footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>
<section>


<!-- modal -->
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Our Newsletter</h2>
        </div>
        <form action="#" method="post">
          <input name="fullname" type="text" class="form-control" id="fullname" placeholder="Full Name">
          <input name="email" type="text" class="form-control" id="email" placeholder="Email Address">
          <input name="submit" type="submit" class="form-control" id="submit" value="Subscribe Now">
        </form>
        <p>Thank you for your visiting!</p>
      </div>
  </div>
</div>
</section>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/vegas.min.js"></script>

<script src="js/wow.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/custom.js"></script>

</body>
</html>