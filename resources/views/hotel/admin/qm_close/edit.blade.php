@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/close/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                            <div class="form-group" >
                                <label>是否保洁</label>
                                <select class="form-control" name="is_clean" id="box1">
                                    <option value="1" @if($info->is_clean == 1) selected @endif>是</option>
                                    <option value="0" @if($info->is_clean == 0) selected @endif>否</option>
                                </select>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection