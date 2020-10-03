<?php

require_once 'admin/dbcon.php';
$result = mysqli_query($conn, "SELECT * FROM `home`");
$row = mysqli_fetch_assoc($result);

$aboutme = mysqli_query($conn, "SELECT * FROM `about`");
$am = mysqli_fetch_assoc($aboutme);

$resume = mysqli_query($conn, "SELECT * FROM `resume`");
$rm = mysqli_fetch_assoc($resume);

?>


<!DOCTYPE html>
<html lang="en" class="no-js">
  
<!-- Mirrored from lmpixels.com/demo/breezycv/lightfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 11:26:18 GMT -->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Own Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/reset.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="css/animations.css" type="text/css">
    <link rel="stylesheet" href="css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <script src="js/modernizr.custom.js"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">

          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="admin/images/home/<?= $row['image'] ?>" alt="Alex Smith">
              </div>


              <div class="header-titles">
                <h2><?= $row['name'] ?></h2>
                <h4><?= $row['work'] ?></h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Home</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">About Me</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Resume</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Portfolio</span>
                </a>
              </li>
              <!--<li>
                <a href="#blog" class="nav-anim">
                  <span class="menu-icon lnr lnr-book"></span>
                  <span class="link-text">Blog</span>
                </a>
              </li>-->
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">Contact</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="https://www.linkedin.com/in/rajstk/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="https://www.facebook.com/freelancerlandd/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="index.php" target="_blank" class="btn btn-primary">Welcome</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved.</div>
          </header>

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2><?= $row['name'] ?></h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle"><?= $row['movcat1'] ?></div>
                            </div>
                            
                            <div class="item">
                              <div class="sp-subtitle"><?= $row['movcat2'] ?></div>
                            </div>
                            <div class="item">
                              <div class="sp-subtitle">Data Entry Operator</div>
                            </div>
                            <div class="item">
                              <div class="sp-subtitle">Graphics Desinger</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7" style="text-align: justify">
                      <p>Yes! You are in right place. Do you require 100% accuracy and professionalism producing quality results for your projects also looking different type of work form same person? Here I am to serve you (24/7).

                          I am Raj, an experienced person in data entry, photoshop, web design and web development sector. You may think that how a person become skilled with more sector: I was a data entry operator and I feel to make more income I have to grow up my skill so I started practicing Photoshop, web Design and Web Development. I am also a freelancer at freelancer.com completed 300+ projects successfully. I am a multitasker, hard worker, detail oriented, punctual, a good communicator. If you want best result in your project just try me. Thank you!
                      </p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value"><?=$am['age']?></span>
                          </li>

                          <li>
                            <span class="title">Residence</span>
                            <span class="value"><?=$am['residence']?></span>
                          </li>

                          <li>
                            <span class="title">Address</span>
                            <span class="value"><?=$am['address']?></span>
                          </li>

                          <li>
                            <span class="title">e-mail</span>
                            <span class="value"><?=$am['email']?></span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value"><?=$am['phone']?></span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-database"></i>
                            </div>
                            <div class="ci-text" style="text-align: justify">
                              <h4>Data Entry</h4>
                              <p>You've come to the right place and best dealings. I am 24/7 online and can serve you any time. I am an expert data entry operator. Expert arena: Data Entry (any), PDF Editing, Data Scraping, MS Office, Copy Typing, Virtual Assisting, Web searching, Product Uploading in any site also any data entry related work based on client demand.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div><div class="ci-text" style="text-align: justify">
                              <h4>Photoshop</h4>
                              <p>A Photoshop expert & Graphic Designer. I offer professional and high-quality graphic design services. I can do almost anything in Photoshop that's why my clients call me "Photoshop Wizard". Expert arena: Photo Editing & Retouching, Clipping Path, Masking, Face Changing, Any Document Editing, Color Correction, Image Manipulation, Logo & Business Card Design, Brochure Design, Background Removal and others based on client demand.</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div>
                            <div class="ci-text" style="text-align: justify">
                              <h4>Web Design</h4>
                              <p>My interest lies in designing new material & do believe I am creative & can handle complications, I am always eager to learn new things & by listening carefully & asking the right questions can get to the core of the conversation quickly. I have a best team to handle your big project and we are knowledgeable in html5, css3, bootstrap 4.5.2.</p>
                            </div>
                          </div>
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-laptop-phone"></i>
                            </div><div class="ci-text" style="text-align: justify">
                              <h4>Web Development</h4>
                              <p>I always play with PHP beside I have good knowledge in Java Script. I use Laravel & Wordpress to develop site/s. I am determined and I never stop until I have come to the end and achieved my purpose. I am an experienced developer with proficiency in varied technologies available. Best work at affordable rates. I have a best team. We collectively work as a team, which has resulted in building lasting relationships with the client. </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End of Services -->

                  <div class="white-space-30"></div>

                  <!-- Testimonials -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Testimonials</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="testimonials owl-carousel">
                        <!-- Testimonial 1 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="admin/images/about/steve.png" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Raj is the consummate professional! He asks great questions and wants to make sure his work is correct. I will definitely hire Raj again for any projects of mine and certainly recommend him to everyone else.
                            </p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Steve H.</h4>
                            <h5 class="company">SodaEmp</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 1 -->

                        <!-- Testimonial 2 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="admin/images/about/mark.png" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Great communication, very good Word skills and most professional in his approach. I would definitely recommend him to others. He is a perfect guy I have ever seen. I will definitely hire him again.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Mark K.</h4>
                            <h5 class="company">MkingHome</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 2 -->

                        <!-- Testimonial 3 -->
                        <div class="testimonial">
                          <div class="img">
                            <img src="admin/images/about/julia.png" alt="Alex Smith">
                          </div>
                          <div class="text">
                            <p>Very professional ! He really knows what he is doing ! TOP on photoshop editing ! BEST ONE ! I really recommend him ! You can hire him with confidence !! PERFECT 10/10 !!.</p>
                          </div>

                          <div class="author-info">
                            <h4 class="author">Julia S.</h4>
                            <h5 class="company">Curvalily</h5>
                            <div class="icon">
                              <i class="fas fa-quote-right"></i>
                            </div>
                          </div>
                        </div>
                        <!-- End of Testimonial 3 -->
                      </div>
                    </div>
                  </div>
                  <!-- End of Testimonials -->

                  <div class="white-space-50"></div>

                  <!-- Clients -->
                  <!--<div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Cilents</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="clients owl-carousel">
                        
                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-1.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-2.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-3.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-4.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-5.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-6.png" alt="Logo">
                          </a>
                        </div>

                        <div class="client-block">
                          <a href="#" target="_blank" title="Logo">
                            <img src="img/clients/client-7.png" alt="Logo">
                          </a>
                        </div>
  
                      </div>
                    </div>
                  </div>-->
                  <!-- End of Clients -->

                  <div class="white-space-50"></div>

                  <!-- Pricing -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Pricing</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class=" col-xs-12 col-sm-12 ">
                      <div class="fw-pricing clearfix row">
                          <div class="fw-package-wrap col-md-6 ">
                          <h4 style="color: #04B4E0">Email Me For Fair Pricing</h4>
                              <br>
                          <h4 style="color: #04B4E0">official2050@yahoo.com</h4>
                          </div>
                        
                     <!--   <div class="fw-package-wrap col-md-6 ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Silver</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$64</span>
                              <small>per month</small>
                            </div>
                            
                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-secondary">Free Trial</a>
                            </div>

                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                          </div>
                        </div>
     
                        <div class="fw-package-wrap col-md-6 highlight-col ">
                          <div class="fw-package">
                            <div class="fw-heading-row">
                              <span>Gold</span>
                            </div>
                            
                            <div class="fw-pricing-row">
                              <span>$128</span>
                              <small>per month</small>
                            </div>

                            <div class="fw-button-row">
                              <a href="#" target="_self" class="btn btn-primary">Free Trial</a>
                            </div>
                            
                            <div class="fw-default-row">Lorem ipsum dolor</div>
                            <div class="fw-default-row">Pellentesque scelerisque</div>
                            <div class="fw-default-row">Morbi eu sagittis</div>
                            <div class="fw-default-row">Donec non diam</div>
                            <div class="fw-default-row"></div>
                          </div>
                        </div>-->

                      </div>
                    </div>
                  </div>
                  <!-- End of Pricing -->

                  <div class="white-space-50"></div>

                  <!-- Fun Facts -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">

                      <div class="block-title">
                        <h3>Fun <span>Facts</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-heart"></i>
                        <h4>Happy Clients</h4>
                        <span class="fun-fact-block-value"><?=$am['clients']?></span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-clock"></i>
                        <h4>Working Hours</h4>
                        <span class="fun-fact-block-value"><?=$am['hours']?></span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>

                    <div class="col-xs-12 col-sm-4 ">
                      <div class="fun-fact gray-default">
                        <i class="lnr lnr-star"></i>
                        <h4>Awards Won</h4>
                        <span class="fun-fact-block-value"><?=$am['awards']?></span>
                        <span class="fun-fact-block-text"></span>
                      </div>
                    </div>
                  </div>
                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>
                      
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2013</h5>
                            <span class="item-company">Northern University Bangladesh</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">MBA</h4>
                            <p>I have successfully completed MBA, major in Marketing.</p>
                          </div>
                        </div>

                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">2011</h5>
                            <span class="item-company">Manarat International University</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">BBA</h4>
                            <p>I have successfully completed BBA, major in Marketing.</p>
                          </div>
                        </div>
                      </div>

                      <div class="white-space-50"></div>

                        <div class="block-title">
                            <h3>Experience</h3>
                        </div>

                        <div class="timeline timeline-second-style clearfix">
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">2015 - Current</h5>
                                    <span class="item-company">Freelancer.com</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">Data Entry Operator</h4>
                                    <p>Working as data entry operator at freelancer platform. Successfully completed 200+ projects. Still collaborating with many clients for there current projects.</p>
                                </div>
                            </div>
                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">2015 - Current</h5>
                                    <span class="item-company">Freelancer.com</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">Web Developer</h4>
                                    <p>Working as data web developer at freelancer platform. Successfully completed 100+ projects. Still collaborating with many clients for there current projects.</p>
                                </div>
                            </div>

                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">2012 - 2014</h5>
                                    <span class="item-company">ServicEngine Ltd.</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">Junior Data Entry Operator</h4>
                                    <p>Worked as Junior data entry operator at ServiceEngine Ltd. Responsibility: Searching criminal records in US news papers & input them in a certain formatted spreadsheet.</p>
                                </div>
                            </div>

                            <div class="timeline-item clearfix">
                                <div class="left-part">
                                    <h5 class="item-period">2010 - 2013</h5>
                                    <span class="item-company">PrismICT Ltd.</span>
                                </div>
                                <div class="divider"></div>
                                <div class="right-part">
                                    <h4 class="item-title">Graphics Designer</h4>
                                    <p>Successfully completed Internee as a graphics designer at PrismICT Ltd. Took high level of experince for this sector to grow up design career.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Data Entry <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 1 -->
                        <div class="skill clearfix">
                          <h4>Web Searching</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 1 -->

                        <!-- Skill 2 -->
                        <div class="skill clearfix">
                          <h4>Copy Typing</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 2 -->

                        <!-- Skill 3 -->
                        <div class="skill clearfix">
                          <h4>Data Scraping</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 3 -->

                        <!-- Skill 4 -->
                        <div class="skill clearfix">
                          <h4>Product Uploading</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                          <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>PDF Editing</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                      </div>
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>

                      <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Coding <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>PHP</h4>
                          <div class="skill-value">100%</div>
                        </div>
                        <div class="skill-container skill-7">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>JavaScript</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 6 -->
                        
                        <!-- Skill 7 -->
                        <div class="skill clearfix">
                          <h4>Bootstrap</h4>
                          <div class="skill-value">100%</div>
                        </div>
                        <div class="skill-container skill-7">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 7 -->
                        
                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>Html/Css</h4>
                          <div class="skill-value">100%</div>
                        </div>
                        <div class="skill-container skill-7">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>Laravel</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->

                          <div class="white-space-10"></div>
                          <br>

                        <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Photoshop <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>Background Removal</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>Photo Retouching</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 6 -->

                        <!-- Skill 7 -->
                        <div class="skill clearfix">
                          <h4>Brochure Design</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-4">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 7 -->

                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>Document Editing</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>Masking</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->

                        <!-- Skill 10 -->
                        <div class="skill clearfix">
                          <h4>Logo Design</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->
                      </div>
                      <!-- End of Coding Skills -->

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      <div class="block-title">
                        <h3>Knowledges</h3>
                      </div>

                      <ul class="knowledges">
                        <li><?=$rm['knowledgeone'] ?></li>
                        <li><?=$rm['knowledgetwo'] ?></li>
                        <li><?=$rm['knowledgethree'] ?></li>
                        <li><?=$rm['knowledgefour'] ?></li>
                        <li><?=$rm['knowledgefive'] ?></li>
                        <li><?=$rm['knowledgesix'] ?></li>
                        <li><?=$rm['knowledgeseven'] ?></li>
                        <li><?=$rm['knowledgeeight'] ?></li>
                        <li><?=$rm['knowledgenine'] ?></li>
                        <li><?=$rm['knowledgeten'] ?></li>
                        <li><?=$rm['knowledgeeleven'] ?></li>
                        <li><?=$rm['knowledgetwelve'] ?></li>
                      </ul>
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="admin/images/resume/certi-dev.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Web Development</h4>
                          </div>
                          <div class="certi-id">
                            <span>Membership ID: 5974</span>
                          </div>
                          <div class="certi-date">
                            <span>29 Octbor 2015</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 1 -->

                    <!-- Certificate 2 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="admin/images/resume/certificate.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Graphics Design</h4>
                          </div>
                          <div class="certi-id">
                            <span>Membership ID: 2774</span>
                          </div>
                          <div class="certi-date">
                            <span>17 April 2014</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End of Certificate 2 -->

                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                            <li>
                                <a class="filter btn btn-sm btn-link" data-group="category_project">Completed project</a>
                            </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_webdevelopment">Web Development</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_dataentry">Data Entry</a>
                          </li>
                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_design">Graphics Design</a>
                          </li>

                          <li>
                            <a class="filter btn btn-sm btn-link" data-group="category_youtube-videos">YouTube Videos</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">

                            <figure class="item lbaudio" data-groups='["category_all", "category_project"]'>
                                <div class="portfolio-item-img">
                                    <img src="img/portfolio/project.png" alt="Image" title="" />
                                    <a class="lightbox" title="Project" href="img/portfolio/full/project.png"></a>
                                </div>

                                <i class="fas fa-hamsa"></i>
                                <h4 class="name">Freelancer.com</h4>
                                <span class="category">Projects</span>
                            </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_webdevelopment"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/dev.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/dev.png"></a>
                            </div>

                              <i class="fas fa-globe"></i>
                            <h4 class="name">Web Development</h4>
                            <span class="category">Development</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_webdevelopment"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/dev2.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/dev2.png"></a>
                            </div>

                              <i class="fas fa-globe"></i>
                            <h4 class="name">Web Development</h4>
                            <span class="category">Development</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_webdevelopment"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/dev3.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/dev3.png"></a>
                            </div>

                              <i class="fas fa-globe"></i>
                            <h4 class="name">Web Design</h4>
                            <span class="category">Development</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_dataentry"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/data1.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/data1.png"></a>
                            </div>

                              <i class="fas fa-database"></i>
                            <h4 class="name">Data Entry</h4>
                            <span class="category">Dataentry</span>

                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_dataentry"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/data2.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/data2.png"></a>
                            </div>

                              <i class="fas fa-database"></i>
                            <h4 class="name">Data Entry</h4>
                            <span class="category">Dataentry</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_dataentry"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/data3.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/data3.png"></a>
                            </div>

                              <i class="fas fa-database"></i>
                            <h4 class="name">Data Entry</h4>
                            <span class="category">Dataentry</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit1.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit1.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit2.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit2.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit3.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit3.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit4.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit4.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit5.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit5.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbaudio" data-groups='["category_all", "category_design"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/edit6.png" alt="Image" title="" />
                              <a class="lightbox" title="Project" href="img/portfolio/full/edit6.png"></a>
                            </div>

                              <i class="fas fa-paint-brush"></i>
                            <h4 class="name">Graphics Design</h4>
                            <span class="category">Photoshop</span>
                          </figure>

                          <figure class="item lbvideo" data-groups='["category_all", "category_youtube-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="img/portfolio/you.jpg" alt="YouTube Video 1" title="" />
                              <a href="https://www.youtube.com/watch?v=maXogb0KJco" class="lightbox mfp-iframe" title="YouTube Video"></a>
                            </div>

                            <i class="fas fa-video"></i>
                            <h4 class="name">YouTube Video</h4>
                            <span class="category">YouTube Videos</span>
                          </figure>
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <!--<section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">
                        
                        <-- Blog Post 1 -->
                        <!--<div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_1.jpg" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">05 Mar 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div>-->


                        <!-- Blog Post 2 -->
                       <!-- <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_2.jpg" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">23 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div>-->
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <!--<div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_3.jpg" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Feb 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div>-->
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                    <!--    <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">UI</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="img/blog/blog_post_4.jpg" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">07 Jan 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div>-->
                        <!-- End of Blog Post 4 -->
             <!--         </div>
                    </div>
                  </div>
                </div>


              </section>-->
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>Bangladesh</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>+8801717411100</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                          <i class="fab fa-skype"></i>
                        <h4>official2050</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                          <i class="fab fa-whatsapp"></i>
                        <h4>+8801717411100</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>official2050@yahoo.com</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>Freelance Available</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>
                      </div>
                        <!-- Contact Form -->


                      <!--here-->

                      <?php require_once 'admin/contact.php'?>


                    </div>
                    <!-- End of Contact Info -->


                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/modernizr.custom.js"></script>
    <script src="js/animating.js"></script>

    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>

    <script src='js/perfect-scrollbar.min.js'></script>
    <script src='js/jquery.shuffle.min.js'></script>
    <script src='js/masonry.pkgd.min.js'></script>
    <script src='js/owl.carousel.min.js'></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/jquery.googlemap.js"></script>
    <script src="js/validator.js"></script>
    <script src="js/main.js"></script>
  </body>

<!-- Mirrored from lmpixels.com/demo/breezycv/lightfw/1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 28 Sep 2020 11:26:33 GMT -->
</html>
