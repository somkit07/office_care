@extends('../../layouts.app')

@section('title', 'Photo')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/product_photo/product_photo_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Photo</label>
            <div class="col-md-9">
                <input type="file" name="product_photo_image[]" id="product_photo_image" multiple="true" class="form-control"> Recommend 434 x 577 px
@if(!empty($rows)) 
    @foreach($rows as $r)
                    <br><img src="{{asset('public/uploads/product/'.$r->product_photo_image)}}" width="150"> <a href="{{ url('backend/product_photo/product_photo_delete/'. $r->product_photo_id.'/'.$r->product_id) }}" onclick="return confirm('Confirm Delete');">Delete</a><br>
    @endforeach
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="product_id" id="product_id" value="{{ $product_id }}">
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

			$(".sub_menu_product").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
