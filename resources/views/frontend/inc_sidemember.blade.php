<section id="membermenu">
    <div class="sidemembermenu">
        <ul>
            <li data-page="profile"><a href="{{ url('account_profile') }}">ข้อมูลส่วนตัว</a></li>
            <li data-page="address"><a href="{{ url('account_address_list') }}">ที่อยู่จัดส่ง</a></li>
            <li data-page="history"><a href="{{ url('account_order') }}">ประวัติการสั่งซื้อ</a></li>
            <li data-page="wishlist"><a href="{{ url('account_wishlist') }}">รายการโปรด</a></li>
            <li><a href="{{ url('logout/frontend') }}">ออกจากระบบ</a></li>
        </ul>
    </div>
</section>

<script>
       $(function () {
           var getPage = '<?php echo($pageName); ?>';
           $(".sidemembermenu li").each(function () {
               var getMenu = $(this).attr("data-page");
               if (getPage == getMenu) {
                   $(this).addClass('active');
               }
           });
       });
   </script>