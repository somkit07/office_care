@extends('../../layouts.app')

@section('title', 'Authen - Department')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/type/type_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="type_name_th" id="type_name_th" class="form-control" value="{{ @$row->type_name_th }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="type_name_en" id="type_name_en" class="form-control" value="{{ @$row->type_name_en }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="type_name_ch" id="type_name_ch" class="form-control" value="{{ @$row->type_name_ch }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="type_id" id="type_id" value="{{ @$row->type_id }}">
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

            $(".sub_menu_3").css("display", "block");

			$(".sub_menu_type").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
