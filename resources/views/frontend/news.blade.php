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
                <div class="row mt-5">
                    <div class="col">
                        <div class="news_slide owl-carousel owl-animated-in owl-theme">
@if(!empty($rows_cover))
    @foreach($rows_cover as $r)
                            <div class="item">
                                <div class="newstop hoverstyle">
                                    <figure>
                                        <a href="{{ url('news_detail/'.$r->news_promotion_id) }}"><img src="{{ asset('public/uploads/news/'.$r->news_promotion_image) }}" alt=""></a>
                                    </figure>
                                    <figcaption>
                                        <span>{{ date2dateBasicThai($r->news_promotion_date) }}</span>
                                        <h1>{{ $r->news_promotion_name }}</h1>
                                        <p>
                                            {{ $r->news_promotion_description }}
                                        </p>
                                        <a href="{{ url('news_detail/'.$r->news_promotion_id) }}"><i class="bi bi-arrow-up-right"></i></a>
                                    </figcaption>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-12 col-md-7 col-lg-9">
                        <div class="topichead">
                            ข่าวสาร & โปรโมชั่น
                        </div>
                    </div>
                    {{-- <div class="col-12 col-md-5  col-lg-3">
                        <div class="sortnews">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>เรียงตาม</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div> --}}
                </div>
                <div class="row mt-5">
@if(!empty($rows_detail))
    @foreach($rows_detail as $r)
                    <div class="col-6 col-lg-4">
                        <div class="newsgroup hoverstyle">
                            <figure>
                                <a href="{{ url('news_detail/'.$r->news_promotion_id) }}"><img src="{{ asset('public/uploads/news/'.$r->news_promotion_image) }}" alt=""></a>
                            </figure>
                            <a href="{{ url('news_detail/'.$r->news_promotion_id) }}">
                                <div class="newscontent">
                                    {{ $r->news_promotion_name }} <br>
                                    {{ $r->news_promotion_description }}
                                </div>
                            </a>
                            <div class="date">
                                {{ date2dateBasicThai($r->news_promotion_date) }}
                            </div>

                        </div>
                    </div>
    @endforeach
@endif
                </div>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')

    <script>
        $(document).ready(function () {
            $('.news_slide ').owlCarousel({
                loop: true,
                margin: 20,
                dots: true,
                autoplay: false,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 1
                    },
                    1000: {
                        items: 1
                    }
                }
            })


        });
    </script>

</body>

</html>