@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/category/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{$info->id}}">
                            <div class="form-group">
                                <label>房间类型</label>
                                 <input type="text" name="name" class="form-control" value="{{$info->name}}">
                               
                            </div>
                             
                            <div class="form-group">
                                <label>缩略图</label>
                                <input type="file" name="pic">
                                </div>
                                <div>
                                <img src="{{$info->pic}}" width="100px;">
                                <input type="hidden" name="ifpic" value="{{$info->pic}}">
                            </div>
                            <div>
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>
							</div>
                        </form>
				</div>
             </div>
             </div>
             
@endsection