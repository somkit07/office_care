@extends('../../layouts.app')

@section('title', 'New Activities')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/news/news_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="news_promotion_image" id="news_promotion_image" class="form-control"> Recommend 1539 x 781 px
@if(!empty($row) and $row->news_promotion_image != '') 
                    <br><img src="{{asset('public/uploads/news/'.$row->news_promotion_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="news_promotion_name" id="news_promotion_name" class="form-control" value="@if(!empty($row)){{ $row->news_promotion_name }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Date</label>
            <div class="col-md-9">
                <input type="text" name="news_promotion_date" id="news_promotion_date" class="form-control" value="@if(!empty($row)){{ $row->news_promotion_date }}@endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Description</label>
            <div class="col-md-9">
                <textarea name="news_promotion_description" id="news_promotion_description" class="form-control" rows="4" required>@if(!empty($row)){{ $row->news_promotion_description }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail</label>
            <div class="col-md-9">
                <textarea name="news_promotion_detail" id="news_promotion_detail" class="form-control" rows="4" required>@if(!empty($row)){{ $row->news_promotion_detail }}@endif</textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="news_promotion_id" id="news_promotion_id" value="{{ @$row->news_promotion_id }}">
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
        $("#news_promotion_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_news_promotion").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
