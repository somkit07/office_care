<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <div class="container-fluid wrapperPages">
        <div class="wrapper_pad">
            <div class="row">
                <div class="col">
                    <div class="join_us">
                        <div class="logosm">
                            <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                        </div>
                        <div class="topichead mb-3">
                            <h1>สร้างบัญชีออฟฟิศแคร์</h1>
                            <p>จัดการข้อมูลที่อยู่เพื่อการจัดส่ง</p>
                        </div>
                        <div class="formdefault mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="member_email" placeholder="อีเมล">
                                        <label for="member_email">อีเมล</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="member_name" placeholder="ชื่อ">
                                        <label for="member_name">ชื่อ</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="member_surname" ห
                                            placeholder="นามสกุล">
                                        <label for="member_surname">นามสกุล</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="member_mobile"
                                            placeholder="เบอร์ติดต่อ">
                                        <label for="member_mobile">เบอร์ติดต่อ</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-group passwordedit mb-3" id="show_hide_password">
                                        <span class="input-group-text">รหัสผ่าน</span>
                                        <input type="password" class="form-control" id="member_password">
                                        <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-group passwordedit mb-3">
                                        <span class="input-group-text">ยืนยันรหัสผ่าน</span>
                                        <input type="password" class="form-control" id="confirm_member_password">
                                        <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                    </div>
                                </div>
                                <div class="col-lg-12 text-center mt-4 mb-4">
                                    <a href="javascript:register();" class="btn-primary">สมัครสมาชิก</a>
                                    <div class="contentbl sizesm mt-5 mb-4">หรือ
                                        เชื่อมต่อกับบัญชีออนไลน์</div>
                                    <a href="#" class="btn btn-facebook"><img src="{{ asset('public/frontend/images/fb-icon.png') }}" alt="">
                                        เข้าสู่ระบบด้วย
                                        Facebook</a>
                                    <div class=" contentbl sizesm mt-4">
                                        เป็นสมาชิกอยู่แล้ว? <a href="#" class="linkorg btn_login">เข้าสู่ระบบ <i
                                                class="fi fi-rr-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="acct_login_regis mt-3">
                            <div class="pdpaaccpt">
                                การคลิกที่ปุ่มสมัครสมาชิก ถือว่าท่านได้ยอมรับ <a href="#">
                                    ข้อกำหนดเงื่อนไข</a> และ <a href="#">นโยบายความเป็นส่วนตัว</a>
                            </div>
                        </div>
                    </div>
                    <div class="login">
                        <div class="logosm">
                            <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="">
                        </div>
                        <div class="topichead mb-3">
                            <h1>เข้าสู่ระบบ</h1>
                            <p>หากคุณมีบัญชีให้ลงชื่อเข้าใช้ด้วยที่อยู่อีเมลของคุณ
                            </p>
                        </div>
                        <div class="formdefault mt-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="member_email_login" placeholder="อีเมล">
                                        <label for="member_email_login">อีเมล</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">

                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" id="member_password_login" placeholder="รหัสผ่าน"
                                            name="password" id="password" />
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                        <label for="member_password_login">รหัสผ่าน</label>

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
                                    <a href="javascript:login();" class="btn-primary">เข้าสู่ระบบ</a>
                                    <div class="contentbl sizesm mt-5 mb-4">หรือ
                                        เชื่อมต่อกับบัญชีออนไลน์</div>
                                    <a href="#" class="btn btn-facebook"><img src="{{ asset('public/frontend/images/fb-icon.png') }}" alt="">
                                        เข้าสู่ระบบด้วย
                                        Facebook</a>

                                    <div class=" contentbl sizesm mt-4">
                                        ยังไม่ได้เป็นสมาชิก? <a href="#" class="linkorg btn_join_us">สมัครสมาชิก
                                            <i class="fi fi-rr-arrow-small-right"></i></a>
                                    </div>
                                </div>
                            </div>
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
                                        <input type="name" class="form-control" id="member_email_forget_password" placeholder="อีเมล">
                                        <label for="member_email_forget_password">อีเมล</label>
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
        </div>

    </div>



    @include('frontend/inc_footer')

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

        function register() {
            if($("#member_email").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#member_email").focus();
            } else if(!isEmail($("#member_email").val())) {
                alert('อีเมล์รูปแบบไม่ถูกต้อง');

                $("#member_email").val('');
                $("#member_email").focus();
            } else if($("#member_name").val() == '') {
                alert('กรุณากรอกชื่อ');

                $("#member_name").focus();
            } else if($("#member_surname").val() == '') {
                alert('กรุณากรอกชื่อ');

                $("#member_surname").focus();
            } else if($("#member_mobile").val() == '') {
                alert('กรุณากรอกเบอร์ติดต่อ');

                $("#member_mobile").focus();
            } else if($("#member_password").val() == '') {
                alert('กรุณากรอกรหัสผ่าน');

                $("#member_password").focus();
            } else if($("#confirm_member_password").val() == '') {
                alert('กรุณายืนยันรหัสผ่าน');

                $("#confirm_member_password").focus();
            } else if($("#member_password").val() != $("#confirm_member_password").val()) {
                alert('ยืนยันรหัสผ่านไม่ถูกต้อง');

                $("#member_password").val('');
                $("#confirm_member_password").val('');
                $("#member_password").focus();
            } else {
                $.post('{{ url("ajaxSaveMember") }}', { member_email: $("#member_email").val(), member_name: $("#member_name").val(), member_surname: $("#member_surname").val(), member_mobile: $("#member_mobile").val(), member_password: $("#member_password").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('สมัครสมาชิกเสร็จเรียบร้อย');
                });
            }
        }

        function login() {
            if($("#member_email_login").val() == '') {
                alert('กรุณากรอกอีเมล์');

                $("#member_email_login").focus();
            } else if(!isEmail($("#member_email_login").val())) {
                alert('อีเมล์รูปแบบไม่ถูกต้อง');

                $("#member_email_login").val('');
                $("#member_email_login").focus();
            } else if($("#member_password_login") == '') {
                alert('กรุณากรอกรหัสผ่าน');

                $("#member_password_login").focus();
            } else {
                $.post('{{ url("ajaxLogin") }}', { member_email_login: $("#member_email_login").val(), member_password_login: $("#member_password_login").val(), "_token": "{{ csrf_token() }}" }, function(data) {
                    if(data == 'true') {
                        window.location.href = '{{ url("m_acct") }}';
                    } else if(data == 'false') {
                        alert('อีเมล์ และ/หรือ รหัสผ่าน ไม่ถูกต้อง');
                    }
                });
            }
        }

        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    </script>
    

</body>

</html>