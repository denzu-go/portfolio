<?php
include 'essentials.php';
?>

<!doctype html>
<html lang="en">

<head>
  <title>Nitro &mdash; Website Template by Colorlib</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <?php
    include 'global/header.php';
    ?>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">


          <div class="col-md-8 mt-lg-5 text-center">
            <h1 class="text-uppercase" data-aos="fade-up">Welcome</h1>
            <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio soluta eius error.</p>
            <div data-aos="fade-up" data-aos-delay="100">
              <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">Get In Touch</a>
            </div>
          </div>

        </div>
      </div>

      <a href="#about-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>

    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">About Me</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
              <img src="images/hero_1.jpg" alt="Image" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            <div class="mb-4">
              <h3 class="h3 mb-4 text-black">For the next great business</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo tempora cumque eligendi in nostrum labore omnis quaerat. Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti animi ipsa architecto! Amet, quisquam reprehenderit. Perspiciatis iste veritatis pariatur ullam laboriosam porro aspernatur voluptate similique debitis cupiditate. Consequatur, facere earum?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non cum vitae rerum amet tenetur possimus soluta fugiat minima quasi consequatur numquam minus mollitia sint consequuntur facilis optio fuga praesentium excepturi sed repellat, debitis veniam odit error. Perspiciatis exercitationem eveniet sunt dolor, voluptatem quidem blanditiis praesentium suscipit natus facere ad quam!</p>

            </div>



            <div class="mb-4">
              <ul class="list-unstyled ul-check success">
                <li>Officia quaerat eaque neque</li>
                <li>Possimus aut consequuntur incidunt</li>
                <li>Lorem ipsum dolor sit amet</li>
                <li>Consectetur adipisicing elit</li>
              </ul>

            </div>



          </div>
        </div>
      </div>
    </div>

    <section class="site-section" id="portfolio-section">
      <div class="col-12 text-center" data-aos="fade">
        <h2 class="section-title mb-3">My Portfolio</h2>
      </div>
      <div class="row justify-content-center mb-0" data-aos="fade-up">
        <a href="#portfolio1-section" class="btn btn-outline-primary nav-link mr-2">Video Edits</a>
        <a href="#portfolio2-section" class="btn btn-outline-primary nav-link mr-2">Graphic Designs</a>
        <a href="#portfolio3-section" class="btn btn-outline-primary nav-link mr-2">Social Media</a>
        <a href="#portfolio4-section" class="btn btn-outline-primary nav-link">Web & UI/UX</a>
      </div>
    </section>


    <section class="site-section" id="portfolio1-section">
      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="mb-3">Video Edits</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters1" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".web">Web</button>
            <button class="btn btn-primary" data-filter=".design">Design</button>
            <button class="btn btn-primary" data-filter=".brand">Brand</button>
          </div>
        </div>

        <div id="posts1" class="row no-gutter">

          <div class="item web col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div>

          <div class="item design col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item brand col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div>

        </div>
      </div>

    </section>

    <section class="site-section" id="portfolio2-section">
      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="mb-3">Graphic Designs</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters2" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".we">Web</button>
            <button class="btn btn-primary" data-filter=".desig">Design</button>
            <button class="btn btn-primary" data-filter=".bran">Brand</button>
          </div>
        </div>

        <div id="posts2" class="row no-gutter">

          <div class="item we col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div>

          <div class="item desig col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item bran col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div>

        </div>
      </div>

    </section>

    <section class="site-section" id="portfolio3-section">
      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="mb-3">Social Media</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters3" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".we">Web</button>
            <button class="btn btn-primary" data-filter=".desig">Design</button>
            <button class="btn btn-primary" data-filter=".bran">Brand</button>
          </div>
        </div>

        <div id="posts3" class="row no-gutter">

          <div class="item we col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div>

          <div class="item desig col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item bran col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div>

        </div>
      </div>

    </section>

    <section class="site-section" id="portfolio4-section">
      <div class="container">

        <div class="row mb-3">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="mb-3">Web Design & UI/UX</h2>
          </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
          <div id="filters4" class="filters text-center button-group col-md-7">
            <button class="btn btn-primary active" data-filter="*">All</button>
            <button class="btn btn-primary" data-filter=".we">Web</button>
            <button class="btn btn-primary" data-filter=".desig">Design</button>
            <button class="btn btn-primary" data-filter=".bran">Brand</button>
          </div>
        </div>

        <div id="posts4" class="row no-gutter">

          <div class="item we col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_9.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_9.jpg">
            </a>
          </div>

          <div class="item desig col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_10.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_10.jpg">
            </a>
          </div>

          <div class="item bran col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            <a href="images/img_11.jpg" class="item-wrap fancybox" data-fancybox="gallery2">
              <span class="icon-search2"></span>
              <img class="img-fluid" src="images/img_11.jpg">
            </a>
          </div>

        </div>
      </div>

    </section>

    <section class="site-section border-bottom bg-light" id="services-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">Our Services</h2>
          </div>
        </div>
        <div class="row align-items-stretch">

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <span class="text-primary">
                  <i class="fa-solid fa-film"></i>
                </span>
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <span class="text-primary">
                  <i class="fa-regular fa-file-image"></i>
                </span>
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <span class="text-primary">
                  <i class="fa-regular fa-closed-captioning"></i>
                </span>
              </div>
              <div>
                <h3>Business Consulting</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Testimonials</h2>
          </div>
        </div>
      </div>
      <div class="slide-one-item home-slider owl-carousel">
        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>

            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>John Smith</p>
            </figure>
          </div>
        </div>
        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Christine Aguilar</p>
            </figure>

          </div>
        </div>

        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Robert Spears</p>
            </figure>


          </div>
        </div>

        <div>
          <div class="testimonial">

            <blockquote class="mb-5">
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
            <figure class="mb-4 d-flex align-items-center justify-content-center">
              <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
              <p>Bruce Rogers</p>
            </figure>

          </div>
        </div>

      </div>
    </section>

    <section class="site-section bg-light" id="contact-section" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3">Contact Me</h2>
          </div>
        </div>
        <div class="row mb-5">



          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h4 text-primary"></span>
              <span>203 Fake St. Mountain View, San Francisco, California, MeA</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h4 text-primary"></span>
              <a href="#">+1 232 3235 324</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h4 text-primary"></span>
              <a href="#">youremail@domain.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">



            <form action="#" class="p-5 bg-white">

              <h2 class="h4 text-black mb-5">Contact Form</h2>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label>
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">

                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label>
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label>
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary btn-md text-white">
                </div>
              </div>


            </form>
          </div>

        </div>
      </div>
    </section>

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Me</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 ml-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#about-section" class="smoothscroll">About Me</a></li>
                  <li><a href="#services-section" class="smoothscroll">Services</a></li>
                  <li><a href="#testimonials-section" class="smoothscroll">Testimonials</a></li>
                  <li><a href="#contact-section" class="smoothscroll">Contact Me</a></li>
                </ul>
              </div>
              <div class="col-md-3">
                <h2 class="footer-heading mb-4">Follow Me</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>
                  document.write(new Date().getFullYear());
                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>

            </div>
          </div>

        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>


  <script src="js/main.js?<?php echo time(); ?>"></script>

</body>

</html>