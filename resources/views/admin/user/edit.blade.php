@extends('admin.layout.layout')
@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
			<div class="row">
                    <div class="col-lg-3">

                        <form role="form" method="post" action="{{asset("/admin/user/doEdit")}}">
                       	<input type="hidden" name="_token" value="{{ csrf_token() }}">
                       	<input type="hidden" name="id" value="{{$userinfo->id}}">

                            <div class="form-group">
                                <label>用户名</label>
                                <input class="form-control" name="name" value="{{$userinfo->name}}">
                                <p class="help-block">6-18位.</p>
                            </div>
                            <div class="form-group">
                                <label>昵称</label>
                                <input class="form-control" name="nickname" value="{{$userinfo->nickname}}">
                                <p class="help-block">5-10个汉字.</p>
                            </div>
							<div class="form-group">
                                <label>用户密码</label>
                                <input class="form-control" name="password" value="{{$userinfo->password}}" type="password">
                                <p class="help-block">6-18位.</p>
                            </div>
<!--                             <div class="form-group"> -->
<!--                                 <label>备用输入框，后期使用</label> -->
<!--                                 <input class="form-control" placeholder="Enter text"> -->
<!--                             </div> -->

	<!--                             <div class="form-group"> -->
	<!--                                 <label>Static Control</label> -->
	<!--                                 <p class="form-control-static">email@example.com</p> -->
	<!--                             </div> -->

                            <div class="form-group">
                                <label>用户头像</label>
                                <input type="file" name="pic" >
                            </div>
							<img src="{{$userinfo->name}}" width="100px;">
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

<!--                             <div class="form-group"> -->
<!--                                 <label>Inline Radio Buttons</label> -->
<!--                                 <label class="radio-inline"> -->
<!--                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline1" value="option1" checked>1 -->
<!--                                 </label> -->
<!--                                 <label class="radio-inline"> -->
<!--                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline2" value="option2">2 -->
<!--                                 </label> -->
<!--                                 <label class="radio-inline"> -->
<!--                                     <input type="radio" name="optionsRadiosInline" id="optionsRadiosInline3" value="option3">3 -->
<!--                                 </label> -->
<!--                             </div> -->

                            <div class="form-group">
                                <label>用户状态</label>
                                <select class="form-control" name="status">
                                    <option value="0" 
                                    @if($userinfo->status == 0)
                                    selected
                                    @endif
                                    >正常</option>
                                    <option value="1"
                                    @if($userinfo->status == 1)
                                    selected
                                    @endif
                                    
                                    
                                    >冻结</option>
                                </select>
                            </div>
							 <div class="form-group">
                                <label>用户角色</label>
                                <select class="form-control" name="auth">
                                    <option value="0"
                                    @if($userinfo->auth == 0)
                                    selected
                                    @endif                             
                                    >管理员</option>
                                    <option value="1"
                                    @if($userinfo->auth == 1)
                                    selected
                                    @endif
                                    >普通用户</option>
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