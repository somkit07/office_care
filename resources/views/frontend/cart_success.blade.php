<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="cartpage">
        <div class="container-fluid g-0 overflow-hidden">

            <div class="symrighttop">
                <img src="{{ asset('public/frontend/images/half_orangeEllipsetwo.png') }}" alt="">
            </div>

            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                   
                    <div class="col-lg-8 offset-lg-2">
                        <div class="borderbox mb-4">
                            <div class="topichead text-center">
                                <h2>ขอบคุณที่ทำการสั่งซื้อกับทางเรา Office Care</h3>
                                <h5>รหัสออเดอร์ : @if(!empty($order)){{ $order->order_no }}@endif</h5>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6 col-lg-6">ราคาสินค้า</div>
                                <div class="col-6 col-lg-6 text-end">฿ @if(!empty($order)){{ number_format($order->order_sub_total, 0, '.', ',') }}@endif</div>
                                <div class="col-6 col-lg-6">ส่วนลด</div>
                                <div class="col-6 col-lg-6 text-end">@if(!empty($order)){{ number_format($order->order_discount, 0, '.', ',') }}@endif</div>
                                <div class="col-6 col-lg-6">ค่าจัดส่ง</div>
                                <div class="col-6 col-lg-6 text-end">@if(!empty($order)){{ number_format($order->order_shipping, 0, '.', ',') }}@endif</div>
                                <div class="col-6 col-lg-6">ราคารวม</div>
                                <div class="col-6 col-lg-6 text-end"><span class="price">฿ @if(!empty($order)){{ number_format($order->order_total, 0, '.', ',') }}@endif</span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="btngroup">
                                    <a href="{{ url('product_index') }}" class="btn btn-width">เลือปช้อปสินค้าต่อ</a>
                                        
                           
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    @include('frontend/inc_footer')

   
</body>

</html>