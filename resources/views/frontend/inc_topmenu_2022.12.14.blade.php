@php
$qty_inc = 0;
$sub_total_inc = 0;
foreach(ShoppingCart::all() as $r_inc) {
    $qty_inc += $r_inc->qty;

    $price_inc = $r_inc->price * $r_inc->qty;

    $sub_total_inc += $price_inc;
}   
@endphp
<section id="mainmenu">
    <div class="anncetop">
        ออฟฟิศแคร์ ดูแล ออฟฟิศคุณ <span></span> 20 ปีที่ผูกพัน ดูแลกัน เคียงข้างคุณ
    </div>
    <!-- Desktop -->
    <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="wrapper_pad">
                <div class="mainmenufixed">
                    <div class="menugroup">
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div class="mainlogo">
                                    <a href="{{ url('index') }}">
                                        <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-6 g-0">
                                <div class="row mt-3">
                                    <div class="col-lg-3 g-0">
                                        <div class="mainmenu">
                                            <li><a href="{{ url('product_index') }}"><i class="fi fi-rr-apps"></i> สินค้า</a></li>
                                            <li><a href="{{ url('service') }}"><i class="fi fi-rr-apps"></i> บริการ</a></li>
                                        </div>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="searchtop">
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1"><i
                                                        class="fi fi-rr-search"></i></span>
                                                <input type="text" class="form-control search_pc_mobile"
                                                    placeholder="ค้นหาสินค้ากับ ออฟฟิศ แคร์" aria-label="search" value="@if(!empty($keyword_)){{ $keyword_ }}@endif"
                                                    aria-describedby="basic-addon1" id="search_pc">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 text-end">
                                <div class="acctmenu_topmenu mt-3">
                                    <ul>
                                        <li class="topcart"><a href="{{ url('cart') }}"><i class="fi fi-rr-shopping-cart"></i> ฿
                                                <div class="cart_total" style="display: inline-block;">{{ number_format($sub_total_inc, 0, '.', ',') }}</div>
                                                <span class="basket_cart">{{ number_format($qty_inc, 0, '.', ',')}}</span></a></li>
                                        <li class="wishlist"><a href="{{ url('account_wishlist') }}"><i
                                                    class="fi fi-rr-heart"></i>
                                                รายการโปรด</a></li>
                                        <li class="acct">
@if(Session::get('member_id') != '')
                                            <a href="{{ url('account_profile') }}"><i class="fi fi-rr-user"></i></a> <a href="{{ url('logout/frontend') }}">Logout</a>
@else
                                            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                aria-controls="offcanvasRight"><i class="fi fi-rr-user"></i></a>
@endif
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                                aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">

                                                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <div class="join_us">
                                                        <div class="topichead mb-3">
                                                            <h1>สร้างบัญชีออฟฟิศแคร์</h1>
                                                            <p>จัดการข้อมูลที่อยู่เพื่อการจัดส่ง</p>
                                                        </div>
                                                        <div class="formdefault mt-4">
                                                            <div class="row">
                                                                <form action="{{ url('saveMember') }}" method="post">
                                                                    @csrf
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control" placeholder="อีเมล" name="member_email_inc" id="member_email_inc" onblur="checkEmailInc();" required>
                                                                        <label for="member_email_inc">อีเมล</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="member_name_inc" placeholder="ชื่อ" name="member_name_inc" required>
                                                                        <label for="member_name_inc">ชื่อ</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="text" class="form-control"
                                                                            id="member_surname_inc" placeholder="นามสกุล" name="member_surname_inc" required>
                                                                        <label for="member_surname_inc">นามสกุล</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="tel" class="form-control"
                                                                            id="member_mobile_inc"
                                                                            placeholder="เบอร์ติดต่อ" name="member_mobile_inc" required>
                                                                        <label for="member_mobile_inc">เบอร์ติดต่อ</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="input-group passwordedit mb-3"
                                                                        id="show_hide_password">
                                                                        <span class="input-group-text">รหัสผ่าน</span>
                                                                        <input type="password" class="form-control" name="member_password_inc" id="member_password_inc" required>
                                                                        <span class="input-group-text"><i
                                                                                class="fi fi-rr-eye"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="input-group passwordedit mb-3">
                                                                        <span
                                                                            class="input-group-text">ยืนยันรหัสผ่าน</span>
                                                                        <input type="password" class="form-control" name="confirm_member_password_inc" id="confirm_member_password_inc" onblur="checkConfirmPasswordInc();" required>
                                                                        <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12 text-center mt-4 mb-4">
                                                                    <input type="submit" class="btn-primary" value="สมัครสมาชิก">
                                                                    <div class="contentbl sizesm mt-5 mb-4">หรือ เชื่อมต่อกับบัญชีออนไลน์</div>
                                                                    <a href="#" class="btn btn-facebook"><img src="{{ asset('public/frontend/images/fb-icon.png') }}" alt="">เข้าสู่ระบบด้วย Facebook</a>
                                                                    <div class="contentbl sizesm mt-4">
                                                                        เป็นสมาชิกอยู่แล้ว? <a href="#" class="linkorg btn_login">เข้าสู่ระบบ <i class="fi fi-rr-arrow-small-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="acct_login_regis mt-3">
                                                            <div class="pdpaaccpt">
                                                                การคลิกที่ปุ่มสมัครสมาชิก ถือว่าท่านได้ยอมรับ <a
                                                                    href="#">
                                                                    ข้อกำหนดเงื่อนไข</a> และ <a
                                                                    href="#">นโยบายความเป็นส่วนตัว</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="login">
                                                        <div class="topichead mb-3">
                                                            <h1>เข้าสู่ระบบ</h1>
                                                            <p>หากคุณมีบัญชีให้ลงชื่อเข้าใช้ด้วยที่อยู่อีเมลของคุณ</p>
                                                        </div>
                                                        <div class="formdefault mt-4">
                                                            <form action="{{ url('login/frontend') }}" method="post">
                                                            @csrf
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="email" class="form-control"
                                                                            id="member_email_login_inc" name="member_email_login_inc" placeholder="อีเมล" required>
                                                                        <label for="member_email_login_inc">อีเมล</label>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-12">
                                                                    <div class="input-group passwordedit mb-3"
                                                                        id="show_hide_password">
                                                                        <span class="input-group-text">รหัสผ่าน</span>
                                                                        <input type="password" class="form-control" name="member_password_login_inc" id="member_password_login_inc" value="" required>
                                                                        <span class="input-group-text"><i
                                                                                class="fi fi-rr-eye"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-6 col-lg-6">
                                                                    <label class="check-container">บันทึกการเข้าสู่ระบบ
                                                                        <input type="checkbox">
                                                                        <span class="checkmark"></span>
                                                                    </label>
                                                                </div>
                                                                <div class="col-6 col-lg-6 text-end"><a href="#"
                                                                        class="smlink btn_password">ลืมรหัสผ่าน?</a>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-12 text-center mt-4 mb-4">
                                                                    <input type="submit" class="btn-primary" value="เข้าสู่ระบบ">
                                                                    <div class="contentbl sizesm mt-5 mb-4">หรือ
                                                                        เชื่อมต่อกับบัญชีออนไลน์</div>
                                                                    <a href="#" class="btn btn-facebook"><img
                                                                            src="{{ asset('public/frontend/images/fb-icon.png') }}" alt="">
                                                                        เข้าสู่ระบบด้วย
                                                                        Facebook</a>

                                                                    <div class=" contentbl sizesm mt-4">
                                                                        ยังไม่ได้เป็นสมาชิก? <a href="#"
                                                                            class="linkorg btn_join_us">สมัครสมาชิก <i
                                                                                class="fi fi-rr-arrow-small-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="resetpassword">
                                                        <div class="topichead mb-3">
                                                            <h1>ลืมรหัสผ่าน</h1>
                                                            <p>กรุณากรอกอีเมล ที่ใช้ลงทะเบียน</p>
                                                        </div>
                                                        <div class="formdefault mt-4">
                                                            <div class="row">
                                                                <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="name" class="form-control"
                                                                            id="floatingInput" placeholder="อีเมล">
                                                                        <label for="floatingInput">อีเมล</label>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12 text-center mt-4 mb-4">
                                                                    <a href="#" class="btn-primary">ขอรหัสผ่านใหม่</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="tagtopproduct">
                        <ul>
                            <li><a href="#">ปากกา</a></li>
                            <li><a href="#">กระดาษ</a></li>
                            <li><a href="#">แฟ้ม</a></li>
                            <li><a href="#">สมุด</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <div class="mainmenufixed">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3"></div>
                    <div class="col-6">
                        <div class="mainlogo">
                            <a href="{{ url('index') }}">
                                <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="searchtop">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i class="fi fi-rr-search"></i></span>
                                <input type="text" class="form-control search_pc_mobile" placeholder="ค้นหาสินค้ากับ ออฟฟิศ แคร์" aria-label="search" aria-describedby="basic-addon1" id="search_mobile" value="@if(!empty($keyword_)){{ $keyword_ }}@endif">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<script>
    // All of this is required
    var nav = $('.mainmenufixed'); // The element we're animating 
    var triggerHeight = nav.outerHeight() /
        2; // Height at which the nav will trigger open/close. Set here to hide when text starts to become obscured.
    var toggled = false; // Required to eliminate unnecessary triggering
    var last = $(document).scrollTop(); // Used to save last scroll to detect scroll up
    var first = true; // Used to save last state for testing
    $(window).scroll(function () {
        // Prevent scroll bind from executing on page load
        if (first == false) {
            // Grab the current location of the document
            var offset = $(document).scrollTop();
            // If it's past the trigger, and it hasn't already been toggled, animate it up
            if (offset > triggerHeight && toggled == false) {
                nav.removeClass('animated fadeInDownShort');
                nav.addClass('animated fadeOutUpShort');
                toggled = true;
                // If it's below the trigger, and it hasn't already been toggled, animate it back down
            } else if (offset < triggerHeight && toggled == true) {
                nav.removeClass('animated fadeOutUpShort');
                nav.addClass('animated fadeInDownShort');
                toggled = false;
            }
            // Detect if the user is scrolling up based on last position
            if (offset <= last) {
                nav.addClass('nav--fixed');
                nav.removeClass('animated fadeOutUpShort');
                nav.addClass('animated fadeInDownShort');
                toggled = false;
                // If they've reached the top, remove the fixed nav.
                if (offset == 0) {
                    nav.removeClass('nav--fixed');
                }
            };
            // Useful debugging
            // console.log("Toggle: " + toggled + " - Offset: " + offset + " - Last: " + last);
            last = $(document).scrollTop(); // Save this position for next scroll event
        }
        // After initial load, change to false to allow scroll bind to run.
        first = false;
    });
</script>
<script>
    $(document).ready(function () {
        $("#show_hide_password a").on('click', function (event) {
            event.preventDefault();
            if ($('#show_hide_password input').attr("type") == "text") {
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass("fa-eye-slash");
                $('#show_hide_password i').removeClass("fa-eye");
            } else if ($('#show_hide_password input').attr("type") == "password") {
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass("fa-eye-slash");
                $('#show_hide_password i').addClass("fa-eye");
            }
        });
    });
</script>
<script>
    $(document).ready(function () {
        $('.btn_join_us').click(function (event) {
            $('.login').hide();
            $('.resetpassword').hide();
            $('.join_us').fadeIn();
            event.preventDefault();
        });
        $('.btn_login').click(function (event) {
            $('.join_us').hide();
            $('.resetpassword').hide();
            $('.login').fadeIn();
            event.preventDefault();
        });
        $('.btn_password').click(function (event) {
            $('.join_us').hide();
            $('.login').hide();
            $('.resetpassword').fadeIn();
            event.preventDefault();
        });
    });

    // function testForm(test) {
    //     alert(test + test);
    // }

    function checkEmailInc() {
        $.post('{{ url("ajaxCheckEmail") }}', { member_email: $("#member_email_inc").val(), "_token": "{{ csrf_token() }}" }, function(data) {

            if(data == 'true') {
                $("#member_email_inc").val('');
                
                alert('อีเมล์นี้มีผู้ใช้อยู่แล้ว');
            }
        });
    }

    function checkConfirmPasswordInc() {
        if($("#member_password_inc").val() != $("#confirm_member_password_inc").val()) {
            alert('ยืนยันรหัสผ่านไม่ถูกต้อง');

            $("#member_password_inc").val('');
            $("#confirm_member_password_inc").val('');
        }
    }

    // $(document).on('keypress', '.search_pc_mobile', function(e) {
    //     // if(e.which == 13) {
    //     //     if($(".search_pc_mobile").val() != '') {
    //     //         window.location.href = '{{ url("search") }}/' + $(".search_pc_mobile").val();
    //     //     }
    //     // }
    // });

    $(document).on('keyup', '.search_pc_mobile', function(e){
        e.preventDefault();
        let search = $(this).val();
        if(e.key ==="Enter" || e.key == 13){
            window.location.href = '{{ url("search") }}/' + search;
        }
    });
</script>