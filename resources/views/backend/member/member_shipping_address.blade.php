@extends('../../layouts.app')

@section('title', 'Member Shipping Address')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/category1/category1_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
@if(!empty($member))
    @foreach($member as $r)
        <legend>Member Shipping Adress <b>Status {{ $r->member_shipping_address_status }}</b></legend>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->member_shipping_address_name_surname }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบอร์โทร</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->member_shipping_address_mobile }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ที่อยู่</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->member_shipping_address_address }}
                @php
                $tumbol = DB::table('subdistricts')
                    ->where('id', '=', $r->tumbol_id)
                    ->first();

                $amphur = DB::table('districts')
                    ->where('id', '=', $r->amphur_id)
                    ->first();

                $province = DB::table('provinces')
                    ->where('id', '=', $r->province_id)
                    ->first();
                @endphp
                @if(!empty($tumbol) and !empty($amphur) and !empty($province))
                    {{ $tumbol->name_in_thai.' '.$amphur->name_in_thai.' '.$province->name_in_thai.' '.$r->member_shipping_address_postcode }}
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Create</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->member_shipping_address_datetime_create }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Update</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->member_shipping_address_datetime_update }}
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="category1_id" id="category1_id" value="{{ @$row->category1_id }}">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div> --}}
    @endforeach
@endif
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
