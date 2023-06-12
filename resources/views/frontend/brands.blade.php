<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="brandspage">
        <div class="container-fluid">

            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            แบรนด์แนะนำ
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="brands_slide owl-carousel owl-theme owl-animated-in">
@if(!empty($brands))
    @foreach($brands as $r)
                            <div class="item">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{ asset('public/uploads/product/'.$r->brand_image2) }}" alt="">
                                    </a>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <div class="topichead">
                            แบรนด์ทั้งหมด
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col">
                        <div class="listbrands">
                            <ul>
                                <li class="nav-item1">
                                    <a href="#number">0-9</a>
                                </li>
@php
$j = 1;  
$k = 96;  
@endphp
@for($i = 65; $i <= 90; $i++)
    @php
    $j++;
    $k++;
    @endphp
                                <li class="nav-item{{ $j }}">
                                    <a href="#{{ chr($k) }}">{{ chr($i) }}</a>
                                </li>
@endfor
                                {{-- <li class="nav-item3">
                                    <a href="#b">B</a>
                                </li>
                                <li class="nav-item4">
                                    <a href="#c">C</a>
                                </li>
                                <li class="nav-item5">
                                    <a href="#d">D</a>
                                </li>
                                <li class="nav-item6">
                                    <a href="#e">E</a>
                                </li>
                                <li class="nav-item7">
                                    <a href="#f">F</a>
                                </li>
                                <li class="nav-item8">
                                    <a href="#g">G</a>
                                </li>
                                <li class="nav-item9">
                                    <a href="#h">H</a>
                                </li>
                                <li class="nav-item10">
                                    <a href="#i">I</a>
                                </li>
                                <li class="nav-item11">
                                    <a href="">J</a>
                                </li>
                                <li class="nav-item12">
                                    <a href="">K</a>
                                </li>
                                <li class="nav-item13">
                                    <a href="">L</a>
                                </li>
                                <li class="nav-item14">
                                    <a href="">M</a>
                                </li>
                                <li class="nav-item15">
                                    <a href="">N</a>
                                </li>
                                <li class="nav-item16">
                                    <a href="">O</a>
                                </li>
                                <li class="nav-item17">
                                    <a href="">P</a>
                                </li>
                                <li class="nav-item18">
                                    <a href="">Q</a>
                                </li>
                                <li class="nav-item19">
                                    <a href="">R</a>
                                </li>
                                <li class="nav-item20">
                                    <a href="">S</a>
                                </li>
                                <li class="nav-item21">
                                    <a href="">T</a>
                                </li>
                                <li class="nav-item22">
                                    <a href="">U</a>
                                </li>
                                <li class="nav-item23">
                                    <a href="">V</a>
                                </li>
                                <li class="nav-item24">
                                    <a href="">W</a>
                                </li>
                                <li class="nav-item25">
                                    <a href="">X</a>
                                </li>
                                <li class="nav-item26">
                                    <a href="">Y</a>
                                </li>
                                <li class="nav-item27">
                                    <a href="">Z</a>
                                </li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row" id="number">
                    <div class="col">
                        <div class="subtopic">
                            0-9
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
@php
$brand = DB::table('brand')
    ->where('brand_name', 'like', '0%')
    ->orWhere('brand_name', 'like', '1%')
    ->orWhere('brand_name', 'like', '2%')
    ->orWhere('brand_name', 'like', '3%')
    ->orWhere('brand_name', 'like', '4%')
    ->orWhere('brand_name', 'like', '5%')
    ->orWhere('brand_name', 'like', '6%')
    ->orWhere('brand_name', 'like', '7%')
    ->orWhere('brand_name', 'like', '8%')
    ->orWhere('brand_name', 'like', '9%')
    ->orderBy('brand_name', 'asc')
    ->get();
@endphp

@if(!empty($brand))
    @foreach($brand as $r)
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="{{ url('product_sub/0?brand=0-9') }}"> {{ $r->brand_name }}</a>
                        </div>
                    </div>
    @endforeach
@endif
                </div>
@php
$alphabet_big = 96;
@endphp
@for($alphabet = 65; $alphabet <= 90; $alphabet++)
    @php
    $alphabet_big++;

    $brand = DB::table('brand')
        ->where('brand_name', 'like', chr($alphabet).'%')
        ->orWhere('brand_name', 'like', chr($alphabet_big).'%')
        ->orderBy('brand_name', 'asc')
        ->get();
    @endphp
                <div class="row mt-3" id="{{ chr($alphabet_big) }}">
                    <div class="col">
                        <div class="subtopic">
                            {{ chr($alphabet) }}
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
    @if(!empty($brand))
        @foreach($brand as $b)
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="{{ url('product_sub/0?brand='.$b->brand_id) }}"> {{ $b->brand_name }}</a>
                        </div>
                    </div>
        @endforeach
    @endif
                </div>
@endfor
                {{-- <div class="row mt-3" id="b">
                    <div class="col">
                        <div class="subtopic">
                            B
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="c">
                    <div class="col">
                        <div class="subtopic">
                            C
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="d">
                    <div class="col">
                        <div class="subtopic">
                            D
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="e">
                    <div class="col">
                        <div class="subtopic">
                            E
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="f">
                    <div class="col">
                        <div class="subtopic">
                            F
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="g">
                    <div class="col">
                        <div class="subtopic">
                            G
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="h">
                    <div class="col">
                        <div class="subtopic">
                            H
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="i">
                    <div class="col">
                        <div class="subtopic">
                            I
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="j">
                    <div class="col">
                        <div class="subtopic">
                            J
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3" id="k">
                    <div class="col">
                        <div class="subtopic">
                            K
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <div class="subtopic">
                            L
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-lg-3">
                        <div class="nameofbrands">
                            <a href="#"> A-Line</a>
                        </div>
                    </div>
                    <?php } ?>
                </div> --}}
                <br>
            </div>
        </div>
    </section>
    @include('frontend/inc_footer')
    <script>
        $(document).ready(function () {
            $('.brands_slide').owlCarousel({
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
                        items: 3
                    },
                    1000: {
                        items: 6
                    }
                }
            })

        });
    </script>


</body>

</html>