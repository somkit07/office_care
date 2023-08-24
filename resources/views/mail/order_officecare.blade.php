@if(!empty($order))

<table width="600">
    <tr>
        <th width="200" align="left">Order No</th>
        <td>{{ $order->order_no}}</td>
    </tr>
    <tr>
        <th align="left">Name Surname</th>
        <td>{{ $order->order_shipping_address_name_surname}}</td>
    </tr>
    <tr>
        <th align="left">Tel</th>
        <td>{{ $order->order_shipping_address_mobile}}</td>
    </tr>
    <tr>
        <th align="left">Company</th>
        <td>{{ $order->order_shipping_address_company}}</td>
    </tr>
    <tr>
        <th align="left">Address</th>
        <td>
@php
$tumbol = DB::table('subdistricts')
    ->where('id', '=', $order->tumbol_id)
    ->first();

$amphur = DB::table('districts')
    ->where('id', '=', $order->amphur_id)
    ->first();

$province = DB::table('districts')
    ->where('id', '=', $order->province_id)
    ->first();

@endphp
            {{ $order->order_shipping_address_address}}
            {{ $tumbol->name_in_thai}} {{ $amphur->name_in_thai}} {{ $province->name_in_thai}} {{ $order->order_shipping_address_postcode }}
        </td>
    </tr>
    <tr>
        <th align="left">Datetime Create</th>
        <td>{{ $order->order_datetime_create}}</td>
    </tr>
</table>

<table width="100%">
    <tr>
        <th>No</th>
        <th>Product</th>
        <th>Image</th>
        <th>Color</th>
        <th>Qty</th>
        <th>Price</th>
        <th>Total</th>
    </tr>
    @if(!empty($order_detail))
        @php
        $i = 1;
        @endphp
        @foreach($order_detail as $r)
    <tr>
        <td>{{ $i }}</td>
        <td>{{ $r->order_detail_name }}</td>
        <td><img src="{{ asset('public/uploads/product/'.$r->order_detail_image) }}" width="150"></td>
        <td>{{ $r->order_detail_color }}</td>
        <td>{{ $r->order_detail_qty }}</td>
        <td>{{ $r->order_detail_price }}</td>
        <td>{{ $r->order_detail_qty * $r->order_detail_price }}</td>
    </tr>
            @php
            $i++;
            @endphp
        @endforeach
    @endif
    <tr>
        <th align="left" colspan="6">Sub Total</th>
        <td>{{ $order->order_sub_total }}</td>
    </tr>
    <tr>
        <th align="left" colspan="6">Discount</th>
        <td>{{ $order->order_discount }}</td>
    </tr>
    <tr>
        <th align="left" colspan="6">Shipping</th>
        <td>{{ $order->order_shipping }}</td>
    </tr>
    <tr>
        <th align="left" colspan="6">Total</th>
        <td>{{ $order->order_total }}</td>
    </tr>
</table>
@endif