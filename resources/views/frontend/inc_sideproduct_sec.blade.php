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

<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <section id="category_menu_sec">
        <h2>ตัวกรองสินค้า
            <button class="btn text-right refresh" type="button">Clear all</button>
        </h2>
        <div class="filterselect">
            {{-- <li><a href="#">กระดาษโน๊ต <span><i class="fi fi-rr-cross-small"></i></span></a></li>
            <li><a href="#">฿0-฿500 <span><i class="fi fi-rr-cross-small"></i></span></a></li> --}}
        </div>

        <div class="accordion" id="accordionPanelsStayOpenExample">

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
                                        value="@if (!empty($max_price_inc) and $max_price_inc->category3_max_price != 0) {{ $max_price_inc->category3_max_price }}@else{{ '10000' }} @endif" />
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
                        {{-- <div class="filterselectbrand"></div> --}}
                        <ul class="menu">
                            @php
                                $brand_inc = DB::table('brand')
                                    ->orderBy('brand_id', 'asc')
                                    ->skip(0)
                                    ->take(4)
                                    ->get();
                                
                                $brand_inc2 = DB::table('brand')
                                    ->orderBy('brand_id', 'asc')
                                    ->skip(4)
                                    ->take(100)
                                    ->get();
                            @endphp

                            @if (!empty($brand_inc))
                                @foreach ($brand_inc as $r_inc)
                                    @php
                                        $product = DB::table('product')
                                            ->where('product.brand_id', '=', $r_inc->brand_id)
                                            ->where('product.category3_id', '=', $category3_id)
                                            ->get();
                                        
                                        $count = count($product);
                                    @endphp

                                    @if ($count > 0)
                                        <li id="brand_dispay{{ $r_inc->brand_id }}"><label
                                                class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                    id="show-count-brand{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                <input type="checkbox" class="brand_id" value="{{ $r_inc->brand_id }}"
                                                    id="brand_id_sub{{ $r_inc->brand_id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
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
                            @if (count($brand_inc2) < 4)
                                <div id="morebrands" class="collapse">
                            @endif

                            @if (!empty($brand_inc2))
                                @foreach ($brand_inc2 as $r_inc)
                                    @php
                                        $product = DB::table('product')
                                            ->where('product.brand_id', '=', $r_inc->brand_id)
                                            ->where('product.category3_id', '=', $category3_id)
                                            ->get();
                                        
                                        $count = count($product);
                                    @endphp

                                    @if ($count > 0)
                                        <li id="brand_dispay{{ $r_inc->brand_id }}"><label
                                                class="check-container">{{ $r_inc->brand_name }} <span class="count"
                                                    id="show-count-brand{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                <input type="checkbox" class="brand_id"
                                                    id="brand_id_sub{{ $r_inc->brand_id }}"
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
                            @if (count($brand_inc2) < 4)
                    </div>
                    <a data-bs-toggle="collapse" data-bs-target="#morebrands" class="morelist">+ ดูเพิ่มเติม</a>
                    @endif


                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree1" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree1">
                    สี
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree1" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <ul class="menucolor">
                        @php
                            $color_inc = DB::table('color')
                                ->orderBy('color_id', 'asc')
                                ->get();
                        @endphp

                        @if (!empty($color_inc))
                            @foreach ($color_inc as $r_inc)
                                @php
                                    $product = DB::table('product')
                                        ->where('product.color_id', '=', $r_inc->color_id)
                                        ->where('product.category3_id', '=', $category3_id)
                                        ->get();
                                    
                                    $count = count($product);
                                @endphp

                                @if ($count > 0)
                                    <li id="color_dispay{{ $r_inc->color_id }}" style="display: block;">
                                        <a href="#" onclick="filterProductSub('{{ $r_inc->color_id }}');"><span
                                                class="cl01 circlesty"
                                                style="background-color: {{ $r_inc->color_code }}"></span>
                                            {{ $r_inc->color_name }} <span class="count"
                                                id="show-count-color{{ $r_inc->color_id }}">({{ $count }})</span></a>
                                    </li>
                                @endif
                            @endforeach
                        @endif
                        {{-- <li>
                                <a href="#"><span class="cl02 circlesty"></span> ขาว<span class="count">(35)</span></a>
                            </li>
                            <li>
                                <a href="#"><span class="cl03 circlesty"></span> ดำ <span class="count">(35)</span></a>
                            </li> --}}
                    </ul>
                </div>
            </div>
        </div>

        <!-- Feature -->
        @if (!empty($feature_inc))

            @php
                $i = 0;
            @endphp
            @foreach ($feature_inc as $r_inc)
                @php
                    $i++;
                @endphp
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
                                        ->where('feature_selections.category3_id', '=', $category3_id)
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
                                            <li id="feature_dispay{{ $r_incitem->id }}" style="display: block;">
                                                <label class="check-container">{{ $r_incitem->name }} <span
                                                        class="count"
                                                        id="show-count-feature{{ $r_incitem->id }}">({{ count($product_count) }})</span>
                                                    <input type="checkbox" class="feature_id"
                                                        id="feature_id_sub{{ $r_incitem->id }}"
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

</section>
</div>


{{-- <script>
    //-----JS for Price Range slider-----

    $(function () {
        $("#slider-range").slider({
            range: true,
            min: 130,
            max: 500,
            values: [130, 250],
            slide: function (event, ui) {
                $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
            }
        });
        $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));
    });

    function filterProductSub(color_id = '') {

    }
</script> --}}
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}

<script>
    $(".refresh").click(function() {
        window.location.reload();
    });

    var color_id = '';
    // var product_id =document.getElementById(product_id").value();
    var pro_sun = '';


    function filterProductSub(e) {

        color_id = e;
        // alert(color_id);
        filterProductFeatureColorSub3();
        ajaxGetFilter();
    }

    function fProductcolor() {
        //  alert('color_id');
        color_id = '';
        filterProductFeatureColorSub3();
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

        // console.log(feature_id);
        filterProductFeatureColorSub3();
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
        document.getElementById("feature_id_sub" + JSON.stringify(e)).checked = false;

        filterProductFeatureColorSub3();
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

        filterProductFeatureColorSub3();
        ajaxGetFilter();
    });

    function Fbrand_id(e) {
        var checked = $(this).data("id");

        if ($(this).is(':checked')) {
            brand_id.push(e);
        } else {
            let index = brand_id.indexOf(JSON.stringify(e));
            if (index > -1) { // only splice array when item is found
                brand_id.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
        document.getElementById("brand_id_sub" + JSON.stringify(e)).checked = false;
        filterProductFeatureColorSub3();
        ajaxGetFilter();
    }


    function fprice_range() {
        // alert('15561');
        $(".price-min").val('0'),
            $(".price-max").val('10000'),
            // document.getElementById("feature_id" + JSON.stringify(e)).checked = false;
            filterProductFeatureColorSub3();
        ajaxGetFilter();
    }


    var order_by;

    function changeOrder(order_by_) {
        order_by = order_by_;

        filterProductFeatureColorSub3();
        ajaxGetFilter();

    }

    var page;

    function filterProduct(page_) {
        page = page_;

        filterProductFeatureColorSub3();
        ajaxGetFilter();


    }

    function filterProductFeatureColorSub3() {
        $.post('{{ url('ajaxFilterProduct3') }}', {
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
            var data_split = data.split('!@#$%^&*()_+');

            $(".div_product_ajax").html(data_split[0]);
            $(".pagination").html(data_split[1]);
            $(".span_no1").html(data_split[2]);
            $(".span_no2").html(data_split[3]);
            $(".span_total").html(data_split[4]);
            // console.log(data_split);
            pro_sun = $(".pro_sun").val();
            ajaxGetFilterBrand(pro_sun)
        });
    }

    function ajaxGetFilter() {
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

        // $.post('{{ url('ajaxGetFilterBrand') }}', {
        //     category3_id: $("#category3_id").val(),
        //     brand_id: brand_id,
        //     color_id: color_id,
        //     price_min: $(".price-min").val(),
        //     price_max: $(".price-max").val(),
        //     order_by: order_by,
        //     feature_id: feature_id,
        //     page: page,
        //     pro_sun: pro_sun,
        //     "_token": "{{ csrf_token() }}"
        // }, function(data) {
        //     console.log(data); 
        //     data.brand.forEach(function (value) {
        //         $("#show-count-brand"+value.brand_id).html('('+value.count+')');
        //         $("#show-count-brand_index"+value.brand_id).html('('+value.count+')');
        //         var myEle = document.getElementById("brand_dispay" + value.brand_id);
        //         if (myEle) {
        //             if (value.count == 0) {
        //                 console.log(value.brand_id);
        //                 document.getElementById("brand_dispay" + value.brand_id).style.display = 'none';
        //                 document.getElementById("brand_dispay_index" + value.brand_id).style.display = 'none';

        //             } else {
        //                 document.getElementById("brand_dispay" + value.brand_id).style.display =
        //                 "block";
        //                 document.getElementById("brand_dispay_index" + value.brand_id).style.display =
        //                 "block";
        //             }
        //         }
        //     })
        //     data.color.forEach(function (value) {
        //         $("#show-count-color"+value.color_id).html('('+value.count+')');
        //         $("#show-count-color_index"+value.color_id).html('('+value.count+')');
        //         var myElecolor = document.getElementById("color_dispay" + value.brand_id);
        //         if (myElecolor) {
        //             if (value.count == 0) {
        //                 console.log(value.color_id);
        //                 document.getElementById("color_dispay" + value.color_id).style.display = 'none';
        //                 document.getElementById("color_dispay_index" + value.color_id).style.display = 'none';
        //             } else {
        //                 document.getElementById("color_dispay" + value.color_id).style.display =
        //                 "block";
        //                 document.getElementById("color_dispay_index" + value.color_id).style.display =
        //                 "block";
        //             }
        //         }
        //     })
        //     data.feature.forEach(function (value) {
        //         $("#show-count-feature"+value.id).html('('+value.count+')');
        //         $("#show-count-feature_index"+value.id).html('('+value.count+')');
        //         var myElefeature = document.getElementById("feature_dispay" + value.id);
        //         if (myElefeature) {
        //             if (value.count == 0) {
        //                 console.log(value.brand_id);
        //                 document.getElementById("feature_dispay" + value.id).style.display = 'none';
        //                 document.getElementById("feature_dispay_index" + value.id).style.display = 'none';
        //             } else {
        //                 document.getElementById("feature_dispay" + value.id).style.display =
        //                 "block";
        //                 document.getElementById("feature_dispay_index" + value.id).style.display =
        //                 "block";
        //             }
        //         }
        //     })

        //     // console.log(data.category3);
        //     // data.category3.forEach(function(value) {
        //     //     $("#show-count-category" + value.category3_id).html('(' + value.count + ')');
        //     //     var myElecategory = document.getElementById("category_dispay" + value.category3_id);
        //     //     if (myElecategory) {
        //     //         if (value.count == 0) {
        //     //             console.log(value.category3_id);
        //     //             document.getElementById("category_dispay" + value.category3_id).style.display = 'none';
        //     //         } else {
        //     //             document.getElementById("category_dispay" + value.category3_id).style.display =
        //     //             "block";
        //     //         }
        //     //     }
        //     // })

        //     // $(".filterselectbrand").html(data);
        // });
    }


    function ajaxGetFilterBrand(pro_sun) {
        $.post('{{ url('ajaxGetFilterBrand') }}', {
            category3_id: $("#category3_id").val(),
            brand_id: brand_id,
            color_id: color_id,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            page: page,
            pro_sun: pro_sun,
            "_token": "{{ csrf_token() }}"
        }, function(data) {
          
            data.brand.forEach(function(value) {
                $("#show-count-brand" + value.brand_id).html('(' + value.count + ')');
                $("#show-count-brand_index" + value.brand_id).html('(' + value.count + ')');
                var myEle = document.getElementById("brand_dispay" + value.brand_id);
                if (myEle) {
                    if (value.count == 0) {
                        
                        document.getElementById("brand_dispay" + value.brand_id).style.display = 'none';
                        document.getElementById("brand_dispay_index" + value.brand_id).style.display =
                            'none';

                    } else {
                        document.getElementById("brand_dispay" + value.brand_id).style.display =
                            "block";
                        document.getElementById("brand_dispay_index" + value.brand_id).style.display =
                            "block";
                    }
                }
            })
            data.color.forEach(function(value) {
                $("#show-count-color" + value.color_id).html('(' + value.count + ')');
                $("#show-count-color_index" + value.color_id).html('(' + value.count + ')');
                var myElecolor = document.getElementById("color_dispay" + value.brand_id);
                if (myElecolor) {
                    if (value.count == 0) {
                        document.getElementById("color_dispay" + value.color_id).style.display = 'none';
                        document.getElementById("color_dispay_index" + value.color_id).style.display =
                            'none';
                    } else {
                        document.getElementById("color_dispay" + value.color_id).style.display =
                            "block";
                        document.getElementById("color_dispay_index" + value.color_id).style.display =
                            "block";
                    }
                }
            })
            data.feature.forEach(function(value) {
                $("#show-count-feature" + value.id).html('(' + value.count + ')');
                $("#show-count-feature_index" + value.id).html('(' + value.count + ')');
                var myElefeature = document.getElementById("feature_dispay" + value.id);
                if (myElefeature) {
                    if (value.count == 0) {
                        document.getElementById("feature_dispay" + value.id).style.display = 'none';
                        document.getElementById("feature_dispay_index" + value.id).style.display =
                            'none';
                    } else {
                        document.getElementById("feature_dispay" + value.id).style.display =
                            "block";
                        document.getElementById("feature_dispay_index" + value.id).style.display =
                            "block";
                    }
                }
            })


        });
    }
</script>

<script>
    $(function() {
        $('.price-range').slider({
            range: true,
            min: 0,
            max: @if (!empty($max_price_inc) and $max_price_inc->category3_max_price != 0)
                {{ $max_price_inc->category3_max_price }}
            @else
                {{ '10000' }}
            @endif ,
            values: [0,
                @if (!empty($max_price_inc) and $max_price_inc->category3_max_price != 0)
                    {{ $max_price_inc->category3_max_price }}
                @else
                    {{ '10000' }}
                @endif
            ],
            slide: function(event, ui) {
                $('.price-min').val(ui.values[0]);
                $('.price-max').val(ui.values[1]);

                $.post('{{ url('ajaxFilterProduct3') }}', {
                    brand_id: brand_id,
                    color_id: color_id,
                    category3_id: {{ $category3_id }},
                    price_min: $(".price-min").val(),
                    price_max: $(".price-max").val(),
                    color_id: color_id,
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
