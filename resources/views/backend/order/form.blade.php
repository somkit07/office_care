@extends('../../layouts.app')

@section('title', 'Order')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/order/order_save_update/'.$order_detail_id)}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">ID</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_name}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Order No</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_no}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Agent ID</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->agent_id}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping Method</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_shipping_method}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Payment Method</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_payment_method}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Bank</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row) and $row->order_detail_payment_bank != ''){{$row->order_detail_payment_bank}}@else{{ '-' }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping (QTY >= 150)</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row) and $row->order_detail_qty_more_150 != ''){{$row->order_detail_qty_more_150}}@else{{ '-' }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Company Shipping</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row) and $row->order_detail_company_shipping != ''){{$row->order_detail_company_shipping}}@else{{ '-' }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Sub Total</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{number_format($row->order_detail_sub_total, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Discount</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{number_format($row->order_detail_discount, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{number_format($row->order_detail_shipping, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Total</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{number_format($row->order_detail_total, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Vat 7%</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_vat_7_percent}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Point</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{number_format($row->order_detail_point, 0, '.', ',')}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Create</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_datetime_create}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Create</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_ip_create}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Update</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_datetime_update}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Update</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_ip_update}}@endif
            </div>
        </div>
        <legend>Information Shipping</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_name}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_surname}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telephone</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_telephone}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_email}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_address}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Amphur</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_amphur}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Province</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_province}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_country}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Postal Code</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_postal_code}}@endif
            </div>
        </div>
        <legend>Information Billing</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_name}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_surname}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telephone</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_telephone}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_email}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Address</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_address}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Amphur</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_amphur}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Province</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_province}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Country</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_country}}@endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Postal Code</label>
            <div class="col-md-9" style="margin-top: 6.5px;">
                @if(!empty($row)){{$row->order_detail_billing_postal_code}}@endif
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
                        <th>@if(!empty($row)){{number_format($row->order_detail_sub_total, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif</th>
                    </tr>
                    <tr>
                        <th colspan="4">Shipping</th>
                        <th>@if(!empty($row)){{number_format($row->order_detail_shipping, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif</th>
                    </tr>
                    <tr>
                        <th colspan="4">Discount</th>
                        <th>@if(!empty($row)){{number_format($row->order_detail_discount, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif</th>
                    </tr>
                    <tr>
                        <th colspan="4">Total</th>
                        <th>@if(!empty($row)){{number_format($row->order_detail_total, 2, '.', ',')}}@endif @if(!empty($row)){{ $row->order_detail_currency }}@endif</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Status</label>
            <div class="col-md-9">
                <select name="order_detail_status" id="order_detail_status" class="form-control">
                    <!-- <option value="">Please Select</option> -->
                    <option value="Ordering" @if(!empty($row) and $row->order_detail_status == 'Ordering'){{ 'selected' }}@endif>Ordering</option>
                    <option value="Processing" @if(!empty($row) and $row->order_detail_status == 'Processing'){{ 'selected' }}@endif>Processing</option>
                    <option value="Deliverd" @if(!empty($row) and $row->order_detail_status == 'Deliverd'){{ 'selected' }}@endif>Deliverd</option>
                    <option value="Shipped" @if(!empty($row) and $row->order_detail_status == 'Shipped'){{ 'selected' }}@endif>Shipped</option>
                    <option value="Complete" @if(!empty($row) and $row->order_detail_status == 'Complete'){{ 'selected' }}@endif>Complete</option>
                    <option value="Cancel" @if(!empty($row) and $row->order_detail_status == 'Cancel'){{ 'selected' }}@endif>Cancel</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เลขที่พัสดุ</label>
            <div class="col-md-9">
                <input type="text" name="order_detail_shipping_no" class="form-control" value="@if(!empty($row)){{$row->order_detail_shipping_no}}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ลิงก์การส่งพัสดุ</label>
            <div class="col-md-9">
                <input type="text" name="order_detail_shipping_link" class="form-control" value="@if(!empty($row)){{$row->order_detail_shipping_link}}@endif">
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <input type="hidden" name="order_id" id="order_id" value="{{ @$row->id }}">
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

			$(".menu_order").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
