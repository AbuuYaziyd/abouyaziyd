<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= APP_NAME ?> - Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="abouyaziyd Website" />
    <meta name="keywords" content="Portofolio" />
    <meta name="author" content="Abou Yaziyd" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?= base_url('assets/logo/favicon.ico') ?>">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="<?= base_url('assets/css/animate.css') ?>">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="<?= base_url('assets/css/icomoon.css') ?>">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css') ?>">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="<?= base_url('assets/css/flexslider.css') ?>">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css') ?>">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('assets/css/owl.theme.default.min.css') ?>">
    <!-- Theme style  -->
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Modernizr JS -->
    <script src="<?= base_url('assets/js/modernizr-2.6.2.min.js') ?>"></script>
</head>

<body>
    <div id="colorlib-page">
        <div class="container-wrap">
            <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
            <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
                <div class="text-center">
                    <div class="author-img" style="background-image: url(<?= base_url('assets/images/about.jpg') ?>);"></div>
                    <h1 id="colorlib-logo"><a href="<?= base_url() ?>"><?= APP_NAME ?></a></h1>
                    <span class="position"><a href="#"><?= lang('app.webDev') ?></a> Tz</span>
                </div>
                <?= $this->include('layouts/sidebar') ?>
                <?= $this->include('layouts/footer') ?>
            </aside>

            <div id="colorlib-main">
                <?= $this->include('layouts/hero') ?>
                <?= $this->include('layouts/about') ?>
                <div id="colorlib-counter" class="colorlib-counters" style="background-image: url(<?= base_url('assets/images/cover_bg_1.jpg') ?>);" data-stellar-background-ratio="0.5">
                    <div class="overlay"></div>
                    <div class="colorlib-narrow-content">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="309" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Cups of coffee</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="356" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Projects</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="30" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Clients</span>
                            </div>
                            <div class="col-md-3 text-center animate-box">
                                <span class="colorlib-counter js-counter" data-from="0" data-to="10" data-speed="5000" data-refresh-interval="50"></span>
                                <span class="colorlib-counter-label">Partners</span>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="colorlib-skills" data-section="skills">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Specialty</span>
                                <h2 class="colorlib-heading animate-box">My Skills</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way.</p>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>Photoshop</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-1" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                            <span>75%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>jQuery</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-2" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                            <span>60%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>HTML5</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                            <span>85%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>CSS3</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-4" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                            <span>90%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="progress-wrap">
                                    <h3>WordPress</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-5" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                            <span>70%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="progress-wrap">
                                    <h3>SEO</h3>
                                    <div class="progress">
                                        <div class="progress-bar color-6" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
                                            <span>80%</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-education" data-section="education">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Education</span>
                                <h2 class="colorlib-heading animate-box">Education</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
                                <div class="fancy-collapse-panel">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Master Degree Graphic Design
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingTwo">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Bachelor Degree of Computer Science
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                    <ul>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                        <li>Separated they live in Bookmarksgrove right</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingThree">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Diploma in Information Technology
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFour">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Diploma in Information Technology
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingFive">
                                                <h4 class="panel-title">
                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">High School Secondary Education
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                <div class="panel-body">
                                                    <p>Far far away, behind the word <strong>mountains</strong>, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-experience" data-section="experience">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Experience</span>
                                <h2 class="colorlib-heading animate-box">Work Experience</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="timeline-centered">
                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">

                                            <div class="timeline-icon color-1">
                                                <i class="icon-pen2"></i>
                                            </div>

                                            <div class="timeline-label">
                                                <h2><a href="#">Full Stack Developer</a> <span>2017-2018</span></h2>
                                                <p>Tolerably earnestly middleton extremely distrusts she boy now not. Add and offered prepare how cordial two promise. Greatly who affixed suppose but enquire compact prepare all put. Added forth chief trees but rooms think may.</p>
                                            </div>
                                        </div>
                                    </article>


                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInRight">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-2">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Front End Developer at Google Company</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-3">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">System Analyst</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInTop">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-4">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">Creative Designer</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry animate-box" data-animate-effect="fadeInLeft">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-5">
                                                <i class="icon-pen2"></i>
                                            </div>
                                            <div class="timeline-label">
                                                <h2><a href="#">UI/UX Designer at Envato</a> <span>2017-2018</span></h2>
                                                <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                                            </div>
                                        </div>
                                    </article>

                                    <article class="timeline-entry begin animate-box" data-animate-effect="fadeInBottom">
                                        <div class="timeline-entry-inner">
                                            <div class="timeline-icon color-none">
                                            </div>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-work" data-section="work">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">My Work</span>
                                <h2 class="colorlib-heading animate-box">Recent Work</h2>
                            </div>
                        </div>
                        <div class="row row-bottom-padded-sm animate-box" data-animate-effect="fadeInLeft">
                            <div class="col-md-12">
                                <p class="work-menu"><span><a href="#" class="active">Graphic Design</a></span> <span><a href="#">Web Design</a></span> <span><a href="#">Software</a></span> <span><a href="#">Apps</a></span></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-1.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 01</a></h3>
                                            <span>Website</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-2.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 02</a></h3>
                                            <span>Animation</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInTop">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-3.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 03</a></h3>
                                            <span>Illustration</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInBottom">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-4.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 04</a></h3>
                                            <span>Application</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-5.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 05</a></h3>
                                            <span>Graphic, Logo</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="project" style="background-image: url(<?= base_url('assets/images/img-6.jpg') ?>);">
                                    <div class="desc">
                                        <div class="con">
                                            <h3><a href="work.html">Work 06</a></h3>
                                            <span>Web Design</span>
                                            <p class="icon">
                                                <span><a href="#"><i class="icon-share3"></i></a></span>
                                                <span><a href="#"><i class="icon-eye"></i> 100</a></span>
                                                <span><a href="#"><i class="icon-heart"></i> 49</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-blog" data-section="blog">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Read</span>
                                <h2 class="colorlib-heading">Recent Blog</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="<?= base_url('assets/images/blog-1.jpg') ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Renovating National Gallery</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInRight">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="<?= base_url('assets/images/blog-2.jpg') ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Web Design </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Wordpress for a Beginner</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
                                <div class="blog-entry">
                                    <a href="blog.html" class="blog-img"><img src="<?= base_url('assets/images/blog-3.jpg') ?>" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
                                    <div class="desc">
                                        <span><small>April 14, 2018 </small> | <small> Inspiration </small> | <small> <i class="icon-bubble3"></i> 4</small></span>
                                        <h3><a href="blog.html">Make website from scratch</a></h3>
                                        <p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 animate-box">
                                <p><a href="#" class="btn btn-primary btn-lg btn-load-more">Load more <i class="icon-reload"></i></a></p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="colorlib-contact" data-section="contact">
                    <div class="colorlib-narrow-content">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
                                <span class="heading-meta">Get in Touch</span>
                                <h2 class="colorlib-heading">Contact</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-globe-outline"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="#">info@domain.com</a></p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-map"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p>198 West 21th Street, Suite 721 New York NY 10016</p>
                                    </div>
                                </div>

                                <div class="colorlib-feature colorlib-feature-sm animate-box" data-animate-effect="fadeInLeft">
                                    <div class="colorlib-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="colorlib-text">
                                        <p><a href="tel://">+123 456 7890</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7 col-md-push-1">
                                <div class="row">
                                    <div class="col-md-10 col-md-offset-1 col-md-pull-1 animate-box" data-animate-effect="fadeInRight">
                                        <form action="">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Subject">
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" id="message" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <input type="submit" class="btn btn-primary btn-send-message" value="Send Message">
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div><!-- end:colorlib-main -->
        </div><!-- end:container-wrap -->
    </div><!-- end:colorlib-page -->

    <!-- jQuery -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <!-- jQuery Easing -->
    <script src="<?= base_url('assets/js/jquery.easing.1.3.js') ?>"></script>
    <!-- Bootstrap -->
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <!-- Waypoints -->
    <script src="<?= base_url('assets/js/jquery.waypoints.min.js') ?>"></script>
    <!-- Flexslider -->
    <script src="<?= base_url('assets/js/jquery.flexslider-min.js') ?>"></script>
    <!-- Owl carousel -->
    <script src="<?= base_url('assets/js/owl.carousel.min.js') ?>"></script>
    <!-- Counters -->
    <script src="<?= base_url('assets/js/jquery.countTo.js') ?>"></script>


    <!-- MAIN JS -->
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>