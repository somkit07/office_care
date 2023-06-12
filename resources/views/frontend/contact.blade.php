<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="contactpage"  class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="symbolright">
                <img src="{{ asset('public/frontend/images/halfright_Ellipse.png') }}" alt="">
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            <h1>บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด</h1>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="Cropscroll">
                            <div class="contactselect select-display-slide">
                                <li class="active" rel="1">
                                    <a href="javascript:void(0)">
                                        สำนักงานใหญ่ : กรุงเทพมหานคร

                                    </a>
                                </li>
                                <li rel="2">
                                    <a href="javascript:void(0)">
                                        สำนักงานภาคกลาง และภาคเหนือตอนล่าง
                                    </a>
                                </li>
                                <li rel="3">
                                    <a href="javascript:void(0)">
                                        สำนักงานภาคเหนือตอนบน
                                    </a>
                                </li>
                                <li rel="4">
                                    <a href="javascript:void(0)">
                                        สำนักงานภาคใต้

                                    </a>
                                </li>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="display-slide" rel="1" style="display:block;">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="contactinfo">
                                        <div class="title">สำนักงานใหญ่ : กรุงเทพมหานคร</div>
                                        <div class="contactlist mt-3">
                                            <li><i class="fi fi-rr-marker"></i> 47/5-7 ซ.สุขุมวิท 68 ถ.สุขุมวิท แขวงบางนาเหนือ เขตบางนา
                                                กรุงเทพฯ 10260
                                            </li><li><i class="fi fi-rr-phone-call"></i> Tel : 02-744-8844 , 02-744-8800</li><li><i class="fi fi-rr-print"></i> Fax : 02-744-8801 , 02-744-8808</li><li><i class="fi fi-rr-envelope"></i> E-mail : officecare.co.th@gmail.com</li>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 mapgroup">
                                    
                                <div class="halfsymbol">
                                        <img src="{{ asset('public/frontend/images/half_blueEllipse.png') }}" alt="">
                                    </div>
                                    <div class="map">
                                        {{-- <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124026.81976935129!2d100.50104457612329!3d13.728248830817893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2a01ad7a27271%3A0x48fc3d56598db191!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4reC4reC4n-C4n-C4tOC4qCDguYHguITguKPguYwg4LiE4Lit4Lij4LmM4Lib4Lit4LmA4Lij4LiK4Lix4LmI4LiZIOC4iOC4s-C4geC4seC4lA!5e0!3m2!1sth!2sth!4v1664963948833!5m2!1sth!2sth"
                                            width="100%" height="395" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                                        @if(!empty($contact))
                                        <iframe
                                            src="{{ $contact->contact_us_embed_google_map }}"
                                            width="100%" height="395" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="display-slide" rel="2">

                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-xl-8 offset-xl-2">
                        <div class="bgcontact">
                            <h2 class="mt-4">ส่งข้อความถึงเรา</h2>
                            <p>ท่านสามารถติดต่อเพื่อสอบถามข้อมูลเพิ่มเติม <br>
                                ผ่านช่องทางการส่งอีเมล์ถึงเราได้โดยกรอกแบบฟอร์มด้านล่าง</p>
                            <form action="{{ url('saveContactUsForm') }}" method="post">
                            @csrf
                            <div class="formwhite mt-5 mb-5">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="contact_us_form_name" id="contact_us_form_name" placeholder="ชื่อ" required>
                                            <label for="contact_us_form_name">ชื่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="contact_us_form_surname" id="contact_us_form_surname" placeholder="นามสกุล">
                                            <label for="contact_us_form_surname">นามสกุล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="contact_us_form_mobile" id="contact_us_form_mobile" placeholder="เบอร์ติดต่อ">
                                            <label for="contact_us_form_mobile">เบอร์ติดต่อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="contact_us_form_email" id="contact_us_form_email" placeholder="อีเมล">
                                            <label for="contact_us_form_email">อีเมล</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating mb-3">
                                            <input type="text" class="form-control" name="contact_us_form_subject" id="contact_us_form_subject" placeholder="หัวข้อ">
                                            <label for="contact_us_form_subject">หัวข้อ</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="ข้อความ" name="contact_us_form_message" id="contact_us_form_message" style="height: 100px"></textarea>
                                            <label for="contact_us_form_message">ข้อความ</label>
                                        </div>
                                    </div>
                                </div>
                                <center class="mt-2"><input type="submit" class="btn btn-submit mt-4" value="ส่งข้อความ"></center>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

</body>

</html>