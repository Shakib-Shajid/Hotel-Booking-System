<!DOCTYPE html>
<html lang="en">
<head>
<!-- Start of Async Drift Code -->
  <script>
  "use strict";

  !function() {
    var t = window.driftt = window.drift = window.driftt || [];
    if (!t.init) {
      if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
      t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
      t.factory = function(e) {
        return function() {
          var n = Array.prototype.slice.call(arguments);
          return n.unshift(e), t.push(n), t;
        };
      }, t.methods.forEach(function(e) {
        t[e] = t.factory(e);
      }), t.load = function(t) {
        var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
        o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
        var i = document.getElementsByTagName("script")[0];
        i.parentNode.insertBefore(o, i);
      };
    }
  }();
  drift.SNIPPET_VERSION = '0.3.1';
  drift.load('kr66kbtit95z');
  </script>
<!-- End of Async Drift Code -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Ocean Sunrise Hotel</title>
  <!-- add icon link -->
  <link rel = "icon" href = "images/LOGO_icon.png" type = "image/x-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <!--Bootstrap-icons-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.1/font/bootstrap-icons.css" />
  <!--Boxicons-->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!--Font Awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <!--Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <!-- GlightBox -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/css/glightbox.min.css" integrity="sha512-T+KoG3fbDoSnlgEXFQqwcTC9AdkFIxhBlmoaFqYaIjq2ShhNwNao9AKaLUPMfwiBPL0ScxAtc+UYbHAgvd+sjQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Template Main CSS File -->
  <link href="css/style.css?v=<?php echo time(); ?>" rel="stylesheet" />
</head>
<body>
<?php include('top.php'); ?>

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/slide1.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="textstyler">
              <span class="textdeg">Better</span>
              <span class="textdeg">Travel</span>
              <span class="textdeg">Experience</span>
              <span class="textdeg">With</span>
              <span class="textdeg">Us</span>
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide20.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="textstyler">
              <span class="textdeg">Better</span>
              <span class="textdeg">Travel</span>
              <span class="textdeg">Experience</span>
              <span class="textdeg">With</span>
              <span class="textdeg">Us</span>
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide5.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="textstyler">
              <span class="textdeg">Better</span>
              <span class="textdeg">Travel</span>
              <span class="textdeg">Experience</span>
              <span class="textdeg">With</span>
              <span class="textdeg">Us</span>
            </h1>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/slide6.jpg" class="d-block w-100" alt="...">
          <div class="carousel-caption">
            <h1 class="textstyler">
              <span class="textdeg">Better</span>
              <span class="textdeg">Travel</span>
              <span class="textdeg">Experience</span>
              <span class="textdeg">With</span>
              <span class="textdeg">Us</span>
            </h1>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About Us</h2>
          <p>About our main responsibilites</p>
        </div>
        <div class="row">
          <div class="col">
            <img id="shadow" src="images/pic4.jpg" class="round mt-3" alt="" width="80%" , height="80%">
          </div>
          <div class="col">
            <!-- <div class="row row-cols-1 row-cols-md-3 g-4"> -->
            <div class="row">
              <p>
              <h3><span class="material-symbols-outlined">check</span>Trust</h3>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quasi asperiores repudiandae
              repellendus velit aliquid iusto dolorum sit mollitia dolore dolores.</p>
            </div>
            <div class="row">
              <h3><span class="material-symbols-outlined">security</span>Security</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam amet rem cupiditate
                voluptatibus itaque eius neque commodi provident beatae enim.</p>
            </div>
            <div class="row">
              <p>
              <h3><span class=" material-symbols-outlined">lock_reset</span>Safety</h3>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nisi quisquam aliquam pariatur
              officia, vel impedit?
              </p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Check out the great services we offer</p>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-restaurant'></i></div>
              <h4 class="title"><a href="restaurent.html">RESTAURENT</a></h4>
              <p class="description">From grilled delicacies with a beautiful view of the sea, a refreshing meal by the
                pool, a cozy and filling dinner.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-swim'></i></div>
              <h4 class="title"><a href="pool&gym.html">POOL</a></h4>
              <p class="description">Offers the best and modern amenities and a swim is bound to take the stress off
                your body.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class='bx bx-spa'></i></div>
              <h4 class="title"><a href="spa.html">SPA</a></h4>
              <p class="description">For the ultimate rejuvenation of your body and soul, visit our Spa Escencia.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class='bx bxs-bank'></i></div>
              <h4 class="title"><a href="banquets.html">BANQUETS</a></h4>
              <p class="description">For your important business meetings or your long-awaited celebrations.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Check out our beautiful portfolio</p>
        </div>
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Creative Studio</li>
              <li data-filter=".filter-card">Executive Suite</li>
              <li data-filter=".filter-web">Deluxe</li>
            </ul>
          </div>
        </div>
        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/Creative Studio/creative_studio2.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Creative Studio/creative_studio2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Creative Studio"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Creative Studio</h4>
                <p>Package-1</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/Creative Studio/creative_studio3.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Creative Studio/creative_studio3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Creative Studio"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Creative Studio</h4>
                <p>Package-1</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="images/Creative Studio/creative_studio4.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Creative Studio/creative_studio4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Creative Studio"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Creative Studio</h4>
                <p>Package-1</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/Executive Suite/executive_suite1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Executive Suite/executive_suite1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Executive Suite"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Executive Suite</h4>
                <p>Package-2</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/Executive Suite/executive_suite3.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Executive Suite/executive_suite3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Executive Suite"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Executive Suite</h4>
                <p>Package-2</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="images/Executive Suite/executive_suite4.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Executive Suite/executive_suite4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Executive Suite"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Executive Suite</h4>
                <p>Package-2</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/Deluxe/premier/premier1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Deluxe/premier/premier1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Premier Delux"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Premier Deluxe</h4>
                <p>Package-3</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/Deluxe/superior/superior1.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Deluxe/superior/superior1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Premier Delux"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Premier Deluxe</h4>
                <p>Package-3</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="images/Deluxe/premier/premier3.jpg" class="img-fluid" alt="" />
              <div class="portfolio-links">
                <a href="images/Deluxe/premier/premier3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Premier Delux"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>Premier Deluxe</h4>
                <p>Package-3</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Section -->

   
    <!-- ======= Location Section ======= -->
    <section id="locations" class="locations">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Locations</h2>
          <p>Check our location</p>
        </div>
        <div class="row">
          <div class="column">
            <h5 class="alignmiddle">Cox's Bazar Location</h5>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3714.274185916369!2d91.98025771425223!3d21.418465279737354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc62a55555555%3A0x2e775757ca43f46a!2sOcean%20Paradise%20Hotel%20%26%20Resort!5e0!3m2!1sen!2sbd!4v1672150259016!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section><!-- End Location Section -->

<?php include('contactus.php'); ?>

<?php include('footer.php'); ?>
    

    

    <!-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/glightbox/3.2.0/js/glightbox.min.js" integrity="sha512-S/H9RQ6govCzeA7F9D0m8NGfsGf0/HjJEiLEfWGaMCjFzavo+DkRbYtZLSO+X6cZsIKQ6JvV/7Y9YMaYnSGnAA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    
    <!-- Template Main JS File -->
    <script src="js/main.js"></script>

</body>
</html>
