@extends('../../layouts.app')

@section('title', 'Point')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/point2/point_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9">
                <input type="file" name="point_image" id="point_image" class="form-control">Recommended 288 x 310px  
@if(!empty($row) and $row->point_image != '')
                    <br><img src="{{asset('public/uploads/product/'.$row->point_image)}}" width="150">
@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Th)</label>
            <div class="col-md-9">
                <input type="text" name="point_name_th" id="point_name_th" class="form-control" value="@if(!empty($row)){{ $row->point_name_th }}@endif" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(En)</label>
            <div class="col-md-9">
                <input type="text" name="point_name_en" id="point_name_en" class="form-control" value="@if(!empty($row)){{ $row->point_name_en }}@endif" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="point_name_ch" id="point_name_ch" class="form-control" value="@if(!empty($row)){{ $row->point_name_ch }}@endif" required> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Use Point</label>
            <div class="col-md-9">
                <input type="number" name="point_use_point" id="point_use_point" class="form-control" value="@if(!empty($row)){{ $row->point_use_point }}@endif" required> 
            </div>
        </div>
        <legend>Promocode</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Code</label>
            <div class="col-md-9">
                <input type="text" name="promocode_code" id="promocode_code" class="form-control" value="@if(!empty($promocode)){{ $promocode->promocode_code }}@endif"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Discount</label>
            <div class="col-md-9">
                <input type="number" name="promocode_discount" id="promocode_discount" class="form-control" value="@if(!empty($promocode)){{ $promocode->promocode_discount }}@endif"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Type</label>
            <div class="col-md-9">
                <select name="promocode_type" id="promocode_type" class="form-control"> 
                    <option value="">Please Select</option>
                    <option value="%" @if(!empty($promocode) and $promocode->promocode_type == '%'){{ 'selected' }}@endif>%</option>
                    <option value="Baht" @if(!empty($promocode) and $promocode->promocode_type == 'Baht'){{ 'selected' }}@endif>Baht</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Begin Date</label>
            <div class="col-md-9">
                <input type="text" name="promocode_date_begin" id="promocode_date_begin" class="form-control" value="@if(!empty($promocode)){{ $promocode->promocode_date_begin }}@endif"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">End Date</label>
            <div class="col-md-9">
                <input type="text" name="promocode_date_end" id="promocode_date_end" class="form-control" value="@if(!empty($promocode)){{ $promocode->promocode_date_end }}@endif"> 
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="point_id" id="point_id" value="{{ @$row->point_id }}">
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

			$(".point").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $("#promocode_date_begin").datepicker({ dateFormat: 'yy-mm-dd' });
            $("#promocode_date_end").datepicker({ dateFormat: 'yy-mm-dd' });
        });
    </script>
@endsection
