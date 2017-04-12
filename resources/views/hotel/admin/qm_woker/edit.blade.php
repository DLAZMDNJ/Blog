@extends('hotel.admin.layout.layout')
@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
			<div class="row">
                    	<div class="col-lg-3">
							 <form role="form" method="post" action="{{asset("/qm/woker/doEdit")}}" enctype="multipart/form-data">
                       		<input type="hidden" name="_token" value="{{ csrf_token() }}">
                       		<input type="hidden" name="id" value="{{$info->id}}">
							<div class="form-group">
                                <label>用户名</label>
                                <input class="form-control" name="name" value="{{$info->name}}">
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>真实姓名</label>
                                <input class="form-control" name="realname" value="{{$info->realname}}">
                                <p class="help-block">和身份证一值</p>
                            </div>
							<div class="form-group">
                                <label>用户密码</label>
                                <input class="form-control" name="password" placeholder="******" type="password">
                                <input type="hidden" name="ifpassword" value="{{$info->password}}">
                                <p class="help-block">6-18位.输入进行修改,不输入默认原密码</p>
                            </div>
                             <div class="form-group">
                                <label>年龄</label>
                                <input type="text" name="age"  class="form-control" value="{{$info->age}}">
                            </div>
                            <div class="form-group">
                                <label>身份证号</label>
                                <input type="text" name="id_card"  class="form-control" value="{{$info->id_card}}">
                            </div>
                       
                            <div class="form-group">
                                <label>用户头像</label>
                                <input type="file" name="pic">
                                <input type="hidden" name="ifpic" value="{{$info->pic}}">
                           </div>
							<img src="{{$info->pic}}" width="100px;"> 
							<div class="form-group">
                                <label>教育程度</label>
                                <select class="form-control" name="education">
                                	<option @if(!$info->education) 
                                			selected 
                                			@endif>请选择</option>
                                    <option value="1" @if($info->education == 1) 
                                    		selected 
                                   			 @endif>初中及以下</option>
                                    <option value="2" @if($info->education == 2) 
                                    		selected 
                                    		@endif>高中毕业</option>
                                    <option value="3" @if($info->education == 3) 
                                    		selected 
                                    		@endif>大学本科</option>
                                    <option value="4" @if($info->education == 4) 
                                    		selected 
                                    		@endif>研究生</option>
                                    <option value="5" @if($info->education == 5) 
                                    		selected 
                                    		@endif>博士生</option>
                                </select>
                              </div>
                            </div>
	 <div class="col-lg-3">
	 </div>
	 <div class="col-lg-3">	
	 						
                             <div class="form-group">
                                <label>手机号</label>
                                <input type="text" name="phone"  class="form-control" value="{{$info->phone}}">
                            </div>  
                    		<div class="form-group">
                                <label>性别</label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline1" value="1"@if($info->sex == 1) 
                                    checked
                                    @endif>男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline2" value="2" @if($info->sex == 2) 
                                    checked 
                                    @endif>女
                                </label>
                            </div>
                            <div class="form-group">
                                <label>用户状态</label>
                                <select class="form-control" name="status">
                                    <option value="0" 
                                    @if($info->status == 0)
                                    selected
                                    @endif
                                    >正常</option>
                                    <option value="1"
                                    @if($info->status == 1)
                                    selected
                                    @endif 
                                    >冻结</option>
                                </select>
                            </div>
							  <div class="form-group">
                                <label>所属部门</label>
                                <select class="form-control" name="auth">
                                    <option value="1" @if($info->auth == 1) selected @endif>高管部门</option>
                                    <option value="2" @if($info->auth == 2) selected @endif>接待部门</option>
                                    <option value="3" @if($info->auth == 3) selected @endif>保洁部门</option>
                                    <option value="4" @if($info->auth == 4) selected @endif>保安部门</option>
                                    <option value="5" @if($info->auth == 5) selected @endif>财务部门</option>
                                    <option value="6" @if($info->auth == 6) selected @endif>餐饮部门</option>
                                    <option value="7" @if($info->auth == 7) selected @endif>司机部门</option>
                                    <option value="8" @if($info->auth == 8) selected @endif>综合服务部门</option>
                                    <option value="9" @if($info->auth == 9) selected @endif>维修部门</option>
                                </select>
                            </div>                    
                            <div class="form-group">
                                <label>职位</label>
                                <input type="text" name="zhiwei"  class="form-control" value="{{$info->zhiwei}}">
                            </div>
                            <div class="form-group">
                                <label>住址</label>
                                <input type="text" name="address"  class="form-control" value="{{$info->address}}">
                            </div>
                            <div class="form-group">
                                <label>薪资</label>
                                <input type="text" name="wages"  class="form-control" value="{{$info->wages}}">
                            </div>                         
							<div class="form-group">
                                <label>个人介绍</label>
                                <textarea class="form-control" rows="3" name="description">{{$info->description}}</textarea>
                            </div>
							
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>

@endsection