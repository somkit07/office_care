@extends('../../layouts.app')

@section('title', 'Category 1')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/category1/category1_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="category1_image" id="category1_image" class="form-control"> Recommend 807 x 383 px
@if(!empty($row) and $row->category1_image != '') 
                    <br><img src="{{asset('public/uploads/category1/'.$row->category1_image)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Category 1</label>
            <div class="col-md-9">
                <input type="text" name="category1_name" id="category1_name" class="form-control" value="@if(!empty($row)){{ $row->category1_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">&nbsp;</label>
            <div class="col-md-9">
                <input type="checkbox" name="category1_menu_home" id="category1_menu_home" value="Yes" @if(!empty($row) and $row->category1_menu_home == 'Yes'){{ 'checked' }}@endif> Menu Home
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="category1_id" id="category1_id" value="{{ @$row->category1_id }}">
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

			$(".sub_menu_category1").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
