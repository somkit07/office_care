@extends('../../layouts.app')

@section('title', 'Category 2')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/category2/category2_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="category2_image" id="category2_image" class="form-control"> Recommend 333 x 333 px
@if(!empty($row) and $row->category2_image != '') 
                    <br><img src="{{asset('public/uploads/category2/'.$row->category2_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category 1</label>
            <div class="col-md-9">
                <select name="category1_id" id="category1_id" class="form-control" required>
                    <option value="">Please Select</option>
@if(!empty($category1))
    @foreach($category1 as $r)
                    <option value="{{ $r->category1_id }}" @if(!empty($row) and $row->category1_id == $r->category1_id){{ 'selected' }}@endif>{{ $r->category1_name }}</option>
    @endforeach
@endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Category 2</label>
            <div class="col-md-9">
                <input type="text" name="category2_name" id="category2_name" class="form-control" value="@if(!empty($row)){{ $row->category2_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Max Price</label>
            <div class="col-md-9">
                <input type="text" name="category2_max_price" id="category2_max_price" class="form-control" value="@if(!empty($row)){{ $row->category2_max_price }}@endif" required>
                <span style="color: red;">*** ค่า Default 10000</span>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="category2_id" id="category2_id" value="{{ @$row->category2_id }}">
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

			$(".sub_menu_category2").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
