@extends('../../layouts.app')

@section('title', 'Agent')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/agent/agent_save_update')}}" method="post" encagent="multipart/form-data" class="form-horizontal">
        @csrf
@if(!empty($order_detail))
    @foreach($order_detail as $r)
        <legend>Order No: {{ $r->order_no }}, Datetime Create: {{ $r->order_detail_datetime_create }}, Point: {{ $r->order_detail_point }}, Status: {{ $r->order_detail_status }}, Vat 7%: {{ $r->order_detail_vat_7_percent }}</legend>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Use Point</th>
                </tr>
        @php
        $order = DB::table('lv_order')
            ->where('order_detail_id', '=', $r->order_detail_id)
            ->orderBy('order_id', 'asc')
            ->get();

        $sub_total = 0;
        @endphp
        @if(!empty($order))
            @foreach($order as $o)
                @php
                $price = $o->order_qty * $o->order_price;

                $sub_total += $price;
                @endphp
                <tr>
                    <td><img src="{{ asset('public/uploads/product/'.$o->order_image) }}" width="150"></td>
                    <td>{{ $o->order_name }}</td>
                    <td>{{ $o->order_qty }}</td>
                    <td>{{ $o->order_price }}</td>
                    <td>{{ $price }}</td>
                    <td>{{ $o->order_use_point }}</td>
                </tr>
            @endforeach
        @endif
                <tr>
                    <th colspan="4">Sub Total</th>
                    <td>{{ $r->order_detail_sub_total}}</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="4">Shipping</th>
                    <td>{{ $r->order_detail_shipping}}</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="4">Discount</th>
                    <td>{{ $r->order_detail_discount}}</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <th colspan="4">Total</th>
                    <td>{{ $r->order_detail_total}}</td>
                    <td>&nbsp;</td>
                </tr>
            </table>
        </div>
    @endforeach
@endif
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

            $(".sub_menu_4").css("display", "block");

			$(".sub_menu_agent").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
