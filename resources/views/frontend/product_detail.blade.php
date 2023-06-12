<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="productdetailpage" class="wrapperPages">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="pageontop">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
@if(!empty($category_txt))
                                    <li class="breadcrumb-item"><a href="{{ url('product_index') }}">@if(!empty($category_txt)){{ $category_txt->category1_name }}@endif</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('product/'.$category_txt->category2_id) }}">@if(!empty($category_txt)){{ $category_txt->category2_name }}@endif</a></li>
                                    <li class="breadcrumb-item"><a href="{{ url('product_sub/'.$category_txt->category3_id) }}">@if(!empty($category_txt)){{ $category_txt->category3_name }}@endif</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">@if(!empty($category_txt)){{ $category_txt->product_name }}@endif</li>
@else
                                    <li class="breadcrumb-item active" aria-current="page">@if(!empty($brand_row)){{ $brand_row->brand_name }}@endif</li>
@endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-10 offset-lg-2">
                        <div class="row mt-5">
                            <div class="col-lg-6">

                                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <div class="banner_slide owl-carousel owl-theme">
@php
$product_photo = DB::table('product_photo')
    ->where('product_id', '=', $product_id)
    ->orderBy('product_photo_id', 'asc')
    ->get();
@endphp

@if(!empty($product_photo))
    @foreach($product_photo as $pp)
                                        <div class="item">
                                            <img src="{{ asset('public/uploads/product/'.$pp->product_photo_image) }}" class="img-fluid">
                                        </div>
    @endforeach
@endif
                                        
                                        {{-- <div class="item">
                                            <img src="{{ asset('public/frontend/images/productbig.png') }}" class="img-fluid">

                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('public/frontend/images/productbig.png') }}" class="img-fluid">

                                        </div>
                                        <div class="item">
                                            <img src="{{ asset('public/frontend/images/productbig.png') }}" class="img-fluid">

                                        </div> --}}
                                    </div>
                                </div>
   
                                <div class="pc_slide d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <section id="color01" class="simplegallery" style="display: block;">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="sm-carousel select-display-slide">
@if(!empty($row))
                                                <li class="active" rel="0">
                                                    <a href="javascript:void(0);"><img src="{{ asset('public/uploads/product/'.$row->product_image) }}" class="img-fluid"></a>
                                                </li>
@endif
@if(!empty($product_photo))
    @php
    $i = 1;
    @endphp
    @foreach($product_photo as $pp)
                                                <li @if($i == 1 and empty($row->product_image)){{ 'class="active"' }}@endif rel="{{ $i }}">
                                                    <a href="javascript:void(0);"><img src="{{ asset('public/uploads/product/'.$pp->product_photo_image) }}" class="img-fluid"></a>
                                                </li>
        @php
        $i++;
        @endphp
    @endforeach
@endif
                                                {{-- <li rel="2">
                                                    <a href="javascript:void(0);"><img src="{{ asset('public/frontend/images/productbig.png') }}"
                                                            class="img-fluid"></a>
                                                </li>
                                                <li rel="3">
                                                    <a href="javascript:void(0);"><img src="{{ asset('public/frontend/images/productbig.png') }}"
                                                            class="img-fluid"></a>
                                                </li>
                                                <li rel="4">
                                                    <a href="javascript:void(0);"><img src="{{ asset('public/frontend/images/productbig.png') }}"
                                                            class="img-fluid"></a>
                                                </li> --}}
                                            </div> 
                                        </div>
                                        <div class="col-md-10">
                                            <div class="full-slide-ca">
@if(!empty($row))
                                                <div class="display-slide" rel="0" style="display:block;">
                                                    <a class="item" data-fancybox="gallery" href="{{ asset('public/uploads/product_cover/'.$row->product_image) }}"><img src="{{ asset('public/uploads/product_cover/'.$row->product_image) }}"></a>
                                                </div>
@endif
@if(!empty($product_photo))
    @php
    $i = 1;
    @endphp
    @foreach($product_photo as $pp)  
                                                <div class="display-slide" rel="{{ $i }}" @if($i == 1)style="display:block;" @endif>
                                                    <a class="item" data-fancybox="gallery" href="{{ asset('public/uploads/product/'.$pp->product_photo_image) }}"><img src="{{ asset('public/uploads/product/'.$pp->product_photo_image) }}"></a>
                                                </div>
        @php
        $i++;
        @endphp
    @endforeach
@endif
                                                {{-- <div class="display-slide" rel="2">
                                                    <a class="item" data-fancybox="gallery"
                                                        href="{{ asset('public/frontend/images/productbig.png') }}"><img
                                                            src="{{ asset('public/frontend/images/productbig.png') }}"></a>

                                                </div>
                                                <div class="display-slide" rel="3">
                                                    <a class="item" data-fancybox="gallery"
                                                        href="{{ asset('public/frontend/images/productbig.png') }}"><img
                                                            src="{{ asset('public/frontend/images/productbig.png') }}"></a>

                                                </div>
                                                <div class="display-slide" rel="4">
                                                    <a class="item" data-fancybox="gallery"
                                                        href="{{ asset('public/frontend/images/productbig.png') }}"><img
                                                            src="{{ asset('public/frontend/images/productbig.png') }}"></a>

                                                </div> --}}
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="sticky-top">
                                    <div class="boxprductside">
                                        <div class="fave">
{{-- @php
dd($row);
@endphp --}}
@if(!empty($row))
                                            <a href="javascript:insertWishlist({{ $row->product_id }});" class="wishlist wishlist_{{ $row->product_id }} @if(!empty($wishlist)){{ 'active' }}@endif"><i class="fi fi-rr-heart"></i></a>
@endif
                                        </div>
                                        <h1>{{ $row->product_name }}</h1>
                                        <span>Brand : {{ $row->brand_name }}</span>
                                        <br>
                                        <h7>{{ $row->product_code }}</h7>
                                        <div class="pickerWrapper mt-3">
                                            <div class="colorPreview"> Color : {{ $row->color_name }}
                                                <div id="colorName"></div>
                                            </div>
                                            <div class="colorWrapper">
@if(!empty($row) and $row->group_color_id != 0)
    @php
    $group_color = DB::table('group_color')
        ->where('group_color.group_color_id', '=', $row->group_color_id)
        ->join('product', 'group_color.group_color_id', '=', 'product.group_color_id')
        ->join('color', 'product.color_id', '=', 'color.color_id')
        ->get();
    @endphp

    @if(!empty($group_color))
        @foreach($group_color as $r)
                                                <a href="{{ $r->product_id }}" class="colorPick" style="background-color: {{ $r->color_code }};"><span> {{ $r->color_name }}</span>
                                                </a>
        @endforeach
    @endif
@else
                                                <a href="#color0{{ $i }}" id="color0{{ $i }}" class="colorPick" style="background-color: {{ $row->color_code }};"><span></span>
                                                </a>
@endif
                                                {{-- <a href="#color02" id="color02" class="colorPick"> <span>Pink</span>
                                                </a> --}}
                                            </div>
                                        </div>

                                        <div class="price pt-3">
                                            ฿ @if(!empty($row)){{ number_format($row->product_price) }}@endif <span>฿ @if(!empty($row)){{ number_format($row->product_before_discount) }}@endif</span>
                                        </div>
                                        <hr>
                                        จำนวน
                                        <div class="qtyCart mt-3">
                                            <div class="qty_group_cart mb-2">
                                                <div class="input-group"> <span class="input-group-btn">
                                                        <button id="qty-minus" type="button"
                                                            class="btn btn-default btn-number_product_detail" disabled="disabled"
                                                            data-type="minus" data-field="quant[1]">
                                                            <i class="fi fi-rr-minus"></i>
                                                        </button>
                                                    </span>
                                                    <input id="CC-prodDetails-quantity" type="text" name="quant[1]"
                                                        class="form-control input-number_product_detail" value="1" min="1" max="100">
                                                    <span class="input-group-btn">
                                                        <button id="qty-plus" type="button"
                                                            class="btn btn-default btn-number_product_detail" data-type="plus"
                                                            data-field="quant[1]">
                                                            <i class="fi fi-rr-plus"></i>
                                                        </button>
                                                    </span> </div>
                                            </div>
                                        </div>
                                        <br>
                                        <a href="javascript:void(0);" onclick="insertCartDetail('{{ $product_id }}');" class="btn btn-primary">+ เพิ่มสินค้า</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="topichead mt-4 mb-4">
                            <h3>ข้อมูลสินค้า</h3>
                        </div>
                        <div class="contentbody">
                            {{-- กระดาษโน้ต 3"x3" สะท้อนแสง (5เล่ม) ONE O7676N-A <br>
                            * กระดาษโน้ตคุณภาพดี เนื้อเรียบเนียน เขียนลื่น <br>
                            * แถบกาวอย่างอ่อน ติดแน่น ทนทาน มีประสิทธิภาพ <br>
                            * ลอกออกง่าย ไม่ทิ้งคราบกาวและเอกสารไม่เสียหาย <br>
                            * ติดซ้ำใหม่ได้หลายครั้ง คุ้มค่าต่อการใช้งาน <br>
                            * สีสันสวยงาม สะดุดตา มองเห็นได้ง่ายและชัดเจน <br>
                            * ใช้สำหรับเขียนข้อความ และติดเพื่อเตือนความจำหรือสื่อสารบอกกล่าว <br>
                            * ชนิด : กาวในตัว <br>
                            * สี : สะท้อนแสง <br>
                            * ขนาดสินค้า (กว้าง x ยาว) : 3 x 3 นิ้ว <br>
                            * บรรจุ 100 แผ่น/เล่ม, 5 เล่ม/แพ็ค <br>
                            <br><br>
                            *คำแนะนำและข้อควรระวัง* <br>
                            * ไม่ควรนำไปติดบริเวณที่มีฝุ่นมาก <br>
                            * หลีกเลี่ยงเปลวไฟและความชื้น --}}
                            @if(!empty($row)){!! $row->product_detail !!}@endif
                        </div>
                    </div>
                </div>
              
                <div class="row">
{{-- @php
dd($feature_selections);
@endphp --}}
                    @if(!empty($feature_selections))
                    <div class="col-lg-6">
                    <div class="topichead mt-4 mb-4">
                            <h3>คุณลักษณะ</h3>
                        </div>
                        <table class="table table-striped">
                        @foreach($feature_selections as $r)
                        <tr>
                            <th>
                            {{ $r->name }}
                            </th>
                            <td>
@php
                            $features = DB::table('features')
                                ->join('product_to_feature', 'features.id', 'product_to_feature.feature_id')
                                ->where('feature_selection_id', '=', $r->id)
                                ->where('product_to_feature.product_id', '=', $product_id)
                                ->get();

                            $feature = '';
                            if(!empty($features)) {
                                foreach($features as $r1) {
                                    $feature .= $r1->name.', ';
                                }

                                echo substr($feature, 0, -2);
                            }
@endphp
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    @endif
                    {{-- @if(!empty($row)){!! $row->product_specificial !!}@endif --}}
                    {{-- @php
                    dd($feature_selections);
                    @endphp --}}
                    {{-- <div class="col-lg-6">
                        <table class="table table-striped">
                            <tr>
                                <td>แบรนด์</td>
                                <td>Double A</td>
                            </tr>
                            <tr>
                                <td>สีสินค้า</td>
                                <td>คละสี</td>
                            </tr>
                            <tr>
                                <td>ประเภทกระดาษโน้ต</td>
                                <td>กระดาษโน้ตกาวในตัว</td>
                            </tr>
                        </table>
                    </div> --}}
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="groupcategory">
                            <div class="topichead mt-4 mb-4">
                                <h3>สินค้าที่เกี่ยวข้อง</h3>
                            </div>
                            <div class="product_slide owl-carousel owl-theme">
@if(!empty($products))
    @foreach($products as $r)
        @php
        $wishlist = DB::table('wishlist')
            ->where('member_id', '=', Session::get('member_id'))
            ->where('product_id', '=', $r->product_id)
            ->first();
        @endphp
                                <div class="item">
                                    <div class="productgroup text-start">
                                        <a href="{{ url('product_detail/'.$r->product_id) }}"><img src="{{ asset('public/uploads/product/'.$r->product_image) }}" alt="">
                                        </a>
                                        <a href="javascript:insertWishlist({{ $r->product_id }});" class="wishlist wishlist_{{ $r->product_id }} @if(!empty($wishlist)){{ 'active' }}@endif"><i class="fi fi-rr-heart"></i></a>
                                        <div class="contentProduct pt-3">
                                            <a href="javascript:void(0);" class="btn btn-cart" rel="{{ $r->product_id }}"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                            <div class="qtyAddcart" style="display:none;">
                                                <div class="qty_group_cart">
                                                    <div class="input-group"> 
                                                        <span class="input-group-btn">
                                                            <button id="qty-minus" type="button" class="btn btn-default btn-number"
                                                                 data-type="minus" data-field="quant[<?php echo $r->product_id;?>]" rel="{{ $r->product_id }}">
                                                                <i class="fi fi-rr-minus"></i>
                                                            </button>
                                                        </span>
                                                        <input id="CC-prodDetails-quantity" type="text" name="quant[<?php echo $r->product_id;?>]" class="form-control input-number" value="1" min="0" max="100"/>
                                                        <span class="input-group-btn">
                                                            <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $r->product_id;?>]" rel="{{ $r->product_id }}">
                                                                <i class="fi fi-rr-plus"></i>
                                                            </button>
                                                        </span> 
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="price pt-3">
                                                ฿ {{ number_format($r->product_price, 0, '.', ',') }}  {!! checkPrice($r->product_before_discount, $r->product_price) !!}
                                            </div>
                                            <a href="{{ url('product_detail/'.$r->product_id) }}" class="prddetails">
                                                {{ $r->product_name }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
    @endforeach
@endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')
    <script>
        $(document).ready(function () {
            $('.banner_slide').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })
            $('.product_slide').owlCarousel({
                loop: true,
                margin: 20,
                dots: false,
                nav: true,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })
        });
    </script>

    <script>
        $(document).ready(function () {
            $('.colorWrapper a').click(function (event) {
                var visaid = $(event.currentTarget).attr('href');
                if ($(".simplegallery" + visaid).is(":hidden")) {
                    $('.colorWrapper a').removeClass('active');
                    $(".simplegallery").hide();
                    $(".simplegallery" + visaid).fadeIn(500);
                    $(this).addClass('active');
                } else {}
                event.stopPropagation();
            });
            $(".colorWrapper a").eq(0).trigger("click");
        });
    </script>
    <script>
        var colorSelect = 00;
        jQuery(".colorPick").each(function (index) {
            jQuery(this).on("click", function () {
                var colorId = jQuery(this).attr('id');
                var colorIdNumber = colorId.substr(colorId.length - 2);
                var colorContentImg = jQuery("#color" + colorIdNumber + " img").clone();
                var colorContentName = jQuery("#color" + colorIdNumber + " span").clone();
                jQuery("#selectedColor").html(colorContentImg);
                jQuery("#colorName").html(colorContentName);
                colorSelect = colorIdNumber;
            });
            jQuery(this).on("mouseenter", function () {
                var colorId = jQuery(this).attr('id');
                var colorIdNumber = colorId.substr(colorId.length - 2);
                var colorContentImg = jQuery("#color" + colorIdNumber + " img").clone();
                var colorContentName = jQuery("#color" + colorIdNumber + " span").clone();
                jQuery("#selectedColor").html(colorContentImg);
                jQuery("#colorName").html(colorContentName);
            });
            jQuery(this).on("mouseleave", function () {
                var colorId = jQuery(this).attr('id');
                var colorIdNumber = colorSelect;
                var colorContentImg = jQuery("#color" + colorIdNumber + " img").clone();
                var colorContentName = jQuery("#color" + colorIdNumber + " span").clone();
                jQuery("#selectedColor").html(colorContentImg);
                jQuery("#colorName").html(colorContentName);
            });
        });

        function startDesignLink(colorLink) {
            jQuery(".disenar-ahora").attr("href", colorLink);
        }
    </script>

    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        $('.btn-number_product_detail').click(function (e) {
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
                    if (parseInt(input.val()) == input.attr('min')) {
                        $(this).attr('disabled', true);
                    }
                } else if (type == 'plus') {
                    if (currentVal < input.attr('max')) {
                        input.val(currentVal + 1).change();
                    }
                    if (parseInt(input.val()) == input.attr('max')) {
                        $(this).attr('disabled', true);
                    }
                }
            } else {
                input.val(0);
            }
        });
        $('.input-number_product_detail').change(function () {
            minValue = parseInt($(this).attr('min'));
            maxValue = parseInt($(this).attr('max'));
            valueCurrent = parseInt($(this).val());
            name = $(this).attr('name');
            if (valueCurrent >= minValue) {
                $(".btn-number[data-type='minus'][data-field='" + name + "']").removeAttr('disabled')
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
        });

        function insertWishlist(product_id) {
            $.post('{{ url("ajaxInsertWishlist") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $(".wishlist_" + product_id).addClass('active');
            });
        }

        function insertCartDetail(product_id) {
            var product_id_ = product_id;

            $.post('{{ url("ajaxInsertCart") }}', { product_id: product_id, qty: $("#CC-prodDetails-quantity").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                //alert(data);

                window.location.href = '{{ url("cart") }}';
            });
        }

        function clickColor(color_id) {
            $("#color_id").val(color_id);
        }
    </script>

    <script>
        function insertCart(product_id, qty) {
            var product_id_ = product_id;

            $.post('{{ url("ajaxInsertCart") }}', { product_id: product_id, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);

                //window.location.href = '{{ url("cart") }}';
            });
        }

        function minus(product_id, qty) {
            $.post('{{ url("ajaxUpdateCartProduct") }}', { product_id: product_id, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
                //$(".remove_cart_" + rawId).hide();

                var data_split = data.split('!@#$%^&*()_+');

                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        function removeCart(product_id) {
            $.post('{{ url("ajaxDeleteCartProduct") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
                //$(".remove_cart_" + rawId).hide();

                var data_split = data.split('!@#$%^&*()_+');

                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        $(document).ready(function(){
            $("body").on("click",".btn-cart",function(e){
                // e.preventDefault();
                var product_id = $(this).attr('rel');
                $(this).hide();
                $(this).parent().find(".qtyAddcart").show();
                $(this).parent().find(".input-number").val(1);

                insertCart(product_id, 1);
                return false;
            });

            $('.btn-number').click(function (e) {
                
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

                        minus(product_id, qty);

                    } else if (type == 'plus') {
                        if (currentVal < input.attr('max')) {
                            input.val(currentVal + 1).change();
                        }
                        if (parseInt(input.val()) == input.attr('max')) {
                            $(this).attr('disabled', true);
                        }

                        // var qty = input.val();
                        var product_id = $(this).attr('rel');
                        insertCart(product_id, 1);
                    }
                } else {
                    input.val(0);
                }
            });
            
            $('.input-number').change(function () {
                
                minValue = parseInt($(this).attr('min'));
                maxValue = parseInt($(this).attr('max'));
                valueCurrent = parseInt($(this).val());
                name = $(this).attr('name');
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
                if(valueCurrent <= 0){
                    $(this).parents(".contentProduct").find(".btn-cart").show();;
                    $(this).parents(".contentProduct").find(".qtyAddcart").hide();
                }
            }); 
        });
    </script>

</body>

</html>