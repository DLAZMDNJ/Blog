@extends('hotel.home.layout.layout')
@section('content')
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

	
@endsection