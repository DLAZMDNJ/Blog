@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>时间轴管理</h2> 
                       <h4><a href="/admin/time/add">新增</a></h4>
                        <div class="table-responsive">
                        
                        
                        
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>时间</th>
                                        <th>地址</th>
                                        <th>描述</th>
                                        <th>图片</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($time as $v)
                                    	<tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->time}}</td>
                                        <td>{{$v->address}}</td>
                                        <td><img src="{{$v->pic}}" width="50px;"></td>
                                        <td>{{$v->dis}}</td>
                                        <td>
                                        <a href="/admin/time/edit/{{$v->id}}">
                                        修改</a>
                                        ----|----
                                        <a href="/admin/time/delete/{{$v->id}}">
                                        删除</a>  </td>                                  
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