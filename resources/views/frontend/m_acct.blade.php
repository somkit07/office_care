<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>@include('frontend/inc_header')
</head>

<body>
    @include('frontend/inc_topmenu')

    <section id="membermenu">
       
        <div class="sidemembermenu">
        <div class="topichead mb-3">
            <h1>บัญชีของฉัน</h1>
        </div>
            <ul>
                <li data-page="profile"><a href="{{ url('account_profile') }}">ข้อมูลส่วนตัว</a></li>
                <li data-page="address"><a href="{{ url('account_address') }}">ที่อยู่จัดส่ง</a></li>
                <li data-page="history"><a href="{{ url('account_order') }}">ประวัติการสั่งซื้อ</a></li>
                <li data-page="wishlist"><a href="{{ url('account_wishlist') }}">รายการโปรด</a></li>
                <li><a href="#">ออกจากระบบ</a></li>
            </ul>
        </div>
    </section>

    @include('frontend/inc_footer')


</body>

</html>