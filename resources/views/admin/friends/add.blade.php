@extends('admin.layout.layout')
@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
	

                    <div class="col-lg-6">

                        <form role="form" method="post" action="{{asset("/admin/friends/doAdd")}}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
					
                            <div class="form-group">
                                <label>姓名</label>
                                <input class="form-control" name="name">
                            </div>
							 <div class="form-group">
                                <label>性别</label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline1" value="1" checked>男
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="sex" id="optionsRadiosInline2" value="0">女
                                </label>                         
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
                                <label>头像</label>
                                <input type="file" name="pic">
                            </div>

                            <div class="form-group">
                                <label>简介</label>
                                <textarea class="form-control" rows="3" name="dis"></textarea>
                            </div>
							<div class="form-group">
                                <label>QQ</label>
                                <input class="form-control" name="qq">
                            </div>
                            <div class="form-group">
                                <label>微信</label>
                                <input class="form-control" name="wechar">
                            </div>
                            <div class="form-group">
                                <label>邮箱</label>
                                <input class="form-control" name="email">
                            </div>
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
<!--                                 <label>Selects</label> -->
<!--                                 <select class="form-control"> -->
<!--                                     <option>1</option> -->
<!--                                     <option>2</option> -->
<!--                                     <option>3</option> -->
<!--                                     <option>4</option> -->
<!--                                     <option>5</option> -->
<!--                                 </select> -->
<!--                             </div> -->

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