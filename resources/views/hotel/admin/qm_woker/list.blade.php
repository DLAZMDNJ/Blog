@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>内部职工管理</h2> 
                       <h4><a href="/qm/woker/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>职工名</th>
                                        <th>性别</th>
                                        <th>头像</th>
                                        <th>职位</th>
                                        <th>入职时间</th>                                
                                        <th>状态</th>
                                        <th>部门</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($list as $v)
                                    	<tr>
                                        <td>{{$v->number}}</td>
                                        <td>{{$v->realname}}</td>
                                        <td>{{$v->sex}}</td>
                                        <td><img src="" width="50px;"></td>
                                        <td>{{$v->zhiwei}}</td>
                                        <td>{{$v->time_in}}</td>
                                        <td>
                                        @if($v->status == 0)
                                        正常
                                        @else
                                        冻结
                                        @endif
                                        
                                        </td>
                                        <td>
                                        @if($v->auth == 1)
                                        高管部门
                                        @endif
                                        @if($v->auth == 2)
                                        接待部门
                                         @endif
                                        @if($v->auth == 3)
                                        保洁部门
                                         @endif
                                        @if($v->auth == 4)
                                        保安部门
                                         @endif
                                        @if($v->auth == 5)
                                       	财务部门
                                       	 @endif
                                        @if($v->auth == 6)
                                        餐饮部门
                                         @endif
                                        @if($v->auth == 7)
                                        司机部门
                                        @endif
                                        @if($v->auth == 8)
                                        综合服务部门
                                        @endif
                                        @if($v->auth == 9)
                                        维修部门
                                        @endif</td>
                                        <td>
                                        <a href="/qm/woker/edit/{{$v->id}}">
                                        修改</a>
                                        ----|----
                                        <a href="/qm/woker/show/{{$v->id}}">
                                        详细信息</a>
                                        ----|----
                                        <a href="/qm/woker/delete/{{$v->id}}">
                                        删除</a>     </td>                               
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