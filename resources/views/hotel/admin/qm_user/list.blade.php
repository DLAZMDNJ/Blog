@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>用户管理</h2> <span style="color:red;">会员为用户自己添加，后台禁止添加和修改</span>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>用户名</th>
                                        <th>头像</th>                               
                                        <th>状态</th>
                                        <th>性别</th>
                                        <td>手机号</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($list as $v)
                                    	<tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->realname}}</td>
                                        <td><img src="{{$v->pic}}" width="100px;"></td>
                
                                        <td>
                                        @if($v->status == 0)
                                        正常
                                        @else
                                        冻结
                                        @endif
                                        </td>
                                        <td>
                                        @if($v->sex == 1)
                                        男
                                        @else
                                        女
                                        @endif
                                        </td>
                                        <td>{{$v->phone}}</td>
                                        <td>                                    
                                        <a href="/qm/user/edit/{{$v->id}}">
                                        冻结</a>
                                        ----|----
                                        <a href="/qm/user/delete/{{$v->id}}">
                                        删除</a>
                                        ----|----
                                        <a href="/qm/user/show/{{$v->id}}">
                                        详细信息</a>     
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