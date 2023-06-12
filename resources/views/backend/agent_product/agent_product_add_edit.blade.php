@extends('../../layouts.app')

@section('title', 'Agent Product')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/agent_product/agent_product_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Agent Product(Th)</label>
            <div class="col-md-9">
                <input type="text" name="agent_product_name_th" id="agent_product_name_th" value="@if(!empty($row)) {{$row->agent_product_name_th}} @endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Agent Product(En)</label>
            <div class="col-md-9">
                <input type="text" name="agent_product_name_en" id="agent_product_name_en" value="@if(!empty($row)) {{$row->agent_product_name_en}} @endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Agent Product(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="agent_product_name_ch" id="agent_product_name_ch" value="@if(!empty($row)) {{$row->agent_product_name_ch}} @endif" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="agent_product_id" id="agent_product_id" value="{{ @$row->agent_product_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

            $(".sub_menu_4").css("display", "block");

            $(".sub_menu_agent_product").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			//CKEDITOR.instances.review_feature_th.setData('');
		}
	</script>
@endsection
