@extends('../../layouts.app')

@section('title', 'รูปภาพหน้าแรก ด้านขวามือ และตรงกลาง')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/image_right_index/image_right_index_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Image</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image Right</label>
            <div class="col-md-9">
                <input type="file" name="image_right_index_image" id="image_right_index_image" class="form-control">
@if(!empty($row) and $row->image_right_index_image != '') 
                    <br><img src="{{asset('public/uploads/image_right_index/'.$row->image_right_index_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image Center</label>
            <div class="col-md-9">
                <input type="file" name="image_right_index_center_image" id="image_right_index_center_image" class="form-control">
@if(!empty($row) and $row->image_right_index_center_image != '') 
                    <br><img src="{{asset('public/uploads/image_right_index/'.$row->image_right_index_center_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="image_right_index_id" id="image_right_index_id" value="{{ @$row->image_right_index_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#news_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_image_right_index").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
