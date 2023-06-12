<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="topbanner" class="wrapperPages">
        <div class="container-fluid g-o overflow-hidden">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <div class="banner_slide owl-carousel owl-theme">
@if(!empty($banner_slide))
    @foreach($banner_slide as $r)
                            <div class="item">
                                <!-- PC -->
                                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                                    <img src="{{ asset('public/uploads/banner_slide/'.$r->banner_slide_image) }}" alt="">
                                </div>
                                <div class="bigbanner_caption">
                                    {{ $r->banner_slide_text1 }} <br>
                                    {{ $r->banner_slide_text2 }}
                                    <br>
                                    <a href="{{ $r->banner_slide_link }}" class="mt-3 btn btn-light">ช้อปเลย</a>
                                </div>
                                <!-- MB -->
                                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                                    <a href="{{ $r->banner_slide_link }}"><img src="{{ asset('public/uploads/banner_slide/'.$r->banner_slide_image) }}" alt=""></a>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="bannersm">
                            <img src="{{ asset('public/frontend/images/banner_sm.png') }}" class="img-fluid" alt="">
                            <div class="smbanner_caption">
                                จัดการสำนักงานของคุณ <br>
                                ให้สะดวกต่อการใช้งาน
                            </div>
                            <div class="smbanner_sec">
                                เราพร้อมตอบสนองทุกความต้องการ และอยู่เคียงข้างคุณ

                            </div>
                            <span><i class="bi bi-arrow-up-right"></i></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="indexpage">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            <span class="bestsellertag">Best <br> Seller</span>
                            สินค้าขายดี
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
@if(!empty($product_best_seller))
    @foreach($product_best_seller as $r)
                    <div class="col-6 col-lg-3">
                        <div class="productgroup">
                            <a href="{{ url('product_detail/'.$r->product_id) }}"><img src="{{ asset('public/uploads/product/'.$r->product_image) }}" alt="">
                            </a>
                            <a href="javascript:insertWishlist({{ $r->product_id }});" class="wishlist"><i class="fi fi-rr-heart"></i></a>
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
                                    ฿ {{ number_format($r->product_price, 2) }} <span>฿ {{ number_format($r->product_before_discount, 2) }}</span>
                                </div>
                                <p>
                                    <!-- เครื่องถ่ายเอกสารดิจิตอลขาว-ดำ
                                    Kyocera Ecosys FS6530 -->
                                    {{ $r->product_name }}
                                </p>
                            </div>
                        </div>
                    </div>
    @endforeach
@endif
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="midbanner">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="text">
                                        <h5>สินค้าราคาดีที่สุด <br>
                                            ที่คุณต้องการ
                                            <span>อยู่ที่นี่แล้ว!</span>
                                        </h5>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="fromtop">
                                        <a href="#" class="btn btn-light">ช้อปเลย</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            เลือกช้อปตามแบรนด์
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="brandsCover">
                            <img src="{{ asset('public/frontend/images/brands_pic_cover.png') }}" class="img-fluid" alt="">
                            <a href="#" class="btn btn-light mt-4">แบรนด์ทั้งหมด</a>
                            <span><img src="{{ asset('public/frontend/images/Ellipse.png') }}" alt=""></span>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
@if(!empty($product_brand))
    @foreach($product_brand as $r)
                            <div class="col-lg-6">
                                <div class="brandgroup hoverstyle">
                                    <figure>
                                        <a href="#">
                                            <img src="{{ asset('public/uploads/product/'.$r->brand_image) }}" alt="">
                                        </a>
                                    </figure>
                                    <div class="logobrand">
                                        <img src="{{ asset('public/uploads/product/'.$r->brand_image2) }}" alt="">
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
@if(!empty($category1))
    @foreach($category1 as $r)
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            {{ $r->category1_name }}
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="category_slide owl-carousel owl-theme">
        @if(!empty($category2))
            @foreach($category2 as $r2)
                @if($r->category1_id == $r2->category1_id)
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('public/uploads/category2/'.$r2->category2_image) }}" alt="">
                                    </a>
                                </figure>
                                <span>{{ $r2->category2_name }}</span>
                            </div>
                @endif
            @endforeach
        @endif
                            {{-- <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('public/frontend/images/cat_paper.png') }}" alt="">
                                    </a>
                                </figure>
                                <span>กระดาษ</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('public/frontend/images/cat_book.png') }}" alt="">
                                    </a>
                                </figure>
                                <span>สมุดโน๊ต</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                    </a>
                                </figure>
                                <span>แฟ้ม</span>

                            </div>
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#">
                                        <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                    </a>
                                </figure>
                                <span>แฟ้ม</span>

                            </div> --}}
                        </div>
                    </div>
                </div>
    @endforeach
@endif
            </div>
        </div>
    </section>
    <section id="newsindex">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            ข่าวสาร & โปรโมชั่น
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="news_slide owl-carousel owl-theme">
@if(!empty($news_promotion))
    @foreach($news_promotion as $r)
                            <div class="item hoverstyle">
                                <figure>
                                    <a href="#"><img src="{{ asset('public/uploads/news/'.$r->news_promotion_image) }}" alt=""></a>
                                </figure>
                                <a href="">
                                    <div class="newscontent">
                                        {{ $r->news_promotion_name }}
                                    </div>
                                </a>
                                <div class="date">
                                    {{ date2dateBasicThai($r->news_promotion_date) }}
                                </div>
                            </div>
    @endforeach
@endif
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
            $('.news_slide').owlCarousel({
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
                        items: 3
                    }
                }
            })
            $('.category_slide').owlCarousel({
                loop: true,
                margin: 50,
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

        function insertWishlist(product_id) {
            $.post('{{ url("ajaxInsertWishlist") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
                alert(data);
            });
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