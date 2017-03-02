@extends('admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
				<div class="row">
                    <div class="col-lg-12">
                        <h2>兴趣管理</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>编号</th>
                                        <th>名称</th>
                                        <th>图标</th>
                                        <th>描述</th>
                                        <th>操作</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>/index.html</td>
                                        <td>1265</td>
                                        <td>32.3%</td>
                                        <td>$321.33</td>
                                        <td>
                                        <a href="">
                                        修改</a>
                                        --|
                                        <a href="">
                                        删除</a>
                                        --|
                                        <a href="">
                                        查看</a>
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