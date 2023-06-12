<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')
    <section id="productpage" class="wrapperPages">
        <div class="symbb">
            <img src="{{ asset('public/frontend/images/half_orangeEllipse.png') }}" alt="">
        </div>
        <div class="container-fluid">
            <div class="wrapper_pad">
                <div class="row mt-5">
                    <div class="col">
                        <div class="pageontop">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
@if(!empty($category_txt))
                                    <li class="breadcrumb-item"><a href="#">{{ $category_txt->category1_name }}</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">{{ $category_txt->category2_name }}</li>
@endif
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="d-none d-sm-none d-md-none d-lg-block d-xl-block">
                    <div class="groupfilter">
                        <div class="row mt-4">
                            
                        </div>
                    </div>
                </div>
                <div class="d-block d-sm-block d-md-block d-lg-none d-xl-none">
                    <div class="sortfilterMB">
                        <div class="row">
                            
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <div class="listtag owl-carousel owl-theme">
                            {{-- Keyword : {{ $keyword_ }} --}}
                            {{-- Keyword ใส่จากหลังบ้าน --}}
{{-- @if(!empty($keyword))
    @foreach($keyword as $r)
                            <div class="item">
                                <a href="#">{{ $r->keyword_product_keyword }}</a>
                            </div>
    @endforeach
@endif --}}
                            {{-- <div class="item"><a href="#">ปากกาสี</a></div>
                            <div class="item"><a href="#">เครื่องปริ้น</a></div>
                            <div class="item"><a href="#">ดินสอกด</a></div>
                            <div class="item"><a href="#">กระดาษถ่ายเอกสาร</a></div>
                            <div class="item"><a href="#">แฟ้ม</a></div>
                            <div class="item"><a href="#">สมุดโน้ต</a></div>
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div> 
                            <div class="item"><a href="#">ปากกาไฮไลท์</a></div>
                            <div class="item"><a href="#">เครื่องคิดเลข</a></div>
                            <div class="item"><a href="#">หมึกเติม</a></div> --}}
                            {{-- End Keyword ใส่จากหลังบ้าน --}}
                        </div>
                    </div>
                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-lg-3">
                        <div class="sticky-top">
                            @include('frontend/inc_product_filter')
                        </div>
                    </div>
                    <div class="col-lg-9 pt-0 p-3">
                        <div class="row">
                            <div class="col">
                                <div class="topichead">
                                    {{-- @if(!empty($category_txt)){{ $category_txt->category2_name }}@endif
                                    <div>แสดงสินค้า {{ $no_show_product1 }}-{{ $no_show_product2 }} จาก {{ count($product_all) }} --}}</div>
                                </div>
                            </div>
                        </div>
                        <!-- product pc -->
                        <div class="row mt-3">
@if(!empty($product_show))
    @foreach($product_show as $r)
                            <div class="col-12 col-md-6 col-lg-3">
                                <div class="productgroup">
                                    <div class="productpic">
                                        <a href="{{ url('product_detail/'.$r->product_id) }}"><img src="{{ asset('public/uploads/product/'.$r->product_image) }}" alt="">
                                        </a>
                                        <a href="javascript:insertWishlist('{{ $r->product_id }}');" class="wishlist"><i class="fi fi-rr-heart"></i></a>
                                    </div>

                                    <div class="contentProduct pt-3">
                                        <a href="{{ url('product_detail/'.$r->product_id) }}" class="btn btn-cart"><i class="fi fi-rr-plus-small"></i>
                                            เพิ่มสินค้า</a>
                                        <div class="price pt-3">
                                            ฿ {{ number_format($r->product_price, 0, '.', ',') }} <span>฿ {{ number_format($r->product_before_discount, 0, '.', ',') }}</span>
                                        </div>
                                        <p>
                                            {{ $r->product_name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                        </div>

                        <div class="row mb-5 mt-5">
                            <div class="col">
                                <div class="pagenumber">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            {{-- <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <i class="bi bi-chevron-left"></i>
                                                </a>
                                            </li> --}}
                                            {{-- {{ $product_show->links() }} --}}
{{-- @if(!empty($page))
    @for($i = 1; $i <= $page; $i++)
        @php
        $offset = ($i * $perpage) - $perpage;
        @endphp
                                            <li class="page-item @if(empty($_GET['offset']) and $i == '1'){{ 'active' }}@elseif(!empty($offset) and $offset == $i){{ 'active' }}@endif"><a class="page-link" href="{{ url('product/'.$category2_id.'?page='.$page.'&offset='.$offset) }}">{{ $i }}</a></li>
    @endfor
@endif --}}
                                            {{-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                                            {{-- <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <i class="bi bi-chevron-right"></i>
                                                </a>
                                            </li> --}}
                                        </ul>
                                    </nav>
                                </div>
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

            $('.listtag').owlCarousel({
                loop: false,
                margin: 10,
                dots: false,
                nav: true,
                navText: ['<img src="{{ asset('public/frontend/images/arrow_left.png') }}">', '<img src="{{ asset('public/frontend/images/arrow_right.png') }}">'],
                navClass: ['owl-prev', 'owl-next'],
                autoplay: false,

                smartSpeed: 500,
                responsive: {
                    0: {
                        items: 3
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    },
                    1300: {
                        items: 10
                    }

                }
            })

        });

        function insertWishlist(product_id) {
            $.post('{{ url("ajaxInsertWishlist") }}', { product_id: product_id, "_token": "{{ csrf_token() }}" }, function(data) {
                alert(data);
            });
        }
    </script>


</body>

</html>