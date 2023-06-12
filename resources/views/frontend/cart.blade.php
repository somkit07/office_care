<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="cartpage" class="wrapperPages">
        <div class="container-fluid">

            <div class="symrighttop">
                <img src="{{ asset('public/frontend/images/half_orangeEllipsetwo.png') }}" alt="">
            </div>

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                    <div class="topichead">
                            <h1> ตะกร้าสินค้า <span>(<span class="basket_cart">{{ $count_basket }}</span> ชิ้น)</span></h1>
                        </div>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <div class="borderbox mt-4">
                            <div class="accordion cart_pc_mobile" id="accordionPanelsStayOpenExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                            aria-controls="panelsStayOpen-collapseOne">
                                            <span class="basket_cart">{{ $count_basket }}</span>&nbsp;ชิ้น
                                        </button>
                                    </h2>
@foreach(ShoppingCart::all() as $r)
                                    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show remove_cart_{{ $r->rawId() }}"
                                        aria-labelledby="panelsStayOpen-headingOne">
                                        <div class="accordion-body">
                                            <div class="groupcartprd">
                                                <div class="row mt-3">
                                                    <div class="col-lg-6">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <img src="{{ asset('public/uploads/product/'.$r->image) }}" alt="" class="img-fluid">
                                                            </div>
                                                            <div class="col-lg-8 contentbl">
                                                                {{ $r->name }}
                                                                <br>
                                                                สี {{ $r->color }}
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 text-lg-end">
                                                        <div class="price pt-3">
                                                            ฿ {{ number_format($r->price, 0, '.', ',') }} <br>
                                                            <span>฿ {{ number_format($r->product_before_discount, 0, '.', ',') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row text-end">
                                                    <div class="col-lg-2 offset-lg-8">
                                                        <a href="javascript:removeCart('{{ $r->rawId() }}');" onclick="return confirm('Confirm Delete');" class="smlink">Remove</a>
                                                        
                                                    </div>
                                                    <div class="col-lg-2">
                                                    <div class="qtyCart">
                                                            <div class="qty_group_cart mb-2">
                                                                <div class="input-group"> <span class="input-group-btn">
                                                                        <button id="qty-minus" type="button"
                                                                            class="btn btn-default btn-number minus_{{ $r->rawId() }}"
                                                                            {{-- disabled="disabled" data-type="minus" --}}
                                                                            data-field="quant[1]" onclick="minus('{{ $r->rawId() }}');">
                                                                            <i class="fi fi-rr-minus"></i>
                                                                        </button>
                                                                    </span>
                                                                    <input id="CC-prodDetails-quantity_{{ $r->rawId() }}" type="text"
                                                                        name="quant[1]"
                                                                        class="form-control input-number" value="{{ $r->qty }}"
                                                                        min="1" max="100">
                                                                    <span class="input-group-btn">
                                                                        <button id="qty-plus" type="button"
                                                                            class="btn btn-default btn-number plus_{{ $r->rawId() }}"
                                                                            data-type="plus" data-field="quant[1]" onclick="plus('{{ $r->rawId() }}');">
                                                                            <i class="fi fi-rr-plus"></i>
                                                                        </button>
                                                                    </span> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
@endforeach
                                </div>
                            </div>
                        </div>
                        <div class="borderbox mt-4">
                            <div class="topichead">
                                <h3>ที่อยู่จัดส่งสินค้า</h3>
                            </div>
                            <div class="accordion divradio">
@if(!empty($shippingAddress))
                                <div class="md-radio md-radio-inline radiocheck">
                                    <input id="member_address" type="radio" name="shipping_address" value="member_address" />
                                    <label for="member_address">
                                        <div>
                                            <div class="row">
                                                <div class="col">
                                                    {{ $shippingAddress->member_shipping_address_name_surname }}
                                                </div>
                                            </div>
                                            <div class="addresscontent">
                                                {{ $shippingAddress->member_shipping_address_address }} @if(!empty($tumbol)){{ $tumbol->name_in_thai }}@endif<br>
                                                @if(!empty($amphur)){{ $amphur->name_in_thai }}@endif <br>
                                                @if(!empty($province)){{ $province->name_in_thai }}@endif {{ $shippingAddress->member_shipping_address_postcode }} <br>
                                                {{ $shippingAddress->member_shipping_address_mobile }}
                                            </div>
                                        </div>
                                    </label>
                                </div>
@endif
                                <div class="md-radio md-radio-inline radiocheck">
                                    <input id="new_address" type="radio" name="shipping_address" value="new_address" />
                                    <label for="new_address">
                                        <div>
                                            <div class="row">
                                                <div class="col">
                                                    + เพิ่มที่อยู่ใหม่
                                                </div>
                                            </div>
                                        </div>
                                    </label>
                                    <section>
                                        <div class="row">
                                            <div class="col-lg-8">
                                                <div class="formdefault mt-4">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <input type="name" class="form-control" id="order_shipping_address_name_surname"
                                                                    placeholder="ชื่อ-นามสกุล">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class=" mb-3">
                                                                <input type="tel" class="form-control" id="order_shipping_address_mobile"
                                                                    placeholder="เบอร์ติดต่อ">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <input type="address" class="form-control" id="order_shipping_address_address"
                                                                    placeholder="ที่อยู่การจัดส่ง">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" name="province_id" id="province_id" onchange="changeProvince(this.value);">
                                                                    <option value="">จังหวัด</option>
@if(!empty($provinces)) 
    @foreach($provinces as $r)
                                                                    <option value="{{ $r->id }}">{{ $r->name_in_thai }}</option>
    @endforeach
@endif
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" name="amphur_id" id="amphur_id" onchange="changeAmphur(this.value);">
                                                                    <option value="">อำเภอ/เขต</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="input-group mb-3">
                                                                <select class="form-select"
                                                                    aria-label="Default select example" name="tumbol_id" id="tumbol_id">
                                                                    <option selected>ตำบล/แขวง</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <select class="form-select" aria-label="Default select example" name="order_shipping_address_postcode" id="order_shipping_address_postcode" required>
                                                                    <option selected>รหัสไปรษณีย์</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <br>
                                                {{-- <button class=" btn btn-primary">บันทึก</button>
                                                <button class="btn btn-cancel">ยกเลิก</button> --}}
                                            </div>
                                        </div>

                                    </section>

                                </div>
                            </div>
                        </div>
                    </div>
@php
$qty_inc = 0;
$sub_total_inc = 0;
foreach(ShoppingCart::all() as $r_inc) {
    $qty_inc += $r_inc->qty;

    $price_inc = $r_inc->price * $r_inc->qty;

    $sub_total_inc += $price_inc;
} 

$discount = 0;
$shipping = $shipping_price;

$total = $sub_total_inc - $discount + $shipping;
@endphp
                    <div class="col-lg-4">
                           <div class="sticky-top">
                        <div class="borderbox mt-4 mb-4">
                        <div class="topichead">
                                <h3>สรุปรายการ</h3>
                            </div>
                            <div class="row">
                                <div class="col-6 col-lg-6">ราคาสินค้า</div>
                                <div class="col-6 col-lg-6 text-end">฿ <span class="cart_sub_total">{{ number_format($sub_total_inc, 0, '.', ',')}}</span></div>
                                <div class="col-6 col-lg-6">ส่วนลด</div>
                                <div class="col-6 col-lg-6 text-end cart_discount">{{ number_format($discount, 0, '.', ',')}}</div>
                                <div class="col-6 col-lg-6">ค่าจัดส่ง</div>
                                <div class="col-6 col-lg-6 text-end cart_shipping">{{ number_format($shipping, 0, '.', ',')}}</div>
                                <div class="col-6 col-lg-6">ราคารวม</div>
                                <div class="col-6 col-lg-6 text-end"><span class="price">฿ <div class="cart_total" style="display: inline-block;">{{ number_format($total, 0, '.', ',')}}</div></span></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <div class="btngroup">
                                    {{-- <a href="{{ url('cart_success') }}" class="btn btn-width">ยืนยันสั่งซื้อ</a> --}}
                                    {{-- <a href="javascript:checkout();" class="btn btn-width">ยืนยันสั่งซื้อ</a> --}}

                                    {{-- Login แล้ว --}}
                                    @if(Session::get('member_id') != '')
                                        <a href="javascript:setQuatation();" class="btn btn-borderblue"><i class="fi fi-rr-download"></i> ดาวน์โหลด PDF</a>
                                    
                                        <a href="#" class="btn btn-subwidth"  data-width="948" data-height="700" data-fancybox data-src="#invoice" href="javascript:;"><i class="fi fi-rr-document-signed"></i> ขอใบเสนอราคา</a>
                                    {{-- End Login แล้ว --}}

                                    {{-- ยังไมได้ Login --}}
                                    @else
                                        <a href="javascript:setQuatation();" class="btn btn-borderblue" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fi fi-rr-download"></i> ดาวน์โหลด PDF</a>
                                    
                                        <a href="#" class="btn btn-subwidth" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fi fi-rr-document-signed"></i> ขอใบเสนอราคา</a>
                                    @endif
                                    {{-- End ยังไมได้ Login --}}
                            <div style="display: none;" id="invoice">
                            <form action="{{ url('saveQuatation') }}" method="post">
                                @csrf
                            <div class="topichead mb-3">
                                <h1>ขอใบเสนอราคา</h1>
                                <p>ขอบคุณสำหรับความสนใจสินค้าและบริการของเรา 
                                   กรุณากรอกแบบฟอร์มเพื่อขอใบเสนอราคา
                                            </p>
                            </div>
                            <div class="formdefault mt-4">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="quotation_company" name="quotation_company"
                                                placeholder="ชื่อบริษัท อื่นๆ">
                                            <label for="quotation_company">ชื่อบริษัท อื่นๆ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="quotation_contact" name="quotation_contact"
                                                placeholder="ชื่อผู้ติดต่อ" value="@if(!empty($row)){{ $row->member_name.' '.$row->member_surname }}@endif">
                                            <label for="quotation_contact">ชื่อผู้ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="quotation_tel" name="quotation_tel"
                                                placeholder="เบอร์ติดต่อ" value="@if(!empty($row)){{ $row->member_mobile }}@endif">
                                            <label for="quotation_tel">เบอร์ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="quotation_email" name="quotation_email"
                                                placeholder="อีเมล" value="@if(!empty($row)){{ $row->member_email }}@endif">
                                            <label for="quotation_email">อีเมล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" id="quotation_message" name="quotation_message"
                                                placeholder="ข้อความ">
                                            <label for="quotation_message">ข้อความ</label>
                                        </div>
                                    </div>
                                   

                                </div>
                            </div>

                            <br>
                          <center><input type="submit" class="btn btn-primary" value="ส่งคำขอใบเสนอราคา"></center>  
                        </form>
                        </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>


        </div>
    </section>
    @include('frontend/inc_footer')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        //plugin bootstrap minus and plus
        //http://jsfiddle.net/laelitenetwork/puJ6G/
        /*$('.btn-number').click(function (e) {
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
        $('.input-number').change(function () {
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
        */

        function minus(rawId) {
            //alert(rawId);
            // alert(parseInt($("#CC-prodDetails-quantity_" + rawId).val()) - 1);

            var qty = parseInt($("#CC-prodDetails-quantity_" + rawId).val());

            if(qty > 1) {
                qty = qty - 1;

                $.post('{{ url("ajaxUpdateCart") }}', { rawId: rawId, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
                    $("#CC-prodDetails-quantity_" + rawId).val(qty);

                    var data_split = data.split('!@#$%^&*()_+');

                    $(".basket_cart").html(data_split[0]);
                    $(".cart_sub_total").html(data_split[1]);
                    $(".cart_discount").html(data_split[2]);
                    $(".cart_shipping").html(data_split[3]);
                    $(".cart_total").html(data_split[4]);
                    $(".cart_pc_mobile").html(data_split[5]);
                });
            }
        }

        function plus(rawId) {
            //alert(rawId);
            // alert(parseInt($("#CC-prodDetails-quantity_" + rawId).val()) + 1);

            var qty = parseInt($("#CC-prodDetails-quantity_" + rawId).val()) + 1;

            $.post('{{ url("ajaxUpdateCart") }}', { rawId: rawId, qty: qty, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#CC-prodDetails-quantity_" + rawId).val(qty);

                var data_split = data.split('!@#$%^&*()_+');

                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        function removeCart(rawId) {
            $.post('{{ url("ajaxDeleteCart") }}', { rawId: rawId, "_token": "{{ csrf_token() }}" }, function(data) {
                $(".remove_cart_" + rawId).hide();

                var data_split = data.split('!@#$%^&*()_+');

                $(".basket_cart").html(data_split[0]);
                $(".cart_sub_total").html(data_split[1]);
                $(".cart_discount").html(data_split[2]);
                $(".cart_shipping").html(data_split[3]);
                $(".cart_total").html(data_split[4]);
                $(".cart_pc_mobile").html(data_split[5]);
            });
        }

        function changeProvince(province_id) {
            $.post('{{ url("ajaxChangeProvince") }}', { province_id: province_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#amphur_id").html(data);
            });
        }

        function changeAmphur(amphur_id) {
            $.post('{{ url("ajaxChangeAmphur") }}', { amphur_id: amphur_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $("#tumbol_id").html(data_split[0]);
                $("#order_shipping_address_postcode").html(data_split[1]);
            })
        }

        function removeAddress(member_shipping_address_id) {
            $.post('{{ url("ajaxRemoveAddress") }}', { member_shipping_address_id: member_shipping_address_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $(".member_shipping_address_" + member_shipping_address_id).hide();
            });
        }

        var member_id = '{{ Session::get("member_id") }}';

        function checkout() {
            if(member_id == '') {
                alert('กรุณาเข้าสู่ระบบ');
            } else if($("#member_address").is(":checked") == false && $("#new_address").is(":checked") == false) {
                alert('กรุณาเลือกที่อยู่จัดส่งสินค้า');
            } else if($("#new_address").is(":checked") == true && $("#order_shipping_address_name_surname").val() == '') {
                alert('กรุณากรอกชื่อ-นามสกุล');

                $("#order_shipping_address_name_surname").focus();
            } else if($("#new_address").is(":checked") == true && $("#order_shipping_address_mobile").val() == '') {
                alert('กรุณากรอกเบอร์ติดต่อ');

                $("#order_shipping_address_mobile").focus();
            } else if($("#new_address").is(":checked") == true && $("#order_shipping_address_address").val() == '') {
                alert('กรุณากรอกที่อยู่การจัดส่ง');

                $("#order_shipping_address_address").focus();
            } else if($("#new_address").is(":checked") == true && $("#province_id").val() == '') {
                alert('กรุณาเลือกจังหวัด');

                $("#province_id").focus();
            } else if($("#new_address").is(":checked") == true && $("#amphur_id").val() == '') {
                alert('กรุณาเลือกอำเภอ/เขต');

                $("#amphur_id").focus();
            } else if($("#new_address").is(":checked") == true && $("#tumbol_id").val() == '') {
                alert('กรุณาเลือกตำบล/แขวง');

                $("#tumbol_id").focus();
            } else if($("#new_address").is(":checked") == true && $("#order_shipping_address_postcode").val() == '') {
                alert('กรุณาเลือกรหัสไปรษณีย์');

                $("#order_shipping_address_postcode").focus();
            } else if($("#new_address").is(":checked") == true) {
                $.post('{{ url("ajaxCheckout") }}', {
                    'type': 'new_address',
                    'order_shipping_address_name_surname': $("#order_shipping_address_name_surname").val(),
                    'order_shipping_address_mobile': $("#order_shipping_address_mobile").val(),
                    'order_shipping_address_address': $("#order_shipping_address_address").val(),
                    'province_id': $("#province_id").val(),
                    'amphur_id': $("#amphur_id").val(),
                    'tumbol_id': $("#tumbol_id").val(),
                    'order_shipping_address_postcode': $("#order_shipping_address_postcode").val(),
                    "_token": "{{ csrf_token() }}"
                }, function(data) {
                    window.location.href = '{{ url("cart_success") }}/' + data;
                });
            } else if($("#member_address").is(":checked") == true) {
                $.post('{{ url("ajaxCheckout") }}', { 'type': 'member_address', "_token": "{{ csrf_token() }}" }, function(data) {
                    window.location.href = '{{ url("cart_success") }}/' + data;
                });
            }
        }

        var member_id = '{{ Session::get('member_id') }}';
        function setQuatation() {
            if(member_id == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'กรุณาเข้าสู่ระบบ'
                })
            } else if($("#member_address").is(":checked") == false && $("#new_address").is(":checked") == false) {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'กรุณาเลือกที่อยู่จัดส่ง'
                })
            } else if('{{ ShoppingCart::isEmpty() }}') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'กรุณาเพิ่มสินค้าในตระกร้า'
                })
            } else {
                if($("#member_address").is(":checked") == true) {
                    member_address = 'true';

                    member_shipping_address_name_surname = '';
                    member_shipping_address_mobile = '';
                    member_shipping_address_address = '';
                    province_id = '';
                    amphur_id = '';
                    tumbol_id = '';
                    member_shipping_address_postcode = '';
                } else if($("#new_address").is(":checked") == true) {
                    member_address = 'false';

                    member_shipping_address_name_surname = $("#order_shipping_address_name_surname").val();
                    member_shipping_address_mobile = $("#order_shipping_address_mobile").val();
                    member_shipping_address_address = $("#order_shipping_address_address").val();
                    province_id = $("#province_id").val();
                    amphur_id = $("#amphur_id").val();
                    tumbol_id = $("#tumbol_id").val();
                    member_shipping_address_postcode = $("#order_shipping_address_postcode").val();
                }

                $.post('{{ url("ajaxSavePdf") }}', { 
                    member_address: member_address, 
                    member_shipping_address_name_surname: member_shipping_address_name_surname, member_shipping_address_mobile: member_shipping_address_mobile, member_shipping_address_address: member_shipping_address_address, 
                    province_id: province_id, 
                    amphur_id: amphur_id, 
                    tumbol_id: tumbol_id, 
                    member_shipping_address_postcode: member_shipping_address_postcode, 
                    "_token": "{{ csrf_token() }}" }, function(data) {
                        //alert(data);
                        window.open('{{ url("savePdf") }}');
                });
            }
        }

        var check_login = '{{ Session::get("member_id") }}'

        function getQuotation() {
            if(check_login == '') {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'กรุณาเข้าสู่ระบบ'
                });

                return false;
            } else {
                return true;
            }
        }
    </script>
</body>

</html>