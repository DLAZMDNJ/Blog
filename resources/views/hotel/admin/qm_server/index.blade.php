@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>服务管理</h2> 
                        <h4><a href="/qm/food/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>餐饮类别</th>
                                        <th>数量</th>
                                        <th>包含内容</th>
                                        <th>适用人群</th>                               
                                        <th>供给时间</th>
                                        <th>是否已下架</th>
                                        <th>配图</th>
                                        <td>操作者</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	<tr>
                                    	@foreach($list as $v)
                                    		<td>{{$v->id}}</td>
                                    	<td>
                                    		@foreach($cate as $m)
                                    			@if($m->id == $v->cid)
                                    				{{$m->name}}
                                    			@endif
                                    		@endforeach
                                    	</td>
                                    	<td>{{$v->count}}</td>
                                    	<td>{{$v->content}}</td>
                                    	<td>{{$v->on_people}}</td>
                                    	<td>{{$v->time}}</td>
                                    	<td>@if($v->is_onsale == 1) 是 @endif @if($v->is_onsale == 2) 否 @endif</td>
                                   		<td><img src="{{$v->pic}}" width="100px;"></td>
                                    	<td>{{$v->uid}}</td>
                                    	                     
                                    	<td>
                                    		<a href="/qm/food/edit/{{$v->id}}">修改</a>----|----<a href="/qm/food/delete/{{$v->id}}">删除</a>    
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