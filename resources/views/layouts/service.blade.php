<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cheno Smart Resources-Services</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/finance-business.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">>

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
          <a class="navbar-brand" href="{{url('/')}}"><h2>Cheno Smart Resources</h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about')}}">About Us</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/service')}}">Our Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/login')}}">Agent Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/client_login')}}">Client Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Our Services</h1>
            <span>We have over 10 years of experience</span>
          </div>
        </div>
      </div>
    </div>

    <div class="single-services">
      <div class="container">
        <div class="row" id="tabs">
          <div class="col-md-4">
            <ul>
              <li><a href='#tabs-1'>Investment <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-2'>Insurance <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-3'>Will & Trust <i class="fa fa-angle-right"></i></a></li>
              <li><a href='#tabs-4'>Financial Goal Advice <i class="fa fa-angle-right"></i></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <section class='tabs-content'>
              <article id='tabs-1'>
                <img src="{{asset('images/single_service_01.jpg')}}" alt="">
                <h4>Investment</h4>
                <p>In investment part, we colobrate with Affin Hwang Asset Management who had more than 20 years of experience in investing
                <br><br>So we took advantage of their strength and give client who wish to growth their wealth via invesment.</p>
              </article>
              <article id='tabs-2'>
                <img src="{{asset('images/single_service_02.jpg')}}" alt="">
                <h4>Insurance</h4>
                <p>Insurance is a very crucial part when come to minimising our financial risk, so we colobrate with Allianz Life Insurance Malaysia and provide our customer with option to create emergency fund during the event of uncertainties
                <br><br>We have helped over 2000 client to set up their emergency fund of 1 billion with Allianz Life Insurance Malaysia.</p>
              </article>
              <article id='tabs-3'>
                <img src="{{asset('images/single_service_03.jpg')}}" alt="">
                <h4>Will & Trust</h4>
                <p>Preserving wealth is one of the crucial part when comes to inheritance, so we have partnered up with RHB Trustee Berhad to give customer will & trust services. 
                <br><br>We help customer to do their estate planning by advising them all the possible risk in their estate and how we can help to overcome it.</p>
              </article>
              <article id='tabs-4'>
                <img src="{{asset('images/single_service_04.jpg')}}" alt="">
                <h4>Financial Goal Advice</h4>
                <p>For certain customer who wish to achieve certain financial goals like planning for their retirement on certain age or educational fund for their child. 
                <br><br>We will utilise all the tools available and help customer to plan for theirs goal as well as take all the possible risk in the process of achieving their goal.</p>
              </article>
            </section>
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
                <img src="{{asset('images/client-01.png')}}" alt="">
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