@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>餐饮种类管理</h2> 
                        <h4><a href="/qm/foodcategory/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>餐饮种类</th>
                                         <th>缩略图</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>      
                                		@foreach($list as $v)                        
                                    	<tr>
                                    	<td>{{$v->id}}</td>
                                    	<td>{{$v->name}}</td>
                                    	<td><img src="{{$v->pic}}" width="100px;"></td>                                
                                    	<td>
                                    		<a href="/qm/foodcategory/edit/{{$v->id}}">修改</a>----|----<a href="/qm/foodcategory/delete/{{$v->id}}">删除</a>     
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