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
                                // if(!empty($inc_brand)) {
                                //     foreach($inc_brand as $inc_brand_id => $inc_brand_name) {
                                //         echo $inc_brand_id;
                                //     }
                                // }
                                
                                // $brand_inc = DB::table('brand')
                                //     ->orderBy('brand_id', 'asc')
                                //     ->skip(0)
                                //     ->take(4)
                                //     ->get();
                                
                                // $brand_inc2 = DB::table('brand')
                                //     ->orderBy('brand_id', 'asc')
                                //     ->skip(4)
                                //     ->take(100)
                                //     ->get();
                                $i_inc = 1;
                            @endphp

                            @if (!empty($brand_inc))
                                @php
                                    // dd($keyword_);
                                @endphp
                                @foreach ($brand_inc as $r_inc)
                                    @php
                                        // $product = DB::table('product')
                                        //     ->where('product.brand_id', $r_inc->brand_id)
                                        //     ->where(function ($query) use ($keyword_) {
                                        //         $query->where('product.product_name', 'like', '%'.$keyword_.'%')
                                        //         ->orWhere('product.product_detail', 'like', '%'.$keyword_.'%')
                                        //         ->orWhere('product.product_specificial', 'like', '%'.$keyword_.'%');
                                        //     })
                                        //     ->get();
                                        $category3_max_price = DB::table('category3')
                                            ->select('category3_max_price')
                                            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                                            ->where('product.brand_id', $r_inc->brand_id)
                                            ->first();
                                        
                                        $max_price = 10000;
                                        if (!is_null($category3_max_price)) {
                                            if ($category3_max_price->category3_max_price != 0) {
                                                $max_price = $category3_max_price->category3_max_price;
                                            }
                                        }
                                        
                                        $product = DB::table('category3')
                                            ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                                            ->where(function ($query) use ($keyword_) {
                                                $query
                                                    ->where('product.product_name', 'like', '%' . $keyword_ . '%')
                                                    ->orWhere('product.product_detail', 'like', '%' . $keyword_ . '%')
                                                    ->orWhere('product.product_specificial', 'like', '%' . $keyword_ . '%');
                                            })
                                            ->where('product.brand_id', $r_inc->brand_id)
                                            ->where('product.product_price', '>=', '0')
                                            ->where('product.product_price', '<=', $max_price)
                                            ->get();
                                        
                                        // if($r_inc->brand_id == ){
                                        //     dd($product);
                                        // }
                                        
                                        $count = count($product);
                                        // dd($r_inc->brand_id, $r_inc->brand_name, $product);
                                    @endphp

                                    @if ($count > 0)
                                        <li id="brand_dispay_search{{ $r_inc->brand_id }}">
                                            <label class="check-container">{{ $r_inc->brand_name }} <span
                                                    class="count" id="show-count-brand_search{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                <input type="checkbox" class="brand_id"
                                                    id="brand_id{{ $r_inc->brand_id }}" value="{{ $r_inc->brand_id }}">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    @endif

                                    @php
                                        $i_inc++;
                                    @endphp
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
                                            // $product = DB::table('product')
                                            //     ->where('brand_id', '=', $r_inc->brand_id)
                                            //     ->get();
                                            // $count = count($product);
                                            
                                            $category3_max_price = DB::table('category3')
                                                ->select('category3_max_price')
                                                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                                                ->where('product.brand_id', $r_inc->brand_id)
                                                ->first();
                                            
                                            $max_price = 10000;
                                            if (!is_null($category3_max_price)) {
                                                if ($category3_max_price->category3_max_price != 0) {
                                                    $max_price = $category3_max_price->category3_max_price;
                                                }
                                            }
                                            
                                            $product = DB::table('category3')
                                                ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                                                ->where(function ($query) use ($keyword_) {
                                                    $query
                                                        ->where('product.product_name', 'like', '%' . $keyword_ . '%')
                                                        ->orWhere('product.product_detail', 'like', '%' . $keyword_ . '%')
                                                        ->orWhere('product.product_specificial', 'like', '%' . $keyword_ . '%');
                                                })
                                                ->where('product.brand_id', $r_inc->brand_id)
                                                ->where('product.product_price', '>=', '0')
                                                ->where('product.product_price', '<=', $max_price)
                                                ->get();
                                            
                                            // if($r_inc->brand_id == '8'){
                                            //     dd($product);
                                            // }
                                            
                                            $count = count($product);
                                        @endphp

                                        @if ($count > 0)
                                            <li id="brand_dispay_search{{ $r_inc->brand_id }}"><label class="check-container">{{ $r_inc->brand_name }} <span
                                                        class="count" id="show-count-brand_search{{ $r_inc->brand_id }}">({{ $count }})</span>
                                                    <input type="checkbox" class="brand_id"
                                                        id="brand_id{{ $r_inc->brand_id }}"
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
                            </div>

                            <a data-bs-toggle="collapse" data-bs-target="#morebrands" class="morelist">+ ดูเพิ่มเติม</a>

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
                                            ->leftjoin('features', 'feature_selections.id', 'features.feature_selection_id')
                                            ->leftjoin('product_to_feature', 'product_to_feature.feature_id', 'features.id')
                                            ->leftjoin('product', 'product.product_id', '=', 'product_to_feature.product_id')
                                            ->where('features.feature_selection_id', '=', $r_inc->id)
                                            ->where('features.is_active', '=', 1)
                                            ->select(
                                                'features.id as id',
                                                'features.name as name',
                                                'feature_selections.id as feature_selections_id',
                                                'product_to_feature.id as product_to_feature_id',
                                                'product_to_feature.product_id as product_to_feature_product_id',
                                                'product.product_id as product_id',
                                                // DB::raw('COUNT(product.product_id) as product_count')
                                            )
                                            ->groupBy('features.id')
                                            ->get();
                                        
                                        //dd($feature_inc_item);
                                        
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
                                                <li id="feature_dispay_search{{ $r_incitem->id }}" style="display: block;"><label class="check-container">{{ $r_incitem->name }} <span
                                                            class="count" id="show-count-feature_search{{ $r_incitem->id }}">({{ count($product_count) }})</span>
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
                    @php
                        $i++;
                       
                    @endphp
                @endforeach
            @endif
            <!-- End Feature -->
        </div>
</section>

<script>
    $(".refresh").click(function() {
        window.location.reload();
    });
    var page = [];

    var brand_id = [];
    $(".brand_id").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            brand_id.push(checked);
        } else {
            brand_id.splice($.inArray(checked, brand_id), 1);
        }

        searchFilter();
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
        document.getElementById("brand_id" + JSON.stringify(e)).checked = false;
        searchFilter();
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

        searchFilter();
        ajaxGetFilter();
    });

    function Ffeature_id(e) {
        var checked = $(this).data("id");

        if ($(this).is(':checked')) {
            feature_id.push(checked);
        } else {
            let index = feature_id.indexOf(JSON.stringify(e));
            if (index > -1) { // only splice array when item is found
                feature_id.splice(index, 1); // 2nd parameter means remove one item only
            }
        }
        document.getElementById("feature_id" + JSON.stringify(e)).checked = false;
        searchFilter();
        ajaxGetFilter();
    }

    function fprice_range() {
        // alert('15561');
        $(".price-min").val('0'),
            $(".price-max").val('10000'),

            searchFilter();
        ajaxGetFilter();
    }

    var order_by;

    function changeOrder(order_by_) {
        order_by = order_by_;

        searchFilter();
        ajaxGetFilter();
    }

    var page;

    function filterProduct(page_) {
        page = page_;

        searchFilter();
        ajaxGetFilter();
    }

    function searchFilter() {
        $.post('{{ url('ajaxFilterProductFeature') }}', {
            keyword: $("#search_pc").val(),
            brand_id: brand_id,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            page: page,
            "_token": "{{ csrf_token() }}"
        }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $(".div_product_ajax").html(data_split[0]);
            $(".pagination").html(data_split[1]);
            $(".span_no1").html(data_split[2]);
            $(".span_no2").html(data_split[3]);
            $(".span_total").html(data_split[4]);
        });
    }

    function ajaxGetFilter() {
        $.post('{{ url('ajaxGetFilter') }}', {
            category3_id: $("#category3_id").val(),
            brand_id: brand_id,
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

        $.post('{{ url('ajaxGetFilterBrand') }}', {
            category3_id: $("#category3_id").val(),
            brand_id: brand_id,
            // color_id: color_id,
            price_min: $(".price-min").val(),
            price_max: $(".price-max").val(),
            order_by: order_by,
            feature_id: feature_id,
            page: page,
            "_token": "{{ csrf_token() }}"
        }, function(data) {
            // console.log('sssssssssssss');
            data.brand.forEach(function (value) {
                $("#show-count-brand_search"+value.brand_id).html('('+value.count+')');
                $("#show-count-brand_search_index"+value.brand_id).html('('+value.count+')');
                var myEle = document.getElementById("brand_dispay_search" + value.brand_id);
                if (myEle) {
                    if (value.count == 0) {
                        console.log(value.brand_id);
                        document.getElementById("brand_dispay_search" + value.brand_id).style.display = 'none';
                        document.getElementById("brand_dispay_search_index" + value.brand_id).style.display = 'none';
                    } else {
                        document.getElementById("brand_dispay_search" + value.brand_id).style.display =
                        "block";
                        document.getElementById("brand_dispay_search_index" + value.brand_id).style.display =
                        "block";
                    }
                }
            })
            // data.color.forEach(function (value) {
            //     $("#show-count-color_search"+value.color_id).html('('+value.count+')');

            //     var myElecolor = document.getElementById("color_dispay_search" + value.color_id);
            //     if (myElecolor) {
            //         if (value.count == 0) {
            //             console.log(value.color_id);
            //             document.getElementById("color_dispay_search" + value.color_id).style.display = 'none';
            //         } else {
            //             document.getElementById("color_dispay_search" + value.color_id).style.display =
            //             "block";
            //         }
            //     }
            // })
            data.feature.forEach(function (value) {
                $("#show-count-feature_search"+value.id).html('('+value.count+')');
                $("#show-count-feature_search_index"+value.id).html('('+value.count+')');
                var myElefeature = document.getElementById("feature_dispay_search" + value.id);
                if (myElefeature) {
                    if (value.count == 0) {
                        console.log(value.id);
                        document.getElementById("feature_dispay_search" + value.id).style.display = 'none';
                        document.getElementById("feature_dispay_search_index" + value.id).style.display = 'none';
                    } else {
                        document.getElementById("feature_dispay_search" + value.id).style.display =
                        "block";
                        document.getElementById("feature_dispay_search_index" + value.id).style.display =
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

                $.post('{{ url('ajaxFilterProductFeature') }}', {
                    brand_id: brand_id,
                    price_min: $(".price-min").val(),
                    price_max: $(".price-max").val(),
                    order_by: order_by,
                    feature_id: feature_id,
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
