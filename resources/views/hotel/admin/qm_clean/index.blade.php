@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>保洁管理</h2> 
              
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>订单编号</th>
                                        <th>订单名称</th>
                                        <th>订单人</th>
                                        <th>房间信息</th>
                                        <th>创建时间</th>                               
                                        <th>入住时间</th>
                                        <th>离开时间</th>
                                        <th>订单数量</th>
                                        <td>备注</td>
                                        <td>是否保洁</td>
                                        <td>是否上架</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	<tr>
                                    	@foreach($list as $v)
                                    		<td>{{$v->id}}</td>
                                    	<td>
                                    		@foreach($user as $m)
                                    			@if($m->id == $v->uid)
                                    			{{$m -> realname}}
                                    			@endif
                                    		@endforeach
                                    	</td>
                                    	<td>
                                    		@foreach($home as $n)
                                    			@if($n->id == $v->hid)
                                    			{{$n -> name}}
                                    			@endif
                                    		@endforeach
                                    	</td>
                                    	<td>{{$v->name}}</td>
                                    	<td>{{$v->ctime}}</td>
                                    	<td>{{$v->itime}}</td>
                                    	<td>{{$v->time}}</td>
                                    	<td>{{$v->count}}</td>
                                    	<td>{{$v->tips}}</td>
                                    	<td>@if($v->is_clean == 1) 是 @else 异常订单 @endif</td>
                           				<td>@if($v->is_onsale == 0) 否 @else  异常订单 @endif</td>

                                    	                     
                                    	<td>
                                    		<a href="/qm/clean/edit/{{$v->id}}">修改</a>----|----<a href="/qm/order/clean/{{$v->id}}">删除</a>    
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