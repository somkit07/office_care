@extends('../../layouts.app')

@section('title', 'Member Order')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/category1/category1_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
@if(!empty($member))
    @foreach($member as $r)
        <legend>Order No {{ $r->order_no }}</b></legend>
        <div class="form-group">
            <label class="col-md-3 control-label">ชื่อ-นามสกุล</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_shipping_address_name_surname }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เบอร์โทร</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_shipping_address_mobile }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ที่อยู่</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_shipping_address_address }}
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
                    {{ $tumbol->name_in_thai.' '.$amphur->name_in_thai.' '.$province->name_in_thai.' '.$r->order_shipping_address_postcode }}
                @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Status</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_status }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Tracking No.</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_tracking_no }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Create</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_datetime_create }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Update</label>
            <div class="col-md-9" style="margin-top: 7px;">
                {{ $r->order_datetime_update }}
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>รูปภาพ</th>
                        <th>สินค้า</th>
                        <th>สี</th>
                        <th>Qty</th>
                        <th>ราคา</th>
                        <th>ราคาก่อนลด</th>
                        <th>รวม</th>
                    </tr>
                </thead>
                <tbody>
        @php
        $order_detail = DB::table('order_detail')
            ->where('order_id', '=', $r->order_id)
            ->orderBy('order_detail_id', 'asc')
            ->get();
        @endphp

        @if(!empty($order_detail))
            @php
            $i = 1;
            @endphp
            @foreach($order_detail as $od)
                    <tr>
                        <td>{{ $i }}</td>
                        <td><img src="{{ asset('public/uploads/product/'.$od->order_detail_image) }}" width="150"></td>
                        <td>{{ $od->order_detail_name }}</td>
                        <td>{{ $od->order_detail_color }}</td>
                        <td>{{ $od->order_detail_qty }}</td>
                        <td>{{ $od->order_detail_price }}</td>
                        <td>{{ $od->order_detail_before_discount }}</td>
                        <td>{{ $od->order_detail_qty * $od->order_detail_price }}</td>
                    </tr>
                @php
                $i++;
                @endphp
            @endforeach
        @endif
                    <tr>
                        <td align="center" colspan="7">Sub Total</td>
                        <td>{{ $r->order_sub_total }}</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="7">Discount</td>
                        <td>{{ $r->order_discount }}</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="7">Shipping</td>
                        <td>{{ $r->order_shipping }}</td>
                    </tr>
                    <tr>
                        <td align="center" colspan="7">Total</td>
                        <td>{{ $r->order_total }}</td>
                    </tr>
                </tbody>
            </table>                             
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
