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
                    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-4">
                        <div class="boxacct">
                            <div class="tophead">
                                Reset Password
                            </div>
                            <div class="contentacct">
                                <div>รหัสผ่าน</div>
                                <div><input type="password" id="member_password" class="form-control"><br>
                                <div>ยืนยันรหัสผ่าน</div>
                                <div><input type="password" id="member_confirm_password" class="form-control">
                            </div>
                            <br>
                            <input type="button" class="btn btn-primary" value="Reset Password" onclick="reSetPassword();">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

    <script>
        // function removeWishlist(product_id) {
        //     $.post('{{ url("ajaxRemoveWishlist") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
        //         //$(".remove_wishlist_" + product_id).hide();
                
        //         alert('ทำการลบสินค้ารายการโปรดแล้ว');

        //         window.location.href = '{{ url("account_wishlist") }}';
        //     });
        // }

        function reSetPassword() {
            if($("#member_password").val() == '') {
                alert('กรุณากรอกรหัสผ่าน');

                $("#member_password").focus();
            } else if($("#member_confirm_password").val() == '') {
                alert('กรุณากรอกยืนยันรหัสผ่าน');

                $("#member_confirm_password").focus();
            } else if($("#member_confirm_password").val() != $("#member_password").val()) {
                alert('ยืนยันรหัสผ่านไม่ถูกต้อง');

                $("#member_password").focus();
                $("#member_password").val('');
                $("#member_confirm_password").val('');
            } else {
                // alert('True');
                $.post('{{ url("ajaxForgetPassword") }}', { member_password: $("#member_password").val(), member_token: '{{ $member_token }}', "_token": "{{ csrf_token() }}" }, function(data) {
                    alert('Reset Password Success');

                    window.location.href = '{{ url("index") }}';
                });
            }
        }
    </script>

</body>

</html>