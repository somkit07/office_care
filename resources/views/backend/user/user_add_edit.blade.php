@extends('../../layouts.app')

@section('title', 'Authen - User')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/user/user_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Department</label>
            <div class="col-md-9">
                <select name="department_id" id="department_id" class="form-control" required>
                    <option value="">Please Select</option>
    @if(!empty($department))
        @foreach($department as $r)
                    <option value="{{ $r->department_id }}" @if(@$row->department_id == $r->department_id) {{ 'selected' }} @endif>{{ $r->department_name }}</option>
        @endforeach
    @endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9">
                <input type="text" name="user_name" id="user_name" class="form-control" value="{{ @$row->user_name }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9">
                <input type="email" name="user_email" id="user_email" class="form-control" value="{{ @$row->user_email }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Username</label>
            <div class="col-md-9">
                <input type="text" name="user_username" id="user_username" class="form-control" value="{{ @$row->user_name }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-9">
                <input type="text" name="user_password" id="user_password" class="form-control" value="{{ @$row->user_password }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Activated</label>
            <div class="col-md-9">
                <input type="radio" name="user_activated" id="enable" value="1" @if(!empty($row) and $row->user_activated == 1) {{ 'checked' }} @elseif(empty($row)) {{ 'checked' }} @endif> Enable
                <input type="radio" name="user_activated" id="disable" value="0" @if(!empty($row) and $row->user_activated == 0) {{ 'checked' }} @endif> Disable
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="user_id" id="user_id" value="{{ @$row->user_id }}">
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

            $(".sub_menu_1").css("display", "block");

			$(".sub_sub_menu_user").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
