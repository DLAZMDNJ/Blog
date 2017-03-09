@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>兴趣管理</h2> 
                       <h4><a href="/admin/friends/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>姓名</th>
                                        <th>性别</th>
                                        <th>头像</th>
                                        <th>简介</th>
                                        <th>QQ</th>
                                        <th>微信</th>
                                        <th>邮箱</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($friends as $v)
                                    	<tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->name}}</td>
										<td>
										@if($v->sex == 1)
										男
										@else
										女
										@endif
										</td>
                                        <td><img src="{{$v->pic}}" width="50px;"></td>
                                        <td>{{$v->dis}}</td>
                                        <td>{{$v->qq}}</td>
                                        <td>{{$v->wechar}}</td>
                                        <td>{{$v->email}}</td>
                                        <td>
                                        <a href="/admin/friends/edit/{{$v->id}}">
                                        修改</a>
                                        ----|----
                                        <a href="/admin/friends/delete/{{$v->id}}">
                                        删除</a>
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