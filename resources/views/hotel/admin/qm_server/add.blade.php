@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/server/doAdd")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <div class="form-group">
                                <label>服务名称</label>
                                <input class="form-control" name="name">
                            </div>
				
                             <div class="form-group">
                                <label>适用人群</label>
                                <input class="form-control" name="on_people" >
                      
                            </div>
                            <div class="form-group">
                                <label>供给时间</label>
                                <input class="form-control" name="time" >
                      
                            </div>
                            <div class="form-group">
                                <label>价格</label>
                                <input class="form-control" name="price" >
                                <p class="help-block">人民币.</p>
                            </div>
                                                  							

                            <div class="form-group">
                                <label>配图</label>
                                <input type="file" name="pic">
                            </div>
                            <div class="form-group">
                                <label>是否已下架</label>
                                <select class="form-control" name="is_onsale">
                                    <option value="1">是</option>
                                    <option value="2">否</option>
                                </select>
                            </div>
                            
                            <button type="submit" class="btn btn-default">添加</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection