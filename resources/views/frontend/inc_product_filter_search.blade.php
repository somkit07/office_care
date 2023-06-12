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

<section id="category_menu_sec">
    <h2>ตัวกรองสินค้า</h2>
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
@if(!empty($category_txt))
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

// if(!empty($category_txt_inc)) {
//     $category3 = DB::table('category3')
//         ->where('category2_id', '=', $category_txt_inc->category2_id)
//         ->get();
// }
@endphp
{{-- @if(!empty($category3))
    @foreach($category3 as $r_inc)
        @php
        $product = DB::table('product')
            ->where('product.category3_id', '=', $r_inc->category3_id)
            ->get();
        @endphp

        @if(count($product) > 0)
                        <li><a href="{{ url('product_sub/'.$r_inc->category3_id) }}">{{ $r_inc->category3_name }} <span>({{ count($product) }})</span></a></li>
        @endif
    @endforeach
@endif --}}
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
                                    <input class="price-max" type="text" value="@if(!empty($max_price_inc) and $max_price_inc->category2_max_price != 0){{ $max_price_inc->category2_max_price }}@else{{ '10000' }}@endif" />
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
            ->where('brand_id', '=', $r_inc->brand_id)
            ->get();

        $count = count($product);
        @endphp

        @if($count > 0)
                            <li><label class="check-container">{{ $r_inc->brand_name }} <span class="count" id="show-count-brand{{ $r_inc->brand_id }}">({{ $count }})</span>
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
                            <div id="morebrands" class="collapse">
@if(!empty($brand_inc2))
    @foreach($brand_inc2 as $r_inc)
        @php
        $product = DB::table('product')
            ->where('brand_id', '=', $r_inc->brand_id)
            ->get();

        $count = count($product);
        @endphp

        @if($count > 0)
                                <li><label class="check-container">{{ $r_inc->brand_name }} <span class="count" id="show-count-brand{{ $r_inc->brand_id }}">({{ $count }})</span>
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
    </div>
</section>

<script>
    var order_by = '';

    var brand_id = [];
    $(".brand_id").click(function() {

        var checked = $(this).val();
        if ($(this).is(':checked')) {
            brand_id.push(checked);
        } else {
            brand_id.splice($.inArray(checked, brand_id),1);
        }

        $.post('{{ url("ajaxFilterProduct") }}', { brand_id: brand_id, category2_id: {{ $category2_id }}, price_min: $(".price-min").val(), price_max: $(".price-max").val(), order_by: order_by, "_token": "{{ csrf_token() }}" }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $(".div_product_ajax").html(data_split[0]);
            $(".pagination").html(data_split[1]);
            $(".span_no1").html(data_split[2]);
            $(".span_no2").html(data_split[3]);
            $(".span_total").html(data_split[4]);
        });
    });

    function changeOrder(order_by) {
        $.post('{{ url("ajaxFilterProduct") }}', { brand_id: brand_id, category2_id: {{ $category2_id }}, price_min: $(".price-min").val(), price_max: $(".price-max").val(), order_by: order_by, "_token": "{{ csrf_token() }}" }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $(".div_product_ajax").html(data_split[0]);
            $(".pagination").html(data_split[1]);
            $(".span_no1").html(data_split[2]);
            $(".span_no2").html(data_split[3]);
            $(".span_total").html(data_split[4]);
        });
    }

    function filterProduct(page) {

        $.post('{{ url("ajaxFilterProduct") }}', { brand_id: brand_id, page: page, category2_id: {{ $category2_id }}, price_min: $(".price-min").val(), price_max: $(".price-max").val(), order_by: order_by, "_token": "{{ csrf_token() }}" }, function(data) {
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
            max: @if(!empty($max_price_inc) and $max_price_inc->category2_max_price != 0){{ $max_price_inc->category2_max_price }}@else{{ '10000' }}@endif,
            values: [0, @if(!empty($max_price_inc) and $max_price_inc->category2_max_price != 0){{ $max_price_inc->category2_max_price }}@else{{ '10000' }}@endif],
            slide: function (event, ui) {
                $('.price-min').val(ui.values[0]);
                $('.price-max').val(ui.values[1]);

                $.post('{{ url("ajaxFilterProduct") }}', { brand_id: brand_id, category2_id: {{ $category2_id }}, price_min: $(".price-min").val(), price_max: $(".price-max").val(), "_token": "{{ csrf_token() }}" }, function(data) {
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


