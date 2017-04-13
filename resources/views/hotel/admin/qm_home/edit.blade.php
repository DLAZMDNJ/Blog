@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/home/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                       <div class="form-group">
                                <label>房间名称</label>
                                <input class="form-control" name="name" value="{{$info->name}}">
                            </div>
							<div class="form-group">					
                                <label>房间类型</label>
                                <select class="form-control" name="cid">
                                	 @foreach($cate as $v)
                                    	<option value="{{$v->id}}" @if($info->cid == $v->id)  selected @endif>{{$v->name}}</option>
                                	 @endforeach  
          
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>是否有早餐</label>
                                <select class="form-control" name="is_food">
                                    <option value="1" @if($info->is_food == 1) selected @endif>是</option>
                                    <option value="2" @if($info->is_food == 2) selected @endif>否</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>是否已下架</label>
                                <select class="form-control" name="is_onsale">
                                    <option value="1" @if($info->is_onsale == 1) selected @endif>是</option>
                                    <option value="2" @if($info->is_onsale == 2) selected @endif>否</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>是否已保洁</label>
                                <select class="form-control" name="is_clean">
                                    <option value="1" @if($info->is_clean == 1) selected @endif>是</option>
                                    <option value="2" @if($info->is_clean == 2) selected @endif>否</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>是否有窗</label>
                                <select class="form-control" name="is_window">
                                    <option value="1" @if($info->is_window == 1) selected @endif>是</option>
                                    <option value="2" @if($info->is_window == 2) selected @endif>否</option>
                                </select>
                            </div> 
                             <div class="form-group">
                                <label>价格</label>
                                <input class="form-control" name="price" value="{{$info->price}}" >
                                <p class="help-block">人民币.</p>
                            </div>
                            <div class="form-group">
                                <label>房间总量</label>
                                <input class="form-control" name="count" value="{{$info->count}}">
                            </div>                         
							<div class="form-group">
                                <label>所在楼层</label>
                                <select class="form-control" name="floor">
                                    <option value="1" @if($info->floor == 1) selected @endif>1</option>
                                    <option value="2" @if($info->floor == 2) selected @endif>2</option>
                                    <option value="3" @if($info->floor == 3) selected @endif>3</option>
                                    <option value="4" @if($info->floor == 4) selected @endif>4</option>
                                    <option value="5" @if($info->floor == 5) selected @endif>5</option>
                                    <option value="6" @if($info->floor == 6) selected @endif>6</option>
                                    <option value="7" @if($info->floor == 7) selected @endif>7</option>
                                    <option value="8" @if($info->floor == 8) selected @endif>8</option>
                                    <option value="9" @if($info->floor == 9) selected @endif>9</option>
                                    <option value="10" @if($info->floor == 10) selected @endif>10</option>
                                    <option value="11" @if($info->floor == 11) selected @endif>11</option>
                                    <option value="12" @if($info->floor == 12) selected @endif>12</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <label>缩略图</label>
                                <input type="file" name="pic">
                            </div>
                            <div>    
                                <img src="{{$info->pic}}" width="100px;">
                                <input type="hidden" name="ifpic" value="{{$info->pic}}">
                            </div>
                            
                            <div class="form-group">
                                <label>房屋介绍</label>
                                <textarea class="form-control" rows="6" name="description">{{$info->description}}</textarea>
                            </div>
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection