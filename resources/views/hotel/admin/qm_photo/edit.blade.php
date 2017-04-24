@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/photo/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                     
				
                             <div class="form-group">
                                <label>图片描述</label>
                                <input class="form-control" name="description"  value="{{$info->description}}">
                            </div>
                            <div class="form-group">
                                <label>标题1</label>
                                <input class="form-control" name="tips1"  value="{{$info->tips1}}">
                            </div>
                            <div class="form-group">
                                <label>标题2</label>
                                <input class="form-control" name="tips2"  value="{{$info->tips2}}">
                            </div>
                            <div class="form-group">
                                <label>标题3</label>
                                <input class="form-control" name="tips3"  value="{{$info->tips3}}">
                            </div>
                            
                                                  							

                            <div class="form-group">
                                <label>图片</label>
                                <input type="file" name="pic">
                            </div>
                            <div>
                            <img src="{{$info->pic}}" width="100px;">
                            </div>
                            <input type="hidden" name="ifpic" value="{{$info->pic}}">
                            
                            
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection