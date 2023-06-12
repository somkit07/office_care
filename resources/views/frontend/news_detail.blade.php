<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="newspage">
        <div class="container-fluid g-0 overflow-hidden">
            <div class="symbolleft">
                <img src="{{ asset('public/frontend/images/half_orangeEllipse.png') }}" alt="">
            </div>
            <div class="symbolright">
                <img src="{{ asset('public/frontend/images/half_blueEllipse.png') }}" alt="">
            </div>
            <div class="wrapper_pad">
                <div class="row mt-5">
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
                                @if(!empty($row)){{ $row->news_promotion_detail }}@endif
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @include('frontend/inc_footer')


</body>

</html>