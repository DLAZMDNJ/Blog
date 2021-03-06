<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Welcome To Here</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("home/index/lib/bootstrap/css/bootstrap.min.css")}}" rel="stylesheet">

    <!-- Additional fonts for this theme -->
    <link href="{{asset("home/index/lib/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("https://fonts.googleapis.com/css?family=Montserrat:400,700")}}" rel="stylesheet" type="text/css">
    <link href="{{asset("https://fonts.googleapis.com/css?family=Kaushan+Script")}}" rel='stylesheet' type='text/css'>
    <link href="{{asset("https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic")}}" rel='stylesheet' type='text/css'>
    <link href="{{asset("https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700")}}" rel='stylesheet' type='text/css'>

    <!-- Custom styles for this theme -->
    <link href="{{asset("home/index/css/agency.min.css")}}" rel="stylesheet">

    <!-- Temporary navbar container fix until Bootstrap 4 is patched -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-toggleable-md navbar-inverse" id="mainNav">
        <div class="container">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Zhou AiLing</a>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">兴趣</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#portfolio">旅途</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">时间轴</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">朋友</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">联系我
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To My Home!</div>
                <div class="intro-heading">欢迎，我的朋友</div>
                <a href="#services" class="page-scroll btn btn-xl">Find More Interting</a>
            </div>
        </div>
    </header>

    <!-- Services -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">兴趣</h2>
                    <h3 class="section-subheading text-muted">享受生活,追逐快乐</h3>
                </div>
            </div>
            <div class="row text-center">
                @foreach($inter as $v)   
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">{{$v->name}}</h4>
                    <p class="text-muted">{{$v->dic}}</p>
                </div>
           		 @endforeach
                
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section id="portfolio" class="bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">旅途.</h2>
                    <h3 class="section-subheading text-muted">开发中...</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/01-thumbnail.jpg")}}")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/02-thumbnail.jpg")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/03-thumbnail.jpg")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/04-thumbnail.jpg")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/05-thumbnail.jpg")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{{asset("home/index/img/portfolio/06-thumbnail.jpg")}}" class="img-fluid" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>开发中...</h4>
                        <p class="text-muted">开发中...</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">时间轴</h2>
                    <h3 class="section-subheading text-muted">开发中.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset("home/index/img/about/1.jpg")}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>2013-2014</h4>
                                    <h4 class="subheading">Beginnings</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">开发中...</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset("home/index/img/about/2.jpg")}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>March 2011</h4>
                                    <h4 class="subheading">开发中...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">开发中...</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset("home/index/img/about/3.jpg")}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>December 2012</h4>
                                    <h4 class="subheading">开发中...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">开发中...</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="rounded-circle img-fluid" src="{{asset("home/index/img/about/4.jpg")}}" alt="">
                            </div>
                            <div class="timeline-panel">
                                <div class="timeline-heading">
                                    <h4>July 2014</h4>
                                    <h4 class="subheading">开发中...</h4>
                                </div>
                                <div class="timeline-body">
                                    <p class="text-muted">开发中...</p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>We 
                                    <br>Will
                                    <br>Continue</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="team" class="bg-faded">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">朋友</h2>
                    <h3 class="section-subheading text-muted">	</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{asset("home/index/img/team/1.jpg")}}" class="mx-auto rounded-circle" alt="">
                        <h4>路人甲</h4>
                        <p class="text-muted">干了什么事情</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{asset("home/index/img/team/2.jpg")}}" class="mx-auto rounded-circle" alt="">
                        <h4>路人乙</h4>
                        <p class="text-muted">干了什么事情</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="team-member">
                        <img src="{{asset("home/index/img/team/3.jpg")}}" class="mx-auto rounded-circle" alt="">
                        <h4>路人丙</h4>
                        <p class="text-muted">干了什么事情</p>
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <p class="large text-muted">我的大学</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Contact -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Me</h2>
                    <h3 class="section-subheading text-muted">115063373@qq.com</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="copyright">Copyright &copy;zhouailing.cn 2017</span>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">
                        <li class="list-inline-item"><a href="#">Design By</a>
                        </li>
                        <li class="list-inline-item"><a href="#">Mr.Sun</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续...</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/01-full.jpg")}}" alt="">
                                <p>未完待续...</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续...</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/02-full.jpg")}}" alt="">
                                <p>未完待续...</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续...</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/03-full.jpg")}}" alt="">
                                <p>未完待续...</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续...</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/04-full.jpg")}}" alt="">
                                <p>未完待续...</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续....</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/05-full.jpg")}}" alt="">
                                <p>未完待续...!</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> 关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2>未完待续...</h2>
                                <p class="item-intro text-muted">未完待续...</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset("home/index/img/portfolio/06-full.jpg")}}" alt="">
                                <p>未完待续...</p>
                                <ul class="list-inline">
                                    <li>Date: January 2017</li>
                                    <li>未完待续...</li>
                                    <li>未完待续...</li>
                                </ul>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i>关闭</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset("home/index/lib/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("home/index/lib/tether/tether.min.js")}}"></script>
    <script src="{{asset("home/index/lib/bootstrap/js/bootstrap.min.js")}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset("https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js")}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{asset("home/index/js/jqBootstrapValidation.js")}}"></script>
    <script src="{{asset("home/index/js/contact_me.js")}}"></script>

    <!-- Cusotm JavaScript for this theme -->
    <script src="{{asset("home/index/js/agency.min.js")}}"></script>

</body>

</html>
