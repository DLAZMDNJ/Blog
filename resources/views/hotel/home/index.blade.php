<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>钱敏 &mdash; 酒店管理系统前台 </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	

  

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="{{asset('hotel/favicon.ico')}}">
	<!-- <link href='https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,900,700,900italic' rel='stylesheet' type='text/css'> -->

	<!-- Stylesheets -->
	<!-- Dropdown Menu -->
	<link rel="stylesheet" href="{{asset('hotel/css/superfish.css')}}">
	<!-- Owl Slider -->
	<!-- <link rel="stylesheet" href="{{asset('hotel/css/owl.carousel.css')}}"> -->
	<!-- <link rel="stylesheet" href="{{asset('hotel/css/owl.theme.default.min.css')}}"> -->
	<!-- Date Picker -->
	<link rel="stylesheet" href="{{asset('hotel/css/bootstrap-datepicker.min.css')}}">
	<!-- CS Select -->
	<link rel="stylesheet" href="{{asset('hotel/css/cs-select.css')}}">
	<link rel="stylesheet" href="{{asset('hotel/css/cs-skin-border.css')}}">

	<!-- Themify Icons -->
	<link rel="stylesheet" href="{{asset('hotel/css/themify-icons.css')}}">
	<!-- Flat Icon -->
	<link rel="stylesheet" href="{{asset('hotel/css/flaticon.css')}}">
	<!-- Icomoon -->
	<link rel="stylesheet" href="{{asset('hotel/css/icomoon.css')}}">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('hotel/css/flexslider.css')}}">
	
	<!-- Style -->
	<link rel="stylesheet" href="{{asset('hotel/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('hotel/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('hotel/js/respond.min.js')}}"></script>
	<![endif]-->

</head>
<body>
	<div id="fh5co-wrapper">
	<div id="fh5co-page">
	<div id="fh5co-header">
		<header id="fh5co-header-section">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
					<h1 id="fh5co-logo"><a href="#">欢迎</a></h1>
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a class="active" href="index.html">首页</a></li>
							<li>
								<a href="hotel.html" class="fh5co-sub-ddown">酒店</a>
								<ul class="fh5co-sub-menu">
								 	<li><a href="#">标准间</a></li>
								 	<li><a href="#">大床房</a></li>
									<li>
										<a href="#" class="fh5co-sub-ddown">限时优惠房间</a>
										<ul class="fh5co-sub-menu">
											<li><a href="#/preview/?item=build-free-html5-bootstrap-template" target="_blank">无窗标间</a></li>
											<li><a href="#/preview/?item=work-free-html5-template-bootstrap" target="_blank">无早标间</a></li>
											<li><a href="#/preview/?item=light-free-html5-template-bootstrap" target="_blank">一层大床房</a></li>
											<li><a href="#/preview/?item=relic-free-html5-template-using-bootstrap" target="_blank">背光商务房</a></li>
											<li><a href="#/preview/?item=display-free-html5-template-using-bootstrap" target="_blank">商务无早房</a></li>										
										</ul>
									</li>
									<li><a href="#">商务房</a></li> 
								</ul>
							</li>
							<li><a href="services.html">服务</a></li>
							<li><a href="blog.html">酒店评价</a></li>
							<li><a href="contact.html">联系我们</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
		   	<li style="background-image: url(/hotel/images/slider1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>QM 连锁酒店</span></p>
		   						<h2>真 诚 的 欢 迎 各 位 朋 友</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">马上预定</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(/hotel/images/slider2.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>QM Hotel</span></p>
		   						<h2>Sincerely Welcome All Friends</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Book Now</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(/hotel/images/slider3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>QM Hôtel </span></p>
		   						<h2>Sincère bienvenue à tous nos amis</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">Tout de suite prédéterminée</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	
		  	</ul>
	  	</div>
	</aside>
	<div class="wrap">
		<div class="container">
			<div class="row">
				<div id="availability">
					<form action="#">

						<div class="a-col">
							<section>
								<select class="cs-select cs-skin-border">
									<option value="" disabled selected>房间类型</option>
									<option value="email">标准间</option>
									<option value="twitter">大床房</option>
									<option value="linkedin">商务房</option>
								</select>
							</section>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-start">入住时间</label>
								<input type="text" class="form-control" id="date-start" />
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-end">离店时间</label>
								<input type="text" class="form-control" id="date-end" />
							</div>
						</div>
						<div class="a-col action">
							<a href="#">
								<span>查询</span>
								预定
							</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-counter-section" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="20356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">酒店会员</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="15501" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">房间总数</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8200" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">月交易数</span>
				</div>
				<div class="col-md-3 text-center">
					<span class="fh5co-counter js-counter" data-from="0" data-to="8763" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">预定 &amp; 预览</span>
				</div>
			</div>
		</div>
	</div> 
	<div id="featured-hotel" class="fh5co-bg-color">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>房间介绍</h2>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="feature-full-1col">
					<div class="image" style="background-image: url(/hotel/images/hotel_feture_1.jpg);">
						<div class="descrip text-center">
							<p><small>最低价</small><span>888¥/每晚</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>大床房</h3>
						<p>这些是介绍内容，有空添加</p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
					</div>
				</div>

				<div class="feature-full-2col">
					<div class="f-hotel">
						<div class="image" style="background-image: url(/hotel/images/hotel_feture_2.jpg);">
							<div class="descrip text-center">
								<p><small>最低价</small><span>666¥/每晚</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>标准间</h3>
							<p>这些是介绍内容，有空添加</p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
					<div class="f-hotel">
						<div class="image" style="background-image: url(/hotel/images/hotel_feture_3.jpg);">
							<div class="descrip text-center">
								<p><small>最低价</small><span>1888¥/每晚</span></p>
							</div>
						</div>
						<div class="desc">
							<h3>商务房</h3>
							<p>这些是介绍内容，有空添加</p>
							<p><a href="#" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div id="hotel-facilities">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>酒店 特色</h2>
					</div>
				</div>
			</div>

			<div id="tabs">
				<nav class="tabs-nav">
					<a href="#" class="active" data-tab="tab1">
						<i class="flaticon-restaurant icon"></i>
						<span>餐厅</span>
					</a>
					<a href="#" data-tab="tab2">
						<i class="flaticon-cup icon"></i>
						<span>酒吧</span>
					</a>
					<a href="#" data-tab="tab3">
					
						<i class="flaticon-car icon"></i>
						<span>专车接送</span>
					</a>
					<a href="#" data-tab="tab4">
						
						<i class="flaticon-swimming icon"></i>
						<span>游泳池</span>
					</a>
					<a href="#" data-tab="tab5">
						
						<i class="flaticon-massage icon"></i>
						<span>Spa</span>
					</a>
					<a href="#" data-tab="tab6">
						
						<i class="flaticon-bicycle icon"></i>
						<span>慢跑区</span>
					</a>
				</nav>
				<div class="tab-content-container">
					<div class="tab-content active show" data-tab-content="tab1">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_1.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">餐厅介绍</span>
									<h3 class="heading">QM 美食馆</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>营业时间</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab2">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_2.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">酒吧介绍</span>
									<h3 class="heading">QM Bars</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>营业时间</span>
										<strong>ALL DAYS!</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab3">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_3.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">专车接送</span>
									<h3 class="heading">专车</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>运营时间</span>
										<strong>ALL DAYS!</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab4">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_4.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">游泳馆介绍</span>
									<h3 class="heading">游泳馆</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>开放时间</span>
										<strong>全天候开放</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_5.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">spa介绍</span>
									<h3 class="heading">Spa</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>服务时间</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="tab-content" data-tab-content="tab6">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="/hotel/images/tab_img_6.jpg" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">运动</span>
									<h3 class="heading">gym</h3>
									<p>后期添加介绍</p>
									<p class="service-hour">
										<span>开放时间</span>
										<strong>7:30 AM - 8:00 PM</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="testimonial">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>售后评价</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;真的好&rdquo;
						</blockquote>
						<p class="author"><cite>朝阳区热心群众</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;真的不错&rdquo;
						</blockquote>
						<p class="author"><cite>五五开</cite></p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="testimony">
						<blockquote>
							&ldquo;很好很好&rdquo;
						</blockquote>
						<p class="author"><cite>faker</cite></p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-blog-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-title text-center">
						<h2>我们的外部</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(/hotel/images/image-1.jpg);">
						<div class="date text-center">
							<span>休息区</span>
							<small></small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">查看更多</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(/hotel/images/image-2.jpg);">
						<div class="date text-center">
							<span>海景房</span>
							<small></small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">查看更多</a></h3>
					</div>
				</div>
				<div class="col-md-4">
					<div class="blog-grid" style="background-image: url(/hotel/images/image-3.jpg);">
						<div class="date text-center">
							<span>浴场</span>
							<small></small>
						</div>
					</div>
					<div class="desc">
						<h3><a href="#">查看更多</a></h3>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="footer" class="fh5co-bg-color">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="copyright">
						<p><small>&copy;2016-2017 欢迎 <br> 各位老板前来入住. <br>
						
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-3">
							<h3>快速通道</h3>
							<ul class="link">
								<li><a href="#">关于我们</a></li>
								<li><a href="#">加入收藏</a></li>
								<li><a href="#">意见与建议</a></li>
								<li><a href="#">站长邮箱</a></li>
							</ul>
						</div>
						<div class="col-md-3">
							<h3>合作伙伴</h3>
							<ul class="link">
								<li><a href="#">如x家</a></li>
								<li><a href="#">bbb</a></li>
								<li><a href="#">ccc</a></li>
								<li><a href="#">ddd</a></li>
								<li><a href="#">eee</a></li>
								<li><a href="#">fff</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<h3>最后一句</h3>
							<p>大爷来玩儿～</p>
							<form action="#" id="form-subscribe">
								<div class="form-field">
									<input type="email" placeholder="Email Address" id="email">
									<input type="submit" id="submit" value="Send">
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<ul class="social-icons">
						<li><a href="#">微信</a></li>
						<li><a href="#">QQ</a></li>
						<li><a href="#">支付宝</a></li>
						<li><a href="#">百度钱包</a></li>
						
					</ul>
				</div>
			</div>
		</div>
	</footer>

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
	
	<!-- Javascripts -->
	<script src="{{asset('hotel/js/jquery-2.1.4.min.js')}}"></script>
	<!-- Dropdown Menu -->
	<script src="{{asset('hotel/js/hoverIntent.js')}}"></script>
	<script src="{{asset('hotel/js/superfish.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('hotel/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('hotel/js/jquery.waypoints.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('hotel/js/jquery.countTo.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('hotel/js/jquery.stellar.min.js')}}"></script>
	<!-- Owl Slider -->
	<!-- // <script src="{{asset('hotel/js/owl.carousel.min.js')}}"></script> -->
	<!-- Date Picker -->
	<script src="{{asset('hotel/js/bootstrap-datepicker.min.js')}}"></script>
	<!-- CS Select -->
	<script src="{{asset('hotel/js/classie.js')}}"></script>
	<script src="{{asset('hotel/js/selectFx.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('hotel/js/jquery.flexslider-min.js')}}"></script>

	<script src="{{asset('hotel/js/custom.js')}}"></script>

</body>
</html>