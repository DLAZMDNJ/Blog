@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>旅游管理</h2> 
                       <h4><a href="/admin/tour/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>标题</th>
                                        <th>缩略图</th>
                                        <th>描述</th>
                                        <th>时间</th>
                                        <th>地点</th>
                                        <th>人物</th>
                                        <th>备注</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	@foreach($tour as $v)
                                    	<tr>
                                        <td>{{$v->id}}</td>
                                        <td>{{$v->title}}</td>
                                        <td><img src="{{$v->pic_min}}" width="50px;"></td>
                                        <td>{{$v->dic1}}</td>
                                        <td>{{$v->time}}</td>
                                        <td>{{$v->address}}</td>
                                        <td>{{$v->people}}</td>
                                        <td>{{$v->tips}}</td>
                                        <td>
                                        <a href="/admin/tour/edit/{{$v->id}}">
                                        修改</a>
                                        ----|----
                                        <a href="/admin/tour/delete/{{$v->id}}">
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