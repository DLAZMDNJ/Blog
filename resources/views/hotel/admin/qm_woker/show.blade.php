@extends('hotel.admin.layout.layout')
@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
			<div class="row">
                    	<div class="col-lg-3">
							<div class="form-group">
                                <label>用户名</label>
                                <p class="form-control">{{$info->name}}</p>	
                            </div>
                            <div class="form-group">
                                <label>真实姓名</label>
                               <p class="form-control">{{$info->realname}}</p>	
                            </div>

                             <div class="form-group">
                                <label>年龄</label>
                                <p class="form-control">{{$info->age}}</p>
                            </div>
                            <div class="form-group">
                                <label>身份证号</label>
                                <p class="form-control">{{$info->id_card}}</p>
                            </div>
                       
                            <div class="form-group">
                                <label>用户头像</label>
                             </div>
                             <div class="form-group">
							<img src="{{$info->pic}}" width="100px;"> 
							</div>
							<div class="form-group">
                                <label>教育程度</label>
                                 <p class="form-control">
                                 	@if($info->education == 1) 
                                  	 	初中及以下
                                 	@endif
                                 	@if($info->education == 2) 
                                  	 	高中毕业
                                 	@endif
                                 	@if($info->education == 3) 
                                  	 	大学本科
                                 	@endif
                                 	@if($info->education == 4) 
                                  	 	研究生
                                 	@endif
                                 	@if($info->education == 5) 
                                  	 	博士生
                                 	@endif
                                   	</p>
                              </div>
                              <div class="form-group">
                                <label>手机号</label>
                               <p class="form-control">{{$info->phone}}</p>
                            </div>  
                            </div>
	 <div class="col-lg-3">
	 </div>
	 <div class="col-lg-3">	
	 						
                             
                    		<div class="form-group">
                                <label>性别</label>
                                  <p class="form-control">@if($info->sex == 1) 男 @endif @if($info->sex == 2) 女 @endif</p>
                            </div>
                            <div class="form-group">
                                <label>用户状态</label>
                                 <p class="form-control">@if($info->status == 0) 正常 @endif @if($info->status == 1) 冻结 @endif</p>
                            </div>
							  <div class="form-group">
                                <label>所属部门</label>
                                	<p class="form-control">
                                 	@if($info->auth == 1) 
                                  	 	高管部门
                                 	@endif
                                 	@if($info->auth == 2) 
                                  	 	接待部门
                                 	@endif
                                 	@if($info->auth == 3) 
                                  	 	保洁部门
                                 	@endif
                                 	@if($info->auth == 4) 
                                  	 	保安部门
                                 	@endif
                                 	@if($info->auth == 5) 
                                  	 	财务部门
                                 	@endif
                                 	@if($info->auth == 6) 
                                  	 	餐饮部门
                                 	@endif
                                 	@if($info->auth == 7) 
                                  	 	司机部门
                                 	@endif
                                 	@if($info->auth == 8) 
                                  	 	综合服务部门
                                 	@endif
                                 	@if($info->auth == 9) 
                                  	 	维修部门
                                 	@endif
                                   	</p>
                            </div>                    
                            <div class="form-group">
                                <label>职位</label>
                                 <p class="form-control">{{$info->zhiwei}}</p>
                            </div>
                            <div class="form-group">
                                <label>住址</label>
                                <p class="form-control">{{$info->address}}</p>
                            </div>
                            <div class="form-group">
                                <label>薪资</label>
                                 <p class="form-control">{{$info->wages}}</p>
                            </div>                         
							<div class="form-group">
                                <label>个人介绍</label>
                                <textarea class="form-control" rows="5"  disabled>{{$info->description}}</textarea>
                            </div>
							
				<a href="{{asset('qm/woker/index')}}" class="buttom" style="margin-left:160px;font-size:30px;">返回</a>
				</div>
             </div>
             </div>

@endsection