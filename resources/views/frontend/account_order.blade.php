<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
@php
$pageName="history"
@endphp
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="memberpage" class="wrapperPages">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5 mb-5">
                    <div class="col-lg-3 position-relative">
                        <div class="topichead mb-3">
                            <h1>บัญชีของฉัน</h1>
                        </div>
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            @include('frontend/inc_sidemember')
                        </div>
                        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                            <a href="{{ url('m_acct') }}" class="linkmb">กลับ</a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="boxacct">
                            <div class="tophead">
                                รายการสั่งซื้อสินค้า
                            </div>
                            <div class="contentacct">
@if(!empty($order))
    @foreach($order as $r)
                                <div class="grouporderhis mb-4">
                                    <div class="bgordernumber">
                                        รหัสออเดอร์ : {{ $r->order_no }}
                                    </div>
        @php
        $order_detail = DB::table('order_detail')
            ->orderBy('order_detail_id', 'asc')
            ->where('order_id', '=', $r->order_id)
            ->get();
        @endphp

        @if(!empty($order_detail))
            @foreach($order_detail as $od)
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('public/uploads/product/'.$od->order_detail_image) }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-lg-8 contentbl">
                                                    {{ $od->order_detail_name }}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-lg-center">
                                            {{ $od->order_detail_qty }}
                                        </div>
                                        <div class="col-lg-3 text-lg-end">
                                            <div class="priceoriginal">
                                                ฿ {{ number_format($od->order_detail_price, 0, '.', ',') }}
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
            @endforeach
        @endif
                                    <div class="summary text-lg-end">
                                        ยอดสั่งซื้อทั้งหมด : <span>฿ {{ number_format($r->order_total, 0, '.', ',') }}</span>
                                    </div>
                                </div>
    @endforeach
@endif
                                {{-- <div class="grouporderhis mb-4">
                                    <div class="bgordernumber">
                                        รหัสออเดอร์ : OFC34234234
                                    </div>
                                    <?php for ($i = 1; $i <= 2; $i++) { ?>
                                    <div class="row mt-3">
                                        <div class="col-lg-6">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <img src="{{ asset('public/frontend/images/product1.png') }}" alt="" class="img-fluid">
                                                </div>
                                                <div class="col-lg-8 contentbl">
                                                    เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                                    Kyocera Ecosys FS6530
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 text-lg-center">
                                            2
                                        </div>
                                        <div class="col-lg-3 text-lg-end">
                                            <div class="priceoriginal">
                                                ฿ 21,500
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="summary text-lg-end">
                                        ยอดสั่งซื้อทั้งหมด : <span>฿ 43,000</span>
                                    </div>
                                    <?php } ?>
                                </div> --}}
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