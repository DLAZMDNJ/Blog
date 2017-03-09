@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>日志管理</h2> 
                       <h4><a href="/admin/message/add">新增</a></h4>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>操作人姓名</th>
                                        <th>操作者ID</th>
                                        <th>操作者IP</th>
                                        <th>进行的操作</th>
                                    </tr>
                                </thead>
                                <tbody>                              
        
                                    	<tr>
                                        	<td>王二蛋</td>
                                        	<td>12</td>
                                        	<td>1.1.1.1</td>
                                        	<td>登入平台</td>                              
                                        </tr>	
     
                                  

                                </tbody>
                            </table>
                        </div>
                    </div>          
                </div>
			</div>
		</div>


@endsection