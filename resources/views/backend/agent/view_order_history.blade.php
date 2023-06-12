@extends('../../layouts.app')

@section('title', 'Order')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    @if(!empty($order_detail))
        @foreach($order_detail as $r)
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">ID</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_name}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Order No</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_no}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping Method</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_shipping_method}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Payment Method</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_payment_method}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Bank</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_payment_bank}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Sub Total</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{number_format($r->order_detail_sub_total, 2, '.', ',')}} {{ $r->order_detail_currency }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Discount</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{number_format($r->order_detail_discount, 2, '.', ',')}} {{ $r->order_detail_currency }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{number_format($r->order_detail_shipping, 2, '.', ',')}} {{ $r->order_detail_currency }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Total</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{number_format($r->order_detail_total, 2, '.', ',')}} {{ $r->order_detail_currency }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Point</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_point}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Create</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_datetime_create}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Create</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_ip_create}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Update</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
               {{$r->order_detail_datetime_update}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Update</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_ip_update}}
            </div>
        </div>
        <legend>Information Shipping</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_name}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_surname}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telephone</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_telephone}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_email}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_address}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Amphur</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_amphur}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Province</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_province}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_country}}
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Postal Code</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_postal_code}}
            </div>
        </div>
        <legend>Information Billing</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_name}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_surname}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telephone</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_telephone}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_email}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_address}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Amphur</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_amphur}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Province</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_province}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_country}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Postal Code</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                {{$r->order_detail_billing_postal_code}}&nbsp;
            </div>
        </div>
        <div class="form-group">
            <table id="data-table" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
            @php
            $order = DB::table('lv_order')
                ->where('order_detail_id', '=', $r->order_detail_id)
                ->orderBy('order_id', 'asc')
                ->get();
            @endphp
            @if(!empty($order))
                @foreach($order as $o)
                    <tr>
                        <td><img src="{{ asset('public/uploads/product/'.$o->order_image) }}" width="150"></td>
                        <td>{{ $o->order_name }}</td>
                        <td>{{ $o->order_qty }}</td>
                        <td>{{ number_format($o->order_price, 2, '.', ',') }}</td>
                        <td>{{ number_format($o->order_price * $o->order_qty, 2, '.', ',') }}</td>
                    </tr>
                @endforeach
            @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="4">Sub Total</th>
                        <th>{{number_format($r->order_detail_sub_total, 2, '.', ',')}}</th>
                    </tr>
                    <tr>
                        <th colspan="4">Shipping</th>
                        <th>{{number_format($r->order_detail_shipping, 2, '.', ',')}}</th>
                    </tr>
                    <tr>
                        <th colspan="4">Discount</th>
                        <th>{{number_format($r->order_detail_discount, 2, '.', ',')}}</th>
                    </tr>
                    <tr>
                        <th colspan="4">Total</th>
                        <th>{{number_format($r->order_detail_total, 2, '.', ',')}}</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <hr style="border: 1px solid blue;">
        @endforeach
    @else
        <h1 align="center">Data Not Found</h1>
    @endif
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

            $(".sub_menu_4").css('display', 'block');
			$(".sub_menu_order_history").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
