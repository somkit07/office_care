@extends('../../layouts.app')

@section('title', 'Product')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/top_text_menu/top_text_menu_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Top Text Menu(Th)</label>
            <div class="col-md-9">
                <input type="text" name="top_text_menu_name_th" id="top_text_menu_name_th" class="form-control" value="@if(!empty($row)){{ $row->top_text_menu_name_th }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Top Text Menu(En)</label>
            <div class="col-md-9">
                <input type="text" name="top_text_menu_name_en" id="top_text_menu_name_en" class="form-control" value="@if(!empty($row)){{ $row->top_text_menu_name_en }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Top Text Menu(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="top_text_menu_name_ch" id="top_text_menu_name_ch" class="form-control" value="@if(!empty($row)){{ $row->top_text_menu_name_ch }}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="product_id" id="product_id" value="{{ @$row->product_id }}">
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

			$(".top_text_menu").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.product_feature_th.setData('');
            CKEDITOR.instances.product_feature_en.setData('');
            CKEDITOR.instances.product_feature_ch.setData('');

            CKEDITOR.instances.product_addition_th.setData('');
            CKEDITOR.instances.product_addition_en.setData('');
            CKEDITOR.instances.product_addition_ch.setData('');
		}
	</script>
@endsection
