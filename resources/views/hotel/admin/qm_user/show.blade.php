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
                                <label>住址</label>
                                <p class="form-control">{{$info->address}}</p>
                            </div>
                        	<div class="form-group">
                                <label>会员等级</label>
                                <p class="form-control">{{$info->level}}</p>
                            </div>
                            <div class="form-group">
                                <label>账户积分</label>
                                <p class="form-control">{{$info->count}}</p>
                            </div>
			
							
				<a href="{{asset('qm/user/index')}}" class="buttom" style="margin-left:160px;font-size:30px;">返回</a>
				</div>
             </div>
             </div>

@endsection