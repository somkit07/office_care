@extends('../../layouts.app')

@section('title', 'Agent Banner')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/agent_banner/agent_banner_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Th)</label>
            <div class="col-md-9">
                <input type="file" name="agent_banner_image_th" id="agent_banner_image_th" class="form-control">
                Recommend 728 x 468 px
@if(!empty($row) and $row->agent_banner_image_th != '')
                    <br><img src="{{asset('public/uploads/agent/'.$row->agent_banner_image_th)}}" width="150" require>
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(En)</label>
            <div class="col-md-9">
                <input type="file" name="agent_banner_image_en" id="agent_banner_image_en" class="form-control">
                Recommend 728 x 468 px
@if(!empty($row) and $row->agent_banner_image_en != '')
                    <br><img src="{{asset('public/uploads/agent/'.$row->agent_banner_image_en)}}" width="150" require>
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Image(Cn)</label>
            <div class="col-md-9">
                <input type="file" name="agent_banner_image_ch" id="agent_banner_image_ch" class="form-control">
                Recommend 728 x 468 px
@if(!empty($row) and $row->agent_banner_image_ch != '')
                    <br><img src="{{asset('public/uploads/agent/'.$row->agent_banner_image_ch)}}" width="150" require>
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
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

			$(".menu_agent_banner").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
