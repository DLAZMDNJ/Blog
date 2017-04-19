@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>服务管理</h2> 
                        <h4><a href="/qm/server/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>服务名称</th>
                                        <th>营业时间</th>
                                        <th>配图</th>
                                        <th>适用人群</th>
                                        <th>价格</th>                                                                    
                                        <th>是否已下架</th>
                                        <td>操作者</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	<tr>
                                    	@foreach($list as $v)
                                    		<td>{{$v->id}}</td>
                                    	<td>{{$v->name}}</td>
                                    	<td>{{$v->time}}</td>
                                    	<td><img src="{{$v->pic}}" width="100px;"></td>
                                    	<td>{{$v->on_people}}</td>
                                    	<td>{{$v->price}}</td>
                                    	<td>@if($v->is_onsale == 1) 是 @endif @if($v->is_onsale == 2) 否 @endif</td>                                 		
                                    	<td>{{$v->uid}}</td>
                                    	                     
                                    	<td>
                                    		<a href="/qm/server/edit/{{$v->id}}">修改</a>----|----<a href="/qm/server/delete/{{$v->id}}">删除</a>    
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