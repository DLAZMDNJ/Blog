@extends('hotel.admin.layout.layout')

@section('content')
		 <div id="page-wrapper">

            <div class="container-fluid">
	
			<div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="{{asset("/qm/order/doEdit")}}" enctype="multipart/form-data">
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                       <input type="hidden" name="id" value="{{$info->id}}">
                            <div class="form-group" >
                                <label>是否入住</label>
                                <select class="form-control" name="status" id="box1">
                                    <option value="1" @if($info->status == 1) selected @endif>是</option>
                                    <option value="0" @if($info->status == 0) selected @endif>否</option>
                                </select>
                            </div>
                            <div class="form-group" >
                                <label>是否离店</label>
                                <select class="form-control" name="is_out" id="box2" style="display:none;">
                                    <option value="1" @if($info->is_out == 1) selected @endif>是</option>
                                    <option value="0" @if($info->is_out == 0) selected @endif>否</option>
                                </select>
                            </div>
                            <script>
							$("select[name='status']").change(function(){
								var selectedValue=$(this).val();
								if(selectedValue==1){

							        $("#box2").show();

							        
							    }
								if(selectedValue==0){

							        $("#box2").hide();

							        
							    }
								});
							
                            </script>
                            <button type="submit" class="btn btn-default">修改</button>
                            <button type="reset" class="btn btn-default">重置</button>

                        </form>
				</div>
             </div>
             </div>
             
@endsection