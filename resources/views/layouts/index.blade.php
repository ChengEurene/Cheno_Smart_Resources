<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Cheno Smart Resources</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

  </head>

  <body>


    <!-- Header -->
    <div class="sub-header">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xs-12">
            <ul class="left-info">
              <li><i class="fa fa-clock-o"></i>Mon-Fri 09:30am-05:30pm</a></li>
              <li><i class="fa fa-phone"></i>012-7075170</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="right-icons">
              <li><a rel="nofollow" href="https://www.facebook.com/chenosmartresources" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a rel="nofollow" href="https://www.linkedin.com/in/eurene-wealth-consultant/" target="blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a rel="nofollow" href="https://www.instagram.com/eurenecheng/" target="blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Cheno Smart Resources</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/service')}}">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/client_login">Client Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://127.0.0.1:8000/login">Agent Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item --> -->
          <!-- // Item -->
          <!-- Item -->
          <div class="item item-2">
            <div class="img-fill">
                <div class="text-content">
                  <h6>we are here to support you</h6>
                  <h4>Estate Planning</h4>
                  <a href="services.html" class="filled-button">our services</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item -->
          <!-- // Item -->
        </div>
    </div>
    <!-- Banner Ends Here -->



    <div class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Financial <em>Services</em></h2>
              <span>Helping client to build their wealth portfolio</span>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_01.jpg')}}" alt="">
              <div class="down-content">
                <h4>Life Insurance</h4>
                <p>Helping client to create an emergency fund and minimise the impact of the finances when emergencu happen.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_02.jpg')}}" alt="">
              <div class="down-content">
                <h4>Investment</h4>
                <p>Helping client to create fund to achieve their financial goal.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="service-item">
              <img src="{{asset('images/service_03.jpg')}}" alt="">
              <div class="down-content">
                <h4>Will & Trust</h4>
                <p>Helping client to distribute their wealth to their next generationw with their own will.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="fun-facts">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="left-content">
              <h2>Our solutions for your <em>financial growth</em></h2>
              <p>Financial planing is not just focus on financial growth, we need to plan for all the possible risk that might affect our wealth and how to inherit them </p>
              <br><br>At Cheno Smart Resources, our client wealth are planned accordingly, so that they can minimise their fincnialc risk while maximise their growth.</p>
            </div>
          </div>
          <div class="col-md-6 align-self-center">
            <div class="row">
             <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">2000</div>
                  <div class="count-title">Client Helped</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">1</div>
                  <div class="count-title">billion Emergency Fund</div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="count-area-content">
                  <div class="count-digit">200</div>
                  <div class="count-title">Awards Won</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="more-info">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="more-info-content">
              <div class="row">
                <div class="col-md-6">
                  <div class="left-image">
                    <img src="{{asset('images/more-info.jpg')}}" alt="">
                  </div>
                </div>
                <div class="col-md-6 align-self-center">
                  <div class="right-content">
                    <span>Who we are</span>
                    <h2>Get to know about <em>our company</em></h2>
                    <p>Cheno Smart Resources has been setting up for more than 10 years. Throughout the years, we have helped client to plan their wealth</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="partners">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="owl-partners owl-carousel">
            
              <div class="partner-item">
                <img src="{{asset('images/client-01.jpg')}}" title="Cheno Smart Resources" alt="1">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/client-02.jpg')}}" title="Affin Hwang Capital Asset Management" alt="2">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/client-03.jpg')}}" title="RHB Trustee Berhad" alt="3">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/client-04.jpg')}}" title="Allianz Life Insurance Malaysia" alt="4">
              </div>
              
              <div class="partner-item">
                <img src="{{asset('images/client-05.jpg')}}" title="Go To Success Agency" alt="5">
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer Starts Here -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-3 footer-item">
            <h4>Cheno Smart Resources</h4>
            <ul class="social-icons">
              <li><a rel="nofollow" href="https://www.facebook.com/chenosmartresources" target="_blank"><i class="fa fa-facebook"></i></a></li>
              <li><a rel="nofollow" href="https://www.linkedin.com/in/eurene-wealth-consultant/" target="blank"><i class="fa fa-linkedin"></i></a></li>
              <li><a rel="nofollow" href="https://www.instagram.com/eurenecheng/" target="blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item">
            <h4>Our Partners</h4>
            <ul class="menu-list">
              <li><a href="https://www.allianz.com.my/personal/allianz-at-a-glance/careers/agents/life-insurance-agents.html?gclid=Cj0KCQiAuP-OBhDqARIsAD4XHpc8B9m_B4IvGqVFPnFZaKDbeADKlw07-Gk2Xhpg2K-RuEI-gOiO69QaAotQEALw_wcB" target="blank">Allianz Life Insurance Malaysia</a></li>
              <li><a href="https://affinhwangam.com/who-we-are/overview" target="blank">Affin Hwang Asset Management</a></li>
              <li><a href="https://www.rhbgroup.com/overview/trustees/index.html" target="blank">RHB Trustee Berhad</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-item last-item">
          </div>
        </div>
      </div>
    </footer>
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="{{asset('js/custom.js')}}"></script>
    <script src="{{asset('js/owl.js')}}"></script>
    <script src="{{asset('js/slick.js')}}"></script>
    <script src="{{asset('js/accordions.js')}}"></script>

    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

  </body>
</html>