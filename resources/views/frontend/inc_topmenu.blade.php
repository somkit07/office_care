@include('sweetalert::alert')
@php
    $qty_inc = 0;
    $sub_total_inc = 0;
    foreach (ShoppingCart::all() as $r_inc) {
        $qty_inc += $r_inc->qty;
    
        $price_inc = $r_inc->price * $r_inc->qty;
    
        $sub_total_inc += $price_inc;
    }
    
    $category1_inc = DB::table('category1')
        ->orderBy('category1_id', 'asc')
        ->get();
    
    $keyword_product_inc = DB::table('keyword_product')
        ->orderBy('keyword_product_id')
        ->get();
@endphp
<section id="mainmenu">
    <div class="wrap_menu">
        <!-- <div class="anncetop">
        ออฟฟิศแคร์ ดูแล ออฟฟิศคุณ <span></span> 20 ปีที่ผูกพัน ดูแลกัน เคียงข้างคุณ
    </div> -->
        <!-- Desktop -->

        <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col menugroup">
                        <div class="menunavontop">
                            <div class="mainlogo">
                                <a href="{{ url('index') }}">
                                    <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                                </a>
                            </div>
                            <div class="menuprdandservice">
                                <div class="mainmenu">
                                    <!-- <li><a href="{{ url('product_index') }}"><i class="fi fi-rr-apps"></i> สินค้า</a></li> -->
                                    <li>
                                        <div class="cd-dropdown-wrapper">
                                            <a class="cd-dropdown-trigger" href="#0">
                                                <i class="fi fi-rr-apps"></i>
                                                <i class="fi fi-sr-apps"></i>
                                                สินค้า</a>
                                            <nav class="cd-dropdown">

                                                <ul class="cd-dropdown-content">
                                                    @if (!empty($category1_inc))
                                                        @foreach ($category1_inc as $r_inc)
                                                            <li class="has-children">
                                                                <a href="https://codyhouse.co/?p=748">{{ $r_inc->category1_name }}
                                                                </a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <div class="row"
                                                                        style="columns: 4;   display: block;">
                                                                        @php
                                                                            $category2_inc = DB::table('category2')
                                                                                ->where('category1_id', '=', $r_inc->category1_id)
                                                                                ->orderBy('category2_id', 'asc')
                                                                                ->get();
                                                                        @endphp

                                                                        @if (!empty($category2_inc))
                                                                            @foreach ($category2_inc as $r2_inc)
                                                                                <div class="col-md-3"
                                                                                    style="    break-inside: avoid;
    width: 100%;">
                                                                                    <div class="maincatname">
                                                                                        <a
                                                                                            href="{{ url('product/' . $r2_inc->category2_id) }}">{{ $r2_inc->category2_name }}</a>
                                                                                    </div>
                                                                                    @php
                                                                                        $category3_inc = DB::table('category3')
                                                                                            ->where('category2_id', '=', $r2_inc->category2_id)
                                                                                            ->orderBy('category3_id', 'asc')
                                                                                            ->get();
                                                                                    @endphp

                                                                                    @if (!empty($category3_inc))
                                                                                        @foreach ($category3_inc as $r3_inc)
                                                                                            <li>
                                                                                                <a class="cd-dropdown-item item-1"
                                                                                                    href="{{ url('product_sub/' . $r3_inc->category3_id) }}">
                                                                                                    {{ $r3_inc->category3_name }}
                                                                                                </a>
                                                                                            </li>
                                                                                        @endforeach
                                                                                    @endif
                                                                                    {{-- <li>
                                                                                <a class="cd-dropdown-item item-1"
                                                                                    href="#">
                                                                                    กระดาษความร้อน สลิปกระดาษ
                                                                                </a>
                                                                            </li> --}}

                                                                                </div>
                                                                            @endforeach
                                                                        @endif
                                                                        {{-- <div class="col-lg-4">
                                                                            <div class="maincatname">
                                                                                ผลิตภัณฑ์กระดาษ </div>
                                                                            <li>
                                                                                <a class="cd-dropdown-item item-1"
                                                                                    href="#">
                                                                                    test
                                                                                </a>
                                                                            </li>

                                                                        </div>
                                                                        <div class="col-lg-4">
                                                                            <div class="maincatname">
                                                                                ผลิตภัณฑ์กระดาษ </div>
                                                                            <li>
                                                                                <a class="cd-dropdown-item item-1"
                                                                                    href="#">
                                                                                    test
                                                                                </a>
                                                                            </li>

                                                                        </div> --}}
                                                                    </div>

                                                                </ul>
                                                                <!-- .cd-dropdown-icons -->
                                                            </li>
                                                        @endforeach
                                                    @endif
                                                    {{-- <li class="has-children">
                                                                <a href="https://codyhouse.co/?p=748">ไอทีและอิเล็คทรอนิกซ์
                                                                </a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            ปั้มน้ำ
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            ท่อพีพี
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            สปริงเกอร์
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            อุปกรณ์ประปา
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-children">
                                                                <a href="https://codyhouse.co/?p=748">เฟอร์นิเจอร์สำนักงาน
                                                                </a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-children">
                                                                <a
                                                                    href="https://codyhouse.co/?p=748">วัสดุงานครัว</a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li> --}}

                                                    <!-- .has-children -->

                                                </ul>

                                            </nav>
                                            <!-- .cd-dropdown -->
                                        </div>

                                    </li>



                                    <li>
                                        <div class="cd-dropdown-wrapper">
                                            <a class="cd-dropdown-trigger" href="#1">
                                                <i class="fi fi-rr-apps"></i>
                                                <i class="fi fi-sr-apps"></i>
                                                บริการ</a>
                                            <nav class="cd-dropdown">

                                                <ul class="cd-dropdown-content">
                                                    <li class="has-children">
                                                        <a
                                                            href="{{ url('service1') }}">ซ่อมเครื่องพิมพ์สำเนาระบบดิจิตอล</a>
                                                    </li>
                                                    <li class="has-children">
                                                        <a href="{{ url('service2') }}">บริการซ่อมเครื่องถ่ายเอกสาร</a>
                                                    </li>
                                                    <li class="has-children">
                                                        <a href="{{ url('service3') }}">บริการซ่อมเครื่อง Printer</a>
                                                    </li>
                                                    <li class="has-children">
                                                        <a
                                                            href="{{ url('service4') }}">บริการซ่อมเครื่องพิมพ์สำนักงานอื่นๆ</a>
                                                    </li>
                                                    <li class="has-children">
                                                        <a href="{{ url('service5') }}">บริการตรวจเช็ค
                                                            และทำความสะอาดเครื่องพิมพ์สำนักงาน</a>
                                                    </li>

                                                    <!-- <li><a href="{{ url('service') }}"><i class="fi fi-rr-apps"></i> บริการ</a>
                                                                <ul class="submenuone">
                                                                    <li><a href="{{ url('service1') }}">ซ่อมเครื่องพิมพ์สำเนาระบบดิจิตอล</a></li>
                                                                    <li><a href="{{ url('service2') }}">บริการซ่อมเครื่องถ่ายเอกสาร</a></li>
                                                                    <li><a href="{{ url('service3') }}">บริการซ่อมเครื่อง Printer</a></li>
                                                                    <li><a href="{{ url('service4') }}">บริการซ่อมเครื่องพิมพ์สำนักงานอื่นๆ</a></li>
                                                                    <li><a href="{{ url('service5') }}">บริการตรวจเช็ค และทำความสะอาดเครื่องพิมพ์สำนักงาน</a></li>
                                                                </ul>
                                                            </li> -->


                                                    {{-- <li class="has-children">
                                                                <a href="https://codyhouse.co/?p=748">ไอทีและอิเล็คทรอนิกซ์
                                                                </a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            ปั้มน้ำ
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            ท่อพีพี
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            สปริงเกอร์
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            อุปกรณ์ประปา
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-children">
                                                                <a href="https://codyhouse.co/?p=748">เฟอร์นิเจอร์สำนักงาน
                                                                </a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="has-children">
                                                                <a
                                                                    href="https://codyhouse.co/?p=748">วัสดุงานครัว</a>
                                                                <ul class="cd-dropdown-icons is-hidden">
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a class="cd-dropdown-item item-1" href="#">
                                                                            test
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li> --}}

                                                    <!-- .has-children -->

                                                </ul>

                                            </nav>
                                            <!-- .cd-dropdown -->
                                        </div>

                                    </li>


                                    <!-- <li><a href="{{ url('service') }}"><i class="fi fi-rr-apps"></i> บริการ</a>
                                                <ul class="submenuone">
                                                    <li><a href="{{ url('service1') }}">ซ่อมเครื่องพิมพ์สำเนาระบบดิจิตอล</a></li>
                                                    <li><a href="{{ url('service2') }}">บริการซ่อมเครื่องถ่ายเอกสาร</a></li>
                                                    <li><a href="{{ url('service3') }}">บริการซ่อมเครื่อง Printer</a></li>
                                                    <li><a href="{{ url('service4') }}">บริการซ่อมเครื่องพิมพ์สำนักงานอื่นๆ</a></li>
                                                    <li><a href="{{ url('service5') }}">บริการตรวจเช็ค และทำความสะอาดเครื่องพิมพ์สำนักงาน</a></li>
                                                </ul>
                                            </li> -->
                                </div>
                            </div>
                            <div class="searchbartop">
                                <div class="searchtop">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1"><i
                                                class="fi fi-rr-search"></i></span>
                                        <input type="text" class="form-control search_pc_mobile"
                                            placeholder="ค้นหาสินค้ากับ ออฟฟิศ แคร์" aria-label="search"
                                            value="@if (!empty($keyword_)) {{ $keyword_ }} @endif"
                                            aria-describedby="basic-addon1" id="search_pc">
                                            <input type="text" id="sun" autocomplete="off" style="width: 1px;height: 1px; border-color: #fff; color: #fff;opacity:0;">

                                    </div>
                                </div>
                            </div>
                            <div class="accttop text-end">
                                <div class="acctmenu_topmenu mt-3">
                                    <ul>
                                        <li class="topcart" id="topcart_desktop"
                                            rel="{{ number_format($qty_inc, 0, '.', ',') }}"><a
                                                href="{{ url('cart') }}"><i class="fi fi-rr-shopping-cart"></i> ฿
                                                <div class="cart_sub_total" style="display: inline-block;">
                                                    {{ number_format($sub_total_inc, 0, '.', ',') }}</div>
                                                <span
                                                    class="basket_cart">{{ number_format($qty_inc, 0, '.', ',') }}</span>
                                            </a></li>
                                        <li class="wishlist"><a href="{{ url('account_wishlist') }}"><i
                                                    class="fi fi-rr-heart"></i>
                                                <span class="fave">รายการโปรด</span> </a></li>
                                        <li class="acct">
                                            @if (Session::get('member_id') != '')
                                                <a href="{{ url('account_profile') }}"><i
                                                        class="fi fi-rr-user"></i></a>
                                            @else
                                                <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                                                    aria-controls="offcanvasRight"><i class="fi fi-rr-user"></i></a>
                                            @endif
                                            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                                                aria-labelledby="offcanvasRightLabel">
                                                <div class="offcanvas-header">

                                                    <button type="button" class="btn-close"
                                                        data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                </div>
                                                <div class="offcanvas-body">
                                                    <div class="join_us">
                                                        <div class="logosm">
                                                            <img src="{{ asset('public/frontend/images/mainlogo.svg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="topichead mb-3">
                                                            <h1>สร้างบัญชีออฟฟิศแคร์</h1>
                                                            <p>จัดการข้อมูลที่อยู่เพื่อการจัดส่ง</p>
                                                        </div>
                                                        <div class="formdefault mt-4">
                                                            <div class="row">
                                                                <form action="{{ url('saveMember') }}"
                                                                    method="post">
                                                                    @csrf
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="email" class="form-control"
                                                                                placeholder="อีเมล"
                                                                                name="member_email_inc"
                                                                                id="member_email_inc"
                                                                                onblur="checkEmailInc();" required>
                                                                            <label for="member_email_inc">อีเมล</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="member_name_inc"
                                                                                placeholder="ชื่อ"
                                                                                name="member_name_inc" required>
                                                                            <label for="member_name_inc">ชื่อ</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="text" class="form-control"
                                                                                id="member_surname_inc"
                                                                                placeholder="นามสกุล"
                                                                                name="member_surname_inc" required>
                                                                            <label
                                                                                for="member_surname_inc">นามสกุล</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="tel" class="form-control"
                                                                                id="member_mobile_inc"
                                                                                placeholder="เบอร์ติดต่อ"
                                                                                name="member_mobile_inc" required>
                                                                            <label
                                                                                for="member_mobile_inc">เบอร์ติดต่อ</label>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="col-lg-12">
                                                                    <div class="form-floating mb-3">
                                                                        <input type="tel" class="form-control"
                                                                            id="member_mobile_inc"
                                                                            placeholder="เบอร์ติดต่อ" name="member_mobile_inc" required>
                                                                        <label for="member_mobile_inc">เบอร์ติดต่อ</label>
                                                                    </div>
                                                                </div> --}}
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3"
                                                                            id="show_hide_password2">
                                                                            <input type="password"
                                                                                class="form-control"
                                                                                id="member_password_inc"
                                                                                placeholder="รหัสผ่าน"
                                                                                name="member_password_inc" required>
                                                                            <i class="bi bi-eye-slash"
                                                                                id="togglePassword2"></i>
                                                                            <label
                                                                                for="member_password_inc">รหัสผ่าน</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3"
                                                                            id="show_hide_password3">
                                                                            <input type="password"
                                                                                class="form-control"
                                                                                id="confirm_member_password_inc"
                                                                                placeholder="ยืนยันรหัสผ่าน"
                                                                                name="confirm_member_password_inc"
                                                                                onblur="checkConfirmPasswordInc();"
                                                                                required>
                                                                            <i class="bi bi-eye-slash"
                                                                                id="togglePassword3"></i>
                                                                            <label
                                                                                for="confirm_member_password_inc">ยืนยันรหัสผ่าน</label>
                                                                        </div>
                                                                    </div>
                                                                    <!-- <div class="col-lg-12">
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
                                                                </div> -->
                                                                    <div class="col-lg-12 text-center mt-4 mb-4">
                                                                        <input type="submit" class="btn-primary"
                                                                            value="สมัครสมาชิก">
                                                                        <div class="contentbl sizesm mt-5 mb-4">หรือ
                                                                            เชื่อมต่อกับบัญชีออนไลน์</div>
                                                                        <a href="#"
                                                                            class="btn btn-facebook"><img
                                                                                src="{{ asset('public/frontend/images/fb-icon.png') }}"
                                                                                alt="">เข้าสู่ระบบด้วย
                                                                            Facebook</a>
                                                                        <div class="contentbl sizesm mt-4">
                                                                            เป็นสมาชิกอยู่แล้ว? <a href="#"
                                                                                class="linkorg btn_login">เข้าสู่ระบบ
                                                                                <i
                                                                                    class="fi fi-rr-arrow-small-right"></i></a>
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
                                                        <div class="logosm">
                                                            <img src="{{ asset('public/frontend/images/mainlogo.svg') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="topichead mb-3">
                                                            <h1>เข้าสู่ระบบ</h1>
                                                            <p>หากคุณมีบัญชีให้ลงชื่อเข้าใช้ด้วยที่อยู่อีเมลของคุณ</p>
                                                        </div>
                                                        <div class="formdefault mt-4">
                                                            <form action="{{ url('login/frontend') }}"
                                                                method="post">
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3">
                                                                            <input type="email" class="form-control"
                                                                                id="member_email_login_inc"
                                                                                name="member_email_login_inc"
                                                                                placeholder="อีเมล" required>
                                                                            <label
                                                                                for="member_email_login_inc">อีเมล</label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-12">
                                                                        <div class="form-floating mb-3"
                                                                            id="show_hide_password">
                                                                            <input type="password"
                                                                                class="form-control"
                                                                                placeholder="รหัสผ่าน"
                                                                                name="member_password_login_inc"
                                                                                id="member_password_login_inc" />
                                                                            <i class="bi bi-eye-slash"
                                                                                id="togglePassword"></i>
                                                                            <label
                                                                                for="member_password_login_inc">รหัสผ่าน</label>
                                                                        </div>
                                                                    </div>
                                                                    {{-- <div class="col-lg-12">
                                                                    <div class="input-group passwordedit mb-3"
                                                                        id="show_hide_password">
                                                                        <span class="input-group-text">รหัสผ่าน</span>
                                                                        <input type="password" class="form-control" name="member_password_login_inc" id="member_password_login_inc" value="" required>
                                                                        <span class="input-group-text"><i
                                                                                class="fi fi-rr-eye"></i></span>
                                                                    </div>
                                                                </div> --}}
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-6 col-lg-6">
                                                                        <label
                                                                            class="check-container">บันทึกการเข้าสู่ระบบ
                                                                            <input type="checkbox">
                                                                            <span class="checkmark"></span>
                                                                        </label>
                                                                    </div>
                                                                    <div class="col-6 col-lg-6 text-end"><a
                                                                            href="#"
                                                                            class="smlink btn_password">ลืมรหัสผ่าน?</a>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12 text-center mt-4 mb-4">
                                                                        <input type="submit" class="btn-primary"
                                                                            value="เข้าสู่ระบบ">
                                                                        <div class="contentbl sizesm mt-5 mb-4">หรือ
                                                                            เชื่อมต่อกับบัญชีออนไลน์</div>
                                                                        <a href="#"
                                                                            class="btn btn-facebook"><img
                                                                                src="{{ asset('public/frontend/images/fb-icon.png') }}"
                                                                                alt="">
                                                                            เข้าสู่ระบบด้วย
                                                                            Facebook</a>

                                                                        <div class=" contentbl sizesm mt-4">
                                                                            ยังไม่ได้เป็นสมาชิก? <a href="#"
                                                                                class="linkorg btn_join_us">สมัครสมาชิก
                                                                                <i
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
                                                                            id="forget_password_inc"
                                                                            placeholder="อีเมล">
                                                                        <label for="forget_password_inc">อีเมล</label>
                                                                    </div>
                                                                    <span id="txt_forget_password"></span>
                                                                </div>

                                                            </div>

                                                            <div class="row">
                                                                <div class="col-lg-12 text-center mt-4 mb-4">
                                                                    <a href="javascript:forgetPasswordInc();"
                                                                        class="btn-primary">ขอรหัสผ่านใหม่</a>
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

            </div>
        </div>
        <div class="tagtopproduct">
            <div class="wrapper_pad">
                <div class="row">
                    <ul>
                        @if (!empty($keyword_product_inc))
                            @foreach ($keyword_product_inc as $r_inc)
                                <li><a
                                        href="{{ url('search/' . $r_inc->keyword_product_keyword) }}">{{ $r_inc->keyword_product_keyword }}</a>
                                </li>
                            @endforeach
                        @endif
                        {{-- <li><a href="#">กระดาษ</a></li>
                    <li><a href="#">แฟ้ม</a></li>
                    <li><a href="#">สมุด</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>


        <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-3 mobilemenu">
                        <a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
                            aria-controls="offcanvasExample">
                            <i class="fi fi-rr-menu-burger"></i>
                        </a>

                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample"
                            aria-labelledby="offcanvasExampleLabel">
                            <div class="offcanvas-header">

                                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <div id="menu" class="">
                                    <div class="menu-box">
                                        <div class="menu-wrapper-inner">
                                            <div class="menu-wrapper">
                                                <div class="menu-slider">
                                                    <div class="menu">
                                                        @if (Session::get('member_id') == '')
                                                            <a href="{{ url('login_register_mb') }}"
                                                                class="logmb">เข้าสู่ระบบหรือสมัครสมาชิก</a>
                                                        @else
                                                            <a href="{{ url('m_acct') }}"
                                                                class="logmb">บัญชีของฉัน</a>
                                                        @endif
                                                        <ul>

                                                            <li>
                                                                <div class="menu-item"><a href="{{ url('index') }}"
                                                                        class="">หน้าหลัก</a></div>
                                                            </li>


                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('about') }}">เกี่ยวกับเรา
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('contact') }}">ติดต่อเรา
                                                                    </a>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('account_wishlist') }}"><i
                                                                            class="fi fi-rr-heart"></i> รายการโปรด
                                                                    </a>
                                                                </div>
                                                            </li>

                                                            <li>
                                                                <div class="menu-item"><a href="#"
                                                                        class="menu-anchor" data-menu="2"> <i
                                                                            class="fi fi-rr-apps"></i>
                                                                        บริการ</a> <span class="detail">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="16" height="16"
                                                                            fill="currentColor"
                                                                            class="bi bi-chevron-right"
                                                                            viewBox="0 0 16 16">
                                                                            <path fill-rule="evenodd"
                                                                                d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                                                        </svg>
                                                                    </span>
                                                                </div>
                                                            </li>


                                                        </ul>
                                                    </div>




                                                    <div class="submenu menu" data-menu="2">
                                                        <div class="submenu-back">
                                                            <div class="menu-item"> <span class="detail back">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="16" height="16"
                                                                        fill="currentColor" class="bi bi-chevron-left"
                                                                        viewBox="0 0 16 16">
                                                                        <path fill-rule="evenodd"
                                                                            d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                                                    </svg>
                                                                </span><a href="#" class="menu-back"></a>
                                                            </div>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('service1') }}">ซ่อมเครื่องพิมพ์สำเนาระบบดิจิตอล
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('service2') }}">
                                                                        ซ่อมเครื่องถ่ายเอกสาร
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('service3') }}">
                                                                        ซ่อมเครื่องปริ้นเตอร์
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('service4') }}">
                                                                        ซ่อมเครื่องพิมพ์สำนักงานอื่นๆ
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="menu-item"><a
                                                                        href="{{ url('service5') }}">
                                                                        บริการตรวจเช็ค
                                                                        และทำความสะอาดเครื่องพิมพ์สำนักงาน
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>




                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <div class="col-6">
                        <div class="mainlogo">
                            <a href="index.php">
                                <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-3 text-end">
                        <div class="acctmenu_topmenu">
                            <ul>
                                <li class="topcart"><a href="{{ url('cart') }}"><i
                                            class="fi fi-rr-shopping-cart"></i>

                                        <span>{{ $qty_inc }}</span></a></li>


                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-2 mb-2">
                    <div class="col">
                        <div class="searchtop">
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1"><i
                                        class="fi fi-rr-search"></i></span>
                                <input type="text" class="form-control" placeholder="ค้นหาสินค้ากับ ออฟฟิศ แคร์"
                                    aria-label="search" aria-describedby="basic-addon1">
                                    <input type="text" id="sun" autocomplete="off" style="width: 1px;height: 1px; border-color: #fff; color: #fff;opacity:0;">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <ul class=" mpbileslide">
                        <div class="Cropscroll">
                            @php
                                $mobile_category_inc = DB::table('category1')
                                    ->orderBy('category1_id', 'asc')
                                    ->get();
                            @endphp

                            @if (!empty($mobile_category_inc))
                                @foreach ($mobile_category_inc as $r_inc)
                                    <li><a
                                            href="{{ url('mobile_category/' . $r_inc->category1_id) }}">{{ $r_inc->category1_name }}</a>
                                    </li>
                                @endforeach
                            @endif
                            {{-- <li><a href="mobile_category.php">ไอทีและอิเล็คทรอนิกซ์</a></li>
                            <li><a href="mobile_category.php">เฟอร์นิเจอร์สำนักงาน</a></li>
                            <li><a href="mobile_category.php">วัสดุงานครัว</a></li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>

    </div>
</section>
<div class="overlay_bg">

</div>
<script>
    $('.cd-dropdown-trigger').bind("click", function() {
        if ($(this).hasClass("dropdown-is-active") === false) {
            $('.overlay_bg').show();
        } else {
            $('.overlay_bg').hide();
        }
    });
    $('.overlay_bg').click(function() {
        $('.cd-dropdown-trigger').removeClass("dropdown-is-active");
        $('.cd-dropdown').removeClass("dropdown-is-active");
        $('.overlay_bg').hide();
    });
    // All of this is required
    var nav = $('.mainmenufixed'); // The element we're animating 
    var triggerHeight = nav.outerHeight() /
        2; // Height at which the nav will trigger open/close. Set here to hide when text starts to become obscured.
    var toggled = false; // Required to eliminate unnecessary triggering
    var last = $(document).scrollTop(); // Used to save last scroll to detect scroll up
    var first = true; // Used to save last state for testing
    $(window).scroll(function() {
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
    $(document).ready(function() {
        $("#togglePassword").on('click', function(event) {
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

        $("#togglePassword2").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password2 input').attr("type") == "text") {
                $('#show_hide_password2 input').attr('type', 'password');
                $('#show_hide_password2 i').addClass("fa-eye-slash");
                $('#show_hide_password2 i').removeClass("fa-eye");
            } else if ($('#show_hide_password2 input').attr("type") == "password") {
                $('#show_hide_password2 input').attr('type', 'text');
                $('#show_hide_password2 i').removeClass("fa-eye-slash");
                $('#show_hide_password2 i').addClass("fa-eye");
            }
        });

        $("#togglePassword3").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_password3 input').attr("type") == "text") {
                $('#show_hide_password3 input').attr('type', 'password');
                $('#show_hide_password3 i').addClass("fa-eye-slash");
                $('#show_hide_password3 i').removeClass("fa-eye");
            } else if ($('#show_hide_password3 input').attr("type") == "password") {
                $('#show_hide_password3 input').attr('type', 'text');
                $('#show_hide_password3 i').removeClass("fa-eye-slash");
                $('#show_hide_password3 i').addClass("fa-eye");
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('.btn_join_us').click(function(event) {
            $('.login').hide();
            $('.resetpassword').hide();
            $('.join_us').fadeIn();
            event.preventDefault();
        });
        $('.btn_login').click(function(event) {
            $('.join_us').hide();
            $('.resetpassword').hide();
            $('.login').fadeIn();
            event.preventDefault();
        });
        $('.btn_password').click(function(event) {
            $('.join_us').hide();
            $('.login').hide();
            $('.resetpassword').fadeIn();
            event.preventDefault();
        });

        const togglePassword = document
            .querySelector('#togglePassword');

        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', () => {

            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';

            password.setAttribute('type', type);

            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    });

    // function testForm(test) {
    //     alert(test + test);
    // }

    function checkEmailInc() {
        $.post('{{ url('ajaxCheckEmail') }}', {
            member_email: $("#member_email_inc").val(),
            "_token": "{{ csrf_token() }}"
        }, function(data) {

            if (data == 'true') {
                $("#member_email_inc").val('');

                alert('อีเมล์นี้มีผู้ใช้อยู่แล้ว');
            }
        });
    }

    function checkConfirmPasswordInc() {
        if ($("#member_password_inc").val() != $("#confirm_member_password_inc").val()) {
            alert('ยืนยันรหัสผ่านไม่ถูกต้อง');

            $("#member_password_inc").val('');
            $("#confirm_member_password_inc").val('');
        }
    }

    // $(document).on('keypress', '.search_pc_mobile', function(e) {
    //     // if(e.which == 13) {
    //     //     if($(".search_pc_mobile").val() != '') {
    //     //         window.location.href = '{{ url('search') }}/' + $(".search_pc_mobile").val();
    //     //     }
    //     // }
    // });

    $(document).on('keyup', '.search_pc_mobile', function(e) {
        e.preventDefault();
        let search = $(this).val();
        if (e.key === "Enter" || e.key == 13) {
            window.location.href = '{{ url('search') }}/' + search;
        }
    });
</script>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 25) {
            $('.wrap_menu').addClass("sticky");
        } else {
            $('.wrap_menu').removeClass("sticky");
        }

    });
    $(document).ready(function() {
        var mmH = $('.wrap_menu').outerHeight(true);

        $('.wrapperPages').eq(0).css('padding-top', mmH);


    });

    function forgetPasswordInc() {
        //alert($("#forget_password_inc").val());
        if ($("#forget_password_inc").val() == '') {
            //alert('กรุณากรอกอีเมล์');
            $("#txt_forget_password").html('<span style="color:red;">กรุณากรอกอีเมล์</span>');

            $("#forget_password_inc").focus();
        } else if (!isEmailInc($("#forget_password_inc").val())) {
            //alert('อีเมล์มีฟอร์แมตไม่ถูกต้อง');

            $("#txt_forget_password").html('<span style="color:red;">อีเมล์มีฟอร์แมตไม่ถูกต้อง</span>');


            $("#forget_password_inc").val('');

            $("#forget_password_inc").focus();
        } else {
            // alert($("#forget_password_inc").val());

            $.post('{{ url('forgetPassword') }}', {
                member_email: $("#forget_password_inc").val(),
                "_token": "{{ csrf_token() }}"
            }, function(data) {
                // alert(data);
                if (data == 'true') {
                    $("#txt_forget_password").html(
                        '<span style="color:green;">ได้ส่ง Reset รหัสผ่านไปทางอีเมล์ของคุณ</span>');
                } else {
                    $("#txt_forget_password").html('<span style="color:red;">' + data + '</span>');
                }
            })
        }
    }

    function isEmailInc(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
    }
</script>

<script>
    var menu_width;

    jQuery(document).ready(
        function() {

            initMenu();

        });

    function initMenu() {
        menu_width = $("#menu .menu").width();

        $(".menu-back").click(function() {

            var _pos = $(".menu-slider").position().left + menu_width;
            var _obj = $(this).closest(".submenu");

            $(".menu-slider").stop().animate({
                left: _pos
            }, 300, function() {
                _obj.hide();
            });

            return false;
        });

        $(".menu-anchor").click(function() {
            var _d = $(this).data('menu');
            $(".submenu").each(function() {

                var _d_check = $(this).data('menu');

                if (_d_check == _d) {
                    $(this).show();
                    var _pos = $(".menu-slider").position().left - menu_width;

                    $(".menu-slider").stop(true, true).animate({
                        left: _pos
                    }, 300);
                    return false;
                }
            });

            return false;
        });

    }
</script>
