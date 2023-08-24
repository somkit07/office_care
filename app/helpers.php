<?php
function date2dateBasicThai($date) {
    $date_exp = explode('-', $date);

    $year = $date_exp[0] + 543;
    $month = $date_exp[1];
    $day = $date_exp[2];

    if($month == '01') {
        $month_ = 'มกราคม';
    } elseif($month == '02') {
        $month_ = 'กุมภาพันธ์';
    } elseif($month == '03') {
        $month_ = 'มีนาคม';
    } elseif($month == '04') {
        $month_ = 'เมษายน';
    } elseif($month == '05') {
        $month_ = 'พฤษภาคม';
    } elseif($month == '06') {
        $month_ = 'มิถุนายน';
    } elseif($month == '07') {
        $month_ = 'กรกฎาคม';
    } elseif($month == '08') {
        $month_ = 'สิงหาคม';
    } elseif($month == '09') {
        $month_ = 'กันยายน';
    } elseif($month == '10') {
        $month_ = 'ตุลาคม';
    } elseif($month == '11') {
        $month_ = 'พฤศจิกายน';
    } elseif($month == '12') {
        $month_ = 'ธันวาคม';
    }

    return $day.' '.$month_.' '.$year;
}

function checkPrice($before_price, $price) {
    if($before_price != $price) {
        return '<span class="price">฿ '.number_format($before_price, 2).'</span>';
    } else {
        return '';
    }
}
?>