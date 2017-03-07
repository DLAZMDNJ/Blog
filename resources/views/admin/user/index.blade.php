@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>兴趣管理</h2> 
                       <h4><a href="/admin/user/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>用户名</th>
                                        <th>昵称</th>
                                        <th>头像</th>
                                        <th>最后登录时间</th>                                
                                        <th>状态</th>
                                        <th>权限</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($data as $v)
                                    	<tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->name}}</td>
                                        <td>{{$v->nickname}}</td>
                                        <td><img src="" width="50px;"></td>
                                        <td>{{$v->time}}</td>
                                        <td>
                                        @if($v->status == 0)
                                        正常
                                        @else
                                        冻结
                                        @endif
                                        
                                        </td>
                                        <td>
                                        @if($v->auth == 0)
                                        管理员
                                        @else
                                        普通用户
                                        @endif</td>
                                        <td>
                                        <a href="/admin/user/edit/{{$v->id}}">
                                        修改</a>
                                        ----|----
                                        <a href="/admin/user/delete/{{$v->id}}">
                                        删除</a>                                    
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