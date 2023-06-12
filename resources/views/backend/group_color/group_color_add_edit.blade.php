@extends('../../layouts.app')

@section('title', 'Group Color')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/group_color/group_color_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="group_color_image" id="group_color_image" class="form-control"> Recommend 807 x 383 px
@if(!empty($row) and $row->group_color_image != '') 
                    <br><img src="{{asset('public/uploads/group_color/'.$row->group_color_image)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Group Color</label>
            <div class="col-md-9">
                <input type="text" name="group_color_name" id="group_color_name" class="form-control" value="@if(!empty($row)){{ $row->group_color_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="group_color_id" id="group_color_id" value="{{ @$row->group_color_id }}">
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

			$(".sub_menu_2").css("display", "block");

			$(".sub_menu_group_color").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
