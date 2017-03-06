@extends('admin.layout.layout')
@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
	

                    <div class="col-lg-6">

                        <form role="form" method="post" action="{{asset("/admin/tour/doEdit")}}">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$data->id}}">
                            <div class="form-group">
                                <label>标题</label>
                                <input class="form-control" name="title" value="{{$data->title}}">
                                <p class="help-block">5-10个汉字.</p>
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
                                <label>缩略图</label>
                                <input type="file" name="pic_min">                        
                            </div>
                            <img src="{{$data->pic_min}}" width="100px;">
                            <div class="form-group">
                                <label>大图</label>
                                <input type="file" name="pic_max">
                            </div>
							<img src="{{$data->pic_max}}" width="100px;">
                            <div class="form-group">
                                <label>描述</label>
                                <textarea class="form-control" rows="3" name="dic1" value="{{$data->dic1}}"></textarea>
                            </div>
                            <div class="form-group">
                                <label>地点</label>
                                <input class="form-control" name="address" value="{{$data->address}}">                        
                            </div>
                            <div class="form-group">
                                <label>时间</label>
                                <input class="form-control" name="time" value="{{$data->time}}">                        
                            </div>
                            <div class="form-group">
                                <label>人</label>
                                <input class="form-control" name="people" value="{{$data->people}}">                        
                            </div>
                            <div class="form-group">
                                <label>备注</label>
                                <input class="form-control" name="tips" value="{{$data->tips}}">                        
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

                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>

@endsection