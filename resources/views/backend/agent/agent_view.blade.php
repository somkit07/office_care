@extends('../../layouts.app')

@section('title', 'Agent')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/agent/agent_save_update')}}" method="post" encagent="multipart/form-data" class="form-horizontal">
        @csrf
        <legend>Point</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Point</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($point)){{ $point }}@endif
            </div>
        </div>
        <legend>Data</legend>
        <div class="form-group">
            <label class="col-md-3 control-label">Image</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) <img src="{{ asset('public/uploads/agent/'.$row->agent_image) }}" @endif width="300">
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Type</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->type_name_en}} @endif
            </div>
        </div> --}}
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Product</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row->category_product)) 
                    @php 
                    $product = explode('!@#$%^&*()', $row->category_product);
                    if(!empty($product)) {
                        $category = '';
                        foreach($product as $p) {
                            $category_product = DB::table('lv_agent_product')
                                ->where('agent_product_id', '=', $p)
                                ->first();

                            if(!empty($category_product)) {
                                $category .= $category_product->agent_product_name_en.', ';
                            }
                        }

                        echo substr($category, 0, -2);
                    }    
                    @endphp
                @endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Wait</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_wait}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Name</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_name}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_surname}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Gender</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_gender}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Age</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_age}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">TIKTOK</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_tiktok}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Favourite</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_favourite}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เคยขายสินค้า Online</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_sale_online}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เคยขายสินค้า Offline</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_sale_offline}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ประเภท(ชนิด)ของสินค้าที่เคยขาย</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_type_product}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">เขตพื้นที่ขายที่ต้องการเป็นตัวแทน</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_area}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Date</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_date}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Email</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_email}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Telephone</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_telephone}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Mobile</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_mobile}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Current Address</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_current_address}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shipping Address</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_shipping_address}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Birth Day</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_birth_day}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Surname</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_surname}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Shirt Size</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_shirt_size}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Line</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_line}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Facebook</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_facebook}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Instagram</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_instagram}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Type</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_type}} @endif
            </div>
        </div>
        {{-- <div class="form-group">
            <label class="col-md-3 control-label">Sale Area</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_area_sale}} @endif
            </div>
        </div> --}}
        <div class="form-group">
            <label class="col-md-3 control-label">Area Sale Comfortable</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_area_sale_comfortable}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_password}} @endif
            </div>
        </div>
        <!-- <div class="form-group">
            <label class="col-md-3 control-label">New Address</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_new_address}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">New Amphur</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_new_amphur}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">New Province</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_new_province}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">New Country</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_new_country}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Postal Code</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_new_postal_code}} @endif
            </div>
        </div> -->
        <div class="form-group">
            <label class="col-md-3 control-label">อายุ อยู่ระหว่าง 25-55 ปี</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_age_25_55}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">มีผู้ติดตาม Meta (Facebook) /IG/TIKTOK มากกว่า 500 คน</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_meta_500}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">มองโลกในแง่ดี มีความเอื้อเฟื้อเผื่อแผ่ต่อสังคา</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_look_at_the_world}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">มีไลฟ์สไตล์ในการใช้ชีวิตและมั่นใจในตัวเอง</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_lifestyle}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">มีความเชื่อมั่นในสินค้าไทย สารสกัดไทย และ แบรนด์ไทย</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_product_thai}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">ชอบเล่นโซเชียลและพร้อมที่จะเรียนรู้สิ่งใหม่ๆ</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_social}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">มีใจรักในงานขาย</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_sale}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">รักความเจริญก้าวหน้า และเต็มที่กับสิ่งที่ทำ หรือ โอกาสที่ได้รับ</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_doing}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Create</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_datetime_create}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Create</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_ip_create}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Datetime Update</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_datetime_update}} @endif
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">IP Update</label>
            <div class="col-md-9" style="padding: 6px;">
                @if(!empty($row)) {{$row->agent_ip_update}} @endif
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

            $(".sub_menu_4").css("display", "block");

			$(".sub_menu_agent").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
