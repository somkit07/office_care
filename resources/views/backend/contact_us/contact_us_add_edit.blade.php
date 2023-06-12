@extends('../../layouts.app')

@section('title', 'Contact Us')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/contact_us/contact_us_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Contact Us</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Embed Google Map</label>
            <div class="col-md-9">
                <textarea name="contact_us_embed_google_map" id="contact_us_embed_google_map" class="form-control" rows="4">@if(!empty($row)){{ $row->contact_us_embed_google_map }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="contact_us_id" id="contact_us_id" value="{{ @$row->contact_us_id }}">
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

            $(".sub_menu_3").css("display", "block");

			$(".sub_menu_contact_us").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
