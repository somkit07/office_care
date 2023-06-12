<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="productpage"  class="wrapperPages">
        <div class="container-fluid">

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col-lg-3">
                            @include('frontend/inc_sideproduct_index')
                       
                    </div>
                    <div class="col-lg-9 pt-0 p-5">
                        <div class="row">
                            <div class="col">
@if(!empty($category1))
    @foreach($category1 as $r)
                                <div class="groupcategory">
                                    <div class="topichead mt-4 mb-4">
                                        {{ $r->category1_name }}
                                    </div>
                                    <div class="category_slide owl-carousel owl-theme">
        @if(!empty($category2))
            @foreach($category2 as $r2)
                @if($r->category1_id == $r2->category1_id)
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="{{ url('product/'.$r2->category2_id) }}">
                                                    <img src="{{ asset('public/uploads/category2/'.$r2->category2_image) }}" alt="">
                                                </a>
                                            </figure>
                                            <span>{{ $r2->category2_name }}</span>
                                        </div>
                @endif
            @endforeach
        @endif
                                        
                                        {{-- <div class="item hoverstyle">
                                            <figure>
                                            <a href="product.php">
                                                    <img src="{{ asset('public/frontend/images/cat_paper.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>กระดาษ</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_book.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>สมุดโน๊ต</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>แฟ้ม</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>แฟ้ม</span>
                                        </div> --}}
                                    </div>
                                </div>
    @endforeach
@endif
                                {{-- <div class="groupcategory">
                                    <div class="topichead mt-4 mb-4">
                                        ไอทีและอิเล็คทรอนิกซ์
                                    </div>
                                    <div class="category_slide owl-carousel owl-theme">
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_pen.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>ปากกา</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_paper.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>กระดาษ</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_book.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>สมุดโน๊ต</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>แฟ้ม</span>
                                        </div>
                                        <div class="item hoverstyle">
                                            <figure>
                                                <a href="#">
                                                    <img src="{{ asset('public/frontend/images/cat_folder.png') }}" alt="">
                                                </a>
                                            </figure>
                                            <span>แฟ้ม</span>
                                        </div>
                                    </div>
                                </div> --}}
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

            $('.category_slide').owlCarousel({
                loop: true,
                margin: 20,
                dots: false,
                nav: true,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: true,
                autoplayTimeout: 4000,
                autoplayHoverPause: true,
                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 4
                    }
                }
            })

        });
    </script>
</body>

</html>