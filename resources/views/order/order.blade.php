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


        .table_border {
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
            /* font-family: 'TH SarabunPSK', sans-serif; */
            font-size: 24px;
        }

        .sarabun {
            font-family: "THSarabunNew";
            /* font-family: 'TH SarabunPSK', sans-serif; */
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

        /* td {
            vertical-align: top;
        } */
    </style>

    <table width="100%" class="table_border">
        <tr>
            <th colspan="2">
                <table width="100%">
                    <tr>
                        <td style="width: 60px; border:none;">
                            <img src="{{ asset('public/frontend/images/logofooter.png') }}" alt=""
                                style="width:150px;">
                            {{-- <div class="addressoffice" style="display:inline-block; width:70%; vertical-align: top;"> --}}
                        </td>
                        <th align="left" style="font-size: 15px;">

                            <b>บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด (สํานักงานใหญ่)</b><br>
                            Office Care Corporation Limited<br>
                            47/5-7 ซ.สุขุมวิท 68 ถ.สุขุมวิท แขวงบางนาเหนือ เขตบางนากรุงเทพฯ 10260<br>
                            {{-- Tel : 02-744-8844 Fax : 02-744-8801 ,02-744-8808 --}}
                            Tel :02-744-8844<br>
                            E-mail: officecare.co.th@gmail.com
                        </th>
                    </tr>
                </table>
                <center>
                    <h5 class="sarabun" style="font-size: 25px; margin-top:10px;margin-bottom:18px;">ใบรายการสินค้า</h5>
                </center>
            </th>
        </tr>
        <tr>
            <td width="50%" class="table_border" style="vertical-align: top;">
                <table style="font-size: 15px;" width="100%">
                    <tr>
                        <th style="width: 60px; border:none;" class="sarabun" align="left">ชื่อบริษัท</th>
                        <td style=" border:none;" class="sarabun">{{ Session::get('member_shipping_address_company') }}
                        </td>
                    </tr>
                    <tr>
                        <th style="min-width: 60px; border:none;" class="sarabun" align="left">ชื่อผู้ติดต่อ</th>
                        <td style=" border:none;" class="sarabun" align="left">
                            {{ Session::get('member_shipping_address_name_surname') }}</td>
                    </tr>

                    <tr>
                        <th style="min-width: 60px; border:none;vertical-align: top;" class="sarabun" align="left">
                            ที่อยู่</th>
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
                            @if (!empty($tumbol) and !empty($amphur) and !empty($province))
                                {{ $tumbol->name_in_thai . ' ' . $amphur->name_in_thai . ' ' . $province->name_in_thai . ' ' . Session::get('member_shipping_address_postcode') }}
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th style="min-width: 60px; border:none;" class="sarabun" align="left">เบอร์โทรศัพท์</th>
                        <td style=" border:none;" class="sarabun">{{ Session::get('member_shipping_address_mobile') }}
                        </td>
                    </tr>
                    <tr>
                        <th style="min-width: 60px; border:none;" class="sarabun" align="left">อีเมล</th>
                        <td style=" border:none;" class="sarabun">{{ Session::get('email') }}</td>
                    </tr>
                </table>
            </td>
            <td width="50%" class="table_border" style="vertical-align: top;">

                <table style="font-size: 15px;" width="100%">
                    <tr>
                        <th colspan="2" style=" border:none;" class="sarabun">
                            รายละเอียดคำสั่งซื้อ
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2" style=" border:none;" class="sarabun" align="left">วันที่สั่งซื้อ
                            &nbsp;&nbsp;&nbsp;{{ date('Y-m-d') }} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เวลา
                            &nbsp;&nbsp;&nbsp;{{ date('H:i:s') }}
                        </th>
                        {{-- <td style=" border:none;" class="sarabun" align="left">
                            {{ date('Y-m-d H:i:s') }}<p>&nbsp;</p>
                        </td> --}}
                    </tr>

                    {{-- <tr>
                        <th style="min-width: 160px; border:none;"">เลขที่รายการ</th>
                        <td style="border:none;">05202000002 </td>
                    </tr> --}}

                </table>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <table class="table_border" style="font-size:14px; border:1px solid #999; text-align:center;">
                    <thead style="background: #0a509e; color: white">
                        <tr>
                            <th style="width:5%" class="sarabun table_border">ลำดับ<br>Item</th>
                            <th style="width:35%" class="sarabun table_border">รหัสสินค้า/รายละเอียด<br>Product Code
                                Description</th>
                            <th style="width:12%" class="sarabun table_border">รูปภาพสินค้า<br>Image</th>

                            <th style="width:7%" class="sarabun table_border">จำนวน<br>Quantity</th>
                            <th style="width:7%" class="sarabun table_border">หน่วย<br>Unit</th>
                            <th style="width:7%" class="sarabun table_border">ราคาหน่วย<br>Unit Price</th>
                            <th style="width:7%" class="sarabun table_border">ส่วนลด<br>Discount</th>
                            <th style="width:7%" class="sarabun table_border">จำนวนเงิน<br>Amount</th>
                            {{-- <th style="width:7%" class="sarabun table_border">ราคา <br>(บาท/ไม่รวม VAT)<br>Price Not Vat</th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sub_total = 0;
                        @endphp

                        @if (!empty(ShoppingCart::all()))
                            @php
                                $i = 1;
                            @endphp
                            @foreach (ShoppingCart::all() as $od)
                                @php
                                    $price = $od->qty * $od->price;
                                    $sub_total += $price;
                                    
                                    $price_discount = $od->product_before_discount - $od->price;
                                @endphp
                                <tr>
                                    <th class="sarabun table_border">{{ $i }}</th>
                                    <td class="sarabun table_border" align="left">
                                        <b>{{ $od->product_code }}</b><br>{{ $od->name }}<br>สี
                                        {{ $od->color }}
                                    </td>
                                    <td class="table_border">
                                        @if ($od->image != '')
                                            <img src="{{ asset('public/uploads/product/' . $od->image) }}"
                                                alt="" style="width:70%;">
                                        @endif
                                    </td>
                                    <td class="sarabun table_border">{{ $od->qty }}</td>
                                    <td class="sarabun table_border">เครื่อง</td>
                                    <td class="sarabun table_border">
                                        {{ number_format($od->product_before_discount, 2, '.', ',') }}</td>
                                    <td class="sarabun table_border">
                                        @if ($price_discount == 0)
                                            {{ '-' }}@else{{ number_format($price_discount, 2, '.', ',') }}
                                        @endif
                                    </td>
                                    <td class="sarabun table_border">
                                        {{ number_format($od->qty * $od->price, 2, '.', ',') }}</td>
                                    {{-- <td class="sarabun table_border">{{ ($od->qty * $od->price) - $od->product_before_discount }}</td> --}}
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
                        
                        if (!empty($shipping_price)) {
                            if ($shipping_price->shipping_condition >= $sub_total) {
                                $shipping_price_ = $shipping_price->shipping_price;
                            } else {
                                $shipping_price_ = 0;
                            }
                        }
                        
                        $discount = 0;
                        
                        // $total = $sub_total + $shipping_price_ - $discount;
                        $total = $sub_total;
                    @endphp
                    <tfoot>
                        <tr>
                            <td colspan="5"></td>
                            <td colspan="2" class="table_border" style="background-color: #ddd;" align="left">
                                รวมราคาสินค้า</td>
                            <td class="table_border" align="right"><?php echo number_format($sub_total, 2, '.', ','); ?></td>
                        </tr>
                        <tr>
                            <th colspan="5" style="background-color: #ddd;">(<?php echo Convert($sub_total + ($sub_total * 7) / 100); ?>)</th>
                            <th colspan="2" class="table_border" style="background-color: #ddd;" align="left">
                                ภาษีมูลค่าเพิ่ม 7%
                            </th>
                            <td class="table_border" align="right">
                                {{ number_format(($sub_total * 7) / 100, 2, '.', ',') }}</td>
                        </tr>
                        <tr>
                            <th colspan="5">&nbsp;</th>
                            <th colspan="2" class="table_border" style="background-color: #ddd;" align="left">
                                รวมจำนวนเงินทั้งสิ้น</th>
                            <th class="table_border" align="right">
                                {{ number_format($sub_total + ($sub_total * 7) / 100, 2, '.', ',') }}</th>
                        </tr>
                        <tr>
                            <th class="sarabun" valign="top">หมายเหตุ</th>
                            <td colspan="5" class="sarabun" align="left" valign="top">
                                : สินค้าบางรายการอาจจะมีการเปลี่ยนแปลงทางด้านราคาได้ตามช่วงเวลา
                                ทั้งนี้ทางบริษัทจะโทรติดต่อกลับคอมเฟิร์มราคาสินค้ากับลูกค้าหลังที่ถูกค้าทำรายการสั่งซื้อเสร็จ
                            </td>
                            <td colspan="2">&nbsp;</td>
                            {{-- <td colspan="1" class="sarabun">ยอดรวม</td>
                            <th class="sarabun">{{ $sub_total }}</th> --}}
                        </tr>
                        {{-- <tr>
                            <td colspan="7"></td>
                            <td colspan="1" class="sarabun">ส่วนลดคิดเป็นเงิน</td>
                            <th class="sarabun">{{ $discount }}</th>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                            <td colspan="1" class="sarabun">เงินหลังหักส่วนลด</td>
                            <th class="sarabun">{{ $total }}</th>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                            <td colspan="1" class="sarabun">ภาษีมูลค่าเพิ่ม 7%</td>
                            <th class="sarabun">{{ $total + ($total * 7 / 100) }}</th>
                        </tr>
                        <tr>
                            <td colspan="7"></td>
                            <td colspan="1" class="sarabun">รวมเป็นเงิน</td>
                            <th class="sarabun">{{ $total }}</th>
                        </tr> --}}

                    </tfoot>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>

<?php
function Convert($amount_number)
{
    $amount_number = number_format($amount_number, 2, '.', '');
    $pt = strpos($amount_number, '.');
    $number = $fraction = '';
    if ($pt === false) {
        $number = $amount_number;
    } else {
        $number = substr($amount_number, 0, $pt);
        $fraction = substr($amount_number, $pt + 1);
    }

    $ret = '';
    $baht = ReadNumber($number);
    if ($baht != '') {
        $ret .= $baht . 'บาท';
    }

    $satang = ReadNumber($fraction);
    if ($satang != '') {
        $ret .= $satang . 'สตางค์';
    } else {
        $ret .= 'ถ้วน';
    }
    return $ret;
}

function ReadNumber($number)
{
    $position_call = ['แสน', 'หมื่น', 'พัน', 'ร้อย', 'สิบ', ''];
    $number_call = ['', 'หนึ่ง', 'สอง', 'สาม', 'สี่', 'ห้า', 'หก', 'เจ็ด', 'แปด', 'เก้า'];
    $number = $number + 0;
    $ret = '';
    if ($number == 0) {
        return $ret;
    }
    if ($number > 1000000) {
        $ret .= ReadNumber(intval($number / 1000000)) . 'ล้าน';
        $number = intval(fmod($number, 1000000));
    }

    $divider = 100000;
    $pos = 0;
    while ($number > 0) {
        $d = intval($number / $divider);
        $ret .= $divider == 10 && $d == 2 ? 'ยี่' : ($divider == 10 && $d == 1 ? '' : ($divider == 1 && $d == 1 && $ret != '' ? 'เอ็ด' : $number_call[$d]));
        $ret .= $d ? $position_call[$pos] : '';
        $number = $number % $divider;
        $divider = $divider / 10;
        $pos++;
    }
    return $ret;
}
?>
