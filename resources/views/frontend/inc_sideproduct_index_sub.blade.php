<style>
    .filters {
        width: 85%;
        margin-left: 20px;
    }

    .filters .ui-slider-handle {
        width: 1.7rem !important;
        height: 1.7rem !important;
        /* top: -1.2rem  !important; */
        border: 4px solid #0167bc !important;
        border-radius: 50%;
        transform: translateX(-0.9rem);
    }

    .filters .ui-slider-handle:focus,
    .filters .ui-slider-handle:active {
        outline: none;
        background: #fff;
    }

    .filters .ui-slider-horizontal .ui-slider-handle {
        margin-left: 0em !important;
        top: -11px !important;
    }


    .controls .price-range {
        border: none;
        background: #bfbfbf;
        border-radius: 50px;
        height: 0.2em;
        margin-top: 20px;
    }

    .controls .price-range .ui-slider-range {
        background: #0167bc;
        border-radius: 50px;
    }

    .textinputs {
        padding: 1.5rem 0;
        margin-bottom: 30px;
    }

    .textinputs input {
        width: 4rem;
        display: block;
        float: left;
    }

    .textinputs input:last-child {
        float: right;
    }

    .refresh {
        float: right;
    }
</style>

<section id="category_menu_sec">
    <h2>ตัวกรองสินค้า
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

                                    <li id="count-category_pro{{ $r_inc->category3_id }}" style="display: block;"><label
                                            class="check-container">{{ $r_inc->category3_name }} <span class="count"
                                                id="show-count-s{{ $r_inc->category3_id }}">({{ count($product) }})</span>
                                            <input type="checkbox" class="product_sub" name="category3_id"
                                                id="product_subs{{ $r_inc->category3_id }}"
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
                                // ->skip(0)
                                // ->take(4)
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
                                    <li id="brand_dispayss{{ $r_inc->brand_id }}" style="display:block;"><label
                                            class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                id="show-count-b{{ $r_inc->brand_id }}">({{ $count }})</span>
                                            <input type="checkbox" class="brand_id" id="brand_ids{{ $r_inc->brand_id }}"
                                                value="{{ $r_inc->brand_id }}">
                                            <span class="checkmark"></span>
                                        </label></li>
                                @endif
                            @endforeach
                        @endif

                      
                        {{-- <div id="morebrands" class="collapse">
                            @if (!empty($brand_inc2))
                                @foreach ($brand_inc2 as $r_inc)
                                    @php
                                        $product = DB::table('product')
                                            ->where('brand_id', '=', $r_inc->brand_id)
                                            ->get();
                                        
                                        $count = count($product);
                                    @endphp

                                    @if ($count > 0)
                                        <li id="brand_dispayss{{ $r_inc->brand_id }}" style="display:block;"><label
                                                class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                    id="show-count-b{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                <input type="checkbox" class="brand_id" value="{{ $r_inc->brand_id }}">
                                                <span class="checkmark"></span>
                                            </label></li>
                                    @endif
                                @endforeach
                            @endif
                           
                        </div> --}}

                        {{-- <a data-bs-toggle="collapse" data-bs-target="#morebrands" class="morelist" id="btn-morelist" style="display:block;">+ ดูเพิ่มเติม</a> --}}

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
                                                <li id="feature_dispayss{{ $r_incitem->id }}" style="display: block;">
                                                    <label class="check-container">{{ $r_incitem->name }} <span
                                                            class="count"
                                                            id="show-count-f{{ $r_incitem->id }}">({{ count($product_count) }})</span>
                                                        <input type="checkbox" class="feature_id"
                                                            id="feature_ids{{ $r_incitem->id }}"
                                                            value="{{ $r_incitem->id }}">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </li>
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

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var order_by = '';
    var page = '';
    var pro_sun = '';

    
    $(".refresh").click(function() {
        window.location.reload();
    });

    var color_id = '';

    function filterProductSub(e) {

        color_id = e;
        // alert(color_id);
        ajaxFilterProduct();
        ajaxGetFilter();
    }

    function fProductcolor() {
        alert('color_id');
        color_id = '';

        ajaxFilterProduct();
        ajaxGetFilter();
    }

    var feature_id = [];
    $(".feature_id").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            feature_id.push(checked);
        } else {
            feature_id.splice($.inArray(checked, feature_id), 1);
        }

        ajaxFilterProduct();
        ajaxGetFilter();

    });

    function Ffeature_id(e) {
        var checked = $(this).data("id");

        // if ($(this).is(':checked')) {
        //     feature_id.push(checked);
        // } else {
            let index = feature_id.indexOf(JSON.stringify(e));
            if (index > -1) { // only splice array when item is found
                feature_id.splice(index, 1); // 2nd parameter means remove one item only
            }
        // }
        document.getElementById("feature_ids" + JSON.stringify(e)).checked = false;

        ajaxFilterProduct();
        ajaxGetFilter();
    }


    var product_sub = [];
    $(".product_sub").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            product_sub.push(checked);
        } else {
            product_sub.splice($.inArray(checked, product_sub), 1);
        }

        ajaxFilterProduct();
        ajaxGetFilter();

    });

    function Fproduct_sub(e) {
        var checked = $(this).data("id");

        console.log(JSON.stringify(e));
        if ($(this).is(':checked')) {
            product_sub.push(checked);
        } else {
            let index = product_sub.indexOf(JSON.stringify(e));
            if (index > -1) { // only splice array when item is found
                product_sub.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
        document.getElementById("product_subs" + JSON.stringify(e)).checked = false;

        ajaxFilterProduct();
        ajaxGetFilter();
    }

    var brand_id = [];
    $(".brand_id").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            brand_id.push(checked);
        } else {
            brand_id.splice($.inArray(checked, brand_id), 1);
        }

        ajaxFilterProduct();
        ajaxGetFilter();

    });

    function Fbrand_id(e) {
        var checked = $(this).data("id");

        if ($(this).is(':checked')) {
            brand_id.push(checked);
        } else {
            let index = brand_id.indexOf(JSON.stringify(e));
            if (index > -1) { // only splice array when item is found
                brand_id.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
        document.getElementById("brand_ids" + JSON.stringify(e)).checked = false;
        ajaxFilterProduct();
        ajaxGetFilter();
    }

    function fprice_range() {
        // alert('15561');
        $(".price-min").val('0'),
            $(".price-max").val('10000'),
            // document.getElementById("feature_id" + JSON.stringify(e)).checked = false;
            ajaxFilterProduct();
        ajaxGetFilter();
    }

    var order_by = '';

    function changeOrder(order_by_) {
        order_by = order_by_;

        ajaxFilterProduct();
        ajaxGetFilter();
    }

    var page = '';

    function filterProduct(page_) {
        page = page_;

        ajaxFilterProduct();
        ajaxGetFilter();

    }

    function ajaxFilterProduct() {
        $.post('{{ url('ajaxFilterProduct') }}', {
            brand_id: brand_id,
            product_sub: product_sub,
            color_id: color_id,
            page: page,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            category2_id: '{{ $category2_id }}',
            "_token": "{{ csrf_token() }}"
        }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $(".div_product_ajax").html(data_split[0]);
            $(".pagination").html(data_split[1]);
            $(".span_no1").html(data_split[2]);
            $(".span_no2").html(data_split[3]);
            $(".span_total").html(data_split[4]);
            pro_sun = $(".pro_sun").val();
            ajaxGetFilterBrandproduct(pro_sun)
        });
    }

    function ajaxGetFilter() {
        $.post('{{ url('ajaxGetFilter') }}', {
            category3_id: product_sub,
            category2_id: '{{ $category2_id }}',
            brand_id: brand_id,
            product_sub: product_sub,
            color_id: color_id,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            page: page,
            "_token": "{{ csrf_token() }}"
        }, function(data) {
            // console.log(data);

            $(".filterselect").html(data);
        });

        // $.post('{{ url('ajaxGetFilterBrandproduct') }}', {
        //     category3_id: $("#category3_id").val(),
        //     category2_id: '{{ $category2_id }}',
        //     brand_id: brand_id,
        //     color_id: color_id,
        //     price_min: $(".price-min").val(),
        //     price_max: $(".price-max").val(),
        //     order_by: order_by,
        //     feature_id: feature_id,
        //     page: page,
        //     "_token": "{{ csrf_token() }}"
        // }, function(data) {

        //     console.log(data);
        //     data.brand.forEach(function(value) {
        //         $("#show-count-b" + value.brand_id).html('(' + value.count + ')');
        //         $("#show-count-b_index" + value.brand_id).html('(' + value.count + ')');

        //         var myEle = document.getElementById("brand_dispayss" + value.brand_id);
        //         if (myEle) {
        //             if (value.count == 0) {
        //                 console.log(value.brand_id);
        //                 document.getElementById("brand_dispayss" + value.brand_id).style.display = 'none';
        //                 document.getElementById("brand_dispayss_index" + value.brand_id).style.display = 'none';

        //             } else {
        //                 document.getElementById("brand_dispayss" + value.brand_id).style.display =
        //                     "block";
        //                     document.getElementById("brand_dispayss_index" + value.brand_id).style.display =
        //                     "block";
        //             }
                    
        //         }

        //     })
        //     // data.color.forEach(function (value) {
        //     //     $("#show-count-color"+value.color_id).html('('+value.count+')');
        //     // })
        //     data.feature.forEach(function(value) {
        //         $("#show-count-f" + value.id).html('(' + value.count + ')');
        //         $("#show-count-f_index" + value.id).html('(' + value.count + ')');
                
        //         var myElefeature = document.getElementById("feature_dispayss" + value.id);
        //         if (myElefeature) {
        //             if (value.count == 0) {
        //                 console.log(value.id);
        //                 document.getElementById("feature_dispayss" + value.id).style.display = 'none';
        //                 document.getElementById("feature_dispayss_index" + value.id).style.display = 'none';

        //             } else {
        //                 document.getElementById("feature_dispayss" + value.id).style.display =
        //                     "block";
        //                     document.getElementById("feature_dispayss_index" + value.id).style.display =
        //                     "block";
        //             }
        //         }
        //     })
            
        //     data.category3.forEach(function(value) {
        //         $("#show-count-s"+ value.category3_id).html('(' + value.count + ')');
        //         // console.log(value.category3_id+'/'+value.count);
        //         $("#show-count-category" + value.category3_id).html('(' + value.count + ')');
        //         $("#show-count-category_index" + value.category3_id).html('(' + value.count + ')');

        //         // if (document.getElementById("show-count-category" + value.category3_id) != null) {
        //         //     document.getElementById("show-count-category" + value.category3_id).innerHTML =
        //         //         '(' + value.count + ')';

        //         //     console.log(document.getElementById("show-count-category" + value.category3_id)
        //         //         .innerHTML);
        //         // }
        //         var myElecategory = document.getElementById("count-category_pro" + value.category3_id);
        //         if (myElecategory) { 
        //             if (value.count == 0) {
                        
        //                 document.getElementById("count-category_pro" + value.category3_id).style.display ='none';
        //                 document.getElementById("count-category_pro_index" + value.category3_id).style.display ='none';

        //             } else {
        //                 document.getElementById("count-category_pro" + value.category3_id).style.display =
        //                     "block";
        //                     document.getElementById("count-category_pro_index" + value.category3_id).style.display =
        //                     "block";
        //             }
        //         }
        //     })

        //     // $(".filterselectbrand").html(data);
        // });
    }

    function ajaxGetFilterBrandproduct(pro_sun) {
        $.post('{{ url('ajaxGetFilterBrandproduct') }}', {
            category3_id: product_sub,
            category2_id: '{{ $category2_id }}',
            brand_id: brand_id,
            color_id: color_id,
            pro_sun: pro_sun,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            page: page,
           
            "_token": "{{ csrf_token() }}"
        }, function(data) {

            console.log(data);
            data.brand.forEach(function(value) {
                $("#show-count-b" + value.brand_id).html('(' + value.count + ')');
                $("#show-count-b_index" + value.brand_id).html('(' + value.count + ')');

                var myEle = document.getElementById("brand_dispayss" + value.brand_id);
                if (myEle) {
                    if (value.count == 0) {
                        console.log(value.brand_id);
                        document.getElementById("brand_dispayss" + value.brand_id).style.display = 'none';
                        document.getElementById("brand_dispayss_index" + value.brand_id).style.display = 'none';

                    } else {
                        document.getElementById("brand_dispayss" + value.brand_id).style.display =
                            "block";
                            document.getElementById("brand_dispayss_index" + value.brand_id).style.display =
                            "block";
                    }
                    
                }

            })
            // data.color.forEach(function (value) {
            //     $("#show-count-color"+value.color_id).html('('+value.count+')');
            // })
            data.feature.forEach(function(value) {
                $("#show-count-f" + value.id).html('(' + value.count + ')');
                $("#show-count-f_index" + value.id).html('(' + value.count + ')');
                
                var myElefeature = document.getElementById("feature_dispayss" + value.id);
                if (myElefeature) {
                    if (value.count == 0) {
                        console.log(value.id);
                        document.getElementById("feature_dispayss" + value.id).style.display = 'none';
                        document.getElementById("feature_dispayss_index" + value.id).style.display = 'none';

                    } else {
                        document.getElementById("feature_dispayss" + value.id).style.display =
                            "block";
                            document.getElementById("feature_dispayss_index" + value.id).style.display =
                            "block";
                    }
                }
            })
            
            data.category3.forEach(function(value) {
                $("#show-count-s"+ value.category3_id).html('(' + value.count + ')');
                // console.log(value.category3_id+'/'+value.count);
                $("#show-count-category" + value.category3_id).html('(' + value.count + ')');
                $("#show-count-category_index" + value.category3_id).html('(' + value.count + ')');

                // if (document.getElementById("show-count-category" + value.category3_id) != null) {
                //     document.getElementById("show-count-category" + value.category3_id).innerHTML =
                //         '(' + value.count + ')';

                //     console.log(document.getElementById("show-count-category" + value.category3_id)
                //         .innerHTML);
                // }
                var myElecategory = document.getElementById("count-category_pro" + value.category3_id);
                if (myElecategory) { 
                    if (value.count == 0) {
                        
                        document.getElementById("count-category_pro" + value.category3_id).style.display ='none';
                        document.getElementById("count-category_pro_index" + value.category3_id).style.display ='none';

                    } else {
                        document.getElementById("count-category_pro" + value.category3_id).style.display =
                            "block";
                            document.getElementById("count-category_pro_index" + value.category3_id).style.display =
                            "block";
                    }
                }
            })

            // $(".filterselectbrand").html(data);
        });
    }
</script>


<script>
    $(function() {
        $('.price-range').slider({
            range: true,
            min: 0,
            max: @if (!empty($max_price_inc) and $max_price_inc->category2_max_price != 0)
                {{ $max_price_inc->category2_max_price }}
            @else
                {{ '10000' }}
            @endif ,
            values: [0,
                @if (!empty($max_price_inc) and $max_price_inc->category2_max_price != 0)
                    {{ $max_price_inc->category2_max_price }}
                @else
                    {{ '10000' }}
                @endif
            ],
            slide: function(event, ui) {
                $('.price-min').val(ui.values[0]);
                $('.price-max').val(ui.values[1]);

                $.post('{{ url('ajaxFilterProduct') }}', {
                    brand_id: brand_id,
                    color_id: color_id,
                    category2_id: {{ $category2_id }},
                    price_min: $(".price-min").val(),
                    price_max: $(".price-max").val(),
                    "_token": "{{ csrf_token() }}"
                }, function(data) {
                    var data_split = data.split('!@#$%^&*()_+');

                    $(".div_product_ajax").html(data_split[0]);
                    $(".pagination").html(data_split[1]);
                    $(".span_no1").html(data_split[2]);
                    $(".span_no2").html(data_split[3]);
                    $(".span_total").html(data_split[4]);
                });

                $.post('{{ url('ajaxGetFilter') }}', {
                    category3_id: $("#category3_id").val(),
                    brand_id: brand_id,
                    color_id: color_id,
                    price_min: $(".price-min").val(),
                    price_max: $(".price-max").val(),
                    order_by: order_by,
                    feature_id: feature_id,
                    page: page,
                    "_token": "{{ csrf_token() }}"
                }, function(data) {
                    // console.log(data);

                    $(".filterselect").html(data);
                });

            }
        });
    });

    $('.price-min').change(function(event) {

        var minValue = $('#price-min').val();
        var maxValue = $('#price-max').val();
        if (minValue <= maxValue) {
            $('.price-range').slider("values", 0, minValue);
        } else {
            $('.price-range').slider("values", 0, maxValue);
            $('.price-min').val(maxValue);
        }
    });

    // This isn't very DRY but it's just for demo purpose... oh well.
    $('.price-max').change(function(event) {
        var minValue = $('.price-min').val();
        var maxValue = $('.price-max').val();
        if (maxValue >= minValue) {
            $('.price-range').slider("values", 1, maxValue);
        } else {
            $('.price-range').slider("values", 1, minValue);
            $('.price-max').val(minValue);
        }
    });
</script>
