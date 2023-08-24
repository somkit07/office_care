<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="newspage" class="wrapperPages">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="symbolleft">
                <img src="{{ asset('public/frontend/images/half_orangeEllipse.png') }}" alt="">
            </div>
            <div class="symbolright">
                <img src="{{ asset('public/frontend/images/half_blueEllipse.png') }}" alt="">
            </div>
            <div class="wrapper_pad">
                <div class="row mt-3">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="newscontent_detail">
                            <h1>@if(!empty($row)){{ $row->news_promotion_name }}@endif</h1>
                            {{-- <h2>เก้าอี้สุขภาพ เป็นเฟอร์นิเจอร์สำนักงานที่ถูกคิดค้นมาเพื่อลดอาการปวดเมื่อยตามร่างกายที่เกิดขึ้นจากการนั่งทำงานหรือทำกิจกรรมต่างๆ </h2> --}}
                            <span class="date">@if(!empty($row)){{ date2dateBasicThai($row->news_promotion_date) }}@endif</span>
                            <div class="newsbiginside mt-3">
                                @if(!empty($row) and $row->news_promotion_image != '')<img src="{{ asset('public/uploads/news/'.$row->news_promotion_image) }}" alt="" class="img-fluid">@endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="contentbody mb-3 mt-3">
                                    @if(!empty($row))<?php echo $row->news_promotion_detail ?>@endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="row mt-5">
                    <div class="col newsbiginside">
                        @if(!empty($row) and $row->news_promotion_image != '')<img src="{{ asset('public/uploads/news/'.$row->news_promotion_image) }}" alt="" class="img-fluid">@endif
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="newscontent_detail">
                            <h1>@if(!empty($row)){{ $row->news_promotion_name }}@endif</h1>
                            <span class="date">@if(!empty($row)){{ date2dateBasicThai($row->news_promotion_date) }}@endif</span>
                            <hr>
                            <div class="contentbody">
                                @if(!empty($row))<?php echo $row->news_promotion_detail ?>@endif
                            </div>

                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')


</body>

</html>