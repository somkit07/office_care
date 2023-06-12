@extends('../../layouts.app')

@section('title', 'Agent Banner')

@section('content')
    @error('title')
        <div class="alert alert-danger"></div>
    @enderror
    <form action="{{url('backend/shipping_method/shipping_method_save_update')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
        @csrf
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(Th)</label>
            <div class="col-md-9">
                <textarea name="shipping_method_detail_th" id="shipping_method_detail_th" class="form-control">@if(!empty($row)){{ $row->shipping_method_detail_th }}@endif</textarea>
                    <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                    <script>
                        CKEDITOR.replace("shipping_method_detail_th", {
                            filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                            filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                            filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                            filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                            filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                            filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
                        });
                    </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(En)</label>
            <div class="col-md-9">
                <textarea name="shipping_method_detail_en" id="shipping_method_detail_en" class="form-control">@if(!empty($row)){{ $row->shipping_method_detail_en }}@endif</textarea>
                    <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                    <script>
                        CKEDITOR.replace("shipping_method_detail_en", {
                            filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                            filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                            filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                            filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                            filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                            filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
                        });
                    </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label">Detail(Ch)</label>
            <div class="col-md-9">
                <textarea name="shipping_method_detail_ch" id="shipping_method_detail_ch" class="form-control">@if(!empty($row)){{ $row->shipping_method_detail_ch }}@endif</textarea>
                    <script type="text/javascript" src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
                    <script>
                        CKEDITOR.replace("shipping_method_detail_ch", {
                            filebrowserBrowseUrl : '{{asset("public/ckfinder/ckfinder.html")}}',
                            filebrowserImageBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Images")}}',
                            filebrowserFlashBrowseUrl : '{{asset("public/ckfinder/ckfinder.html?Type=Flash")}}',
                            filebrowserUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                            filebrowserImageUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                            filebrowserFlashUploadUrl : '{{asset("public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}'
                        });
                    </script>
            </div>
        </div>
        <div class="form-group">
            <label class="col-md-3 control-label"> </label>
            <div class="col-md-9">
                <button class="btn btn-sm btn-primary m-r-5" type="submit">Save</button>
                <button class="btn btn-sm btn-default" onclick="resetForm();" type="button">Reset</button>
            </div>
        </div>
    </form>
@endsection

@section('script_footer')
    <script>
        $(document).ready(function() {
			App.init();

			$(".menu_shipping_method").prop('class', 'active');
		});
		
		function resetForm() {
			$(".form-control").val('');
			CKEDITOR.instances.coupon_ckeditor.setData('');
		}
	</script>
@endsection
