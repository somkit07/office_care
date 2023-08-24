{{-- รหัสผ่านของคุณ : {{ $member_password }} --}}
<body style="background-color:#f2f2f2;">
<div style="margin:0 auto; display:table;">
<div style="  padding: 40px; display: inline-block;">
    <div style="background-color:#fff;padding:30px;">
    <center><img src="{{ asset('public/frontend/images/LINE_ALBUM_2022.8.25_220905_0.png') }}" width="250"></center>
    <div style="border-bottom:3px solid #0167bc;"></div>
    <br>
    เรียน คุณ {{ $member_name }} {{ $member_surname }}<br>
    OfficeCare ขอขอบคุณที่คุณไว้วางใจใช้งานระบบ {{ url('index') }}<br>
    ชื่อผู้ใช้งานของคุณคือ {{ $member_email }}<br><br>

    <center>
    <a href="{{ url('forget_password/'.$member_token) }}" style="background-color:#0167bc; text-decoration:none; color:white; display:inline-block; padding:10px;">กรุณาคลิกที่นี่เพื่อกำหนดรหัสผ่านใหม่</a>
    </center>
   
    <br><br>
    <b><u>หมายเหตุลูกค้า</u></b>
    <br><br>
    หากคุณต้องการสอบถามข้อมูลเกี่ยวกับรายการสั่งซื้อหรือต้องการชำระเงินด้วยวิธีอื่นๆกรุณาติดต่อ OfficeCare Call Center: 02-744-8844<br>
    ทุกวันเวลา 08.00 -17.30 น. หรือ Email : officecare.co.th@gmail.com
    <br><br>
    เจ้าหน้าที่จะดำเนินการติดต่อกลับเพื่อยืนยันการสั่งซื้อในวันทำการถัดไป
    <br>
    ออฟฟิศแคร์ ขอขอบคุณที่ใว้วางใจเลือกใช้บริการจากเราค่ะ
    <br><br><br>
    บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด<br>
    47/5-7 ซ.สุขุมวิท 68 ถ.สุขุมวิท แขวงบางนาเหนือ เขตบางนา กรุงเทพฯ 10260

    </div>
</div>
</div> 
</body>
