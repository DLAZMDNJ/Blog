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
			   						<a href="/qm/home/order" class="btn btn-primary btn-lg">{{$p->tips3}}</a>
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
					<form action="{{asset('/qm/home/order')}}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="a-col">
							<section>
								<select class="cs-select cs-skin-border" name="id">
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
								<input type="text" class="form-control" id="date-start" name="time_in"/>
							</div>
						</div>
						<div class="a-col alternate">
							<div class="input-field">
								<label for="date-end">离店时间</label>
								<input type="text" class="form-control" id="date-end" name="time_out"/>
							</div>
						</div>
						<div class="a-col action">
							<input type="submit" value="查询预定">
								
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
						<p>{{$h->description}}</p>
						<p><a href="/qm/home/order" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
					</div>
				</div>
				@else
				<div class="feature-full-1col">
					<div class="desc">
						<h3>{{$h->name}}</h3>
						<p>{{$h->description}}</p>
						<p><a href="/qm/home/order" class="btn btn-primary btn-luxe-primary">马上预定 <i class="ti-angle-right"></i></a></p>
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
				@foreach($server as $s)
					<a href="#" @if($s->id == 1 ) class="active" @endif data-tab="tab{{$s->id}}">
						<i class="flaticon-restaurant icon"></i>
						<span>{{$s->name}}</span>
					</a>
					@endforeach
					
				</nav>
				<div class="tab-content-container">
				@foreach($server as $s)
					<div class="tab-content @if($s->id == 1 ) active show @endif" data-tab-content="tab{{$s->id}}">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<img src="{{$s->pic}}" class="img-responsive" alt="Image">
								</div>
								<div class="col-md-6">
									<span class="super-heading-sm">{{$s->name}}介绍</span>
									<h3 class="heading">QM {{$s->name}}</h3>
									<p class="service-hour">
									<span>实用人群</span>
									{{$s->on_people}}岁</p>
									<p class="service-hour">
										<span>营业时间</span>
										<strong>{{$s->time}}</strong>
									</p>
								</div>
							</div>
						</div>
					</div>
					@endforeach
					
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