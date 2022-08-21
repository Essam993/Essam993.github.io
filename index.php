<?php include("layout/header.php"); ?>

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide header-color-light">
        <div class="my-photo tilt-effect" style="opacity: 0">
          <img src="images/photo.png" alt="image">
        </div>

        <div class="site-title-block">
          <h1 class="site-title">Essam</h1>
        </div>

        <!-- Navigation -->
        <div class="site-nav">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <li>
              <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a><!-- href value = data-id without # of .pt-page. -->
            </li>
            <li>
              <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
            </li>
            <li>
              <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
            </li>
            <li>
              <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
            </li>
            <li>
              <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact</a>
            </li>
          </ul>
          <!-- /Main menu -->
        </div>
        <!-- Navigation -->
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Ahmed Essam</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->

      <!-- Main Content -->
      <div id="main" class="site-main">
        <!-- Page changer wrapper -->
        <div class="pt-wrapper" >
          <!-- Subpages -->
          <div class="subpages">

            <!-- Home Subpage -->
            <section class="pt-page pt-page-1 section-without-bg section-paddings-0 table" data-id="home">
              <div class="section-inner">
                <div class="home-page-block">
                  <h2>Ahmed Essam</h2>
                  <div class="owl-carousel text-rotation">                                    
                    <div class="item">
                      <p class="home-page-description">Frontend Developer</p>
                    </div>
                    <div class="item">
                      <p class="home-page-description">Frontend-developer</p>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of Home Subpage -->

            <!-- About Me Subpage -->
            <section class="pt-page pt-page-2" data-id="about_me">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper clearfix">
                    <h2 class="section-title">About Me</h2>
                      <h5 class="section-description">Competitive .. </h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 col-lg-3 subpage-block">
                    <div class="my-photo-block tilt-effect">
                      <img src="images/photo.png" alt="">
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-5  ">
                    <h3>I am a web developer @ Eliteg.com</h3>
                    <p>Hello! I’m Ahmed Essam a self-taught Frontend Developer with over 2.5 years work experience.</p>
                    <p>I love Mobile and Web technologies and i always work on the Mobile side using flutter technology Through Self-study and i uploaded some of my apps on Play Store.</p>
                  </div>

                  <div class="col-sm-6 col-md-6 col-lg-4 subpage-block">
                    <ul class="info-list">
                      <li><span class="title">Age</span><span class="value">29</span></li>
                      <li><span class="title">Residence</span><span class="value">Egypt</span></li>
                      <!-- <li><span class="title">Address</span><span class="value">88 Some Street, Some Town</span></li> -->
                      <li><span class="title">e-mail</span><span class="value"><a href="https://lmpixels.com/cdn-cgi/l/email-protection#11747c70787d517469707c617d743f727e7c"><span class="__cf_email__" data-cfemail="abcec6cac2c7ebced3cac6dbc7ce85c8c4c6">[email&#160;protected]</span></a></span></li>
                      <li><span class="title">Phone</span><span class="value">+20103170097</span></li>
                      <!-- <li><span class="title">Skype</span><span class="value">alex.smith</span></li> -->
                      <li><span class="title">Freelance</span><span class="value available">Available</span></li>
                    </ul>

                    <ul class="social-links">
                      <li><a class="tip social-button" href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li> <!-- Full list of social icons: http://fontawesome.io/icons/#brand -->
                      <li><a class="tip social-button" href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Youtube"><i class="fa fa-youtube"></i></a></li>
                      <li><a class="tip social-button" href="#" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>

                <!-- Services block -->
                <div class="block-title">
                  <h3>Services</h3>
                </div>
                <div class="row">
                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="https://lmpixels.com/wp/unique-wp/images/features/unique-fully-responsive.png" alt="Responsive Design">
                        <h4>Web Developer</h4>
                        <p>I developed Frontend Side of Several ideas using modern technologies with taking SEO & Speed in concideration</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="https://lmpixels.com/wp/uniquedark/wp-content/uploads/2017/05/creativity_icon.png" alt="Photography">
                        <h4>Application Devlopment</h4>
                        <p>i developed some projects using flutter and i uploaded some of them on Google Play</p>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="service-block"> 
                      <div class="service-info">
                        <img src="https://lmpixels.com/wp/unique-wp/images/features/unique-easy-customizable.png" alt="Advetising">
                        <h4>ECommerce Development</h4>
                        <p>I worked on many projects using magento and the latest project is Etmana Store</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End of About Me Subpage -->

            <!-- Resume Subpage -->
            <section class="pt-page pt-page-3" data-id="resume">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Resume</h2>
                    <h5 class="section-description">3 Years of Experience</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Education</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2017</h5>
                        <h4 class="event-name">Bachelor of mechatronics</h4>
                        <span class="event-description">Arab academy for science, technology and maritime transport</span>
                        <!-- <p>Mauris magna sapien, pharetra consectetur fringilla vitae, interdum sed tortor.</p> -->
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2019</h5>
                        <h4 class="event-name">Web Development Scholarship NTI</h4>
                        <span class="event-description">National Telecommunication Institute</span>
                        <p>I spent 6 months learning the fundamentals of web technologies and in the last month i joined an internship and worked on my final project</p>
                      </div>
                      <!-- Single event -->
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <h3>Experience</h3>
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">2017 - Current</h5>
                        <h4 class="event-name">Co-founder</h4>
                        <span class="event-description">Crocobotics</span>
                        <p>In crocobotics we work on the behavior of our kids through working in a team and seeking the same goal, we teach them coding and robotics fundamentals then we join the aniual competitions like Robocup and so  </p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Nov 2019 - Dec 2019</h5>
                        <h4 class="event-name">Web developer "Intern"</h4>
                        <span class="event-description">Tech Village</span>
                        <p>I worked on a project that aim to ease the way you book appointement in clinic so i spend a month working on it</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Jan 2020 - Aug 2020</h5>
                        <h4 class="event-name">Frontend Developer</h4>
                        <span class="event-description">IT Ambition</span>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-4 subpage-block">
                    <div class="block-title">
                      <br><br>
                      <!-- <h3>Experience</h3> -->
                    </div>
                    <div class="timeline">
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Sep 2020 - Feb 2022</h5>
                        <h4 class="event-name">Frontend Developer</h4>
                        <span class="event-description">Bevatel</span>
                        <p>I was resposible of our live product which is a unified dashboard that include many system that ease the way you manage your callcenter, clients and so</p>
                      </div>
                      <!-- Single event -->
                      <div class="timeline-event te-primary">
                        <h5 class="event-date">Mar 2022 - Current</h5>
                        <h4 class="event-name">Senior Frontened Developer</h4>
                        <span class="event-description">Elite Group</span>
                        <p>I'm responsible of our eshop website starting from our website that i developed it's UI and some of backend issues</p>
                      </div>

                    </div>

                  </div>

                  <div class="row">

                    <div class="col-sm-6 col-md-6 subpage-block">
                      <div class="block-title">
                        <h3>Web Development</h3>
                      </div>
                      <div class="skills-info">
                        <h4>Adobe Photoshop</h4>                               
                        <div class="skill-container">
                          <div class="skill-percentage skill-1"></div>
                        </div>

                        <h4>HTML/CSS</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-2"></div>
                        </div>

                        <h4>Bootstrap</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-3"></div>
                        </div> 

                        <h4>Js / Jquery</h4>                               
                        <div class="skill-container">
                          <div class="skill-percentage skill-4"></div>
                        </div>

                        <h4>React Js</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-6"></div>
                        </div>

                        <h4>PHP</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-6"></div>
                        </div>

                        <h4>Wordpress</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-7"></div>
                        </div>

                        <h4>SEO</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-8"></div>
                        </div>

                        <h4>Magento2</h4>                               
                        <div class="skill-container">
                          <div class="skill-percentage skill-9"></div>
                        </div>

                        <h4>SQL</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-6"></div>
                        </div>

                        <h4>Linux Server</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-6"></div>
                        </div> 

                      </div>
                    </div>

                    <div class="col-sm-6 col-md-6 subpage-block">
                      <div class="block-title">
                          <h3>Mobile Development</h3>
                      </div>
                      
                      <div class="skills-info">

                        <h4>Flutter, Dart</h4>                               
                        <div class="skill-container">
                          <div class="skill-percentage skill-8"></div>
                        </div>

                        <h4>Ionic</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-5"></div>
                        </div>

                        <h4>Android Studio</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-6"></div>
                        </div>

                        <h4>Google Play</h4>
                        <div class="skill-container">
                          <div class="skill-percentage skill-5"></div>
                        </div>

                      </div>
                    </div>
                    
                  </div>


                </div>
                <div class="row">
                  <div class="col-sm-12 col-md-12 p-md-0">
                    <div class="download-cv-block">
                      <a class="button" target="_blank" href="#">Download CV</a>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Resume Subpage -->


            <!-- Portfolio Subpage -->
            <section class="pt-page pt-page-4" data-id="portfolio">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Portfolio</h2>
                    <h5 class="section-description">My Best Works</h5>
                  </div>
                </div>

                <!-- Portfolio Content -->
                <div class="portfolio-content">
                              
                  <!-- Portfolio filter -->
                  <ul id="portfolio_filters" class="portfolio-filters">
                    <li class="active">
                      <a class="filter btn btn-sm btn-link active" data-group="all">All</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="web">Web</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="eShop">eShop</a>
                    </li>
                    <li>
                      <a class="filter btn btn-sm btn-link" data-group="system">Systems</a>
                    </li>
                  </ul>
                  <!-- End of Portfolio filter -->

                  <!-- Portfolio Grid -->
                  <div id="portfolio_grid" class="portfolio-grid portfolio-masonry masonry-grid-3">

                    <!-- Portfolio Item 1 -->
                    <figure class="item" data-groups='["all", "web"]'>
                      <a class="ajax-page-load" href="etmana.php">
                        <img src="images/portfolio/full/etmana-home.jpg" alt="">
                        <div>
                          <h5 class="name">Etmana</h5>
                          <small>web</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 1 -->

                    <!-- Portfolio Item 2 -->
                    <figure class="item" data-groups='["all", "web"]'>
                      <a class="ajax-page-load" href="dashboard.php">
                        <img src="images/portfolio/full/dashboard-login.png" alt="">
                        <div>
                          <h5 class="name">Unified Dashboard</h5>
                          <small>web</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 2 -->

                    <!-- Portfolio Item 3 -->
                    <figure class="item" data-groups='["all", "web"]'>
                      <a class="ajax-page-load" href="bevatel.php">
                        <img src="images/portfolio/full/bevatel.png" alt="">
                        <div>
                          <h5 class="name">Bevatel</h5>
                          <small>web</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 3 -->

                    <!-- Portfolio Item 4 -->
                    <figure class="item" data-groups='["all", "web"]'>
                      <a class="ajax-page-load" href="crm.php">
                        <img src="images/portfolio/full/crm.png" alt="">
                        <div>
                          <h5 class="name">CRM</h5>
                          <small>web</small>
                          <i class="pe-7s-icon pe-7s-display2"></i>
                        </div>
                      </a>
                    </figure>
                    <!-- /Portfolio Item 4 -->

                  </div>
                  <!-- /Portfolio Grid -->

                </div>
                <!-- /Portfolio Content -->
              </div>
            </section>
            <!-- /Portfolio Subpage -->

            <!-- Contact Subpage -->
            <section class="pt-page pt-page-5" data-id="contact">
              <div class="border-block-top-110"></div>
              <div class="section-inner">
                <div class="section-title-block">
                  <div class="section-title-wrapper">
                    <h2 class="section-title">Contact</h2>
                    <h5 class="section-description">Get in Touch</h5>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Get in Touch</h3>
                    </div>
                    <p>Sed eleifend sed nibh nec fringilla. Donec eu cursus sem, vitae tristique ante. Cras pretium rutrum egestas. Integer ultrices libero sed justo vehicula, eget tincidunt tortor tempus.</p>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-map-marker"></i>
                      </div>
                      <div class="ci-text">
                        <h5>Los Angeles, USA</h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-mail"></i>
                      </div>
                      <div class="ci-text">
                        <h5><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e1808d8499928c889589a18499808c918d84cf828e8c">[email&#160;protected]</a></h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-call"></i>
                      </div>
                      <div class="ci-text">
                        <h5>+123 654 78900</h5>
                      </div>
                    </div>
                    <div class="contact-info-block">
                      <div class="ci-icon">
                        <i class="pe-7s-icon pe-7s-check"></i>
                      </div>
                      <div class="ci-text">
                        <h5>Freelance Available</h5>
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6 col-md-6 subpage-block">
                    <div class="block-title">
                      <h3>Contact Form</h3>
                    </div>
                    <form id="contact-form" method="post" action="https://lmpixels.com/demo/unique/unique-vcard/contact_form/contact_form.php">

                      <div class="messages"></div>

                      <div class="controls">
                        <div class="form-group">
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Full Name" required="required" data-error="Name is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-user"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Email Address" required="required" data-error="Valid email is required.">
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-mail"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <textarea id="form_message" name="message" class="form-control" placeholder="Message for Me" rows="4" required="required" data-error="Please, leave me a message."></textarea>
                            <div class="form-control-border"></div>
                            <i class="form-control-icon pe-7s-comment"></i>
                            <div class="help-block with-errors"></div>
                        </div>

                        <input type="submit" class="button btn-send" value="Send message">
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </section>
            <!-- End Contact Subpage -->

          </div>
        </div>
        <!-- /Page changer wrapper -->
      </div>
      <!-- /Main Content -->
    </div>


    <!-- /Demo Color changer -->

    <?php include("layout/footer.php"); ?>
