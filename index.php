<?php
include 'essentials.php';
?>

<!doctype html>
<html lang="en">

<?php
include 'global/head.php';
?>

<style>
  .circle {
    width: 57px;
    height: 57px;
    border-radius: 50%;
    overflow: hidden;
  }

  .circle img {
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  #bottomnav {
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    bottom: 0;
    width: 100%;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.7) 100%);
  }

  @media (max-width: 767px) {
    .ellipsis-min {
      max-width: 50px;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
      display: inline-block;
      vertical-align: top;
    }
  }

  .btn-group-sm>.btn,
  .btn-sm {
    line-height: 1;
    color: white;
    /* Added color for buttons */
  }

  .btn:hover {
    background-color: #777;
  }

  @media (max-width: 576px) {
    #videoFrame {
      width: 100%;
      height: 500px;
    }
  }

  @media (max-width: 576px) {
    #videoFrameLands {
      width: 100%;
      height: 200px;
    }
  }
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


  <?php
  include 'global/overlayer.php';
  ?>

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


    <?php
    $sql = "SELECT * FROM constants_home WHERE title = 'background image'";
    $result = $conn->query($sql);
    while ($fetched = $result->fetch_assoc()) {
      $show = $fetched['text'];

      echo '
      <div class="site-blocks-cover overlay" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4) ), url(' . $show . ');" data-aos="fade" id="home-section">
      ';
    }
    ?>

    <div class="container">
      <div class="row align-items-center justify-content-center">


        <div class="col-md-8 mt-lg-5 text-center">
          <h1 class="text-uppercase" data-aos="fade-up">
            <?php
            $sql = "SELECT * FROM constants_home WHERE title = 'welcome'";
            $result = $conn->query($sql);
            while ($fetched = $result->fetch_assoc()) {
              $show = $fetched['text'];
            }

            echo $show;
            ?>
          </h1>

          <p class="mb-5 desc" data-aos="fade-up" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM constants_home WHERE title = 'texts below welcome'";
            $result = $conn->query($sql);
            while ($fetched = $result->fetch_assoc()) {
              $show = $fetched['text'];
            }

            echo $show;
            ?>
          </p>
          <div data-aos="fade-up" data-aos-delay="100">
            <a href="#contact-section" class="btn smoothscroll btn-primary mr-2 mb-2">
              <?php
              $sql = "SELECT * FROM constants_home WHERE title = 'button text'";
              $result = $conn->query($sql);
              while ($fetched = $result->fetch_assoc()) {
                $show = $fetched['text'];
              }

              echo $show;
              ?>
            </a>
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

  <div class="site-section cta-big-image bg-light" id="about-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">About Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
          <?php
          $sql = "SELECT * FROM constants_about WHERE title = 'picture'";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $show = $fetched['text'];

            echo '
            <img src="' . $show . '" alt="" style="max-width: 100%;">
            ';
          }
          ?>
        </div>

        <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
          <div class="mb-4">
            <h3 class="h3 mb-4 text-black">
              <?php
              $sql = "SELECT * FROM constants_about WHERE title = 'heading'";
              $result = $conn->query($sql);
              while ($fetched = $result->fetch_assoc()) {
                $show = $fetched['text'];
              }

              echo $show;
              ?>
            </h3>
            <p>
              <?php
              $sql = "SELECT * FROM constants_about WHERE title = 'text'";
              $result = $conn->query($sql);
              while ($fetched = $result->fetch_assoc()) {
                $show = $fetched['text'];
              }

              echo $show;
              ?>
            </p>

          </div>



        </div>
      </div>
    </div>
  </div>

  <section class="site-section" id="portfolio-section">
    <br><br>
    <div class="col-12 text-center" data-aos="fade">
      <h2 class="section-title mb-3">My Portfolio</h2>
    </div>
    <div class="row justify-content-center p-0 m-0" data-aos="fade-up">
      <a href="#portfolio1-section" class="btn btn-outline-primary p-2 m-1">Video Edit</a>
      <a href="#portfolio2-section" class="btn btn-outline-primary p-2 m-1">Graphic Design</a>
      <a href="#portfolio3-section" class="btn btn-outline-primary p-2 m-1">Social Media</a>
      <a href="#portfolio4-section" class="btn btn-outline-primary p-2 m-1">Brand & Logo</a>
      <a href="#portfolio5-section" class="btn btn-outline-primary p-2 m-1">Web & UI/UX</a>
    </div>
  </section>

  <section class="site-section" id="portfolio1-section">
    <hr class="hr" /><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="mb-3">Video Edit</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="fade-up">
        <div id="filters1" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>

          <?php
          $sql = "SELECT * FROM video_clients WHERE is_visible = 1 ORDER BY date_added DESC";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $client_id = $fetched['client_id'];
            $client_name = $fetched['client_name'];

            echo '
              <button class="btn btn-primary" data-filter=".' . $client_id . '">' . $client_name . '</button>  
              ';
          }
          ?>

        </div>
      </div>

      <div id="posts1" class="row no-gutter">

        <?php
        $sql = "SELECT * FROM video_outputs WHERE is_visible = 1 ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $link = $fetched['link'];
          $is_portrait = $fetched['is_portrait'];
          $is_visible = $fetched['is_visible'];
          $date_added = $fetched['date_added'];
          $client_id = $fetched['client_id'];

          if ($is_portrait) {
            $show = '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
              <iframe id="videoFrame"
                width="70%" height="300px"
                src="https://www.youtube.com/embed/' . $link . '" 
                title="YouTube video player" frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                gyroscope; picture-in-picture;
                web-share"
                allowfullscreen>
              </iframe>
            </div>        
            ';
          } else {
            $show = '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
              <iframe id="videoFrameLands" width="100%" src="' . $link . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            ';
          }

          echo '
            ' . $show . '
            ';
        }
        ?>


      </div>
    </div>

  </section>

  <section class="site-section" id="portfolio2-section">
    <hr class="hr" /><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="mb-3">Graphic Design</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="fade-up">
        <div id="filters2" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>
          <?php
          $sql = "SELECT * FROM graphic_clients WHERE is_visible = 1 ORDER BY date_added DESC";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $client_id = $fetched['client_id'];
            $client_name = $fetched['client_name'];

            echo '
              <button class="btn btn-primary" data-filter=".' . $client_id . '">' . $client_name . '</button>  
              ';
          }
          ?>
        </div>
      </div>

      <div id="posts2" class="row no-gutter">

        <?php
        $sql = "SELECT * FROM graphic_outputs WHERE is_visible = 1 ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $link = $fetched['link'];
          $is_visible = $fetched['is_visible'];
          $date_added = $fetched['date_added'];
          $client_id = $fetched['client_id'];

          echo '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="' . $link . '" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="' . $link . '">
                </a>
            </div>
            ';
        }
        ?>

      </div>
    </div>

  </section>

  <section class="site-section" id="portfolio3-section">
    <hr class="hr" /><br>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="mb-3">Social Media</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="fade-up">
        <div id="filters3" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>
          <?php
          $sql = "SELECT * FROM social_media_clients WHERE is_visible = 1 ORDER BY date_added DESC";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $client_id = $fetched['client_id'];
            $client_name = $fetched['client_name'];

            echo '
              <button class="btn btn-primary" data-filter=".' . $client_id . '">' . $client_name . '</button>  
              ';
          }
          ?>
        </div>
      </div>

      <div id="posts3" class="row no-gutter">
        <?php
        $sql = "SELECT * FROM social_media_outputs WHERE is_visible = 1 ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $link = $fetched['link'];
          $is_visible = $fetched['is_visible'];
          $date_added = $fetched['date_added'];
          $client_id = $fetched['client_id'];

          echo '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="' . $link . '" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="' . $link . '">
                </a>
            </div>
            ';
        }
        ?>
      </div>
    </div>

  </section>

  <section class="site-section" id="portfolio4-section">
    <hr class="hr" /><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="mb-3">Brand & Logo</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="fade-up">
        <div id="filters4" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>
          <?php
          $sql = "SELECT * FROM brand_logo_clients WHERE is_visible = 1 ORDER BY date_added DESC";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $client_id = $fetched['client_id'];
            $client_name = $fetched['client_name'];

            echo '
              <button class="btn btn-primary" data-filter=".' . $client_id . '">' . $client_name . '</button>  
              ';
          }
          ?>
        </div>
      </div>

      <div id="posts4" class="row no-gutter">

        <?php
        $sql = "SELECT * FROM brand_logo_outputs WHERE is_visible = 1 ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $link = $fetched['link'];
          $is_visible = $fetched['is_visible'];
          $date_added = $fetched['date_added'];
          $client_id = $fetched['client_id'];

          echo '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="' . $link . '" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="' . $link . '">
                </a>
            </div>
            ';
        }
        ?>

      </div>
    </div>
  </section>

  <section class="site-section" id="portfolio5-section">
    <hr class="hr" /><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="mb-3">Web Design & UI/UX</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="fade-up">
        <div id="filters5" class="filters text-center button-group col-md-7">
          <button class="btn btn-primary active" data-filter="*">All</button>
          <?php
          $sql = "SELECT * FROM web_clients WHERE is_visible = 1 ORDER BY date_added DESC";
          $result = $conn->query($sql);
          while ($fetched = $result->fetch_assoc()) {
            $client_id = $fetched['client_id'];
            $client_name = $fetched['client_name'];

            echo '
              <button class="btn btn-primary" data-filter=".' . $client_id . '">' . $client_name . '</button>  
              ';
          }
          ?>
        </div>
      </div>

      <div id="posts5" class="row no-gutter">

        <?php
        $sql = "SELECT * FROM web_outputs WHERE is_visible = 1 ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $link = $fetched['link'];
          $is_visible = $fetched['is_visible'];
          $date_added = $fetched['date_added'];
          $client_id = $fetched['client_id'];

          echo '
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
                <a href="' . $link . '" class="item-wrap fancybox" data-fancybox="gallery2">
                    <span class="icon-search2"></span>
                    <img class="img-fluid" src="' . $link . '">
                </a>
            </div>
            ';
        }
        ?>

      </div>
    </div>
  </section>

  <section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="fade">
          <h2 class="section-title mb-3">My Services</h2>
        </div>
      </div>
      <div class="row align-items-stretch">
        <?php
        $sql = "SELECT * FROM constants_services ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $icon = $fetched['icon'];
          $title = $fetched['title'];
          $text = $fetched['text'];
          $link = $fetched['link'];

          if ($link == null || $link == '') {
            $show_link = "";
          } else {
            $show_link = '
              <p><a href="' . $link . '" target="_blank">See More</a></p>

              ';
          }


          echo '
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4">
              <div class="unit-4-icon">
                <span class="text-primary">
                  ' . $icon . '
                </span>
              </div>
              <div>
                <h3>' . $text . '</h3>
                <p>' . $title . '</p>
                ' . $show_link . '
              </div>
            </div>
          </div>
          ';
        }


        ?>


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

      <?php
      $sql = "SELECT * FROM constants_testimonials ORDER BY date_added DESC";
      $result = $conn->query($sql);
      while ($fetched = $result->fetch_assoc()) {
        $icon = $fetched['icon'];
        $name = $fetched['name'];
        $position = $fetched['position'];
        $testimony = $fetched['testimony'];

        if ($position == null || $position == '') {
          $show_position = "";
        } else {
          $show_position = '
              <p><a href="' . $link . '" target="_blank">See More</a></p>

              ';
        }


        echo '
          <div>
            <div class="testimonial">
              <blockquote class="mb-5">
                <p>
                &ldquo;' . $testimony . '&rdquo;
                </p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">

              <div class="row">
              <div class="col">
              <div class="circle">
                  <img src="' . $icon . '">
                </div>         
              </div>
              <div class="col">
              <div class="row p-0 m-0">  <span class="">' . $name . '</span></div>
              <div class="row p-0 m-0"><span class="small font-italic">' . $position . '</span></div>
              </div>
              </div>
                       
  
              
              </figure>

            </div>
          </div>
          ';
      }
      ?>

    </div>
  </section>

  <section class="site-section bg-light" id="contact-section" data-aos="fade">
    <div class="container">
      <div class="row mb-1">
        <div class="col-12 text-center">
          <h2 class="section-title mb-3">Contact Me</h2>
        </div>
      </div>
      <div class="row mb-5">
        <?php
        $sql = "SELECT * FROM constants_contacts ORDER BY date_added DESC";
        $result = $conn->query($sql);
        while ($fetched = $result->fetch_assoc()) {
          $icon = $fetched['icon'];
          $text = $fetched['text'];
          $link = $fetched['link'];

          if ($link == null || $link == '') {
            $show_link = '
                <span>' . $text . '</span>
              ';
          } else {
            $show_link = '
                <a href="' . $link . '" target="_blank">
                  <span>' . $text . '</span>
                </a>
              ';
          }

          echo '
            <div class="col-md-4 text-center">
              <p class="mb-4">
                  <div class="row justify-content-center">
                      <span class="text-primary">' . $icon . '</span>
                  </div>
                  <div class="row justify-content-center">
                      ' . $show_link . '
                  </div>
              </p>
            </div>

            ';
        }
        ?>

      </div>
    </div>
  </section>

  <div id="bottomnav" class="navbar fixed-bottom">
    <div class="d-flex justify-content-center align-items-center" data-aos="fade-up">
      <a href="#portfolio1-section" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Video Edit">Video Edit</span></a>
      <a href="#portfolio2-section" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Graphic Design">Graphic Design</span></a>
      <a href="#portfolio3-section" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Social Media">Social Media</span></a>
      <a href="#portfolio4-section" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Brand & Logo">Brand & Logo</span></a>
      <a href="#portfolio5-section" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Web Design & UI/UX">Web Design & UI/UX</span></a>
    </div>
  </div>



  <?php
  include 'global/footer.php';
  ?>

  </div> <!-- .site-wrap -->

  <?php
  include 'global/scripts.php';
  ?>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      var disclaimer = document.querySelector("img[alt='www.000webhost.com']");
      if (disclaimer) {
        disclaimer.remove();
      }
    });
  </script>

  <script>
    document.addEventListener("scroll", function() {
      var section1 = document.getElementById("portfolio-section");
      var section3 = document.getElementById("testimonials-section");
      var bottomnav = document.getElementById("bottomnav");

      var section1Offset = section1.getBoundingClientRect().top;
      var section3Offset = section3.getBoundingClientRect().top;

      if (section1Offset <= 0 && section3Offset > window.innerHeight) {
        bottomnav.style.display = "block";
      } else {
        bottomnav.style.display = "none";
      }
    });
  </script>

</body>

</html>