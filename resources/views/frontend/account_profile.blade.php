<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header') 
@php    
$pageName="profile";
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
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="boxacct">
                                    <div class="tophead">
                                        <div class="row">
                                            <div class="col-8 col-lg-9">
                                                ข้อมูลส่วนตัว
                                            </div>
                                            <div class="col-4 col-lg-3 text-end">
                                                <a href="javascript:void(0)" class="edittext" rel="1">
                                                    แก้ไข</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contentacct">
                                        <div class="nameids" rel="1">
                                            <h2>@if(!empty($member)){{ $member->member_name.' '.$member->member_surname }}@endif</h2>
                                            <p>@if(!empty($member)){{ $member->member_email }}@endif <br> 0814499488</p>
                                        </div>
                                        <form action="{{ url('saveMemberProfile') }}" method="post">
                                            @csrf
                                        <div class="editnameids" style="display:none;" rel="1">
                                            <div class="formdefault">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="member_name" class="form-control" value="@if(!empty($member)){{ $member->member_name }}@endif" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="member_surname" class="form-control" value="@if(!empty($member)){{ $member->member_surname }}@endif" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="email" name="member_email" class="form-control"
                                                        value="@if(!empty($member)){{ $member->member_email }}@endif" required>
                                                </div>
                                                <div class="input-group mb-3">
                                                    <input type="text" name="member_mobile" class="form-control" value="@if(!empty($member)){{ $member->member_mobile }}@endif" required>
                                                </div>
                                            </div>
                                            <input type="submit" class="showCT btn btn-primary" rel="1" value="บันทึก">
                                            <button class="showCT btn btn-cancel" rel="1">ยกเลิก</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 mt-4 mt-lg-0">
                                <div class="boxacct">
                                    <div class="tophead">
                                        <div class="row">
                                            <div class="col-8 col-lg-9">
                                                รหัสผ่าน
                                            </div>
                                            <div class="col-4 col-lg-3 text-end">
                                                <a href="javascript:void(0)" class="edittext" rel="2">
                                                    แก้ไข</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contentacct">
                                        <div class="nameids" rel="2">
                                            <h2>รหัสผ่าน</h2>
                                            <p>***********</p>
                                        </div>
                                        <form action="{{ url('saveUpdatePassword') }}" method="post">
                                        @csrf
                                        <div class="editnameids" style="display:none;" rel="2">
                                            <div class="formdefault">
                                                <div class="input-group passwordedit mb-3">
                                                    <span class="input-group-text">รหัสผ่านปัจจุบัน</span>
                                                    <input type="password" name="member_password" class="form-control" value="" required>
                                                    <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                                </div>
                                                <div class="input-group passwordedit mb-3">
                                                    <span class="input-group-text">รหัสผ่านใหม่</span>
                                                    <input type="password" name="member_new_password" class="form-control" value="" required>
                                                    <span class="input-group-text"><i class="fi fi-rr-eye"></i></span>
                                                </div>
                                            </div>
                                            <button class="showCT btn btn-primary" rel="2">บันทึก</button>
                                            <button class="showCT btn btn-cancel" rel="2">ยกเลิก</button>
                                        </div>
                                        </form>
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
    <script>
        $(document).ready(function () {
            $(".edittext").click(function () {
                var rel = $(this).attr("rel");
                $(".editnameids[rel='" + rel + "']").show();
                $(".nameids[rel='" + rel + "']").hide();
            });
            $(".showCT").click(function () {
                var rel = $(this).attr("rel");
                $(".editnameids[rel='" + rel + "']").hide();
                $(".nameids[rel='" + rel + "']").show();
            });
        });
    </script>

</body>

</html>