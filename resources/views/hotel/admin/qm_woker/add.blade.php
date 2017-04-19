@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/woker/doAdd")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            
                             <div class="form-group">
                                <label>登录账户</label>
                                <input class="form-control" name="name" autofocus>
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>真实名称</label>
                                <input class="form-control" name="realname">
                                <p class="help-block">输入身份证名称.</p>
                            </div>                         
							<div class="form-group">
                                <label>密码</label>
                                <input class="form-control" name="password" type="password">
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>入职时间</label>
                                <input class="form-control" placeholder="输入时间< 年-月-日 >" type="date" name="time_in">
                            </div>
                            <div class="form-group">
                                <label>头像</label>
                                <input type="file" name="pic">
                            </div>
                            <div class="form-group">
                                <label>性别</label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline1" value="1" checked>男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline2" value="2">女
                                </label>
                            </div>

                            <div class="form-group">
                                <label>用户状态</label>
                                <select class="form-control" name="status">
                                    <option value="0">正常</option>
                                    <option value="1">冻结</option>
                                </select>
                            </div>
							 <div class="form-group">
                                <label>所属部门</label>
                                <select class="form-control" name="auth">
                                    <option value="1">高管部门</option>
                                    <option value="2">接待部门</option>
                                    <option value="3">保洁部门</option>
                                    <option value="4">保安部门</option>
                                    <option value="5">财务部门</option>
                                    <option value="6">餐饮部门</option>
                                    <option value="7">司机部门</option>
                                    <option value="8">综合服务部门</option>
                                    <option value="9">维修部门</option>
                                </select>
                            </div>                    
                            <div class="form-group">
                                <label>职位</label>
                                <input type="text" name="zhiwei"  class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection