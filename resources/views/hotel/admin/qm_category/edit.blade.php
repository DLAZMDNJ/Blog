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
                                <select class="form-control" name="name">
                                    <option value="1" 
                                    @if($info->name == 1)
                                    selected
                                    @endif
                                    >大床房</option>
                                    <option value="2"
                                    @if($info->name == 2)
                                    selected
                                    @endif>标准间</option>
                                    <option value="3"
                                    @if($info->name == 3)
                                    selected
                                    @endif>商务房</option>
                                    <option value="4"
                                    @if($info->name == 4)
                                    selected
                                    @endif>套房</option>
                                </select>
                            </div>
                             
                            <div class="form-group">
                                <label>缩略图</label>
                                <input type="file" name="pic">
                                <img src="{{$info->pic}}">
                                <input type="hidden" name="ifpic" value="{{$info->pic}}">
                            </div>
                            
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection