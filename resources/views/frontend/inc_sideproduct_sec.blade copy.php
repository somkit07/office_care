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

</style>

<div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
    <section id="category_menu_sec">
        {{-- <h2>ตัวกรองที่เลือก</h2>
        <div class="filterselect">
            <li><a href="#">กระดาษโน๊ต <span><i class="fi fi-rr-cross-small"></i></span></a></li>
            <li><a href="#">฿0-฿500 <span><i class="fi fi-rr-cross-small"></i></span></a></li>
        </div> --}}

        <div class="accordion" id="accordionPanelsStayOpenExample">
{{-- @if(!empty($category_txt))
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
    @if(!empty($category_txt))
        {{ $category_txt->category2_name }}
    @endif
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                    aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                        <ul class="menulsact">
    @if(!empty($category_txt))
        @php
        $product = DB::table('product')
            ->where('category3_id', '=', $category_txt->category3_id)
            ->get();
        @endphp
                            <li><i class="fi fi-sr-checkbox"></i> {{ $category_txt->category3_name}} <span class="count">({{ count($product) }})</span></li>
    @endif
                        </ul>
                    </div>
                </div>
            </div>
@else
    ตัวกรอง
@endif --}}
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
                                    <input class="price-max" type="text" value="@if(!empty($max_price_inc) and $max_price_inc->category3_max_price != 0){{ $max_price_inc->category3_max_price }}@else{{ '10000' }}@endif" />
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

@if(!empty($brand_inc))
    @foreach($brand_inc as $r_inc)
        @php
        $product = DB::table('product')
            ->where('product.brand_id', '=', $r_inc->brand_id)
            ->where('product.category3_id', '=', $category3_id)
            ->get();

        $count = count($product);
        @endphp

        @if($count > 0)
                            <li><label class="check-container">{{ $r_inc->brand_name }} <span class="count">({{ $count }})</span>
                                <input type="checkbox" class="brand_id" value="{{ $r_inc->brand_id }}">
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
                            <div id="morebrands" class="collapse">
@if(!empty($brand_inc2))
    @foreach($brand_inc2 as $r_inc)
        @php
        $product = DB::table('product')
            ->where('product.brand_id', '=', $r_inc->brand_id)
            ->where('product.category3_id', '=', $category3_id)
            ->get();

        $count = count($product);
        @endphp

        @if($count > 0)
                                <li><label class="check-container">{{ $r_inc->brand_name}} <span class="count">({{ $count }})</span>
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

@if(!empty($color_inc))
    @foreach($color_inc as $r_inc)
        @php
        $product = DB::table('product')
            ->where('product.color_id', '=', $r_inc->color_id)
            ->where('product.category3_id', '=', $category3_id)
            ->get();

        $count = count($product);
        @endphp

        @if($count > 0)
                            <li>
                                <a href="javascript:filterProductSub('{{ $r_inc->color_id }}');"><span class="cl01 circlesty" style="background-color: {{ $r_inc->color_code }}"></span>
                                {{ $r_inc->color_name }} <span class="count">({{ $count }})</span></a>
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
@if(!empty($feature_inc))
    @php
    $i = 0;
    @endphp
    @foreach($feature_inc as $r_inc)
       

        {{-- ddd --}}

        @php
        $feature_inc_item = DB::table('feature_selections')
            ->leftjoin('features', 'feature_selections.id', 'features.feature_selection_id')
            ->leftjoin('product_to_feature', 'product_to_feature.feature_id', 'features.id')
            ->leftjoin('product', 'product.product_id', '=', 'product_to_feature.product_id')
            ->where('features.feature_selection_id', '=', $r_inc->id)
            ->select(
                'features.id as id', 'features.name as name',
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
        
        @if(!empty($feature_inc_item))
            @foreach($feature_inc_item as $r_incitem)
                @php
                $product_count = DB::table('product')
                    ->select('product_to_feature.id')
                    ->join('product_to_feature', 'product.product_id', '=', 'product_to_feature.product_id')
                    ->where('product_to_feature.feature_id', '=', $r_incitem->id)
                    ->where('product.category3_id', '=', $category3_id)
                    // ->tosql();
                    ->get();
                    // dd($product_count, $r_incitem->id, $category3_id);
                    // dd($product_count);
                @endphp

                @if(count($product_count) > 0)

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
                {{-- @if($count > 0) --}}
                            <li><label class="check-container">{{ $r_incitem->name }} <span class="count">({{ count($product_count) }})</span>
                                    <input type="checkbox" class="feature_id" value="{{ $r_incitem->id }}">
                                    <span class="checkmark"></span>
                                </label></li>
                {{-- @endif --}}
            </ul>
        </div>
    </div>
</div>
                @endif
                @php
                $i_inc++;
                @endphp
            @endforeach
        @endif
                  
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

<script>

    var color_id = '';
    function filterProductSub(color_id_ = '') {
        color_id = color_id_;

        filterProductFeatureColorSub3();
    }

    var feature_id = [];
    $(".feature_id").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            feature_id.push(checked);
        } else {
            feature_id.splice($.inArray(checked, feature_id),1);
        }

        filterProductFeatureColorSub3();
    });

    var brand_id = [];
    $(".brand_id").click(function() {
        var checked = $(this).val();
        if ($(this).is(':checked')) {
            brand_id.push(checked);
        } else {
            brand_id.splice($.inArray(checked, brand_id),1);
        }

        filterProductFeatureColorSub3();
    });

    var order_by;
    function changeOrder(order_by_) {
        order_by = order_by_;

        filterProductFeatureColorSub3();
    }

    var page;
    function filterProduct(page_) {
        page = page_;

        filterProductFeatureColorSub3();
    }

    function filterProductFeatureColorSub3() {
        $.post('{{ url("ajaxFilterProduct3") }}', {
                category3_id: $("#category3_id").val(),
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
</script>

<script>
    $(function () {
        $('.price-range').slider({
            range: true,
            min: 0,
            max: @if(!empty($max_price_inc) and $max_price_inc->category3_max_price != 0){{ $max_price_inc->category3_max_price }}@else{{ '10000' }}@endif,
            values: [0, @if(!empty($max_price_inc) and $max_price_inc->category3_max_price != 0){{ $max_price_inc->category3_max_price }}@else{{ '10000' }}@endif],
            slide: function (event, ui) {
                $('.price-min').val(ui.values[0]);
                $('.price-max').val(ui.values[1]);

                $.post('{{ url("ajaxFilterProduct3") }}', { brand_id: brand_id, category3_id: {{ $category3_id }}, price_min: $(".price-min").val(), price_max: $(".price-max").val(), color_id: color_id, "_token": "{{ csrf_token() }}" }, function(data) {
                    var data_split = data.split('!@#$%^&*()_+');

                    $(".div_product_ajax").html(data_split[0]);
                    $(".pagination").html(data_split[1]);
                    $(".span_no1").html(data_split[2]);
                    $(".span_no2").html(data_split[3]);
                    $(".span_total").html(data_split[4]);
                });
            }
        });
    });

    $('.price-min').change(function (event) {
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
    $('.price-max').change(function (event) {
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
