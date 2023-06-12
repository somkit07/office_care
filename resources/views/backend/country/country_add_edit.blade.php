@extends('../../layouts.app')

@section('title', 'Country (Rate Shipping)')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/country/country_save_update')}}" method="post" enccountry="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Country</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Country(Th)</label>
            <div class="col-md-9">
                <input type="text" name="country_name_th" id="country_name_th" class="form-control" value="{{ @$row->country_name_th }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country(En)</label>
            <div class="col-md-9">
                <input type="text" name="country_name_en" id="country_name_en" class="form-control" value="{{ @$row->country_name_en }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country(Ch)</label>
            <div class="col-md-9">
                <input type="text" name="country_name_ch" id="country_name_ch" class="form-control" value="{{ @$row->country_name_ch }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Delivery Day</label>
            <div class="col-md-9">
                <input type="text" name="country_delivery_day" id="country_delivery_day" class="form-control" value="{{ @$row->country_delivery_day }}" required>
            </div>
        </div>
        <legend>Detail</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (1-2 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_1_2" id="country_rate_normal_1_2" class="form-control" value="{{ @$row->country_rate_normal_1_2 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (3-5 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_3_5" id="country_rate_normal_3_5" class="form-control" value="{{ @$row->country_rate_normal_3_5 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (6-9 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_6_9" id="country_rate_normal_6_9" class="form-control" value="{{ @$row->country_rate_normal_6_9 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (10-29 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_10_29" id="country_rate_normal_10_29" class="form-control" value="{{ @$row->country_rate_normal_10_29 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (30-59 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_30_59" id="country_rate_normal_30_59" class="form-control" value="{{ @$row->country_rate_normal_30_59 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (60-149 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_60_149" id="country_rate_normal_60_149" class="form-control" value="{{ @$row->country_rate_normal_60_149 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (150-499 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_150_499" id="country_rate_normal_150_499" class="form-control" value="{{ @$row->country_rate_normal_150_499 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (500-4999 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_500_4999" id="country_rate_normal_500_4999" class="form-control" value="{{ @$row->country_rate_normal_500_4999 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Normal (5000-10000 ชิ้น)</label>
            <div class="col-md-9">
                <input type="number" name="country_rate_normal_5000_10000" id="country_rate_normal_5000_10000" class="form-control" value="{{ @$row->country_rate_normal_5000_10000 }}" required>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (1-2 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_1_2" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_1_2 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_1_2" id="country_rate_except_1_2" class="form-control" value="{{ @$row->country_rate_except_1_2 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (3-5 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_3_5" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_3_5 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_3_5" id="country_rate_except_3_5" class="form-control" value="{{ @$row->country_rate_except_3_5 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (6-9 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_6_9" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_6_9 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_6_9" id="country_rate_except_6_9" class="form-control" value="{{ @$row->country_rate_except_6_9 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (10-29 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_10_29" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_10_29 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_10_29" id="country_rate_except_10_29" class="form-control" value="{{ @$row->country_rate_except_10_29 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (30-59 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_30_59" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_30_59 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_30_59" id="country_rate_except_30_59" class="form-control" value="{{ @$row->country_rate_except_30_59 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (60-149 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_60_149" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_60_149 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_60_149" id="country_rate_except_60_149" class="form-control" value="{{ @$row->country_rate_except_60_149 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (150-499 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_150_499" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_150_499 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_150_499" id="country_rate_except_150_499" class="form-control" value="{{ @$row->country_rate_except_150_499 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (500-4999 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_500_4999" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_500_4999 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_500_4999" id="country_rate_except_500_4999" class="form-control" value="{{ @$row->country_rate_except_500_4999 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Rate Except (5000-10000 ชิ้น)</label>
            <div class="col-md-2">
                <select name="country_except_product_id_5000_10000" class="form-control">
                    <option value="">Please Select</option>
@if(!empty($product))
    @foreach($product as $r)
                    <option value="{{ $r->product_id }}" @if((!empty($row)) and $row->country_except_product_id_5000_10000 == $r->product_id){{ 'selected' }}@endif>{{ $r->product_name_en }}</option>
    @endforeach
@endif
                </select>
            </div>
            <div class="col-md-7">
                <input type="number" name="country_rate_except_5000_10000" id="country_rate_except_5000_10000" class="form-control" value="{{ @$row->country_rate_except_5000_10000 }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="country_id" id="country_id" value="{{ @$row->country_id }}">
                <button class="btn btn-sm btn-primary m-r-5" country="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" country="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

            $(".sub_menu_4").css("display", "block");

			$(".sub_menu_country").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
