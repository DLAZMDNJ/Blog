@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/clean/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                            <div class="form-group" >
                                <label>是否上架</label>
                                <select class="form-control" name="is_onsale" id="box1">
                                    <option value="1" @if($info->is_onsale == 1) selected @endif>是</option>
                                    <option value="0" @if($info->is_onsale == 0) selected @endif>否</option>
                                </select>
                            </div>
                            <input type="hidden" name="hid" value="{{$info->hid}}">
                            
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection