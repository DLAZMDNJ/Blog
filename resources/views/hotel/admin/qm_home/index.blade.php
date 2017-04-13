@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>房间管理</h2> 
                        <h4><a href="/qm/home/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>房间类型</th>
                                        <th>房间剩余</th>                               
                                        <th>预定价格</th>
                                        <th>是否已下架</th>
                                        <td>是否已保洁</td>
                                        <td>是否有早餐</td>
                                        <td>操作者</td>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
                                    	<tr>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>
                                    	<td></td>                               
                                    	<td>
                                    		<a href="/qm/user/edit/">修改</a>----|----<a href="/qm/user/delete/">删除</a>----|----<a href="/qm/user/show/">详细信息</a>     
                                        </td>                               
                                        </tr>	
                                   
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>          
                </div>
			</div>
		</div>


@endsection