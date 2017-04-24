@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>图片管理</h2> 
                      
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        
                                        <th>图片</th>
                                        <th>描述</th>
                                        <th>标题1</th>
                                        <th>标题2</th>
                                        <th>标题3</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>         
                                @foreach($list as $v)                     
                                    	<tr>
                                    	
                                    	<td>{{$v->id}}</td>
                                    
                                    	<td><img src="{{$v->pic}}" width="100px;"></td>
                                    	<td>{{$v->description}}</td>
                                    	<td>{{$v->tips1}}</td>
                                    	<td>{{$v->tips2}}</td>
                                    	<td>{{$v->tips3}}</td>                    
                                    	<td>
                                    		<a href="/qm/photo/edit/{{$v->id}}">修改   
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