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
                               <p class="form-control">{{$info->name}}</p>	
                            </div>
							<div class="form-group">					
                                <label>房间类型</label>
                                 <p class="form-control"> 
                                 @if($info->cid == 1) 大床房 @endif
                                 @if($info->cid == 2) 标准间 @endif
                                 @if($info->cid == 3) 商务房 @endif
                                 @if($info->cid == 4) 套房 @endif
                                 </p> 
                            </div> 
                            <div class="form-group">
                                <label>是否有早餐</label>
                                <p class="form-control"> 
                                 @if($info->is_food == 1) 是 @endif
                                 @if($info->is_food == 2) 否 @endif
                                 </p>                     
                            </div>
                            <div class="form-group">
                                <label>是否已下架</label>
                                <p class="form-control"> 
                                 @if($info->is_onsale == 1) 是 @endif
                                 @if($info->is_onsale == 2) 否 @endif
                                 </p> 
                            </div>
                             <div class="form-group">
                                <label>是否已保洁</label>
                                <p class="form-control"> 
                                 @if($info->is_clean == 1) 是 @endif
                                 @if($info->is_clean == 2) 否 @endif
                                 </p>
                            </div>
                            <div class="form-group">
                                <label>是否有窗</label>
                                <p class="form-control"> 
                                 @if($info->is_window == 1) 是 @endif
                                 @if($info->is_window == 2) 否 @endif
                                 
                            </div> 
                             <div class="form-group">
                                <label>价格</label>
                                 <p class="form-control">{{$info->price}}</p>
                                <p class="help-block">人民币.</p>
                            </div>
                            <div class="form-group">
                                <label>房间总量</label>
                                 <p class="form-control">{{$info->count}}</p>
                            </div>                         
							<div class="form-group">
                                <label>所在楼层</label>
                                <p class="form-control"> 
                                 @if($info->floor == 1) 1 @endif
                                 @if($info->floor == 2) 2 @endif
                                 @if($info->floor == 3) 3 @endif
                                 @if($info->floor == 4) 4 @endif
                                 @if($info->floor == 4) 5 @endif
                                 @if($info->floor == 4) 6 @endif
                                 @if($info->floor == 4) 7 @endif
                                 @if($info->floor == 4) 8 @endif
                                 @if($info->floor == 4) 9 @endif
                                 @if($info->floor == 4) 10 @endif
                                 @if($info->floor == 4) 11 @endif
                                 @if($info->floor == 4) 12 @endif
                                 </p>                            
                            </div>
                            </div>
                            <div class="col-lg-3">
                            </div>
                            <div class="col-lg-3">
                            <div class="form-group">
                                <label>缩略图</label>
                            </div>
                            <div>    
                                <img src="{{$info->pic}}" width="100px;">
                            </div>                  
                            <div class="form-group">
                                <label>房屋介绍</label>
                                <textarea class="form-control" rows="6" name="description" disabled>{{$info->description}}</textarea>
                            </div>
                            <a href="{{asset('qm/home/index')}}" class="buttom" style="margin-left:160px;font-size:30px;">返回</a>

                        </form>
				</div>
             </div>
             </div>
             
@endsection