@extends('../../layouts.app')

@section('title', 'Promotion')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/promotion/promotion_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="promotion_image_th" id="promotion_image_th"> 
@if(!empty($row) and $row->promotion_image_th != '')
                    <br><img src="{{asset('public/uploads/promotion/'.$row->promotion_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="promotion_image_en" id="promotion_image_en"> 
@if(!empty($row) and $row->promotion_image_en != '')
                    <br><img src="{{asset('public/uploads/promotion/'.$row->promotion_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="promotion_image_ch" id="promotion_image_ch"> 
@if(!empty($row) and $row->promotion_image_ch != '')
                    <br><img src="{{asset('public/uploads/promotion/'.$row->promotion_image_ch)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Link</label>
            <div class="col-md-9">
                <input type="text" name="promotion_link" id="promotion_link" class="form-control" value="@if(!empty($row)) {{$row->promotion_link}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="promotion_id" id="promotion_id" value="{{ @$row->promotion_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_promotion").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
