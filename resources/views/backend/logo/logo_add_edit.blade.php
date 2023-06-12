@extends('../../layouts.app')

@section('title', 'Logo')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/logo/logo_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="logo_image_th" id="logo_image_th"> Recommend 141 x 143
@if(!empty($row) and $row->logo_image_th != '') 
                    <br><img src="{{asset('public/uploads/logo/'.$row->logo_image_th)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="logo_image_en" id="logo_image_en"> Recommend 141 x 143
@if(!empty($row) and $row->logo_image_en != '')
                    <br><img src="{{asset('public/uploads/logo/'.$row->logo_image_en)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Ch)</label>
            <div class="col-md-9">
                <input type="file" name="logo_image_ch" id="logo_image_ch"> Recommend 141 x 143
@if(!empty($row) and $row->logo_image_ch != '')
                    <br><img src="{{asset('public/uploads/logo/'.$row->logo_image_ch)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Link</label>
            <div class="col-md-9">
                <input type="text" name="logo_link" id="logo_link" class="form-control" value="@if(!empty($row)) {{$row->logo_link}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="logo_id" id="logo_id" value="{{ @$row->logo_id }}">
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

			$(".menu_logo").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
