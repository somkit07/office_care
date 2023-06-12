<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
@include('frontend/inc_header')
@php 
$pageName="address"
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
@if(!empty($addressShipping))
                    <div class="col-lg-9">
                        <div class="boxacct">
                            <div class="tophead">
                                ที่อยู่จัดส่ง
                            </div>
                            <div class="contentacct">
                                <div class="row mb-5">
@if(!empty($addressShipping_))
    @foreach($addressShipping_ as $r)
        @php
        $tumbol = DB::table('subdistricts')
            ->where('id', '=', $r->tumbol_id)
            ->first();

        $amphur = DB::table('districts')
            ->where('id', '=', $r->amphur_id)
            ->first();

        $provinces = DB::table('provinces')
            ->where('id', '=', $r->province_id)
            ->first();

        @endphp
                                    <div class="col-lg-4 border-end member_shipping_address_{{ $r->member_shipping_address_id }}">
                                        <div class="addressbox">
                                            <h2>{{ $r->member_shipping_address_name_surname}}</h2>
                                            <p>{{ $r->member_shipping_address_address }}<br>
                                                แขวง {{ $tumbol->name_in_thai }} เขต {{ $amphur->name_in_thai }} <br>
                                                {{ $provinces->name_in_thai }} {{ $r->member_shipping_address_postcode }}
                                                <br><br>
                                                {{ $r->member_shipping_address_mobile }}
                                            </p>
        @if($r->member_shipping_address_status == 'ตั้งเป็นค่าเริ่มต้น')
                                            <a href="{{ url('setMemberShippingStatus/'.$r->member_shipping_address_id) }}" class="btn btn-select">ตั้งเป็นค่าเริ่มต้น</a>
        @elseif($r->member_shipping_address_status == 'ค่าเริ่มต้น')
                                            <a href="#" class="btn defaultactive">ค่าเริ่มต้น</a>
        @endif
                                            <a href="javascript:removeAddress('{{ $r->member_shipping_address_id }}');" onclick="return confirm('Confirm Delete');" class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>
                                    </div>
    @endforeach
@endif
                                    {{-- <div class="col-lg-4 border-end">
                                        <div class="addressbox">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>146/82-83 ซอย ลาดพร้าว 122 ลาดพร้าว <br>
                                                แขวง พลับพลา เขต วังทองหลาง <br>
                                                กรุงเทพมหานคร 10310
                                                <br><br>
                                                0814499488
                                            </p>

                                            <a href="#" class="btn btn-select">ตั้งเป็นค่าเริ่มต้น</a> <a href="#"
                                                class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>

                                    </div>
                                    <div class="col-lg-4">
                                        <div class="addressbox">
                                            <h2>เนตรทกาญ อ่อนน้อม</h2>
                                            <p>146/82-83 ซอย ลาดพร้าว 122 ลาดพร้าว <br>
                                                แขวง พลับพลา เขต วังทองหลาง <br>
                                                กรุงเทพมหานคร 10310
                                                <br><br>
                                                0814499488
                                            </p>

                                            <a href="#" class="btn btn-select">ตั้งเป็นค่าเริ่มต้น</a> <a href="#"
                                                class="binlink"><i class="fi fi-rr-trash"></i></a>
                                        </div>

                                    </div> --}}
                                </div>
                            </div>
                        </div>
                        <center><a href="#" class="btn btn-primary mt-4 btnaddnew" data-width="948" data-height="700" data-fancybox data-src="#address" href="javascript:;">+ เพิ่มที่อยู่ใหม่</a></center>
                    </div>
@else
                    <div class="col-lg-9">
                        <div class="boxacct">
                            <div class="tophead">
                                ที่อยู่จัดส่ง
                            </div>
                            <div class="contentacct text-center">
                                <h2>ยังไม่ได้บันทึกที่อยู่จัดส่ง</h2>
                                <center><a href="#" class="btn btn-primary mt-4 btnaddnew" data-width="948" data-height="700" data-fancybox data-src="#address" href="javascript:;">+ เพิ่มที่อยู่ใหม่</a></center>
                            </div>
                        </div>
                    </div>
@endif
                    <div style="display: none;" id="address">
                        <div class="topichead mb-3">
                            <h1>เพิ่มที่อยู่ใหม่</h1>
                            <p>จัดการข้อมูลที่อยู่เพื่อการจัดส่ง</p>
                        </div>
                        <form action="{{ url('saveMemberAddress') }}" method="post">
                        @csrf
                        <div class="formdefault mt-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="floatingInput"
                                            placeholder="ชื่อ-นามสกุล" name="member_shipping_address_name_surname" required>
                                        <label for="floatingInput">ชื่อ-นามสกุล</label>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <input type="tel" class="form-control" id="floatingInput"
                                            placeholder="เบอร์ติดต่อ" name="member_shipping_address_mobile" required>
                                        <label for="floatingInput">เบอร์ติดต่อ</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="ที่อยู่การจัดส่ง" name="member_shipping_address_address" required>
                                        <label for="floatingInput">ที่อยู่การจัดส่ง</label>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" name="province_id" id="province_id" onchange="changeProvince(this.value);" required>
                                            <option value="">จังหวัด</option>

@if(!empty($province))
    @foreach($province as $p)
                                            <option value="{{ $p->id }}">{{ $p->name_in_thai }}</option>
    @endforeach
@endif
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" name="amphur_id" id="amphur_id" onchange="changeAmphur(this.value);" required>
                                            <option selected>อำเภอ/เขต</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" name="tumbol_id" id="tumbol_id" required>
                                            <option selected>ตำบล/แขวง</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-floating mb-3">
                                        <select class="form-control" aria-label="Default select example" name="member_shipping_address_postcode" id="member_shipping_address_postcode" required>
                                            <option selected>รหัสไปรษณีย์</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <br>
                        <input type="submit" class="btn btn-primary" rel="1" value="บันทึก">
                        <button class="btn btn-cancel" rel="1">ยกเลิก</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')
    <script>
        function changeProvince(province_id) {
            $.post('{{ url("ajaxChangeProvince") }}', { province_id: province_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $("#amphur_id").html(data);
            });
        }

        function changeAmphur(amphur_id) {
            $.post('{{ url("ajaxChangeAmphur") }}', { amphur_id: amphur_id, "_token": "{{ csrf_token() }}" }, function(data) {
                var data_split = data.split('!@#$%^&*()_+');

                $("#tumbol_id").html(data_split[0]);
                $("#member_shipping_address_postcode").html(data_split[1]);
            })
        }

        function removeAddress(member_shipping_address_id) {
            $.post('{{ url("ajaxRemoveAddress") }}', { member_shipping_address_id: member_shipping_address_id, "_token": "{{ csrf_token() }}" }, function(data) {
                $(".member_shipping_address_" + member_shipping_address_id).hide();
            });
        }
    </script>
</body>

</html>