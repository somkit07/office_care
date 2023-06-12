<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header') 
@php    
$pageName="wishlist";
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
                                รายการโปรด
                            </div>
                            <div class="contentacct">
                                <h2>{{ $count_wishlist }} รายการโปรด</h2>

                                <div class="row">
@if(!empty($wishlist))
    @foreach($wishlist as $r)
                                    <div class="col-lg-3 remove_wishlist_{{ $r->product_id }}">
                                        <div class="productgroup">
                                            <a href="#"><img src="{{ asset('public/uploads/product/'.$r->product_image) }}" alt="">
                                            </a>
                                            {{-- <a href="#" class="wishlist"><i class="fi fi-rr-heart"></i></a> --}}
                                            <div class="contentProduct pt-3">
                                                <a href="javascript:void(0);" class="btn btn-cart" rel="" onclick="insertCart('{{ $r->product_id }}', 1)"><i class="fi fi-rr-plus-small"></i> เพิ่มสินค้า</a>
                                                <div class="qtyAddcart" style="display:none;">
                                                    <div class="qty_group_cart">
                                                        <div class="input-group">
                                                            <span class="input-group-btn">
                                                                <button id="qty-minus" type="button" class="btn btn-default btn-number" data-type="minus" data-field="quant[<?php echo $r->product_id;?>]" rel="{{ $r->product_id }}">
                                                                    <i class="fi fi-rr-minus"></i>
                                                                </button>
                                                            </span>
                                                            <input id="CC-prodDetails-quantity_{{$r->product_id}}" type="text" name="quant[<?php echo $r->product_id;?>]" class="form-control input-number qty_{{ $r->product_id }}" value="1" min="0" max="100" rel="{{ $r->product_id }}" />
                                                            <span class="input-group-btn">
                                                                <button id="qty-plus" type="button" class="btn btn-default btn-number" data-type="plus" data-field="quant[<?php echo $r->product_id;?>]" rel="{{ $r->product_id }}">
                                                                    <i class="fi fi-rr-plus"></i>
                                                                </button>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="price pt-3">
                                                    ฿ {{ number_format($r->product_price, 0, '.', ',') }} {!! checkPrice($r->product_before_discount, $r->product_price) !!}
                                                </div>
                                                <a href="{{ url('product_detail/'.$r->product_id) }}" class="prddetails">
                                                    {{ $r->product_name }}
                                                </a>
                                            </div>
                                            <a href="javascript:removeWishlist('{{ $r->product_id }}');" onclick="return confirm('Confirm Delete');" class="btn btn-delete"><i class="fi fi-rr-trash"></i> ลบ</a>
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
        </div>
    </section>
    @include('frontend/inc_footer')

    <script>
        function removeWishlist(product_id) {
            $.post('{{ url("ajaxRemoveWishlist") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
                //$(".remove_wishlist_" + product_id).hide();
                
                alert('ทำการลบสินค้ารายการโปรดแล้ว');

                window.location.href = '{{ url("account_wishlist") }}';
            });
        }
    </script>

<script>
    function insertCart(product_id, qty) {
        var product_id_ = product_id;

        // alert(product_id_);
        // alert(qty);

        $.post('{{ url("ajaxInsertCart") }}', { product_id: product_id_, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
            var data_split = data.split('!@#$%^&*()_+');

            $("#topcart_desktop").attr("rel",data_split[0]);
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
        // alert(product_id);
        // alert(qty);

        $.post('{{ url("ajaxUpdateCartProduct") }}', { product_id: product_id, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
            //$(".remove_cart_" + rawId).hide();

            var data_split = data.split('!@#$%^&*()_+');

            $("#topcart_desktop").attr("rel",data_split[0]);
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

            $("#topcart_desktop").attr("rel",data_split[0]);
            $(".basket_cart").html(data_split[0]);
            $(".cart_sub_total").html(data_split[1]);
            $(".cart_discount").html(data_split[2]);
            $(".cart_shipping").html(data_split[3]);
            $(".cart_total").html(data_split[4]);
            $(".cart_pc_mobile").html(data_split[5]);
        });
    }

    function cart(){
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
    
    $(document).ready(function(){
        $("body").on("click",".btn-cart",function(e){

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
            console.log(valueCurrent);

            minus(product_id, $(".qty_" + product_id).val());

            if(valueCurrent <= 0){
                $(this).parents(".contentProduct").find(".btn-cart").show();;
                $(this).parents(".contentProduct").find(".qtyAddcart").hide();
            }
        });
    });

</script>
</body>

</html>