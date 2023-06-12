@extends('../../layouts.app')

@section('title', 'Promocode')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/promocode/promocode_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Code</label>
            <div class="col-md-9">
                <input type="text" name="promocode_code" id="promocode_code" class="form-control" value="@if(!empty($row)) {{$row->promocode_code}} @endif" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Discount</label>
            <div class="col-md-9">
                <input type="number" name="promocode_discount" id="promocode_discount" class="form-control" value="@if(!empty($row)){{$row->promocode_discount}}@endif" step="0.01" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Type</label>
            <div class="col-md-9">
                <select name="promocode_type" id="promocode_type" class="form-control" required>
                    <option value="">Please Select</option>
                    <option value="%" @if(!empty($row) and $row->promocode_type == '%') selected @endif>%</option>
                    <option value="Baht" @if(!empty($row) and $row->promocode_type == 'Baht') selected @endif>Baht</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Begin Date</label>
            <div class="col-md-9">
                <input type="text" name="promocode_date_begin" id="promocode_date_begin" class="form-control" value="@if(!empty($row)) {{$row->promocode_date_begin}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">End Date</label>
            <div class="col-md-9">
                <input type="text" name="promocode_date_end" id="promocode_date_end" class="form-control" value="@if(!empty($row)) {{$row->promocode_date_end}} @endif" required>  
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="promocode_id" id="promocode_id" value="{{ @$row->promocode_id }}">
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
        $("#promocode_date_begin").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#promocode_date_end").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_promocode").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
