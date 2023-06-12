<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="productpage" class="wrapperPages">
        <div class="symbb">
            <img src="{{ asset('public/frontend/images/half_orangeEllipse.png') }}" alt="">
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-2">
                    <div class="col">
                        <div class="pageontop">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if (!empty($category_txt))
                                        <li class="breadcrumb-item"><a href="{{ url('product_index') }}">
                                                @if (!empty($category_txt))
                                                    {{ $category_txt->category1_name }}
                                                @endif
                                            </a></li>
                                        <li class="breadcrumb-item"><a
                                                href="{{ url('product/' . $category_txt->category2_id) }}">
                                                @if (!empty($category_txt))
                                                    {{ $category_txt->category2_name }}
                                                @endif
                                            </a></li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            @if (!empty($category_txt))
                                                {{ $category_txt->category3_name }}
                                            @endif
                                        </li>
                                    @else
                                        <li class="breadcrumb-item active" aria-current="page">
                                            @if (!empty($brand_row))
                                                {{ $brand_row->brand_name }}
                                            @endif
                                        </li>
                                    @endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="groupfilter">
                        <div class="row mt-4">
                            <div class="col-lg-8 col-xl-9">
                                <div class="row">
                                    <div class="col-lg-3 col-xl-2">
                                        {{-- <select class="form-select" aria-label="Default select example">
                                            <option selected>ราคา</option>
                                            <option value="1">10-500</option>
                                            <option value="2">500-2000</option>
                                            <option value="3">2000-5000</option>
                                        </select> --}}
                                        <div class="accordion-item">
                                            {{-- <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                    ราคา
                                                </button>
                                            </h2>
                                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                <div class="accordion-body">
                                                    <div class="filters">
                                                        <div class="controls">
                                                            <div class="price-range"></div>
                                                            <div class="textinputs">
                                                                <input class="price-min" type="text" value="0" />
                                                                <input class="price-max" type="text" value="@if (!empty($max_price_inc) and $max_price_inc->category3_max_price != 0){{ $max_price_inc->category3_max_price }}@else{{ '10000' }}@endif" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-2">
                                        {{-- <select class="form-select" aria-label="Default select example">
                                            <option selected>แบรนด์</option>
@if (!empty($brand))
    @foreach ($brand as $r)
                                            <option value="{{ $r->brand_id }}">{{ $r->brand_name }}</option>
    @endforeach
@endif
                                        </select> --}}
                                    </div>
                                    <div class="col-lg-3 col-xl-2">
{{-- @if (empty($category_txt))
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>หมวดหมู่</option>
    @if (!empty($category))
        @foreach ($category as $r)
                                            <option value="{{ $r->category1_id }}">{{ $r->category1_name }}</option>
        @endforeach
    @endif
                                        </select>
@endif --}}
                                    </div>
                                </div>
                            </div>
                         
                        </div>
                    </div>
                </div> -->

                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="sortfilterMB">
                        <div class="row">
                            <div class="col-12 mb-3">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#filters">
                                    ตัวกรอง <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="filters" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">ตัวกรอง</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                {{-- <h5>ตัวกรองที่เลือก</h5>
                                                <div class="filterselect">
                                                    <li><a href="#">กระดาษโน๊ต <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                    <li><a href="#">฿0-฿500 <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                </div> --}}
                                                <section id="category_menu_sec">
                                                    <div class="accordion" id="accordionPanelsStayOpenExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseOne"
                                                                    aria-expanded="true"
                                                                    aria-controls="panelsStayOpen-collapseOne">
                                                                    ผลิตภัณฑ์กระดาษ
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseOne"
                                                                class="accordion-collapse collapse show"
                                                                aria-labelledby="panelsStayOpen-headingOne">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        <li><label class="check-container">กระดาษการ์ด
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษความร้อน
                                                                                สลิปกระดาษ <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">กระดาษคาร์บอน
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษต่อเนื่อง
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษถ่ายเอกสาร
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">กระดาษต่อเนื่อง
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">กระดาษโน้ต
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>

                                                                        <li><label
                                                                                class="check-container">กระดาษอิงค์เจ็ท
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>

                                                                        <li><label
                                                                                class="check-container">กระดาษเลเซอร์
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label
                                                                                class="check-container">แผ่นพลาสติกใส
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">อินเด็กซ์
                                                                                <span class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>



                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">

                                                            <h2 class="accordion-header"
                                                                id="panelsStayOpen-headingTwo">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseTwo">
                                                                    ราคา
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseTwo"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingTwo">
                                                                <div class="accordion-body">
                                                                    <div class="price-range-slider">

                                                                        <div id="slider-range" class="range-bar">
                                                                        </div>
                                                                        <p class="range-value">
                                                                            <input type="text" id="amount"
                                                                                readonly>
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header"
                                                                id="panelsStayOpen-headingThree">
                                                                <button class="accordion-button collapsed"
                                                                    type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseThree">
                                                                    แบรนด์
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseThree"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingThree">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        @if (!empty($brand))
                                                                            @foreach ($brand as $r)
                                                                                @php
                                                                                    $product = DB::table('product')
                                                                                        ->where('brand_id', '=', $r->brand_id)
                                                                                        ->get();
                                                                                @endphp
                                                                                <li><label
                                                                                        class="check-container">{{ $r->brand_name }}
                                                                                        <span
                                                                                            class="count">({{ count($product) }})</span>
                                                                                        <input type="checkbox">ss
                                                                                        <span class="checkmark"></span>
                                                                                    </label></li>
                                                                            @endforeach
                                                                        @endif
                                                                        {{-- <li><label class="check-container">Brother <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">Sharp <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li>
                                                                        <li><label class="check-container">EPSON <span
                                                                                    class="count">(35)</span>
                                                                                <input type="checkbox">
                                                                                <span class="checkmark"></span>
                                                                            </label></li> --}}
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">

                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#category">
                                    ราคา <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="category" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">หมวดหมู่</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body secmenu">
                                                <ul class="menu">

                                                    <li><a href="#">วัสดุสำนักงาน</a></li>
                                                    <li><a href="#">ไอทีและอิเล็คทรอนิกซ์</a>
                                                    </li>
                                                    <li><a href="#">เฟอร์นิเจอร์สำนักงาน</a></li>
                                                    <li><a href="#">วัสดุงานครัว</a></li>

                                                </ul>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#sort">
                                    เรียงตาม <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="sort" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">เรียงตาม</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body secmenu">
                                                <ul class="menu">
                                                    <li><label class="check-container">ราคาต่ำสุด-สูงสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                    <li><label class="check-container">ราคาสูงสุด-ต่ำสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                    <li><label class="check-container">ใหม่ล่าสุด
                                                            <input type="checkbox">
                                                            <span class="checkmark"></span>
                                                        </label></li>
                                                </ul>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="listtag owl-carousel owl-theme">
                            {{-- @if (!empty($keyword))
    @foreach ($keyword as $r)
                            <div class="item">
                                <a href="#">{{ $r->keyword_product_keyword }}</a>
                            </div>
    @endforeach
@endif  --}}
                            {{-- <div class="item"><a href="#">ปากกาสี</a></div>
                            <div class="item"><a href="#">เครื่องปริ้น</a></div>
                            <div class="item"><a href="#">ดินสอกด</a></div>
                            <div class="item"><a href="#">กระดาษถ่ายเอกสาร</a></div>
                            <div class="item"><a href="#">แฟ้ม</a></div>
                            <div class="item"><a href="#">สมุดโน้ต</a></div>
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div>
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div> --}}
                        </div>
                    </div>
                </div>
                <div class="row mt-3 mb-5">
                    <div class="col-lg-3">
                        @include('frontend.inc_sideproduct_sec')
                    </div>
                    <div class="col-lg-9 pt-0 p-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="topichead">
                                    @if (!empty($category_txt))
                                        {{ $category_txt->category3_name }}
                                    @elseif(!empty($brand_row))
                                        {{ $brand_row->brand_name }}
                                    @endif
                                    <input type="hidden" id="category3_id"
                                        value="{{ $category_txt->category3_id }}">
                                    <div>แสดงสินค้า <span class="span_no1">
                                            @if (!empty($no_show_product1))
                                                {{ $no_show_product1 }}@else{{ '0' }}
                                            @endif
                                        </span>-<span class="span_no2">
                                            @if (!empty($no_show_product2))
                                                {{ $no_show_product2 }}@else{{ '0' }}
                                            @endif
                                        </span> จาก <span class="span_total">
                                            @if (empty($product_all))
                                                {{ '0' }}@else{{ count($product_all) }}
                                            @endif
                                        </span></div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <div class="sortfilter">
                                        <select class="form-select" aria-label="Default select example"
                                            onchange="changeOrder(this.value);">
                                            <option value="">เรียงตาม</option>
                                            <option value="price_asc">ราคาต่ำสุด-สูงสุด</option>
                                            <option value="price_desc">ราคาสูงสุด-ต่ำสุด</option>
                                            <option value="id_desc">ใหม่ล่าสุด</option>
                                            <option value="id_asc">เรียงตามเดิม</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- product pc -->
                        <div class="row mt-3 div_product_ajax">
                            {{-- @php
dd($product_show);
@endphp --}}
                            @if (!empty($product_show))
                                @foreach ($product_show as $r)
                                    @php
                                        $wishlist = DB::table('wishlist')
                                            ->where('member_id', '=', Session::get('member_id'))
                                            ->where('product_id', '=', $r->product_id)
                                            ->first();
                                    @endphp
                                    <div class="col-12 col-md-6 col-lg-3">
                                        <div class="productgroup">
                                            <div class="productpic">
                                                <a href="{{ url('product_detail/' . $r->product_id) }}"><img
                                                        src="{{ asset('public/uploads/product/' . $r->product_image) }}"
                                                        alt="">
                                                </a>
                                                <a href="javascript:insertWishlist({{ $r->product_id }});"
                                                    class="wishlist wishlist_{{ $r->product_id }} @if (!empty($wishlist)) {{ 'active' }} @endif"><i
                                                        class="fi fi-rr-heart"></i></a>
                                            </div>

                                            <div class="contentProduct pt-3">
                                                <a href="javascript:void(0);" class="btn btn-cart" rel=""
                                                    onclick="insertCart('{{ $r->product_id }}', 1)"><i
                                                        class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                                <div class="qtyAddcart" style="display:none;">
                                                    <div class="qty_group_cart">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button id="qty-minus" type="button"
                                                                    class="btn btn-default btn-number"
                                                                    data-type="minus"
                                                                    data-field="quant[<?php echo $r->product_id; ?>]"
                                                                    rel="{{ $r->product_id }}">
                                                                    <i class="fi fi-rr-minus"></i>
                                                                </button>
                                                            </span>
                                                            <input id="CC-prodDetails-quantity_{{ $r->product_id }}"
                                                                type="text" name="quant[<?php echo $r->product_id; ?>]"
                                                                class="form-control input-number qty_{{ $r->product_id }}"
                                                                value="1" min="0" max="100"
                                                                rel="{{ $r->product_id }}" />
                                                            <span class="input-group-btn">
                                                                <button id="qty-plus" type="button"
                                                                    class="btn btn-default btn-number"
                                                                    data-type="plus"
                                                                    data-field="quant[<?php echo $r->product_id; ?>]"
                                                                    rel="{{ $r->product_id }}">
                                                                    <i class="fi fi-rr-plus"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($r->product_before_discount != $r->product_price)
                                                    <div class="pt-3 price">
                                                        ฿ {{ number_format($r->product_price, 2) }}
                                                        {!! checkPrice($r->product_before_discount, $r->product_price) !!}
                                                    </div>
                                                @else
                                                    <div class="pt-3 priceoriginal">
                                                        ฿ {{ number_format($r->product_price, 2) }}
                                                    </div>
                                                @endif
                                                <a href="{{ url('product_detail/' . $r->product_id) }}"
                                                    class="prddetails">
                                                    {{ $r->product_name }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col">
                                <div class="pagenumber">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            {{ $product_show->links() }}
                                            {{-- <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="bi bi-chevron-left"></i>
                                                </a>
                                            </li>
                                            <li class="page-item  active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>



            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

    <script>
        $(document).ready(function() {

            $('.listtag').owlCarousel({
                loop: false,
                margin: 10,
                dots: false,
                nav: true,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">',
                    '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'
                ],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: false,

                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    },
                    1300: {
                        items: 10
                    }

                }
            })

        });

        function insertWishlist(product_id) {
            $.post('{{ url('ajaxInsertWishlist') }}', {
                product_id: product_id,
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                $(".wishlist_" + product_id).addClass('active');

                alert(data);
            });
        }
    </script>

    <script>
        function insertCart(product_id, qty) {
            var product_id_ = product_id;

            // alert(product_id_);
            // alert(qty);

            $.post('{{ url('ajaxInsertCart') }}', {
                product_id: product_id_,
                qty: qty,
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $("#topcart_desktop").attr("rel", data_split[0]);
                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);

                //window.location.href = '{{ url('cart') }}';
            });
        }

        function minus(product_id, qty) {
            // alert(product_id);
            // alert(qty);

            $.post('{{ url('ajaxUpdateCartProduct') }}', {
                product_id: product_id,
                qty: qty,
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                //$(".remove_cart_" + rawId).hide();

                var data_split = data.split('!@#$%^&*()_+');

                $("#topcart_desktop").attr("rel", data_split[0]);
                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        function removeCart(product_id) {
            $.post('{{ url('ajaxDeleteCartProduct') }}', {
                product_id: product_id,
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                //$(".remove_cart_" + rawId).hide();

                var data_split = data.split('!@#$%^&*()_+');

                $("#topcart_desktop").attr("rel", data_split[0]);
                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        function cart() {
            // e.preventDefault();
            fieldName = $(this).attr('data-field');
            type = $(this).attr('data-type');
            var input = $("input[name='" + fieldName + "']");
            var currentVal = parseInt(input.val());
            if (!isNaN(currentVal)) {
                if (type == 'minus') {
                    if (currentVal > input.attr('min')) {
                        input.val(currentVal - 1).change();
                    }
                    if (parseInt(input.val()) < input.attr('min')) {
                        $(this).attr('disabled', true);
                    }
                    // var product_id = $(this).attr('rel');
                    // var qty = input.val();

                    // minus(product_id, qty);

                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }

                    // var qty = input.val();
                    // var product_id = $(this).attr('rel');
                    // alert(product_id);
                    // insertCart(product_id, 1);
                }
            } else {
                input.val(0);
            }
        }

        $(document).ready(function() {
            $("body").on("click", ".btn-cart", function(e) {

                // e.preventDefault();
                var product_id = $(this).attr('rel');
                $(this).hide();
                $(this).parent().find(".qtyAddcart").show();
                $(this).parent().find(".input-number").val(1);

                return false;
            });

            $(document).on('click', '.btn-number', function(e) {
                e.preventDefault();

                fieldName = $(this).attr('data-field');
                type = $(this).attr('data-type');
                var input = $("input[name='" + fieldName + "']");
                var currentVal = parseInt(input.val());
                if (!isNaN(currentVal)) {
                    if (type == 'minus') {
                        if (currentVal > input.attr('min')) {
                            input.val(currentVal - 1).change();
                        }
                        if (parseInt(input.val()) < input.attr('min')) {
                            $(this).attr('disabled', true);
                        }
                        // var product_id = $(this).attr('rel');
                        // var qty = input.val();

                        // minus(product_id, qty);

                    } else if (type == 'plus') {
                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                        // var qty = input.val();
                        // var product_id = $(this).attr('rel');
                        // alert(product_id);
                        // insertCart(product_id, 1);
                    }
                } else {
                    input.val(0);
                }
            });

            // Frod----
            // $('.btn-number').click(function (e) {
            //     e.preventDefault();

            //     fieldName = $(this).attr('data-field');
            //     alert(fieldName);
            //     type = $(this).attr('data-type');
            //     var input = $("input[name='" + fieldName + "']");
            //     var currentVal = parseInt(input.val());
            //     if (!isNaN(currentVal)) {
            //         if (type == 'minus') {
            //             if (currentVal > input.attr('min')) {
            //                 input.val(currentVal - 1).change();
            //             }
            //             if (parseInt(input.val()) < input.attr('min')) {
            //                 $(this).attr('disabled', true);
            //             }
            //             // var product_id = $(this).attr('rel');
            //             // var qty = input.val();

            //             // minus(product_id, qty);

            //         } else if (type == 'plus') {
            //             if (currentVal < input.attr('max')) {
            //                 input.val(currentVal + 1).change();
            //             }
            //             if (parseInt(input.val()) == input.attr('max')) {
            //                 $(this).attr('disabled', true);
            //             }

            //             // var qty = input.val();
            //             // var product_id = $(this).attr('rel');
            //             // alert(product_id);
            //             // insertCart(product_id, 1);
            //         }
            //     } else {
            //         input.val(0);
            //     }
            // });
            // Frod----

            // $('.input-number').change(function () {
            $(document).on('change', '.input-number', function(e) {
                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());
                name = $(this).attr('name');
                product_id = $(this).attr('rel');

                if (valueCurrent >= minValue) {
                    $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled');
                } else {
                    alert('Sorry, the minimum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                if (valueCurrent <= maxValue) {
                    $(".btn-number[data-type='plus'][data-field='" + name + "']").removeAttr('disabled')
                } else {
                    alert('Sorry, the maximum value was reached');
                    $(this).val($(this).data('oldValue'));
                }
                // console.log(valueCurrent);

                minus(product_id, $(".qty_" + product_id).val());

                if (valueCurrent <= 0) {
                    $(this).parents(".contentProduct").find(".btn-cart").show();;
                    $(this).parents(".contentProduct").find(".qtyAddcart").hide();
                }
            });
        });
    </script>

</body>

</html>
