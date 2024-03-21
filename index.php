<?php
include 'essentials.php';
?>

<!doctype html>
<html lang="en">

<?php
include 'global/head.php';
?>

<style>
  #parent-loading {
    display: grid;
    position: fixed;
    place-items: center;
    height: 100vh;
    width: 100vw;
  }


  #loading-spinner {
    display: none;
    position: fixed;

    border: 4px solid #f3f3f3;
    border-radius: 50%;
    border-top: 4px solid #3498db;
    width: 50px;
    height: 50px;
    animation: spin 1s linear infinite;
  }


  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

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
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%);
  }

  #button-bottom {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border: 1px solid #c7c7c7;
    color: #f7f7f7;
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

  #videoFrameLands iframe {
    width: 100%;
    height: 40%;
  }

  @media (max-width: 576px) {
    #videoFrameLands iframe {
      width: 100%;
      height: 200px;
    }
  }

  #videoFrameLands iframe {
    width: 100%;
  }
</style>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <!-- <div class="loader">
    <div></div>
  </div> -->

  <div id="parent-loading">
    <div id="loading-spinner"></div>
  </div>

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
      <div class="site-blocks-cover overlay" style="background-image: linear-gradient(rgba(0, 0, 0, 0.2), rgba(0, 0, 0, 0.4) ), url(' . $show . ');" data-aos="" id="home-section">
      ';
    }
    ?>

    <div class="container">
      <div class="row align-items-center justify-content-center">


        <div class="col-md-8 mt-lg-5 text-center">
          <h1 class="text-uppercase" data-aos="">
            <?php
            $sql = "SELECT * FROM constants_home WHERE title = 'welcome'";
            $result = $conn->query($sql);
            while ($fetched = $result->fetch_assoc()) {
              $show = $fetched['text'];
            }

            echo $show;
            ?>
          </h1>

          <p class="mb-5 desc" data-aos="" data-aos-delay="100">
            <?php
            $sql = "SELECT * FROM constants_home WHERE title = 'texts below welcome'";
            $result = $conn->query($sql);
            while ($fetched = $result->fetch_assoc()) {
              $show = $fetched['text'];
            }

            echo $show;
            ?>
          </p>
          <div data-aos="" data-aos-delay="100">
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
        <div class="col-12 text-center" data-aos="">
          <h2 class="section-title mb-3">About Me</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 mb-5" data-aos="" data-aos-delay="">
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

        <div class="col-lg-5 ml-auto" data-aos="" data-aos-delay="100">
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

  <section class="site-section" id="portfolio-section" style="margin-bottom: -100px;">
    <div class="col-12 text-center" data-aos="">
      <h2 class="section-title mb-3">My Portfolio</h2>
    </div>
    <div class="row justify-content-center p-0 m-0" data-aos="fade-up">
      <a href="#portfolio1-section" class="btn btn-outline-primary p-2 m-1">Video Edits</a>
      <a href="#portfolio2-section" class="btn btn-outline-primary p-2 m-1">Graphic Designs</a>
      <!-- <a href="#portfolio3-section" class="btn btn-outline-primary p-2 m-1">Social Media</a> -->
      <!-- <a href="#portfolio4-section" class="btn btn-outline-primary p-2 m-1">Brand & Logo</a> -->
      <!-- <a href="#portfolio5-section" class="btn btn-outline-primary p-2 m-1">Web & UI/UX</a> -->
    </div>
  </section>


  <section class="site-section" id="portfolio1-section" style="margin-bottom: -100px;">
    <br><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="">
          <h2 class="mb-3">Video Edits</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="">
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
            <div class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4" style="display: flex; justify-content: center; align-items: center;">
              <iframe id="videoFrame"
                loading="lazy"
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
            <div id="videoFrameLands" class="item ' . $client_id . ' col-sm-6 col-md-4 col-lg-4 col-xl-3 mb-4">
            ' . $link . '
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

  <section class="site-section" id="portfolio2-section" style="margin-bottom: -100px;">
    <br><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="">
          <h2 class="mb-3">Graphic Designs</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="">
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
    <br><br>
  </section>

  <!-- <section class="site-section" id="portfolio3-section" style="margin-bottom: -100px;">
    <br><br>
    <div class="container">
      <div class="row">
        <div class="col-12 text-center" data-aos="">
          <h2 class="mb-3">Social Media</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="">
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

  </section> -->

  <!-- <section class="site-section" id="portfolio4-section" style="margin-bottom: -100px;">
    <br><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="">
          <h2 class="mb-3">Brand & Logo</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="">
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
  </section> -->

  <!-- <section class="site-section" id="portfolio5-section" style="margin-bottom: -100px;">
    <br><br>
    <div class="container">

      <div class="row">
        <div class="col-12 text-center" data-aos="">
          <h2 class="mb-3">Web Design & UI/UX</h2>
        </div>
      </div>

      <div class="row justify-content-center mb-1" data-aos="">
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
    <br><br>
  </section> -->

  <section class="site-section border-bottom bg-light" id="services-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-12 text-center" data-aos="">
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
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="">
            <div class="unit-4">
              <div class="unit-4-icon">
                <span class="text-primary">
                  ' . $icon . '
                </span>
              </div>
              <div>
                <h3>' . $title . '</h3>
                <p>' . $text . '</p>
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

  <section class="site-section testimonial-wrap" id="testimonials-section" data-aos="">
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
                <p class="small">
                &ldquo;' . $testimony . '&rdquo;
                </p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">

                <div class="row">
                  <div class="col-auto">
                    <div class="circle">
                      <img src="' . $icon . '">
                    </div>         
                  </div>

                  <div class="col">
                    <div class="row p-0 m-0">
                        <span class="d-block">' . $name . '</span>
                    </div>
                    <div class="row p-0 m-0">
                        <span class="small font-italic d-block">' . $position . '</span>
                    </div>
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

  <section class="site-section bg-light" id="contact-section" data-aos="">
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
    <div class="d-flex justify-content-center align-items-center" data-aos="">
      <a href="#portfolio1-section" id="button-bottom" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small" data-toggle="tooltip" title="Video Edits">Video Edits</span></a>
      <a href="#portfolio2-section" id="button-bottom" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small" data-toggle="tooltip" title="Graphic Designs">Graphic Designs</span></a>
      <!-- <a href="#portfolio3-section" id="button-bottom" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Social Media">Social Media</span></a> -->
      <!-- <a href="#portfolio4-section" id="button-bottom" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Brand & Logo">Brand & Logo</span></a> -->
      <!-- <a href="#portfolio5-section" id="button-bottom" class="btn btn-outline-secondary btn-sm m-1 p-1"><span class="small ellipsis-min" data-toggle="tooltip" title="Web Design & UI/UX">Web Design & UI/UX</span></a> -->
    </div>
  </div>



  <?php
  include 'global/footer.php';
  ?>

  </div> <!-- .site-wrap -->

  <?php
  include 'global/scripts.php';
  ?>

</body>

</html>