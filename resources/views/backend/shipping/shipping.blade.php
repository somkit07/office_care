@extends('../../layouts.app')

@section('title', 'New Activities')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/shipping/shipping_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Image</legend>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="shipping_image" id="shipping_image" class="form-control"> Recommend 807 x 383 px
@if(!empty($row) and $row->shipping_image != '') 
                    <br><img src="{{asset('public/uploads/shipping/'.$row->shipping_image)}}" width="150">
@endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">ยอดรวมราคาสินค้า <=</label>
            <div class="col-md-9">
                <input type="text" name="shipping_condition" id="shipping_condition" class="form-control" value="@if(!empty($row)){{ $row->shipping_condition }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ค่าขนส่ง</label>
            <div class="col-md-9">
                <input type="text" name="shipping_price" id="shipping_price" class="form-control" value="@if(!empty($row)){{ $row->shipping_price }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="shipping_id" id="shipping_id" value="1">
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

			$(".menu_shipping").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
