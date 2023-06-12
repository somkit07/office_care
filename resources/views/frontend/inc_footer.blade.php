<section id="footerbg">
    <div class="container-fluid">
        <div class="wrapper_pad">
            <div class="footercontent">
                <div class="row">
                    <div class="col-lg-4 text-lg-center">
                        <div class="footerlogo">
                            <img src="{{ asset('public/frontend/images/logofooter.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-lg-4">
                                <h6>เกี่ยวกับเรา</h6>
                                <ul>
                                    <li><a href="{{ url('contact') }}">ติดต่อเรา</a></li>
                                    <li><a href="{{ url('about') }}">เกี่ยวกับเรา</a></li>
                                    <li><a href="{{ url('terms') }}">นโยบายความเป็นส่วนตัว</a></li>
                                    <li><a href="{{ url('policy') }}">ข้อตกลงและเงื่อนไข</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h6>ช่วยเหลือคุณ</h6>
                                <ul>
                                    {{-- <li><a href="{{ url('payment_confirm') }}">แจ้งชำระเงิน</a></li> --}}
                                    <li><a href="{{ url('news') }}">ข่าวสารและโปรโมชั่น</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <h6>ศูนย์บริการลูกค้า</h6>
                                Call Center: 02-744-8844 <br>
                                LINE ID: @officecare <br><br>

                                เวลาทำการ : จันทร์ – ศุกร์ <br>
                                (ยกเว้นวันหยุดนักขัตฤกษ์) <br>
                                9.00 A.M. – 6.00 P.M.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="footercopyright">
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row">
                    <div class="col-lg-8 text-start">
                        © สงวนลิขสิทธิ์ พ.ศ. 2565 บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <div class="sociallink">
                            <a href="#"><i class="fi fi-brands-facebook"></i></a>
                            <a href="#"><i class="fi fi-brands-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<script>
    $(window).on('load', function () {
        AOS.init({
            duration: 1000,
        });
    });
</script>