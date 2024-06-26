<header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

    <div class="container">
        <div class="row align-items-center">

            <div class="col-6 col-xl-2">
                <h1 class="mb-0 site-logo">
                    <a href="index.php" class="h2 mb-0">
                        <?php
                        $SqlHome = "SELECT * FROM constants_home WHERE title = 'name logo'";
                        $ResultSqlHome = $conn->query($SqlHome);
                        while ($FetchedSqlHome = $ResultSqlHome->fetch_assoc()) {
                            $SqlHome_text = $FetchedSqlHome['text'];
                        }

                        echo $SqlHome_text;
                        ?><span class="text-primary">.</span>
                    </a>
                </h1>
            </div>

            <div class="col-12 col-md-10 d-none d-xl-block">
                <nav class="site-navigation position-relative text-right" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                        <li><a href="#home-section" class="nav-link">Home</a></li>
                        <li class="">
                            <a href="#about-section" class="nav-link">About Me</a>
                        </li>

                        <li class="has-children">
                            <a href="#portfolio-section" class="nav-link">My Portfolio</a>
                            <ul class="dropdown">
                                <li><a href="#portfolio1-section" class="nav-link">Video Edits</a></li>
                                <li><a href="#portfolio2-section" class="nav-link">Graphic Designs</a></li>
                                <!-- <li><a href="#portfolio3-section" class="nav-link">Social Media</a></li> -->
                                <!-- <li><a href="#portfolio4-section" class="nav-link">Brand & Logo</a></li> -->
                                <!-- <li><a href="#portfolio5-section" class="nav-link">Web & UI/UX</a></li> -->
                            </ul>
                        </li>

                        <li><a href="#services-section" class="nav-link">Services</a></li>
                        <li><a href="#testimonials-section" class="nav-link">Testimonials</a></li>

                        <li><a href="#contact-section" class="nav-link">Contacts</a></li>
                    </ul>
                </nav>
            </div>


            <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
    </div>

</header>