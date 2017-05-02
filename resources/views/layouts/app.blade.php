<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- SEO Meta -->
    @yield('meta')

    @yield('title')

    <!-- Styles -->
    <link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('css/style.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('css/font-awesome.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('css/responsive.css') }}" rel="stylesheet" type="text/css">
<link href="{{ url('css/animate.css') }}" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="{{ url('./js/jquery.1.8.3.min.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/jquery-scrolltofixed.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/jquery.easing.1.3.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/jquery.isotope.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/wow.js') }}"></script>
<script type="text/javascript" src="{{ url('./js/classie.js') }}"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
    <div class="container">
        <figure class="logo animated fadeInDown delay-07s">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </figure>
        <h1 class="animated fadeInDown delay-07s">Welkom bij Brabantse Airsoft Division</h1>
        <ul class="we-create animated fadeInUp delay-1s">
            <li>Brabantse Airsoft Division is een gezellige en vriendelijke airsoft team.</li>
        </ul>
            <a class="link animated fadeInUp delay-1s" href="#nav">Lees meer</a>
    </div>
</header>
</div>

<nav class="main-nav-outer" id="nav"><!--main-nav-start-->
    <div class="container">
        <?=menu('main_menu', 'layouts.nav');?>
    </div>
</nav>

<section class="main-section paddind" id="members"><!--main-section-start-->
    <div class="container">
        <h2>Members</h2>
        <h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">
        <ul class="Portfolio-nav wow fadeIn delay-02s">
            <li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".sniper" >Snipers</a></li>
            <li><a href="#" data-filter=".infanterie" >Infanterie</a></li>
        </ul>
       </div>

    </div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
                <div class=" Portfolio-box sniper">
                    <a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>
                    <h3>David Broeders</h3>
                    <p>Sniper</p>
                </div>
                <div class="Portfolio-box infanterie">
                    <a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>
                    <h3>Ton bruijnster</h3>
                    <p>Infanterie</p>
                </div>
                <div class=" Portfolio-box sniper">
                    <a href="#"><img src="img/Portfolio-pic3.jpg" alt=""></a>
                    <h3>Virgil de Meijer</h3>
                    <p>Sniper</p>
                </div>
                <div class=" Portfolio-box infanterie" >
                    <a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>
                    <h3>Dennis Cools</h3>
                    <p>Infanterie</p>
                </div>
                <div class=" Portfolio-box infanterie">
                    <a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>
                    <h3>Koen van den Kieboom</h3>
                    <p>Infanterie</p>
                </div>
                <div class=" Portfolio-box infanterie">
                    <a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>
                    <h3>Guido Pieters</h3>
                    <p>Infanterie</p>
                </div>
    </div>
</section><!--main-section-end-->

<div class="c-logo-part" id="samenwerking"><!-- Samenwerking -->
    <div class="container">
        <ul>
            <li><a href="#"><img src="{{ url('./img/c-liogo1.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ url('./img/c-liogo2.png') }}" alt=""></a></li>
            <li><a href="#"><img src="{{ url('./img/c-liogo3.png') }}" alt=""></a></li>
        </ul>
    </div>
</div><!-- Samenwerking -->

<section class="business-talking"><!--business-talking-start-->
    <div class="container">
        <h2>Contact</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">

        <div class="row">
            <div class="col-lg-6 col-sm-7 wow fadeInLeft">
                <div class="contact-info-box address clearfix">
                    <h3><i class=" icon-map-marker"></i>Adres:</h3>
                    <span>Willem Marislaan 17<br> 4941EK, Raamsdonksveer</span>
                </div>
                <div class="contact-info-box phone clearfix">
                    <h3><i class="fa-phone"></i>Tel:</h3>
                    <span>06-43 229 774</span>
                </div>
                <div class="contact-info-box email clearfix">
                    <h3><i class="fa-pencil"></i>E-mail:</h3>
                    <span>virgil.de.meijer@gmail.com</span>
                </div>
                <div class="contact-info-box hours clearfix">
                    <h3><i class="fa-clock-o"></i>Hours:</h3>
                    <span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                    <li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
                <div class="form">
                    <input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>
            </div>
        </div>
</section>
</div>
<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2015 | <a href="http://bootstraptaste.com/">Brabantse Airsoft Division</a> by Virgil de Meijer</span>
    </div>
    <!--
        All links in the footer should remain intact.
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#nav').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>


<script type="text/javascript">
    $(window).load(function(){

        $('.main-nav li a').bind('click',function(event){
            var $anchor = $(this);

            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top - 102
            }, 1500,'easeInOutExpo');
            /*
            if you don't want to use the easing effects:*/
            $('html, body').stop().animate({
                scrollTop: $($anchor.attr('href')).offset().top
            }, 1000);

            event.preventDefault();
        });
    })
</script>

<script type="text/javascript">

$(window).load(function(){


  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;


  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });

  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }

  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');

        var selector = $(this).attr('data-filter');
        $container.isotope({

            filter: selector,
         });
         return false;
    });

});

</script>

</body>
</html>