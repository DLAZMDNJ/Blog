@extends('hotel.home.layout.layout')
@section('content')
<aside id="fh5co-hero" class="js-fullheight">
		<div class="flexslider js-fullheight">
			<ul class="slides">
			
			@foreach($photo as $p)
		   	<li style="background-image: url({{$p->pic}});">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="col-md-12 col-md-offset-0 text-center slider-text">
		   				<div class="slider-text-inner js-fullheight">
		   					<div class="desc">
		   						<p><span>{{$p->tips1}}</span></p>
		   						<h2>{{$p->tips2}}</h2>
			   					<p>
			   						<a href="#" class="btn btn-primary btn-lg">{{$p->tips3}}</a>
			   					</p>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</li>
		   	@endforeach
		   	
		   	
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
									@foreach($category as $c)
									<option value="{{$c->id}}">{{$c->name}}</option>
									@endforeach
									
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
			@foreach($home as $h)
				@if($h->id %2 == 0)
				<div class="feature-full-1col">
					<div class="image" style="background-image: url({{$h->pic}});">
						<div class="descrip text-center">
							<p><small>最低价</small><span>{{$h->price}}¥/每晚</span></p>
						</div>
					</div>
					<div class="desc">
						<h3>{{$h->name}}</h3>
						<p>这些是介绍内容，有空添加</p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
					</div>
				</div>
				@else
				<div class="feature-full-1col">
					<div class="desc">
						<h3>{{$h->name}}</h3>
						<p>这些是介绍内容，有空添加</p>
						<p><a href="#" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
					</div>
					<div class="image" style="background-image: url({{$h->pic}});">
						<div class="descrip text-center">
							<p><small>最低价</small><span>{{$h->price}}¥/每晚</span></p>
						</div>
					</div>
					
				</div>
				
				@endif
			@endforeach
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