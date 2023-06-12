<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <div class="container-fluid wrapperPages">
        <div class="wrapper_pad">
            <div class="row">
                <div class="col">
                    <div class="topichead">
                        <h1>@if(!empty($category1)){{ $category1->category1_name }}@endif</h1>
                    </div>

                    <ul class="mobile_catdt">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
@php
$category2 = DB::table('category2')
    ->where('category1_id', '=', $category1->category1_id)
    ->orderBy('category2_id', 'asc')
    ->get();
@endphp

@if(!empty($category2))
    @foreach($category2 as $r)
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        {{ $r->category2_name }}
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <ul>
        @php
        $category3 = DB::table('category3')
            ->where('category2_id', '=', $r->category2_id)
            ->orderBy('category3_id', 'asc')
            ->get();
        @endphp

        @if(!empty($category3))
            @foreach($category3 as $r3)
                                            <li><a href="{{ url('product_sub/'.$r3->category3_id) }}">{{ $r3->category3_name }}</a></li>
            @endforeach
        @endif
                                            {{-- <li><a href="#">กระดาษโน๊ต</a></li>
                                            <li><a href="#">กระดาษสี</a></li>
                                            <li><a href="#">กระดาษการ์ด</a></li>
                                            <li><a href="#">กระดาษความร้อน</a></li>
                                            <li><a href="#">กระดาษคาร์บอร์น</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div>
    @endforeach
@endif
                            {{-- <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        แฟ้ม & อุปกรณ์
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">กระดาษถ่ายเอกสาร</a></li>
                                            <li><a href="#">กระดาษโน๊ต</a></li>
                                            <li><a href="#">กระดาษสี</a></li>
                                            <li><a href="#">กระดาษการ์ด</a></li>
                                            <li><a href="#">กระดาษความร้อน</a></li>
                                            <li><a href="#">กระดาษคาร์บอร์น</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        ปากกา & หมึกเติม
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">กระดาษถ่ายเอกสาร</a></li>
                                            <li><a href="#">กระดาษโน๊ต</a></li>
                                            <li><a href="#">กระดาษสี</a></li>
                                            <li><a href="#">กระดาษการ์ด</a></li>
                                            <li><a href="#">กระดาษความร้อน</a></li>
                                            <li><a href="#">กระดาษคาร์บอร์น</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                        </div>

                    </ul>
                </div>
            </div>
        </div>

    </div>



    @include('frontend/inc_footer')


</body>

</html>