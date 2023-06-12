<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Prompt:400,500,700|Roboto:400,500,700" rel="stylesheet">
</head>

<body>
    <style>
        /* body {
            font-family: 'Prompt', sans-serif;
            color: #000;
        } */

        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ asset('public/fonts/THSarabun.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ asset('public/fonts/THSarabun Bold.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ asset('public/fonts/THSarabun Italic.ttf') }}") format('truetype');
        }

        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ asset('public/fonts/THSarabun BoldItalic.ttf') }}") format('truetype');
        }
    
        body {
            font-family: "THSarabunNew";
            font-size: 24px;
        }
    
        .sarabun {
            font-family: "THSarabunNew";
        }

        @media print {

            body,
            page {
                margin: 0;
                box-shadow: 0;
            }

            .breaknewpage {
                page-break-after: always;
            }

        }
    </style>

    <div class="page_container" style="padding: 15px 15px; width:100%;font-family:'Prompt', sans-serif;
    color: #000;">

        <div class="logo" style="display:inline-block; width:20%;">
            <img src="{{ asset('public/frontend/images/mainlogo.svg') }}" alt="" style="width:130px;">

        </div>
        <div class="addressoffice" style="display:inline-block; width:70%; vertical-align: top;">
            <b class="sarabun">บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จาํกดั (สํานกงานใหญ่)</b>

            <br>
            <span class="sarabun">
            47/5-7 ซ.สุขุมวิท 68 ถ.สุขุมวิท แขวงบางนาเหนือ เขตบางนากรุงเทพฯ 10260 <br>
            Tel : 02-744-8844 Fax : 02-744-8801 ,02-744-8808</span>
        </div>

        <center>
            <h2 class="sarabun">ใบรายการสินค้า</h2>
        </center>

        <div class="clientaddress" style=" padding: 20px 15px; display:inline-block; width:45%; margin-right:5px; border:1px solid #000;height: 220px;
    vertical-align: top;">

            <table class="table_order"
                style="font-size: 15px; text-align:left; padding:10px;     word-break: break-word; border:0px;">
                <tr>
                    <th style="min-width: 160px; border:none;" class="sarabun">ชื่อผู้ติดต่อ</th>
                    <td style=" border:none;" class="sarabun">{{ Session::get('member_shipping_address_name_surname') }}</td>
                </tr>
                {{-- <tr>
                    <th style="min-width: 160px; border:none;">ชื่อบริษัท</th>
                    <td style=" border:none;">บริษัทล้านนาจำกัด </td>
                </tr>
                <tr>
                    <th style="min-width: 160px;border:none;">เลขประจำตัวผู้เสียภาษี</th>
                    <td style=" border:none;">000000000 </td>
                </tr> --}}
                <tr>
                    <th style="min-width: 160px; border:none;" class="sarabun">ที่อยู่</th>
                    <td style=" border:none;" class="sarabun">{{ Session::get('member_shipping_address_address') }}
                        @php
                        $tumbol = DB::table('subdistricts')
                            ->where('id', '=', Session::get('tumbol_id'))
                            ->first();
        
                        $amphur = DB::table('districts')
                            ->where('id', '=', Session::get('amphur_id'))
                            ->first();
        
                        $province = DB::table('provinces')
                            ->where('id', '=', Session::get('province_id'))
                            ->first();
                        @endphp
                        @if(!empty($tumbol) and !empty($amphur) and !empty($province))
                            {{ $tumbol->name_in_thai.' '.$amphur->name_in_thai.' '.$province->name_in_thai.' '.Session::get('member_shipping_address_postcode') }}
                        @endif</td>
                </tr>
                <tr>
                    <th style="min-width: 160px; border:none;" class="sarabun">หมายเลขโทรศัพท์</th>
                    <td style=" border:none;" class="sarabun">{{ Session::get('member_shipping_address_mobile') }}</td>
                </tr>
                <tr>
                    <th style="min-width: 160px; border:none;" class="sarabun">อีเมล</th>
                    <td style=" border:none;" class="sarabun">{{ Session::get('email') }}</td>
                </tr>
            </table>

        </div><div class="orderlist" style="    padding: 20px 15px; display:inline-block; width:45%; border:1px solid #000; height: 220px;
    vertical-align: top;">
            <table class="table_order"
                style="font-size: 15px; text-align:left; padding:10px;  word-break: break-word; border:none;">
                <tr>
                    <th colspan="2" style="min-width: 160px; border:none;" class="sarabun">รายละเอียดคำสั่งซื้อ</th>

                </tr>
                <tr>
                    <th style="min-width: 160px; border:none;" class="sarabun">วันที่สั่งซื้อ</th>
                    <td style="border:none;" class="sarabun">{{ date('Y-m-d H:i:s') }}</td>
                </tr>
                {{-- <tr>
                    <th style="min-width: 160px; border:none;"">เลขที่รายการ</th>
                    <td style="border:none;">05202000002 </td>
                </tr> --}}

            </table>

        </div>

        <br><br>
        <table class="tableorder" style="font-size:14px; border:1px solid #999; text-align:center;">
            <thead style="background:#eee;">
                <tr>
                    <th style = "10%" class="sarabun">ลำดับ</th>
                    <th style = "10%" class="sarabun">รหัสสินค้า</th>
                    <th style = "10%" class="sarabun">รูปภาพสินค้า</th>
                    <th style = "10%" class="sarabun">ชื่อสินค้า</th>
                    <th style = "10%" class="sarabun">สี</th>
                    <th style = "10%" class="sarabun">จำนวน</th>
                    <th style = "10%" class="sarabun">หน่วย</th>
                    <th style = "10%" class="sarabun">ราคาหน่วย</th>
                    <th style = "10%" class="sarabun">ส่วนลด</th>
                    <th style = "10%" class="sarabun">จำนวนเงิน</th>
                    <th style = "10%" class="sarabun">ราคา <br>(บาท/ไม่รวม VAT)</th>
                </tr>
            </thead>
            <tbody>
@php
$sub_total = 0
@endphp

@if(!empty(ShoppingCart::all()))
    @php
    $i = 1;
    @endphp
    @foreach(ShoppingCart::all() as $od)
        @php
        $price = $od->qty * $od->price;
        $sub_total += $price;
        @endphp
                <tr>
                    <th>{{ $i }}</th>
                    <td>{{ $od->product_code }}</td>
                    <td>
                        @if($od->image != '')
                        <img src="{{ asset('public/uploads/product/'.$od->image) }}" alt="" style="width:35%;">
                        @endif
                    </td>
                    <td class="sarabun">
                        {{ $od->name }}
                    </td>
                    <td class="sarabun">
                        {{ $od->color }}
                    </td>
                    <td class="sarabun">{{ $od->qty }}</td>
                    <td class="sarabun">เครื่อง</td>
                    <td class="sarabun">{{ $od->price }}</td>
                    <td class="sarabun">{{ $od->product_before_discount }}</td>
                    <td class="sarabun">{{ $od->qty * $od->price }}</td>
                    <td class="sarabun">{{ ($od->qty * $od->price) - $od->product_before_discount }}</td>
                </tr>
        @php
        $i++;
        @endphp
    @endforeach
@endif
            </tbody>
@php
$shipping_price = DB::table('shipping')
    ->where('shipping_id', '=', 1)
    ->first();

if(!empty($shipping_price)) {
    if($shipping_price->shipping_condition >= $sub_total) {
        $shipping_price_ = $shipping_price->shipping_price;
    } else {
        $shipping_price_ = 0;
    }
}

$discount = 0;

$total = $sub_total + $shipping_price_ - $discount;
@endphp
            <tfoot>
                <tr>
                    <th class="sarabun">หมายเหตุ</th>
                    <td colspan="4" class="sarabun">*สินค้าบางรายการอาจจะมีการเปลี่ยนแปลงทางด้านราคาได้ตามช่วงเวลา
                        ทั้งนี้ทางบริษัทจะโทรติดต่อกลับคอมเฟิร์มราคาสินค้ากับลูกค้าหลังที่ถูกค้าทำรายการสั่งซื้อเสร็จ</td>
                    <td colspan="5">ยอดรวม</td>
                    <td>{{ $sub_total }}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5" class="sarabun">ส่วนลดคิดเป็นเงิน</td>
                    <td>{{ $discount }}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5" class="sarabun">เงินหลังหักส่วนลด</td>
                    <td>{{ $total }}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5" class="sarabun">ภาษีมูลค่าเพิ่ม 7%</td>
                    <td>{{ $total + ($total * 7 / 100) }}</td>
                </tr>
                <tr>
                    <td colspan="5"></td>
                    <td colspan="5" class="sarabun">รวมเป็นเงิน</td>
                    <td>{{ $total }}</td>
                </tr>

            </tfoot>
        </table>
    </div>
</body>
</html>
