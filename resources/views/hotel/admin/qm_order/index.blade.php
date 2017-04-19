@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>订单管理</h2> 
              	<span style="color:red;">无新增功能，禁止刷单</span>	
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
                                        <td>是否入住</td>
                                        <td>是否离店</td>
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
                                    	<td>@if($v->status == 1) 是 @endif @if($v->status == 0) 否 @endif</td>
                           				<td>@if($v->is_out == 0) 否 @else  异常订单 @endif</td>

                                    	                     
                                    	<td>
                                    		<a href="/qm/order/edit/{{$v->id}}">修改</a>----|----<a href="/qm/order/delete/{{$v->id}}">删除</a>    
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