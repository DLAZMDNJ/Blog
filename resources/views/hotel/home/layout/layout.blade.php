<!DOCTYPE html>	
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>钱敏 &mdash; 酒店管理系统前台 </title>
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
							<li><a class="active" href="{{asset('/qm')}}">首页</a></li>
							<li>
								<a href="{{asset('/qm/hotel')}}" class="fh5co-sub-ddown">酒店</a>
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
							<li><a href="{{asset('/qm/services')}}">服务</a></li>
							<li><a href="{{asset('/qm/reply')}}">酒店评价</a></li>
							<li><a href="{{asset('/qm/contact')}}">联系我们</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
	</div>
	<!-- end:fh5co-header -->
	
	
@section('content')     
        
   @show
		

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