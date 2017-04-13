@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>房间管理</h2> 
                        <h4><a href="/qm/home/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>所在楼层</th>
                                        <th>房间类型</th>
                                        <th>房间名称</th>
                                        <th>房间剩余</th>                               
                                        <th>预定价格</th>
                                        <th>是否已下架</th>
                                        <td>是否已保洁</td>
                                        <td>是否有早餐</td>
                                        <td>是否有窗户</td>
                                        <td>操作者</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	<tr>
                                    	@foreach($list as $v)
                                    	<td>{{$v->number}}</td>
                                    	<td>{{$v->floor}}</td>
                                    	<td>
                                    	@foreach($cate as $m)
                                    		@if($m->id == $v->cid)
                                    			{{$m->name}}
                                    		@endif
                                    	@endforeach	
                                    	</td>
                                    	<td>{{$v->name}}</td>
                                    	<td>{{$v->count}}间</td>
                                    	<td>{{$v->price}}元</td>
                                    	<td>@if($v->is_onsale == 1) 是 @else 否 @endif </td>
                                    	<td>@if($v->is_clean == 1) 是 @else 否 @endif </td>
                                    	<td>@if($v->is_food == 1) 是 @else 否 @endif</td>
                                    	<td>@if($v->is_window == 1) 是 @else 否 @endif</td>
                                    	<td>{{$v->uid}}</td>                               
                                    	<td>
                                    		<a href="/qm/home/edit/{{$v->id}}">修改</a>----|----<a href="/qm/home/delete/{{$v->id}}">删除</a>----|----<a href="/qm/home/show/{{$v->id}}">详细信息</a>     
                                        </td>                               
                                        </tr>	
                                   		@endforeach
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>          
                </div>
			</div>
		</div>


@endsection