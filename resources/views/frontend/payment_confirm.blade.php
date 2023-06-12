<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="paymentpage">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="haftelp">
                <img src="{{ asset('public/frontend/images/haft_Ellipse.png') }}" alt="">
            </div>
            <div class="wrapper_pad">
                <div class="row  mt-5 mb-5">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="bgpayment">
                            <div class="paymentgroup">
                                <h1 class="mt-4">แจ้งชำระเงิน</h1>
                                <form action="{{ url('savePaymentConfirm') }}" method="post">
                                @csrf
                                <div class="formwhite mt-5">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="order_no"
                                                    placeholder="เลขที่ออเดอร์" name="order_no" required>
                                                <label for="order_no">เลขที่ออเดอร์</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="number" class="form-control" id="payment_amount"
                                                    placeholder="จำนวนเงิน" name="payment_amount" required>
                                                <label for="payment_amount">จำนวนเงิน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="payment_name_surname" name="payment_name_surname"
                                                    placeholder="ชื่อ-นามสกุล" required>
                                                <label for="payment_name_surname">ชื่อ-นามสกุล</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="payment_date"
                                                    placeholder="วันที่ชำระเงิน" name="payment_date" required>
                                                <label for="payment_date">วันที่ชำระเงิน</label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-floating mb-3">
                                                <input type="text" class="form-control" id="payment_time"
                                                    placeholder="เวลาชำระเงิน" name="payment_time" required>
                                                <label for="payment_time">เวลาชำระเงิน</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <center><input type="submit" class="btn btn-submit mt-4" value="ยืนยันการชำระเงิน"></center>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
    $(function() {
        $("#payment_date").datepicker({ dateFormat: 'yy-mm-dd' });
    });
    </script>

</body>

</html>