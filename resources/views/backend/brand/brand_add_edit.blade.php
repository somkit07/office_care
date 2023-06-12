@extends('../../layouts.app')

@section('title', 'Brand')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/brand/brand_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image1</label>
            <div class="col-md-9">
                <input type="file" name="brand_image" id="brand_image" class="form-control"> Recommend 275 x 183 px
@if(!empty($row) and $row->brand_image != '') 
                    <br><img src="{{asset('public/uploads/product/'.$row->brand_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image2</label>
            <div class="col-md-9">
                <input type="file" name="brand_image2" id="brand_image2" class="form-control"> Recommend 120 x 30 px
@if(!empty($row) and $row->brand_image2 != '') 
                    <br><img src="{{asset('public/uploads/product/'.$row->brand_image2)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Brand</label>
            <div class="col-md-9">
                <input type="text" name="brand_name" id="brand_name" class="form-control" value="@if(!empty($row)){{ $row->brand_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="brand_id" id="brand_id" value="{{ @$row->brand_id }}">
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

			$(".sub_menu_brand").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
