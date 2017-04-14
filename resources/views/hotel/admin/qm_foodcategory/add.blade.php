@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/foodcategory/doAdd")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label>餐饮种类类型</label>
                                <input type="text" name="name" class="form-control">
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