@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/home/doAdd")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                                <label>餐饮名称</label>
                                <input class="form-control" name="name">
                            </div>
							<div class="form-group">					
                                <label>房间类型</label>
                                <select class="form-control" name="cid">
                                @foreach($cate as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                 @endforeach   
                                </select>
                            </div> 
                            <div class="form-group">
                                <label>是否有早餐</label>
                                <select class="form-control" name="is_food">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>是否已下架</label>
                                <select class="form-control" name="is_onsale">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>
                             <div class="form-group">
                                <label>是否已保洁</label>
                                <select class="form-control" name="is_clean">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>是否有窗</label>
                                <select class="form-control" name="is_window">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div> 
                             <div class="form-group">
                                <label>价格</label>
                                <input class="form-control" name="price" >
                                <p class="help-block">人民币.</p>
                            </div>
                            <div class="form-group">
                                <label>房间总量</label>
                                <input class="form-control" name="count">
                            </div>                         
							<div class="form-group">
                                <label>所在楼层</label>
                                <select class="form-control" name="floor">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <label>缩略图</label>
                                <input type="file" name="pic_min">
                            </div>
                            
                            <div class="form-group">
                                <label>房屋介绍</label>
                                <textarea class="form-control" rows="6" name="description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-default">提交</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection