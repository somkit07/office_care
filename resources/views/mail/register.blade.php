{{-- <h2>สร้างบัญชีออฟฟิศแคร์</h2>
<table width="500">
    <tr>
        <th align="left" width="200">อีเมล์</th>
        <td>{{ $member_email_inc }}</td>
    </tr>
    <tr>
        <th align="left" width="200">ชื่อ</th>
        <td>{{ $member_name_inc }}</td>
    </tr>
    <tr>
        <th align="left" width="200">นามสกุล</th>
        <td>{{ $member_surname_inc }}</td>
    </tr>
    <tr>
        <th align="left" width="200">เบอร์ติดต่อ</th>
        <td>{{ $member_mobile_inc }}</td>
    </tr>
    <tr>
        <th align="left" width="200">รหัสผ่าน</th>
        <td>{{ $member_password_inc }}</td>
    </tr>
</table> --}}

<body style="background-color:#f2f2f2;">
<div style="margin:0 auto; display:table;">
<div style="  padding: 40px; display: inline-block;">
<div style="background-color:#fff;  padding:30px;">
<center><img src="{{ asset('public/frontend/images/LINE_ALBUM_2022.8.25_220905_0.png') }}" width="250"></center>
<div style="border-bottom:3px solid #0167bc;"></div>
<br>
เรียน คุณ {{ $member_name_inc }} ผู้ใช้งาน<br>
OfficeCare ขอขอบคุณที่คุณไว้วางใจใช้งานระบบ {{ url('index') }}<br>
ชื่อผู้ใช้งานของคุณคือ {{ $member_email_inc }}<br><br>

<br><br>
<b><u>หมายเหตุลูกค้า</u></b><br><br>
หากคุณต้องการสอบถามข้อมูลเกี่ยวกับรายการสั่งซื้อหรือต้องการชำระเงินด้วยวิธีอื่นๆกรุณาติดต่อ 
OfficeCare Call Center: 02-744-8844<br>
ทุกวันเวลา 08.00 -17.30 น. หรือ Email : officecare.co.th@gmail.com<br><br>
เจ้าหน้าที่จะดำเนินการติดต่อกลับเพื่อยืนยันการสั่งซื้อในวันทำการถัดไป ออฟฟิศแคร์ขอขอบคุณที่
ใว้วางใจเลือกใช้บริการจากเราค่ะ<br><br><br>
บริษัท ออฟฟิศ แคร์ คอร์ปอเรชั่น จำกัด<br>
47/5-7 ซ.สุขุมวิท 68 ถ.สุขุมวิท แขวงบางนาเหนือ เขตบางนา กรุงเทพฯ 10260
</div>
</div>
</div>
</body>