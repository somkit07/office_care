@extends('../../layouts.app')

@section('title', 'Member Wishlist')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/category1/category1_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
@if(!empty($member))
    @foreach($member as $r)
        <div class="col-md-3">
            <img src="{{ asset('public/uploads/product/'.$r->product_image) }}" width="80%"><br>
            {{ $r->product_name }}
        </div>
    @endforeach
@endif
        {{-- <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="category1_id" id="category1_id" value="{{ @$row->category1_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div> --}}
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

			// $(".sub_menu_2").css("display", "block");

			$(".menu_member").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
