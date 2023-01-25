<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Grad School HTML5 Template</title>
    
   
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">


  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="http://localhost/online-examination/index.html"><em>Mathematics </em>in the Modern world</a>
    </div>
    <a href="#" class="menu-link"><i class="fa fa-bars"></i></a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href="http://localhost/online-examination/index.html">Home</a></li>
        <li class="has-submenu"><a href="#section2">Video Discussion</a>
          
       
  </header>

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
      <video autoplay muted loop id="bg-image">
          <source src="assets/images/banner.jpg" type="iamge/jpg" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              
              
              </div>
          </div>
      </div>
  </section>
 
    </div>
  </section>

  
  

  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
            <span>our presentation is for you</span>
            <h4>Watch the video to learn more <em>about Mathematics</em></h4>
            <p>The first course in a three-semester sequence covering basic calculus of real variables, Calculus A introduces the concept of limit and applies it to the definition of derivative and integral of a function of one variable. The rules of differentiation and properties of the integral are emphasized, as well as applications of the derivative and integral. This course will usually include an introduction to the transcendental functions and some use of a computer algebra system. 
            <br><br></p>
            
      <br><br>
	  
		
          <article class="video-item">
            <div class="video-caption">
              <h5>Lesson 1:Introduction of Binary Code</h4>
            </div>
            <figure>
              <a href="https://drive.google.com/file/d/1f2A9r9_iM9RjLcRsg1HHfb3b15ZRvSBa/view" class="play"></a>
            </figure>
          </article>
		  <br><br><br>
          <article class="video-item">
            <div class="video-caption">
              <h5>Lesson 2 : Conversion of Radices:From Decimal to Any Base and Vice Versa </h4>
            </div>
            <figure>
              <a href="https://drive.google.com/file/d/1nrmuHlYq3Vk35b9e4CbADQ1xCkRi0d7Y/view" class="play"></a>
            </figure>
          </article><br><br><br>
          <article class="video-item">
            <div class="video-caption">
              <h5>Lesson 3</h4>
            </div>
            <figure>
              <a href="https://drive.google.com/file/d/1f2A9r9_iM9RjLcRsg1HHfb3b15ZRvSBa/view" class="play"></a>
            </figure>
          </article><br><br><br>
          <article class="video-item">
            <div class="video-caption">
              <h5>Lesson 4</h4>
            </div>
            <figure>
              <a href="https://drive.google.com/file/d/1f2A9r9_iM9RjLcRsg1HHfb3b15ZRvSBa/view" class="play"></a>
            </figure>
          </article>
        </div>
      </div>
    </div>
  </section>


  
        

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2023 by (MATH 152)
          
           | Design: <a href="" rel="sponsored" target="_parent">Felina Mae Alcaraz</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>