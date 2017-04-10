@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
	

                    <div class="col-lg-3">

                        <form role="form" method="post" action="{{asset("/qm/woker/doAdd")}}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            
                             <div class="form-group">
                                <label>登录账户</label>
                                <input class="form-control" name="name" autofocus>
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>真实名称</label>
                                <input class="form-control" name="realname" autofocus>
                                <p class="help-block">6-18位.</p>
                            </div>                         
							<div class="form-group">
                                <label>密码</label>
                                <input class="form-control" name="password">
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>入职时间</label>
                                <input class="form-control" placeholder="Enter text" type="data">
                            </div>

	<!--                             <div class="form-group"> -->
	<!--                                 <label>Static Control</label> -->
	<!--                                 <p class="form-control-static">email@example.com</p> -->
	<!--                             </div> -->

                            <div class="form-group">
                                <label>头像</label>
                                <input type="file" name="pic">
                            </div>

<!--                             <div class="form-group"> -->
<!--                                 <label>兴趣描述</label> -->
<!--                                 <textarea class="form-control" rows="3" name="dic"></textarea> -->
<!--                             </div> -->

<!--                             <div class="form-group"> -->
<!--                                 <label>Checkboxes</label> -->
<!--                                 <div class="checkbox"> -->
<!--                                     <label> -->
<!--                                         <input type="checkbox" value="">Checkbox 1 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                                 <div class="checkbox"> -->
<!--                                     <label> -->
<!--                                         <input type="checkbox" value="">Checkbox 2 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                                 <div class="checkbox"> -->
<!--                                     <label> -->
<!--                                         <input type="checkbox" value="">Checkbox 3 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                             </div> -->

<!--                             <div class="form-group"> -->
<!--                                 <label>Inline Checkboxes</label> -->
<!--                                 <label class="checkbox-inline"> -->
<!--                                     <input type="checkbox">1 -->
<!--                                 </label> -->
<!--                                 <label class="checkbox-inline"> -->
<!--                                     <input type="checkbox">2 -->
<!--                                 </label> -->
<!--                                 <label class="checkbox-inline"> -->
<!--                                     <input type="checkbox">3 -->
<!--                                 </label> -->
<!--                             </div> -->

<!--                             <div class="form-group"> -->
<!--                                 <label>Radio Buttons</label> -->
<!--                                 <div class="radio"> -->
<!--                                     <label> -->
<!--                                         <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Radio 1 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                                 <div class="radio"> -->
<!--                                     <label> -->
<!--                                         <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Radio 2 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                                 <div class="radio"> -->
<!--                                     <label> -->
<!--                                         <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">Radio 3 -->
<!--                                     </label> -->
<!--                                 </div> -->
<!--                             </div> -->

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
                                    <option value="0">高管部门</option>
                                    <option value="1">接待部门</option>
                                    <option value="2">保洁部门</option>
                                    <option value="3">保安部门</option>
                                    <option value="4">财务部门</option>
                                    <option value="5">餐饮部门</option>
                                    <option value="6">司机部门</option>
                                    <option value="7">综合服务部门</option>
                                    <option value="8">维修部门</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>职位</label>
                                <select class="form-control" name="auth">
                                    
                                </select>
                            </div>
<!--                             <div class="form-group"> -->
<!--                                 <label>Multiple Selects</label> -->
<!--                                 <select multiple class="form-control"> -->
<!--                                     <option>1</option> -->
<!--                                     <option>2</option> -->
<!--                                     <option>3</option> -->
<!--                                     <option>4</option> -->
<!--                                     <option>5</option> -->
<!--                                 </select> -->
<!--                             </div> -->

                            <button type="submit" class="btn btn-default">提交</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>

@endsection