@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/category/doAdd")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label>房间类型</label>
                                <select class="form-control" name="name">
                                    <option value="1">大床房</option>
                                    <option value="2">标准间</option>
                                    <option value="3">商务房</option>
                                    <option value="4">套房</option>
                                </select>
                            </div>
                             
                            <div class="form-group">
                                <label>缩略图</label>
                                <input type="file" name="pic">
                            </div>
                            
                            <button type="submit" class="btn btn-default">提交</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection