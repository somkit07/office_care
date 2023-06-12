@php
$category1_inc = DB::table('category1')
    ->orderBy('category1_id', 'asc')
    ->get();

$category2_inc = DB::table('category2')
    ->orderBy('category2_id', 'asc')
    ->get();
@endphp
<section id="category_menu">
    <h2>หมวดหมู่สินค้า</h2>
    <div class="accordion" id="accordionExample">
@php
$i = 0;
@endphp
@if(!empty($category1_inc))
    @foreach($category1_inc as $r_inc)
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading_<?php echo $i;?>">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $i;?>"
                    aria-expanded="@if($i == 0){{ 'true' }}@else{{ 'false' }}@endif" aria-controls="collapse_<?php echo $i;?>">
                    {{ $r_inc->category1_name }}
                </button>
            </h2>
            <div id="collapse_<?php echo $i;?>" class="accordion-collapse collapse @if($i == 0){{ 'show' }}@endif" aria-labelledby="heading_<?php echo $i;?>"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="menu">
@php
        $category2_inc = DB::table('category2')
            ->orderBy('category2_id', 'asc')
            ->where('category1_id', '=', $r_inc->category1_id)
            ->get();
@endphp
        @if(!empty($category2_inc))
            @foreach($category2_inc as $r2_inc)
                @php
                $category3_inc = DB::table('category3')
                    ->where('category3.category2_id', '=', $r2_inc->category2_id)
                    ->join('product', 'category3.category3_id', '=', 'product.category3_id')
                    ->get();

                $count_category3 = count($category3_inc);
                @endphp

                @if($count_category3 > 0)
                        <li><a href="{{ url('product/'.$r2_inc->category2_id) }}">{{ $r2_inc->category2_name }} <span>{{-- ({{ $count_category3 }}) --}}</span></a></li>

                        {{-- <li><a href="#">แฟ้ม & อุปกรณ์ <span>(35)</span></a></li>
                        <li><a href="#">ปากกาหมึกเติม <span>(35)</span></a></li>
                        <li><a href="#">กาว, เทป และอุปกรณ์เพื่อบรรจุ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำนักงานเบ็ดเตล็ด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์เพื่อประชุมและนำเสนอ <span>(35)</span></a></li>
                        <li><a href="#">สมุด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำหรับเย็บเล่มและเจาะรู <span>(35)</span></a></li>
                        <li><a href="#">ผลิตภัณฑ์สติ๊กเกอร์ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์ตัด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์วาดรูป <span>(35)</span></a></li>
                        <li><a href="#">ยางลบและผลิตภัณฑ์ลบคำผิด <span>(35)</span></a></li>
                        <li><a href="#">เครื่องคิดเลข <span>(35)</span></a></li>
                        <li><a href="#">ดินสอและไส้ดินสอ <span>(35)</span></a></li> --}}
                @endif
            @endforeach
        @endif
                    </ul>
                </div>
            </div>
        </div>
        @php
        $i++;
        @endphp
    @endforeach
@endif
        {{-- <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    ไอทีและอิเล็คทรอนิกซ์
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="menu">
                        <li><a href="#">ผลิตภัณฑ์กระดาษ <span>(35)</span></a></li>
                        <li><a href="#">แฟ้ม & อุปกรณ์ <span>(35)</span></a></li>
                        <li><a href="#">ปากกาหมึกเติม <span>(35)</span></a></li>
                        <li><a href="#">กาว, เทป และอุปกรณ์เพื่อบรรจุ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำนักงานเบ็ดเตล็ด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์เพื่อประชุมและนำเสนอ <span>(35)</span></a></li>
                        <li><a href="#">สมุด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำหรับเย็บเล่มและเจาะรู <span>(35)</span></a></li>
                        <li><a href="#">ผลิตภัณฑ์สติ๊กเกอร์ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์ตัด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์วาดรูป <span>(35)</span></a></li>
                        <li><a href="#">ยางลบและผลิตภัณฑ์ลบคำผิด <span>(35)</span></a></li>
                        <li><a href="#">เครื่องคิดเลข <span>(35)</span></a></li>
                        <li><a href="#">ดินสอและไส้ดินสอ <span>(35)</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    เฟอร์นิเจอร์สำนักงาน
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="menu">
                        <li><a href="#">ผลิตภัณฑ์กระดาษ <span>(35)</span></a></li>
                        <li><a href="#">แฟ้ม & อุปกรณ์ <span>(35)</span></a></li>
                        <li><a href="#">ปากกาหมึกเติม <span>(35)</span></a></li>
                        <li><a href="#">กาว, เทป และอุปกรณ์เพื่อบรรจุ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำนักงานเบ็ดเตล็ด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์เพื่อประชุมและนำเสนอ <span>(35)</span></a></li>
                        <li><a href="#">สมุด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำหรับเย็บเล่มและเจาะรู <span>(35)</span></a></li>
                        <li><a href="#">ผลิตภัณฑ์สติ๊กเกอร์ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์ตัด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์วาดรูป <span>(35)</span></a></li>
                        <li><a href="#">ยางลบและผลิตภัณฑ์ลบคำผิด <span>(35)</span></a></li>
                        <li><a href="#">เครื่องคิดเลข <span>(35)</span></a></li>
                        <li><a href="#">ดินสอและไส้ดินสอ <span>(35)</span></a></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    วัสดุงานครัว
                </button>
            </h2>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="menu">
                        <li><a href="#">ผลิตภัณฑ์กระดาษ <span>(35)</span></a></li>
                        <li><a href="#">แฟ้ม & อุปกรณ์ <span>(35)</span></a></li>
                        <li><a href="#">ปากกาหมึกเติม <span>(35)</span></a></li>
                        <li><a href="#">กาว, เทป และอุปกรณ์เพื่อบรรจุ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำนักงานเบ็ดเตล็ด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์เพื่อประชุมและนำเสนอ <span>(35)</span></a></li>
                        <li><a href="#">สมุด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์สำหรับเย็บเล่มและเจาะรู <span>(35)</span></a></li>
                        <li><a href="#">ผลิตภัณฑ์สติ๊กเกอร์ <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์ตัด <span>(35)</span></a></li>
                        <li><a href="#">อุปกรณ์วาดรูป <span>(35)</span></a></li>
                        <li><a href="#">ยางลบและผลิตภัณฑ์ลบคำผิด <span>(35)</span></a></li>
                        <li><a href="#">เครื่องคิดเลข <span>(35)</span></a></li>
                        <li><a href="#">ดินสอและไส้ดินสอ <span>(35)</span></a></li>

                    </ul>
                </div>
            </div>
        </div> --}}
    </div>

</section>