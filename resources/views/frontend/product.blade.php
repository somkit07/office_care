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
        <div class="container-fluid g-0">
            <div class="wrapper_pad">
                <div class="row mt-2">
                    <div class="col">
                        <div class="pageontop">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    @if (!empty($category_txt))
                                        <li class="breadcrumb-item"><a
                                                href="{{ url('product_index') }}">{{ $category_txt->category1_name }}</a>
                                        </li>
                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ $category_txt->category2_name }}</li>
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
                                    {{-- <div class="col-lg-3 col-xl-2">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
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
                                                                <input class="price-max" type="text" value="@if (!empty($max_price_inc) and $max_price_inc->category2_max_price != 0){{ $max_price_inc->category2_max_price }}@else{{ '10000' }}@endif" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-xl-2">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="">แบรนด์</option>
@if (!empty($brand))
    @foreach ($brand as $r)
                                            <option value="{{ $r->brand_id }}">{{ $r->brand_name }}</option>
    @endforeach
@endif
                                        </select>
                                    </div>
                                    <div class="col-lg-3 col-xl-2">

                                    </div> --}}
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
                                                {{-- <h5>ตัวกรองที่เลือก</h5> --}}
                                                {{-- <div class="filterselect">
                                                    <li><a href="#">กระดาษโน๊ต <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                    <li><a href="#">฿0-฿500 <span><i
                                                                    class="fi fi-rr-cross-small"></i></span></a></li>
                                                </div> --}}
                                                <section id="category_menu_sec">
                                                    <h2>ตัวกรองที่เลือก
                                                        <button class="btn text-right refresh" type="button">Clear all</button>
                                                    </h2>
                                                    <div class="filterselect">
                                                        {{-- <li><a href="#">กระดาษโน๊ต <span><i class="fi fi-rr-cross-small"></i></span></a></li>
                                                        <li><a href="#">฿0-฿500 <span><i class="fi fi-rr-cross-small"></i></span></a></li> --}}
                                                    </div>
                                                
                                                    <div class="accordion" id="accordionExample">
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    @if (!empty($category_txt))
                                                                        {{ $category_txt->category2_name }}
                                                                    @endif
                                                                </button>
                                                            </h2>
                                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        @php
                                                                            $category_txt_inc = DB::table('category1')
                                                                                ->join('category2', 'category1.category1_id', '=', 'category2.category1_id')
                                                                                ->join('category3', 'category2.category2_id', '=', 'category3.category2_id')
                                                                                ->where('category2.category2_id', '=', $category2_id)
                                                                                ->first();
                                                                            
                                                                            if (!empty($category_txt_inc)) {
                                                                                $category3 = DB::table('category3')
                                                                                    ->where('category2_id', '=', $category_txt_inc->category2_id)
                                                                                    ->get();
                                                                            }
                                                                           
                                                                        @endphp
                                                                        @if (!empty($category3))
                                                                            @foreach ($category3 as $r_inc)
                                                                                @php
                                                                                    $product = DB::table('product')
                                                                                        ->where('product.category3_id', '=', $r_inc->category3_id)
                                                                                        ->get();
                                                                                @endphp
                                                
                                                                                @if (count($product) > 0)
                                                                                    {{-- <li><a href="{{ url('product_sub/' . $r_inc->category3_id) }}">{{ $r_inc->category3_name }}
                                                                                            <span>({{ count($product) }})</span></a></li> --}}
                                                
                                                                                    <li id="count-category_pro_index{{ $r_inc->category3_id }}" style="display: block;"><label class="check-container">{{ $r_inc->category3_name }} <span class="count"
                                                                                                id="show-count-category_index{{ $r_inc->category3_id }}">({{ count($product) }})</span>
                                                                                            <input type="checkbox" class="product_sub"
                                                                                                id="product_sub{{ $r_inc->category3_id }}"
                                                                                                value="{{ $r_inc->category3_id }}">
                                                                                            <span class="checkmark"></span>
                                                                                        </label></li>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                
                                                
                                                                        {{-- <li><a href="#">กระดาษความร้อน สลิปกระดาษ <span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษคาร์บอน <span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษต่อเนื่อง <span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษถ่ายเอกสาร <span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษโน้ต <span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษอิงค์เจ็ท<span>(35)</span></a></li>
                                                                        <li><a href="#">กระดาษเลเซอร์<span>(35)</span></a></li> --}}
                                                
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
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
                                                                                <input class="price-max" type="text"
                                                                                    value="@if (!empty($max_price_inc) and $max_price_inc->category2_max_price != 0) {{ $max_price_inc->category2_max_price }}@else{{ '10000' }} @endif" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                                                    aria-controls="panelsStayOpen-collapseThree">
                                                                    แบรนด์
                                                                </button>
                                                            </h2>
                                                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                                                aria-labelledby="panelsStayOpen-headingThree">
                                                                <div class="accordion-body">
                                                                    <ul class="menu">
                                                                        @php
                                                                            $brand_inc = DB::table('brand')
                                                                                ->join('product', 'brand.brand_id', '=', 'product.brand_id')
                                                                                ->join('category3', 'product.category3_id', '=', 'category3.category3_id')
                                                                                ->where('category3.category2_id', '=', $category2_id)
                                                                                ->orderBy('product.brand_id', 'asc')
                                                                                ->groupBy('brand.brand_id')
                                                                                ->skip(0)
                                                                                ->take(4)
                                                                                ->get();
                                                                            
                                                                            $brand_inc2 = DB::table('brand')
                                                                                ->join('product', 'brand.brand_id', '=', 'product.brand_id')
                                                                                ->join('category3', 'product.category3_id', '=', 'category3.category3_id')
                                                                                ->where('category3.category2_id', '=', $category2_id)
                                                                                ->orderBy('product.brand_id', 'asc')
                                                                                ->groupBy('brand.brand_id')
                                                                                ->skip(4)
                                                                                ->take(100)
                                                                                ->get();
                                                                        @endphp
                                                
                                                                        @if (!empty($brand_inc))
                                                                            @foreach ($brand_inc as $r_inc)
                                                                                @php
                                                                                    $product = DB::table('product')
                                                                                        ->where('brand_id', '=', $r_inc->brand_id)
                                                                                        ->join('category3', 'product.category3_id', '=', 'category3.category3_id')
                                                                                        ->where('category3.category2_id', '=', $category2_id)
                                                                                        ->get();
                                                                                    
                                                                                    $count = count($product);
                                                                                @endphp
                                                
                                                                                @if ($count > 0)
                                                                                    <li id="brand_dispayss_index{{ $r_inc->brand_id }}" style="display:block;"><label
                                                                                            class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                                                                id="show-count-b_index{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                                                            <input type="checkbox" class="brand_id" id="brand_id{{ $r_inc->brand_id }}"
                                                                                                value="{{ $r_inc->brand_id }}">
                                                                                            <span class="checkmark"></span>
                                                                                        </label></li>
                                                                                @endif
                                                                            @endforeach
                                                                        @endif
                                                
                                                                        {{-- <li><label class="check-container">Brother <span class="count">(35)</span>
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label></li>
                                                                            <li><label class="check-container">Sharp <span class="count">(35)</span>
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label></li>
                                                                            <li><label class="check-container">EPSON <span class="count">(35)</span>
                                                                                    <input type="checkbox">
                                                                                    <span class="checkmark"></span>
                                                                                </label></li> --}}
                                                                        <div id="morebrands" class="collapse">
                                                                            @if (!empty($brand_inc2))
                                                                                @foreach ($brand_inc2 as $r_inc)
                                                                                    @php
                                                                                        $product = DB::table('product')
                                                                                            ->where('brand_id', '=', $r_inc->brand_id)
                                                                                            ->get();
                                                                                        
                                                                                        $count = count($product);
                                                                                    @endphp
                                                
                                                                                    @if ($count > 0)
                                                                                        <li id="brand_dispayss_index{{ $r_inc->brand_id }}" style="display:block;"><label
                                                                                                class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                                                                    id="show-count-b_index{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                                                                <input type="checkbox" class="brand_id" value="{{ $r_inc->brand_id }}">
                                                                                                <span class="checkmark"></span>
                                                                                            </label></li>
                                                                                    @endif
                                                                                @endforeach
                                                                            @endif
                                                                            {{-- <li><label class="check-container">Brother <span class="count">(35)</span>
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label></li>
                                                                                <li><label class="check-container">Sharp <span class="count">(35)</span>
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label></li>
                                                                                <li><label class="check-container">EPSON <span class="count">(35)</span>
                                                                                        <input type="checkbox">
                                                                                        <span class="checkmark"></span>
                                                                                    </label></li> --}}
                                                                        </div>
                                                
                                                                        <a data-bs-toggle="collapse" data-bs-target="#morebrands" class="morelist">+ ดูเพิ่มเติม</a>
                                                
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                 
                                                            <!-- Feature -->
                                                            @if (!empty($feature_inc))
                                                                @php
                                                                // dd($feature_inc);
                                                                    $i = 0;
                                                                @endphp
                                                                @foreach ($feature_inc as $r_inc)
                                                                    @php
                                                                    //  dd($r_inc->name);
                                                                        $i++;
                                                                    @endphp
                                                                    {{-- 454656 --}}
                                                                    <div class="accordion-item">
                                                                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                                                data-bs-target="#panelsStayOpen-collapse{{ $i }}" aria-expanded="false"
                                                                                aria-controls="panelsStayOpen-collapse{{ $i }}">
                                                                                {{ $r_inc->name }}
                                                                            </button>
                                                                        </h2>
                                                                        <div id="panelsStayOpen-collapse{{ $i }}" class="accordion-collapse collapse"
                                                                            aria-labelledby="panelsStayOpen-heading{{ $i }}">
                                                                            <div class="accordion-body">
                                                                                <ul class="menu">
                                                                                    @php
                                                                                        
                                                                                        $feature_inc_item = DB::table('feature_selections')
                                                                                            ->join('features', 'feature_selections.id', 'features.feature_selection_id')
                                                                                            ->join('product_to_feature', 'product_to_feature.feature_id', 'features.id')
                                                                                            ->join('product', 'product.product_id', '=', 'product_to_feature.product_id')
                                                                                            ->where('features.feature_selection_id', '=', $r_inc->id)
                                                                                            ->where('features.is_active', '=', 1)
                                                                                            ->select(
                                                                                                'features.id as id',
                                                                                                'features.name as name',
                                                                                                'feature_selections.id as feature_selections_id',
                                                                                                'product_to_feature.id as product_to_feature_id',
                                                                                                'product_to_feature.product_id as product_to_feature_product_id',
                                                                                                'product.product_id as product_id',
                                                                                                //DB::raw('COUNT(product.product_id) as product_count')
                                                                                            )
                                                                                            ->groupBy('features.id')
                                                                                            ->get();
                                                                                        
                                                                                        $i_inc = 1;
                                                                                        // dd($feature_inc_item);
                                                                                    @endphp
                                                                                    @if (!empty($feature_inc_item))
                                                                                        @foreach ($feature_inc_item as $r_incitem)
                                                                                            @php
                                                                                                $product_count = DB::table('product')
                                                                                                    ->select('product_to_feature.id')
                                                                                                    ->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                                                                                                    ->where('product_to_feature.feature_id', '=', $r_incitem->id)
                                                                                                    ->get();
                                                                                            @endphp
                                                                                            @if (count($product_count) > 0)
                                                                                                {{-- @if ($count > 0) --}}
                                                                                                <li  id="feature_dispayss_index{{ $r_incitem->id }}" style="display: block;"><label class="check-container">{{ $r_incitem->name }} <span
                                                                                                            class="count"
                                                                                                            id="show-count-f_index{{ $r_incitem->id }}">({{ count($product_count) }})</span>
                                                                                                        <input type="checkbox" class="feature_id"
                                                                                                            id="feature_id{{ $r_incitem->id }}"
                                                                                                            value="{{ $r_incitem->id }}">
                                                                                                        <span class="checkmark"></span>
                                                                                                    </label></li>
                                                                                                {{-- @endif --}}
                                                                                            @endif
                                                                                            @php
                                                                                                $i_inc++;
                                                                                            @endphp
                                                                                        @endforeach
                                                                                    @endif
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            @endif
                                                            <!-- End Feature -->
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
                            {{-- <div class="col-6">
                                <a class="listfilter" data-bs-toggle="modal" data-bs-target="#category">
                                    หมวดหมู่ <span><i class="fi fi-rr-angle-small-down"></i></span>
                                </a>
                                <div class="modal fade" id="category" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog  modal-fullscreen-lg-down">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">หมวดหมู่</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body secmenu">
                                                <ul class="menu">
@if (!empty($category))
    @foreach ($category as $r)
                                                    <li><a href="#">{{ $r->category1_name}}</a></li>
    @endforeach
@endif
                                                </ul>
                                            </div>
                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-width">กรอง</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
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
                <div class="row mt-3">
                    <div class="col">
                        <!-- แก้ตรงนี้ไป -->
                        <div class="listtag owl-carousel owl-theme">
                            {{-- Keyword ใส่จากหลังบ้าน --}}
                            @if (!empty($category2))
                                @foreach ($category2 as $k => $r)
                                    <a href="{{ url('product/' . $r->category2_id) }}">
                                        <div class="item acte @if ($category2_id == $r->category2_id) active @endif" rel="{{ $k }}">
                                            <img src="{{ asset('public/uploads/category2/' . $r->category2_image2) }}"
                                                alt="">
                                            {{ $r->category2_name }}
                                        </div>
                                    </a>
                                @endforeach
                            @endif
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
                            {{-- End Keyword ใส่จากหลังบ้าน --}}
                        </div>
                        <div class="groupBoxswitch" rel="1" style="display:block;">
                            <div class="listtag owl-carousel owl-theme div_category3">

                                @if (!empty($category3))
                                    @foreach ($category3 as $r)
                                        <a href="{{ url('product_sub/' . $r->category3_id) }}">
                                            <div class="item">
                                                <img src="{{ asset('public/uploads/product/' . $r->category3_image) }}"
                                                    alt="">
                                                {{ $r->category3_name }}
                                            </div>
                                        </a>
                                    @endforeach
                                @endif

                                {{-- <div class="item">
                                    <img src="images/category_product/pen_gel.jpg" alt="">
                                    ปากกาเจล</div>
                                <div class="item">
                                    <img src="images/category_product/folder.jpg" alt="">
                                    แฟ้ม</div>
                                <div class="item">
                                    <img src="images/category_product/glue.jpg" alt="">
                                    กาวแท่ง</div>
                                <div class="item">
                                    <img src="images/category_product/print_note.jpg" alt="">
                                    กระดาษถ่ายเอกสาร</div>
                                <div class="item">
                                    <img src="images/category_product/notesbook.jpg" alt="">
                                    สมุดโน้ต</div> --}}
                            </div>
                        </div>
                        <div class="groupBoxswitch" rel="2">
                            <div class="listtag owl-carousel owl-theme">
                                <div class="item">
                                    <img src="images/category_product/paper_note.jpg" alt="">
                                    กระดาษโน้ต
                                </div>
                                <div class="item">
                                    <img src="images/category_product/pen_gel.jpg" alt="">
                                    ปากกาเจล
                                </div>
                                <div class="item">
                                    <img src="images/category_product/folder.jpg" alt="">
                                    แฟ้ม
                                </div>
                                <div class="item">
                                    <img src="images/category_product/glue.jpg" alt="">
                                    กาวแท่ง
                                </div>
                                <div class="item">
                                    <img src="images/category_product/print_note.jpg" alt="">
                                    กระดาษถ่ายเอกสาร
                                </div>
                                <div class="item">
                                    <img src="images/category_product/notesbook.jpg" alt="">
                                    สมุดโน้ต
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-3">
                        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                            @include('frontend/inc_sideproduct_index_sub')

                        </div>

                    </div>
                    <div class="col-lg-9 pt-0 p-3">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="topichead">
                                    @if (!empty($category_txt))
                                        {{ $category_txt->category2_name }}
                                    @endif
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
                        <!-- product pc -->
                        <div class="row mt-3 div_product_ajax">
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
                                                <a href="javascript:insertWishlist('{{ $r->product_id }}');"
                                                    class="wishlist wishlist_{{ $r->product_id }} @if (!empty($wishlist)) {{ 'active' }} @endif"><i
                                                        class="fi fi-rr-heart"></i></a>
                                            </div>

                                            <div class="contentProduct pt-3">
                                                <a href="javascript:void(0);" class="btn btn-cart"
                                                    rel="{{ $r->product_id }}"
                                                    onclick="insertCart('{{ $r->product_id }}', 1);"><i
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
                                                            <input id="CC-prodDetails-quantity" type="text"
                                                                name="quant[<?php echo $r->product_id; ?>]"
                                                                rel="<?php echo $r->product_id; ?>"
                                                                class="form-control input-number qty_{{ $r->product_id }}"
                                                                value="1" min="0" max="100" />
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
@if($r->product_before_discount != $r->product_price)
                                                <div class="pt-3 price">
                                                    ฿ {{ number_format($r->product_price, 2) }} {!! checkPrice($r->product_before_discount, $r->product_price) !!}
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
                                            {{-- <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="bi bi-chevron-left"></i>
                                                </a>
                                            </li> --}}
                                            @if (!empty($product_show))
                                                {{ $product_show->links() }}
                                            @endif
                                            {{-- @if (!empty($page))
    @for ($i = 1; $i <= $page; $i++)
        @php
        $offset = ($i * $perpage) - $perpage;
        @endphp
                                            <li class="page-item @if (empty($_GET['offset']) and $i == '1'){{ 'active' }}@elseif(!empty($offset) and $offset == $i){{ 'active' }}@endif"><a class="page-link" href="{{ url('product/'.$category2_id.'?page='.$page.'&offset='.$offset) }}">{{ $i }}</a></li>
    @endfor
@endif --}}
                                            {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                                            {{-- <li class="page-item">
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
                startPosition: parseInt($('.item.acte.active').attr("rel")),
                loop: false,
                margin: 0,
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
                        items: 5
                    },
                    1000: {
                        items: 10
                    },
                    1300: {
                        items: 10
                    }

                }
            })

            $('.owl-item').on('click', function(event) {
                var $this = $(this);
                var rel = $this.find(".item").attr("rel");
                $('.owl-item').removeClass('current');
                $this.addClass('current');

                $(".groupBoxswitch").hide();
                $(".groupBoxswitch[rel='" + rel + "']").show();
            });

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

        $(document).ready(function() {
            $("body").on("click", ".btn-cart", function(e) {
                // e.preventDefault();
                var product_id = $(this).attr('rel');
                $(this).hide();
                $(this).parent().find(".qtyAddcart").show();
                $(this).parent().find(".input-number").val(1);

                return false;
            });

            // $('.btn-number').click(function (e) {
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
                        var product_id = $(this).attr('rel');
                        var qty = input.val();

                        //alert(qty);
                        minus(product_id, qty);

                        // alert(product_id);
                        // alert(qty);

                    } else if (type == 'plus') {
                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                        // var qty = input.val();
                        var product_id = $(this).attr('rel');

                        // alert(product_id);
                        insertCart(product_id, 1);

                        // alert(product_id);
                    }
                } else {
                    input.val(0);
                }
            });

            // $('.input-number').change(function () {
            $(document).on('change', '.input-number', function() {
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
                console.log(valueCurrent);

                //minus(product_id, $(".qty_" + product_id).val());
                // alert(product_id);
                // alert($(".qty_" + product_id).val());

                if (valueCurrent <= 0) {
                    $(this).parents(".contentProduct").find(".btn-cart").show();;
                    $(this).parents(".contentProduct").find(".qtyAddcart").hide();
                }
            });
        });

        function gotoCategory2($category2_id) {
            $.post('{{ url('ajaxCategory3') }}', {
                category2_id: $category2_id,
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                $(".div_category3").html(data);
            });
        }
    </script>
</body>

</html>
